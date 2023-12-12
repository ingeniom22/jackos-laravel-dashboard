<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Employee</h3>
                    <a href="{{ route('employee.create')}}" class="btn btn-primary mb-4">
                        Add Employee
                    </a>

                    <table class="min-w-full border rounded-lg overflow-hidden">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="w-1/6 py-2 px-4 border">ID</th>
                                <th class="w-1/6 py-2 px-4 border">Employee Name</th>
                                <th class="w-1/6 py-2 px-4 border">Email</th>
                                <th class="w-1/6 py-2 px-4 border">Phone Number</th>
                                <th class="w-1/6 py-2 px-4 border">Contract Start Date</th>
                                <th class="w-1/6 py-2 px-4 border">Contract End Date</th>
                                <th class="w-1/6 py-2 px-4 border">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employee)
                            <tr>
                                <td class="w-1/6 py-2 px-4 border">{{ $employee->id}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $employee->employee_name }}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $employee->email}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $employee->phone_no}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $employee->contract_start_date }}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $employee->contract_end_date }}</td>
                                <td class="w-1/6 py-2 px-4 border">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-error">Delete</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>