<?php

namespace App\Http\Controllers\Api;

use App\Helpers\CSV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = CSV::read(base_path('resources/files/csv/clients.csv'));
        return response()->json($clients,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|in:male,female,others,n/a',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'address' => 'required|string',
            'nationality' => 'required|string',
            'dob' => 'required|date',
            'education' => 'required|string',
            'mode_of_contact' => 'required|in:email,phone,none',
        ]);

        $client = $request->only([
            'name', 'gender', 'phone', 'email',
            'address', 'nationality', 'dob', 'education', 'mode_of_contact'
        ]);
        if (CSV::insert(base_path('resources/files/csv/clients.csv'), $client)) {
            return response(['message' => 'Record Inserted'], 201);
        }
        return response(['message' => 'Record Failed To Insert'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
