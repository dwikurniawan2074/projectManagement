<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select('id', 'companyName');
            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                //     $editRoute = route('customer.edit', $row['id']);
                //     $deleteRoute = route('customer.destroy', $row['id']);
                //     $btn = "<a href='{$editRoute}' class='edit btn btn-info btn-sm'>Edit</a>";
                //     $btn .= "<a href='{$deleteRoute}' class='delete btn btn-danger btn-sm'>Delete</a>";
                //     return $btn;
                // })
                // ->rawColumns(['action'])
                ->toJson();
        }

        $createRoute = route('customer.create');
        return view('customer.index', compact('createRoute'));
    }

    public function create()
    {
        return view('customer.createCustomer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'companyName' => 'required',
        ]);

        Customer::create([
            'companyName' => $request->input('companyName'),
        ]);

        $indexRoute = route('customer.index'); // Sesuaikan dengan nama rute index Anda
        return redirect($indexRoute)->with('success', 'Data customer berhasil ditambahkan.');
    }

    public function show($id)
    {
        return view('customer.detailCustomer', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $id)
    {
        $request->validate([
            'companyName' => 'required',
        ]);

        $customer = Customer::find($id);
        $customer->update([
            'companyName' => $request->input('companyName'),
        ]);

        $indexRoute = route('customer.index');
        return redirect($indexRoute)->with('success', 'Data customer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        // $indexRoute = route('customer.index');
        // return redirect($indexRoute)->with('success', 'Data customer berhasil dihapus.');
        return response()->json(['message' => 'Data customer berhasil dihapus.']);
    }
}
