<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index', ['customer' => Customer::all()]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());

        return redirect()->route('customer.index')
            ->with('success', 'Customer created successfully.');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', ['Customer' => $customer]);
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', ['Customer' => $customer]);
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());

        return redirect()->route('customer.index')
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
