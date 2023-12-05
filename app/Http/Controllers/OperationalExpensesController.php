<?php

namespace App\Http\Controllers;

use App\Models\Operational;
use App\Models\OperationalExpense;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OperationalExpensesController extends Controller
{

    /**
     * @throws Exception
     */
    public function index(Request $request, $operational)
    {

        if ($request->ajax()) {
            $expense = OperationalExpense::where('operational_id', $operational)->orderByDesc('created_at')->get();
            return DataTables::of($expense)
                ->addIndexColumn()
                ->toJson();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $operational = Operational::find($request->operational_id);

        $request->validate([
            'operational_id' => 'required',
            'date' => 'required',
            'item' => 'required',
            'amount' => 'required',
        ]);

        $operational->amount += $request->amount;
        $operational->save();

        OperationalExpense::create($request->all());

        return response()->json([
            'success' => "Operational Expense added succescfully"
        ], 200);
    }

    /**
     * @param Request $request
     * @param OperationalExpense $expense
     * @return JsonResponse
     */
    public function update(Request $request, OperationalExpense $expense)
    {
        $request->validate([
            'date' => 'required',
            'amount' => 'numeric',
        ]);

        $expense->update($request->all());

        return response()->json([
            'success' => 'Operational Expense updated successfully!'
        ], 200);
    }

    /**
     * @param OperationalExpense $expense
     * @return JsonResponse
     */
    public function delete(OperationalExpense $expense)
    {
        $expense->delete();
        return response()->json([
            'success' => 'Operational Expense deleted successfully!'
        ], 200);
    }

    public function show(Request $request, string $expense)
    {
        $attrExpense = OperationalExpense::where('id', $expense)->get();

        return response()->json($attrExpense);
    }
}
