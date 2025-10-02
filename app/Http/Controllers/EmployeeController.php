<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        $data = Employee::all();
        return view("employee.create", ['data' => $data]);
    }

    public function store(StoreEmployeeRequest $request)
    {
        EmployeeService::AddEmployee($request);
        return back();
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
        return back();
    }
}
