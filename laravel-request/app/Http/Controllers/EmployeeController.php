<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $name     = $request->input('name');
        $surname  = $request->input('surname');
        $position = $request->input('position');
        $address  = $request->input('address');
        $email    = $request->input('email');
        $workData = $request->input('workData');

        $path = $this->getPath($request);
        $url  = $this->getUrl($request);

        $json = json_decode($request->input('jsonData'), true);

        $street = $json['user']['address']['street'] ?? null;
        $city   = $json['user']['address']['city'] ?? null;
        $lat    = $json['user']['address']['geo']['lat'] ?? null;
        $lng    = $json['user']['address']['geo']['lng'] ?? null;

        return response()->json([
            'name' => $name,
            'surname' => $surname,
            'position' => $position,
            'email' => $email,
            'path' => $path,
            'url' => $url,
            'street' => $street,
            'city' => $city,
            'lat' => $lat,
            'lng' => $lng
        ]);
    }

    public function update(Request $request, $id)
    {

        $employee = Employee::find($id);

        if (!is_null($employee)) {
            $json = json_decode($request->input('jsonData'), true);

            $employee->name  = $request->input('name');
            $employee->email = $request->input('email');
            $employee->city  = $json['user']['address']['city'] ?? null;
        }

        $path = $this->getPath($request);
        $url  = $this->getUrl($request);

        return response()->json([
            'id' => $id,
            'status' => 'update method executed',
            'path' => $path,
            'url' => $url
        ]);
    }

    private function getPath(Request $request)
    {
        return $request->path();
    }

    private function getUrl(Request $request)
    {
        return $request->url();
    }
}
