<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




// CREATE (The creation of new user or new data on our server)
// READ (Resolving a data or user from our server)
// UPDATE (Updating a data or user on our server)
// DELETE (Deleting a data or user on our server)

// Create a New Customer
Route::post('create_customer', [CustomersController::class, "CreateCustomer"]);
