<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Edit Service</h3>

                    <form action="{{ route('service.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Add your form fields here -->
                        <div class="mb-4">
                            <label for="service_name" class="block text-sm font-medium text-gray-600">Service
                                Name:</label>
                            <input type="text" name="service_name" id="service_name" class="form-input mt-1 block w-full required rounded-md" value="{{ $service->service }}" />
                        </div>

                        <div class="mb-4">
                            <label for="service_description" class="block text-sm font-medium text-gray-600">Service
                                Description:</label>
                            <input type="text" name="description" id="description" class="form-input mt-1 block w-full required rounded-md" value="{{ $service->service_description}}" />
                        </div>

                        <div class="mb-4">
                            <label for="contract_start" class="block text-sm font-medium text-gray-600">Effetive Start
                                Date:
                            </label>
                            <input type="date" name="contract_start" id="contract_start" class="form-input mt-1 block w-full required rounded-md" value="{{ $service->effective_start_date}}" />
                        </div>

                        <div class="mb-4">
                            <label for="contract_end" class="block text-sm font-medium text-gray-600">Contract End
                                Date:</label>
                            <input type="date" name="contract_end" id="contract_end" class="form-input mt-1 block w-full required rounded-md" value="{{ $service->effective_end_date}}" />
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-accent text-white px-4 py-2 rounded-md">Update
                                Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>