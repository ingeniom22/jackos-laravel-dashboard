<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-2 text-gray-900">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('transaction.create')}}" class="btn btn-accent mb-4 text-white">
                                Add Transaction
                            </a>

                            <table class="min-w-full border rounded-lg overflow-hidden text-center">
                                <thead class="bg-gradient-to-r from-teal-400 to-teal-600 text-white">
                                    <tr>
                                        <th class="w-1/6 py-3 px-4 border">ID</th>
                                        <th class="w-1/6 py-3 px-4 border">Customer Name</th>
                                        <th class="w-1/6 py-3 px-4 border">Service Type</th>
                                        <th class="w-1/6 py-3 px-4 border">Employee Name</th>
                                        <th class="w-1/6 py-3 px-4 border">Payment Type</th>
                                        <th class="w-1/6 py-3 px-4 border">Actions</th>
                                        <!-- Add this column for actions -->
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