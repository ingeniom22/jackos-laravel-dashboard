<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-gray-200 p-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col space-y-2 p-2">
                    <a href="{{ route('transaction.index') }}" class="btn">Transactions</a>
                    <a href="{{ route('customer.index') }}" class="btn">Customers</a>
                    <a href="{{ route('employee.index') }}" class="btn">Employees</a>
                    <a href="{{ route('payment.index') }}" class="btn">Payments</a>
                    <a href="{{ route('service.index') }}" class="btn">Services</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-4/5 p-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">
                    <div class="py-1">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <h3 class="text-lg font-semibold mb-4">Transactions</h3>
                                    <a href="{{ route('transaction.create')}}" class="btn btn-accent mb-4 text-white">
                                        Add Transaction
                                    </a>

                                    <table class="min-w-full border rounded-lg overflow-hidden text-center">
                                        <thead class="bg-gradient-to-r from-teal-400 to-teal-600 text-white">
                                            <tr>
                                                <th class="w-1/6 py-3 px-4 border">ID</th>
                                                <th class="w-1/6 py-3 px-4 border">Customer ID</th>
                                                <th class="w-1/6 py-3 px-4 border">Service ID</th>
                                                <th class="w-1/6 py-3 px-4 border">Employee ID</th>
                                                <th class="w-1/6 py-3 px-4 border">Payment ID</th>
                                                <th class="w-1/6 py-3 px-4 border">Actions</th> <!-- Add this column for actions -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $transaction)
                                            <tr>
                                                <td class="w-1/6 py-2 px-4 border">{{ $transaction->id }}</td>
                                                <td class="w-1/6 py-2 px-4 border">{{ $transaction->customer_name }}</td>
                                                <td class="w-1/6 py-2 px-4 border">{{ $transaction->service }}</td>
                                                <td class="w-1/6 py-2 px-4 border">{{ $transaction->employee_name }}</td>
                                                <td class="w-1/6 py-2 px-4 border">{{ $transaction->payments }}</td>
                                                <td class="w-1/6 py-2 px-4 border">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-warning text-white">Edit</a>
                                                        <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST" class="inline">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>