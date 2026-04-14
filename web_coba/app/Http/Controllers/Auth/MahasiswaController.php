<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\assertDatabaseCount;
use function Symfony\Component\String\s;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman mahasiswa";
    }

    public function insertSql()
    {
        $query = DB::insert("INSERT INTO students (
            nim,
            nama_lengkap,
            tempat_lahir,
            tgl_lahir,
            ipk,
            prodi,
            alamat,
            created_at,
            updated_at
        ) VALUES (
            '2401091002',
            'Allya Triananda',
            'Padang',
            '2005-08-21',
            3.50,
            'MI',
            'Jl. Ampera no. 20',
            NOW(),
            NOW())");
    }
    public function insertPrepared()
    {
        $query = DB::insert("INSERT INTO students (
            nim,
            nama_lengkap,
            tempat_lahir,
            tgl_lahir,
            ipk,
            prodi,
            alamat,
            created_at,
            updated_at
        ) VALUES (
            '2022090908',
            'Taylor Otwel',
            'Limau Manis',
            '1971-08-21',
            3.50,
            'MI',
            'Jl. M Hatta no. 1',
            NOW(),
            NOW())");
    }
   public function insertBinding()
{
    $query = DB::insert("INSERT INTO students
        (nim, nama_lengkap, tempat_lahir, tgl_lahir, ipk, prodi, alamat, created_at, updated_at)
        VALUES
        (:nim, :nama_lengkap, :tempat_lahir, :tgl_lahir, :ipk, :prodi, :alamat, :created_at, :updated_at)",
        [
            'nim' => '2022090908',
            'nama_lengkap' => 'Bill Gates',
            'tempat_lahir' => 'Payakumbuh',
            'tgl_lahir' => '1963-05-1',
            'ipk' => 3.50,
            'prodi' => 'MI',
            'alamat' => 'Jl. M Yamin no.1 Padang',
            'created_at' => now(),
            'updated_at' => now()
        ]
    );
}
    public function update()
    {
        $query = DB::update("UPDATE students SET tempat_lahir = 'Seattle Washington US' WHERE nama_lengkap =?",['Bill Gates']);
    }
     public function delete()
    {
        $query = DB::delete("DELETE FROM students WHERE nama_lengkap =?",['Bill Gates']);
    }
     public function select()
    {
        $query = DB::select("SELECT * FROM students");
        dd($query);
    }
    public function selectTampil()
    {
    $query = DB::select("SELECT * FROM students");

    echo ($query[0]->id) . "<br />";
    echo ($query[0]->nim) . "<br />";
    echo ($query[0]->nama_lengkap) . "<br />";
    echo ($query[0]->ipk) . "<br />";
    echo ($query[0]->alamat);
    }
public function selectView()
    {
    $query = DB::select("SELECT * FROM students");
    return view('akademik.mahasiswa', ['students' => $query]);
    }
    public function selectWhere()
{
    $query = DB::select("SELECT * FROM students WHERE prodi = ? ORDER BY nim ASC", ['MI']);

    return view('akademik.mahasiswa', ['students' => $query]);
}
public function statement()
{
    $query= DB:: statement("TRUNCATE TABLE students");
    return ('Tabel mahasiswa berhasil kosong');
}
}