<?php

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
    return view('welcome');
});

route::get('hal2',function(){
    return "<h1> Selamat Datang Dihalaman ke 2</h1>";

});

route::get('biodata',function(){
    $nama = "cindy nurul a";
    $jk = "perempuan";
    $ttl = "Bandung, 05 januari 2004";
    $alamat = "kp.bj.kukun";
    $agama = "islam";
    $hobi = "membaca";

    return "Nama : $nama<br> 
    jenis kelamin : $jk <br>
    tanggal lahir : $ttl <br>
    alamat : $alamat <br>
    agama : $agama <br>
    hobi : $hobi <br>
    ";
  

});

Route::get('biodata2', function () {

    $nama = "cindy nurul a";
    $jk = "perempuan";
    $tempat = "Bandung";
    $tanggal= "05 januari 2004";
    $alamat = "kp.bj.kukun";
    $agama = "islam";
    $hobi = "berenang";
    return view('biodata',compact('nama','jk','tempat','tanggal','alamat','agama','hobi'));
    

});