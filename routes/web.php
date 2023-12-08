<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\CustomerMongoDB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    phpinfo();
});

Route::get('/create_eloquent_mongo/', function (Request  $request) {
        $success = CustomerMongoDB::create([
            'guid'=> 'cust_222',
            'first_name'=> 'tes',
            'family_name' => 'Doe',
            'email' => 'j.doe@gmail.com',       
            'address' => '123 my street, my city, zip, state, country'
        ]);
    });

    Route::get('/find_eloquent/', function (Request  $request) {
            $customer = CustomerMongoDB::where('guid', 'cust_222')->get();
        });