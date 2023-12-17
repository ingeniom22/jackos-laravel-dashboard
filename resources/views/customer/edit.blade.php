<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Edit Customers</h3>

                    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Add your form fields here -->
                        <div class="mb-4">
                            <label for="customer_name" class="block text-sm font-medium text-gray-600">Customer
                                Name:</label>
                            <input type="text" name="customer_name" id="customer_name" class="form-input mt-1 block w-full required rounded-md" value="{{ $customer->customer_name }}" />
                        </div>

                        <div class="mb-4">
                            <label for="customer_email" class="block text-sm font-medium text-gray-600">Email:</label>
                            <input type="text" name="email" id="email" class="form-input mt-1 block w-full required rounded-md" value="{{ $customer->email }}" />
                        </div>

                        <div class="mb-4">
                            <label for="phone_no" class="block text-sm font-medium text-gray-600">Phone Number: </label>
                            <input type="text" name="phone_no" id="phone_no" class="form-input mt-1 block w-full required rounded-md" value="{{ $customer->phone_no }}" />
                        </div>

                        <div class="mb-4">
                            <label for="contract_start" class="block text-sm font-medium text-gray-600">Contract Start
                                Date:</label>
                            <input type="date" name="contract_start" id="contract_start" class="form-input mt-1 block w-full required rounded-md" value="{{ $customer->contract_start_date}}" />
                        </div>

                        <div class="mb-4">
                            <label for="contract_end" class="block text-sm font-medium text-gray-600">Contract End
                                Date:</label>
                            <input type="date" name="contract_end" id="contract_end" class="form-input mt-1 block w-full required rounded-md" value="{{ $customer->contract_end_date}}" />
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-accent text-white px-4 py-2 rounded-md">Update
                                Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>