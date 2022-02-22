<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return $employees;
    }



    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;

        $employee->save();

        return $employee;
    }


    public function show(Request $request)
    {
        $employee = Employee::findOrFail($request->id);
        return $employee;
    }



    public function update(Request $request)
    {
        $employee = Employee::findOrFail($request->id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;

        $employee->save();

        return $employee;
    }


    public function destroy(Request $request)
        {
        $employee = Employee::destroy($request->id);
        return $employee;
    }
}
