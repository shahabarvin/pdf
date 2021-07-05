<?php

use Illuminate\Support\Facades\Route;
use mikehaertl\pdftk\Pdf;
use mikehaertl\pdftk\XfdfFile;
use mikehaertl\pdftk\FdfFile;

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
    return view('welcome');
});

Route::get('/test', function () {


// Fill form with data array
    $pdf = new Pdf('pdf/3.pdf');
    $result = $pdf->fillForm([
        'agent'=>'harci'
    ])
        ->needAppearances()
        ->saveAs('filled.pdf');
dd($pdf->getError());
});


