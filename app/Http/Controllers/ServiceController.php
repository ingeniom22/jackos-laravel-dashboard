<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $services = DB::table('services')
            ->select(
                'services.id',
                'services.service as service',
                'services.service_description as description',
                'services.effective_start_date as effective_start_date',
                'services.effective_end_date as effective_end_date'
            )
            ->get();

        // return view('service.index', ['services' => Service::all()]);
        return view('service.index_v2', ['services' => $services]);
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        Service::create($request->all());

        return redirect()->route('service.index')
            ->with('success', 'service created successfully.');
    }

    public function show(Service $service)
    {
        return view('service.show', ['service' => $service]);
    }

    public function edit(Service $service)
    {
        return view('service.edit', ['service' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return redirect()->route('service.index')
            ->with('success', 'service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('service.index')
            ->with('success', 'service deleted successfully.');
    }
}
