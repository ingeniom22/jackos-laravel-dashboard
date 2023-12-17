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
                    <h3 class="text-lg font-semibold mb-4">Payment</h3>
                    <a href="{{ route('payment.create')}}" class="btn btn-primary mb-4">
                        Add Payment
                    </a>

                    <table class="min-w-full border rounded-lg overflow-hidden">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="w-1/6 py-2 px-4 border">ID</th>
                                <th class="w-1/6 py-2 px-4 border">Payment Name</th>
                                <th class="w-1/6 py-2 px-4 border">Payment Description</th>
                                <th class="w-1/6 py-2 px-4 border">Fee</th>

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
                                        <a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('payment.destroy', $payment->id) }}" method="POST" class="inline">
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