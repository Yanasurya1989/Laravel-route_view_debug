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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return 'Hello world!';
});

Route::get('/learn', function () {
    echo '<h1>Hello world</h1>';
    echo '<p>Paragraph tag</p>';
});

Route::get('/student/informatic/danish', function () {
    echo '<h1 style="text-align: center"><u>Hallo Danish !</u></h1>';
});

// =====================
// ## Route Parameter ##

Route::get('/student/{name}', function ($name) {
    return "nama yang di input adalah $name";
});

Route::get('/stock/{type}/{merk}', function ($type, $merk) {
    return "cek stock type $type dengan merk $merk";
});

Route::get('/stock/{type}/{merk}', function ($a, $b) {
    return "cek stock type $a dengan merk $b";
});

// ====================
// ## Route dengan optional parameter(value parameter atau inputan url) ##
Route::get('/stock/{type?}/{merk?}', function ($a = 'smartphone', $b = 'samsung') {
    return "cek stock type $a dengan merk $b";
});

// ===============================================
// ## Route parameter dengan Regular Expression ##
// basic
Route::get('/user/{id}', function($id){
    return "halo $id";
});

// Membuat ketentuan bahwa id harus berupa angka antara 1 - 8 (158 boleh) sehingga jika diberi diluar itu akan eror
Route::get('/regex/{id}', function($id){
    return "id nya adalah $id";
})->where('id', '[0-8]+');

// Membuat ketentuan bahwa id harus didahului abjad antara A-D seanyak dua char diikuti angka
Route::get('/regexx/{id}', function($id){
    return "id nya adalah $id";
})->where('id', '[A-D]{2}[0-8]+');

// ===============================================
// ## Route Redirect ##
Route::get('/hubungi-kami', function(){
    return '<h1>Hubungi kami</h1>';
});

Route::redirect('/contact', 'hubungi-kami');

// ===============================================
// ## Route Group ##
// Route::get('/admin/mahasiswa', function(){
//     return '<h1>Halaman Mahasiswa</h1>';
// });
// Route::get('/admin/dosen', function(){
//     return '<h1>Halaman Dosen</h1>';
// });
// Route::get('/admin/karyawan', function(){
//     return '<h1>Halaman Karyawan</h1>';
// });
// membuat routing seperti diatas menjadi lebih efisien

Route::prefix('/admin')->group(function(){
    Route::get('/mahasiswa', function(){
        return '<h1>Halaman Mahasiswa</h1>';
    });
    Route::get('/dosen', function(){
        return '<h1>Halaman dosen</h1>';
    });
    Route::get('/karyawan', function(){
        return '<h1>Halaman karyawan</h1>';
    });
});

// ===============================================
// ## Route Fallback ##
Route::fallback(function(){
    return 'Halaman tidak ditemukan';
});

Route::get('/', function(){
   return view('not_found') ;
});

// ===============================================
// ## Route Priority ##
// yang diperioritaskan akan yang posisinya paling bawah
Route::get('/buku', function(){
    return 'buku satu';
});
Route::get('/buku', function(){
    return 'buku dua';
});
Route::get('/buku', function(){
    return 'buku tiga';
});

// yang diperioritaskan akan yang posisinya paling atas(jika ada parameter)
Route::get('/buku/{a}', function($a){
    return "buku satu ke - $a";
});
Route::get('/buku/{b}', function($b){
    return "buku dua ke - $b";
});
Route::get('/buku/{c}', function($c){
    return "buku tiga ke - $c";
});

// debuging
Route::get('/debug', function(){
    // $halo = "Menampilkan text hallo";
    $halo = ['Hallo word', 2 => ['Jakarta', 'Bandung', 'Surabaya']];
    // var_dump($halo);
    // dd($halo);
    dump($halo);
    // die();

    echo '<prev>';
    print_r($halo);
    echo '</prev>';

    return $halo; //ini tidak akan dijalankan jika ada die()
});

Route::get('/template', function(){
    // return view('template', ["list" => ["Mahasiswa Satu", "Mahasiswa Dua", "Mahasiswa Tiga", "Mahasiswa Empat"]]);

    $mahasiswa = [
        // "iniSatu" => "Satu",
        // "iniDua" => "Dua",
        // "iniTiga" => "Tiga",
        // "iniEmpat" => "Empat",

        // array diatas bisa juga ditulis seperti ini
        "Array Satu",
        "Array Dua",
        "Array Tiga",
        "Array Empat",
    ];
        $one = 'Banana';
        $two = 'Apple';
    return view('template', compact('one', 'two'))->with('list', $mahasiswa);

    // return view('template', ['list' => $mahasiswa]); bentuk penulisan lain dari ini seperti dibawah
    // return view('template')->with('list', $mahasiswa);
    // return view('template')->with('list01', 'Bandung')->with('list02','Jakarta')->with('list', $mahasiswa);

});