<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Edit Transaction</h3>

                    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Add your form fields here -->
                        <div class="mb-4">
                            <label for="customer_id" class="block text-sm font-bold text-gray-600 ">Customer
                                ID:</label>
                            <input type="text" name="customer_id" id="customer_id" class="form-input mt-1 block w-full rounded-lg" value="{{ $transaction->customer_id }}" />
                        </div>

                        <div class="mb-4">
                            <label for="service_id" class="block text-sm font-bold text-gray-600">Service ID:</label>
                            <input type="text" name="service_id" id="service_id" class="form-input mt-1 block w-full rounded-lg" value="{{ $transaction->service_id }}" />
                        </div>

                        <div class="mb-4">
                            <label for="employee_id" class="block text-sm font-bold text-gray-600">Employee
                                ID:</label>
                            <input type="text" name="employee_id" id="employee_id" class="form-input mt-1 block w-full rounded-lg" value="{{ $transaction->employee_id }}" />
                        </div>

                        <div class="mb-4">
                            <label for="payment_id" class="block text-sm font-bold text-gray-600">Payment ID:</label>
                            <input type="text" name="payment_id" id="payment_id" class="form-input mt-1 block w-full rounded-lg" value="{{ $transaction->payment_id }}" />
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-accent text-white px-4 py-2 rounded-md">Update
                                Transaction</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>