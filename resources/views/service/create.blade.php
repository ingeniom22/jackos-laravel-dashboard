<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">New Service</h3>

                    <form action="{{ route('service.store') }}" method="POST">
                        @csrf

                        <!-- Add your form fields here -->
                        <div class="mb-4">
                            <label for="service" class="block text-sm font-medium text-gray-600">Service
                                Name:</label>
                            <input type="text" name="service" id="service" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <label for="service_description" class="block text-sm font-medium text-gray-600">Service
                                Description:</label>
                            <input type="text" name="service_description" id="service_description" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <label for="effective_start_date" class="block text-sm font-medium text-gray-600">Effective Start
                                Date:</label>
                            <input type="date" name="effective_start_date" id="effective_start_date" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <label for="effective_end_date" class="block text-sm font-medium text-gray-600">Effective End
                                Date:</label>
                            <input type="date" name="effective_end_date" id="effective_end_date" class="form-input mt-1 block w-full required rounded-md" />
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-accent text-white px-4 py-2 rounded-md">Create
                                Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>