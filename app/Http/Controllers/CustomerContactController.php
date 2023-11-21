<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerContact;
use Yajra\DataTables\Facades\DataTables;

class CustomerContactController extends Controller
{
    public function index(Request $request, $id)
    {
        if ($request->ajax()) {
            $data = CustomerContact::select('id', 'name', 'phone')->where("customer_id", $id);
            return DataTables::of($data)
                ->addIndexColumn()
                ->toJson();
        }

        $createRoute = route('customerContact.create');
        return view('customerContact.index', compact('createRoute'));
    }

    public function create(CustomerContact $customerContacts, $id)
    {
        $customerContacts = CustomerContact::find($id)->customer_id;
        return view('customer.createCustomerContact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ]);

        CustomerContact::create([
            'customer_id' => $request->input('customer_id'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone')
        ]);

        return redirect()->back()->with('success', 'Customer contact created successfully.');
    }


    public function show($id)
    {
        $customerContact = CustomerContact::find($id);

        if (!$customerContact) {
            return response()->json(['error' => 'Customer Contact not found'], 404);
        }

        // Mengembalikan data record document sebagai respons JSON
        return response()->json($customerContact);
    }

    public function edit($id)
    {
        $customerContact = CustomerContact::find($id);
        return view('customerContact.edit', compact('customerContact'));
    }

    public function update(Request $request, CustomerContact $customerContacts)
    {
        $request->validate([
            'customer_id' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ]);

        $customerContact = $customerContacts->where('id', $request->input('customer_id'))->first();

        if (!$customerContact) {
            return redirect()->back()
                ->with('error', 'Customer contact not found.');
        }

        $updateResult = $customerContact->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone')
        ]);

        if ($updateResult) {
            return redirect()->back()
                ->with('success', 'Customer contact updated successfully.');
        } else {
            return redirect()->back()
                ->with('error', 'Customer contact update failed.');
        }
    }


    public function destroy($id)
    {
        try {
            $customerContacts = CustomerContact::findOrFail($id);
            $customerContacts->delete();
            return response()->json(['message' => 'customer contact berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menghapus customer contact.']);
        }
    }

    public function getCustomerData($customer_id)
    {
        $customerContacts = CustomerContact::where('customer_id', $customer_id)->get();
        return response()->json($customerContacts);
    }
}
