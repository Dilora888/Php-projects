<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $lastname = $request->input('lastname');
        $position = $request->input('position');
        $address = $request->input('address');

        // JSON из textarea
        $json = $request->input('json_data');
        $jsonData = json_decode($json, true);

        $age = $jsonData['age'] ?? null;
        $salary = $jsonData['salary'] ?? null;
        $department = $jsonData['department'] ?? null;

        $path = $this->getPath($request);
        $url = $this->getUrl($request);

        return response()->json([
            'name' => $name,
            'email' => $email,
            'lastname' => $lastname,
            'position' => $position,
            'address' => $address,
            'age' => $age,
            'salary' => $salary,
            'department' => $department,
            'path' => $path,
            'url' => $url
        ]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $json = $request->input('json_data');
        $jsonData = json_decode($json, true);

        $path = $this->getPath($request);
        $url = $this->getUrl($request);

        return response()->json([
            'id' => $id,
            'updated_name' => $name,
            'updated_email' => $email,
            'json' => $jsonData,
            'path' => $path,
            'url' => $url
        ]);
    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }
}
