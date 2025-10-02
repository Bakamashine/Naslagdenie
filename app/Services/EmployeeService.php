<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeService
{
    protected static string $storage_key = "Employee";
    public static function AddEmployee(Request $request)
    {
        $url = ImageService::UploadImage($request, "image", self::$storage_key);
        if ($url)
        {
            Employee::create([
                "fio" => $request->fio,
                "description" => $request->description,
                "image" => $url
            ]);
        }
    }
}
