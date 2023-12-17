<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-2 text-gray-900">
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('service.create')}}" class="btn btn-accent mb-4 text-white">
                                Add Service
                            </a>

                            <table class="min-w-full border rounded-lg overflow-hidden text-center">
                                <thead class="bg-gradient-to-r from-teal-400 to-teal-600 text-white">
                                    <tr>
                                        <th class="w-1/6 py-3 px-4 border">ID</th>
                                        <th class="w-1/6 py-3 px-4 border">Service Name</th>
                                        <th class="w-1/6 py-3 px-4 border">Service Description</th>
                                        <th class="w-1/6 py-3 px-4 border">Effective Start Date</th>
                                        <th class="w-1/6 py-3 px-4 border">Effective End Date</th>
                                        <th class="w-1/6 py-3 px-4 border">Actions</th>
                                        <!-- Add this column for actions -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                    <tr>
                                        <td class="w-1/6 py-2 px-4 border">{{ $service->id }}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $service->service }}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $service->description }}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $service->effective_start_date}}</td>
                                        <td class="w-1/6 py-2 px-4 border">{{ $service->effective_end_date }}</td>
                                        <td class="w-1/6 py-2 px-4 border">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning text-white">Edit</a>
                                                <form action="{{ route('service.destroy', $service->id) }}" method="POST" class="inline">
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