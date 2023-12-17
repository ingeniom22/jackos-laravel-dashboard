<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Payment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">New Payment</h3>

                    <form action="{{ route('payment.store') }}" method="POST">
                        @csrf

                        <!-- Add your form fields here -->
                        <div class="mb-4">
                            <label for="payment_name" class="block text-sm font-medium text-gray-600">Payment
                                Name:</label>
                            <input type="text" name="payment_name" id="payment_name" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <label for="payment_description" class="block text-sm font-medium text-gray-600">Payment
                                Description:</label>
                            <input type="text" name="description" id="description" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <label for="fee" class="block text-sm font-medium text-gray-600">Fee:</label>
                            <input type="text" name="fee" id="fee" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-accent text-white px-4 py-2 rounded-md">Create
                                payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>