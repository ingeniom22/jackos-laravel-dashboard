<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', ['employee' => Employee::all()]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect()->route('employee.index')
            ->with('success', 'employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employee.show', ['employee' => $employee]);
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('employee.index')
            ->with('success', 'employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')
            ->with('success', 'employee deleted successfully.');
    }
}
