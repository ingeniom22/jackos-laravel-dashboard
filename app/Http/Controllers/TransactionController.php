<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transactions')
            ->join('services', 'transactions.service_id', '=', 'services.id')
            ->join('employees', 'transactions.employee_id', '=', 'employees.id')
            ->join('payments', 'transactions.payment_id', '=', 'payments.id')
            ->join('customers', 'transactions.customer_id', '=', 'customers.id')
            ->select(
                'transactions.id',
                'customers.customer_name',
                'services.service as service',
                'employees.employee_name',
                'payments.payments as payments'
            )
            ->get();

        // return view('transaction.index', ['transactions' => Transaction::all()]);
        return view('transaction.index_v2', ['transactions' => $transactions]);
    }

    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        Transaction::create($request->all());

        return redirect()->route('transaction.index')
            ->with('success', 'Transaction created successfully.');
    }

    public function show(Transaction $transaction)
    {
        return view('transaction.show', ['transaction' => $transaction]);
    }

    public function edit(Transaction $transaction)
    {
        return view('transaction.edit', ['transaction' => $transaction]);
    }

    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());

        return redirect()->route('transaction.index')
            ->with('success', 'Transaction updated successfully.');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transaction.index')
            ->with('success', 'Transaction deleted successfully.');
    }
}
