<?php

use App\Http\Controllers\Auth\DosenController;
use App\Http\Controllers\Auth\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswa', [\App\Http\Controllers\Auth\MahasiswaController::class, 'index']); // menggunakan namespace lengkap

Route::get('/dosen', [DosenController::class, 'index']);

//Route::get('/insert-sql', [MahasiswaController::class, 'insertSql']);

Route::get('/insert-sql',[MahasiswaController::class,'insertSql']);
Route::get('/insert-prepared', [MahasiswaController::class,'insertPrepared']);
Route::get('/insert-binding',[MahasiswaController::class,'insertBinding']);
Route::get('/update', [MahasiswaController::class,'update']);
Route::get('/delete', [MahasiswaController::class,'delete']);
Route::get('/select', [MahasiswaController::class,'select']);
Route::get('/select-tampil', [MahasiswaController::class,'selectTampil']);
Route::get('/select-view', [MahasiswaController::class,'selectView']);
Route::get('/select-where', [MahasiswaController::class,'selectWhere']);
Route::get('/statement', [MahasiswaController::class,'statement']);


//Query Builder
Route::get('/insert-dosen', [DosenController::class, 'insertDosen']);
Route::get('/insert-banyak-dosen', [DosenController::class, 'insertBanyakDosen']);
Route::get('/update-dosen', [DosenController::class, 'updateDosen']);
Route::get('/update-where-dosen', [DosenController::class, 'updateWhereDosen']);
Route::get('/update-or-insert', [DosenController::class, 'updateOrInsert']);
Route::get('/delete-dosen', [DosenController::class, 'deleteDosen']);
Route::get('/get', [DosenController::class, 'get']);
Route::get('/get-tampil', [DosenController::class, 'getTampil']);
Route::get('/get-view', [DosenController::class, 'getView']);
Route::get('/get-where', [DosenController::class, 'getWhere']);
Route::get('/select-dosen', [DosenController::class, 'selectDosen']);
Route::get('/take', [DosenController::class, 'take']);
Route::get('/first', [DosenController::class, 'first']);
Route::get('/find', [DosenController::class, 'find']);
Route::get('/raw', [DosenController::class, 'raw']);

//Eloquent ORM
Route::get('/cek-object', [MahasiswaController::class,'cekObjek']);

Route::get('/insert', [MahasiswaController::class,'insert']);
Route::get('/mass-assigment', [MahasiswaController::class,'massAssigment']);

Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update', [MahasiswaController::class, 'massUpdate']);

Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/destroy', [MahasiswaController::class, 'destroy']);
Route::get('/mass-delete', [MahasiswaController::class, 'massDelete']);

Route::get('/all', [MahasiswaController::class, 'all']);
Route::get('/all-view', [MahasiswaController::class, 'allView']);
Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
Route::get('/test-where', [MahasiswaController::class, 'testWhere']);
Route::get('/first', [MahasiswaController::class, 'first']);
Route::get('/find', [MahasiswaController::class, 'find']);
Route::get('/latest', [MahasiswaController::class, 'latest']);
Route::get('/limit', [MahasiswaController::class, 'limit']);
Route::get('/skip-take', [MahasiswaController::class, 'skipTake']);

Route::get('/soft-delete', [MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed', [MahasiswaController::class, 'withTrashed']);
Route::get('/restore', [MahasiswaController::class, 'restore']);
Route::get('/force-delete', [MahasiswaController::class, 'forceDelete']);
//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/home',function(){
//  echo "Halaman Home <br>";
//   echo "Baris Kedua";
//});

//route parameter
//Route::get('/mahasiswa3/ti/allya',function(){
//    echo "Selamat Datang Allya Pintar 4.00";
//});

//Route::get('/mahasiswa3/{nama}', function($nama){
//    return "Selamat datang $nama";
//});

//Route::get('/mahasiswa3/{nama}/{nim}', function($nama, $nim){
//    return "Selamat datang orang pintar bernama $nama, NIM $nim";
//});

// route optional parameter
// Route::get('/dosen/{nama?}/{nip?}', function($nama = "", $nip = ""){
//     return "Selamat datang $nama, NIP $nip";
// });

//route redirect
//Route::redirect('/home','/');

//route fallback
//Route::fallback(function(){
//    return "Halaman Tidak Ditemukan";   
//});

// Route::get('/mahasiswa1',function(){
//    $arrMhs = [
//        'mhs1' => 'Allya Triananda',
//        'mhs2' => 'Allya'
//    ];
    //return view('akademik.mahasiswa',$arrMhs); //parameter ke-2 view
//   return view('akademik.mahasiswa1')->with($arrMhs); //method with()
//});

//Route::get('/mahasiswa2',function(){
//    $nama = 'Allya Triananda';
//    $nim = '2401091002';
//    $total_nilai = 100;
//    return view('akademik.nilai_mahasiswa', compact('nama','nim','total_nilai'));
//});

//Route::get('/perulangan1', function(){
//   return view('akademik.perulangan1');
//});

//Route::get('/perulangan2', function(){
//     $nama = 'Allya';
//     $nim = '2401091002';
//     $total_nilai = [98,85,49];
//     return view('akademik.perulangan2', compact('nama','nim','total_nilai'));
// });

// Route::get('/perulangan3', function(){
//     $nama = 'Bill gates';
//     $nim = '2401091003';
//     $total_nilai = [80,70,20,60,45];
//     return view('akademik.perulangan3', compact('nama','nim','total_nilai'));
// });

// Route::get('/mahasiswa', function(){
//     $arrMhs = [
//         'Allya Triananda', 
//         'Keino Dwi Ravianda', 
//         'Dian Rafhiqa Firsty', 
//         'Muhammad Athio Abdelmufti', 
//         'Dzavian Nashviel Althan',
//         'Diafany Raisqa Puti',
//         'Genoveva Nathassa Trivia ',
//         'Fajri Yani',
//     ];
//     return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
// });

// Route::get('/dosen', function(){
//     $arrDosen = ['Roni Saputra', 'Yori Adi Atma', 'Deni S', 'Fazrol R', 'Ervan A'];
//     return view('akademik.dosen',['dosen'=>$arrDosen]);
// });

Route::get('/pnp/{jurusan}/{prodi}', function ($jurusan, $prodi) {
    $data = [$jurusan, $prodi];
    return view('akademik.prodi')->with('data', $data);
})->name('prodi');