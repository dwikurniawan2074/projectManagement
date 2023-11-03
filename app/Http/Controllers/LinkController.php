<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return Link::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required'],
            'source' => ['required', 'integer'],
            'target' => ['required', 'integer'],
        ]);

        return Link::create($request->validated());
    }

    public function show(Link $link)
    {
        return $link;
    }

    public function update(Request $request, Link $link)
    {
        $request->validate([
            'type' => ['required'],
            'source' => ['required', 'integer'],
            'target' => ['required', 'integer'],
        ]);

        $link->update($request->validated());

        return $link;
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return response()->json();
    }
}
