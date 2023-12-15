<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index', ['payment' => Payment::all()]);
    }

    public function create()
    {
        return view('payment.create');
    }

    public function store(Request $request)
    {
        Payment::create($request->all());

        return redirect()->route('payment.index')
            ->with('success', 'Payment created successfully.');
    }

    public function show(Payment $payment)
    {
        return view('payment.show', ['payment' => $payment]);
    }

    public function edit(Payment $payment)
    {
        return view('payment.edit', ['payment' => $payment]);
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());

        return redirect()->route('payment.index')
            ->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payment.index')
            ->with('success', 'Payment deleted successfully.');
    }
}
