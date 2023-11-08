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
        $link = new Link();

        $link->type = $request->type;
        $link->source = $request->source;
        $link->target = $request->target;

        $link->save();

        return response()->json([
            "action" => "inserted",
            "tid" => $link->id
        ]);
    }

    public function show(Link $link)
    {
        return $link;
    }

    public function update(Link $link, Request $request)
    {
        $link->type = $request->type;
        $link->source = $request->source;
        $link->target = $request->target;

        $link->save();

        return response()->json([
            "action" => "updated"
        ]);
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return response()->json([
            "action" => "deleted"
        ]);
    }
}
