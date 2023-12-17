<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-2 text-gray-900">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('payment.create')}}" class="btn btn-accent text-white mb-4">
                                Add Payment
                            </a>

                            <table class="min-w-full border rounded-lg overflow-hidden text-center">
                                <thead class="bg-gradient-to-r from-teal-400 to-teal-600 text-white">
                                    <tr>
                                        <th class="w-1/6 py-3 px-4 border">ID</th>
                                        <th class="w-1/6 py-3 px-4 border">Payment Name</th>
                                        <th class="w-1/6 py-3 px-4 border">Payment Description</th>
                                        <th class="w-1/6 py-3 px-4 border">Fee</th>
                                        <th class="w-1/6 py-3 px-4 border">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payment as $payment)
                                    <tr>
                                        <td class="w-1/6 py-2 px-4 border">{{ $payment->id}}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $payment->payments }}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $payment->description}}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $payment->fee}}</td>

                                        <td class="w-1/6 py-2 px-4 border">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-warning text-white">Edit</a>
                                                <form action="{{ route('payment.destroy', $payment->id) }}" method="POST" class="inline">
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