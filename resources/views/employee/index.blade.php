<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-2 text-gray-900">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('employee.create')}}" class="btn btn-accent text-white mb-4">
                                Add Employee
                            </a>

                            <table class="min-w-full border rounded-lg overflow-hidden text-center">
                                <thead class="bg-gradient-to-r from-teal-400 to-teal-600 text-white">
                                    <tr>
                                        <th class="w-1/6 py-3 px-4 border">ID</th>
                                        <th class="w-1/6 py-3 px-4 border">Employee Name</th>
                                        <th class="w-1/6 py-3 px-4 border">Email</th>
                                        <th class="w-1/6 py-3 px-4 border">Phone Number</th>
                                        <th class="w-1/6 py-3 px-4 border">Contract Start Date</th>
                                        <th class="w-1/6 py-3 px-4 border">Contract End Date</th>
                                        <th class="w-1/6 py-3 px-4 border">Actions</th>
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
                                                <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning text-white">Edit</a>
                                                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-error text-white">Delete</button>
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