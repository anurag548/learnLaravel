<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('lsitings', [
        'heading' => 'Latest Listing',
        'listings' => [[
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem Ipsum is simply dummy, Lorem Ipsum, aute irut non ante. Lorem Ipsum et'
        ], [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem Ipsum is simply dummy, Lorem Ipsum, aute irut non ante. Lorem Ipsum et'
        ]]
    ]);
});


// Route::get('/hello', function () {
//     return response("<h1>Hello World</h1>", 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo','bar');
// });

// Route::get('/post/{id}', function ($id) {
//     // ddd($id);
//     return response('Post '.$id);
// })->where('id','[0-9]+');


// Route::get('/search', function (Request $request) {
//     return $request->name. '  '.$request->city;
// });
