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
                    <h3 class="text-lg font-semibold mb-4">Service</h3>
                    <a href="{{ route('service.create')}}" class="btn btn-primary mb-4">
                        Add Service
                    </a>

                    <table class="min-w-full border rounded-lg overflow-hidden">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="w-1/6 py-2 px-4 border">ID</th>
                                <th class="w-1/6 py-2 px-4 border">Service Name</th>
                                <th class="w-1/6 py-2 px-4 border">Service Description</th>
                                <th class="w-1/6 py-2 px-4 border">Effetive Start Date</th>
                                <th class="w-1/6 py-2 px-4 border">Effetive End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service as $service)
                            <tr>
                                <td class="w-1/6 py-2 px-4 border">{{ $service->id}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $service->service }}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $service->service_description}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $service->effective_start_date}}</td>
                                <td class="w-1/6 py-2 px-4 border">{{ $service->effective_end_date}}</td>
                                <td class="w-1/6 py-2 px-4 border">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST" class="inline">
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