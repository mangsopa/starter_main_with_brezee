<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Services\HumanService;
use App\Http\Requests\Human\UpdateHumanEmployeeRequest;

class HumanResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employee = Employee::query()
        ->when(!blank($request->search), function ($query) use ($request) {
            return $query
                ->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('idpgw', 'like', '%' . $request->search . '%');
        })
        ->latest()
        ->orderBy('idpgw')
        ->paginate(10);

    return view('human.index', compact('employee'));

    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('human.show');
    }

    public function edit(string $id)
    {
        return view('human.edit');
    }

    public function update(UpdateHumanEmployeeRequest $request, Employee $employee, HumanService $humanservice)
    {
        return $humanservice->update($request, $employee)
            ? back()->with('success', 'User has been updated successfully!')
            : back()->with('failed', 'User was not updated successfully!');
    }

    public function destroy(string $id)
    {
        //
    }
}
