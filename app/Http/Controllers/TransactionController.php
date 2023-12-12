<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transaction.index', ['transactions' => Transaction::all()]);
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
