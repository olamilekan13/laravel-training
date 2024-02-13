<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{

    // CRUD 

    // Create a New Customer
    public function CreateCustomer(Request $request)
    {

        // Validate Request using validator method
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // check if validation fails
        if ($validator->fails()) {
            $message = $validator->errors();
            return response()->json([
                "status" => 401,
                "message" => $message->first()
            ], 401);
        }


        // Create a new Customer
        $customer = DB::table('customers')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);


        // Return a success response
        return response()->json([
            "status" => 200,
            "message" => "Customer Created Successfully"
        ], 200);



    }


    // Update a Customer
    public function UpdateCustomer()
    {

    }


    // Delete a Customer
    public function DeleteCustomer()
    {

    }


    // Get a Customer
    public function GetCustomer()
    {

    }


}
