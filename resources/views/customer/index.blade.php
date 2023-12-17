<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('customer.create')}}" class="btn btn-accent text-white mb-4">
                        Add Customer
                    </a>

                    <table class="min-w-full border rounded-lg overflow-hidden">
                        <thead class="bg-gradient-to-r from-teal-400 to-teal-600 text-white">
                            <tr>
                                <th class="w-1/6 py-2 px-4 border">ID</th>
                                <th class="w-1/6 py-2 px-4 border">Customer Name</th>
                                <th class="w-1/6 py-2 px-4 border">Phone Number</th>
                                <th class="w-1/6 py-2 px-4 border">Membership</th>
                                <th class="w-1/6 py-2 px-4 border">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $customer)
                            <tr>
                                <td class="w-1/6 py-2 px-4 border">{{ $customer->id}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $customer->customer_name }}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $customer->phone_no}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $customer->membership}}</td>
                                <td class="w-1/6 py-2 px-4 border">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning text-white">Edit</a>
                                        <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" class="inline">
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