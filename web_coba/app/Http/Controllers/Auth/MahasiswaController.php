<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\assertDatabaseCount;
use function Symfony\Component\String\s;

class MahasiswaController extends Controller
{
    public function index(){
        $students=Student::latest()->paginate(5);
        return view('akademik.mahasiswa',['students'=>$students]);
    }
    public function cekObject()
    {
        $mahasiswa = new Student();
        dd($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new Student();
        $mahasiswa->nim = '2401091002';
        $mahasiswa->nama_lengkap = 'Allya';
        $mahasiswa->tempat_lahir = 'Padang';
        $mahasiswa->tgl_lahir = '2005-08-21';
        $mahasiswa->email = 'allya@gmail.com';
        $mahasiswa->prodi = 'MI';
        $mahasiswa->alamat = 'Jl. Perintis Kemerdekaan no. 100';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function massAssigment()
    {
        $mahasiswa = Student::create(
            [
                'nim' => '2401093006',
                'nama_lengkap' => 'Haifa Hafitriyanti',
                'tempat_lahir' => 'Padang',
                'tgl_lahir' => '2005-08-04',
                'email' => 'haifa@gmail.com',
                'prodi' => 'MI',
                'alamat' => 'Padang',
            ]
        );
        dump($mahasiswa);
        $mahasiswa1 = Student::create(
            [
                'nim' => '2401093001',
                'nama_lengkap' => 'Keino',
                'tempat_lahir' => 'GP',
                'tgl_lahir' => '2005-08-28',
                'email' => 'riyiknjir@gmail.com',
                'prodi' => 'MI',
                'alamat' => 'Padang',
            ]
        );
        dump($mahasiswa1);
    }

    public function update()
    {
        $mahasiswa = Student::find(5);

        $mahasiswa->tgl_lahir = '2005-08-20';
        $mahasiswa->alamat = 'Jl. Ampera';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function updateWhere()
    {
        $mahasiswa = Student::where('nim', '2401093006')->first();
        $mahasiswa->alamat = 'Jl. Perintis Kemerdekaan no. 100';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function massUpdate()
    {
        $mahasiswa = Student::where('nim', '2401093022')->first()->update(
            [
                'tempat_lahir' => 'SawahLunto',
                'prodi' => 'Animasi'
            ]
        );

        dd($mahasiswa);
    }

    public function delete()
    {
        $mahasiswa = Student::find(1);
        $mahasiswa->delete();

        dd($mahasiswa);
    }

    public function destroy()
    {
        $mahasiswa = Student::destroy(7);

        dd($mahasiswa);
    }

    public function massDelete()
    {
        $mahasiswa = Student::where('prodi', 'Animasi')->delete();

        dd($mahasiswa);
    }

    public function all()
    {
        $mahasiswa = Student::all();
        foreach ($mahasiswa as $mhs) {
            echo $mhs->id . '<br>';
            echo $mhs->nim . '<br>';
            echo $mhs->nama_lengkap . '<br>';
            echo $mhs->tempat_lahir . '<br>';
            echo $mhs->alamat;
            echo '<hr>';
            // dd($mahasiswa);
        }
    }

    public function allView()
    {
        $students = Student::all();
        return view('akademik.mahasiswa', ['students' => $students]);
    }

    public function getWhere()
    {
        $students = Student::where('prodi','MI')
                      ->orderBy('nama_lengkap','asc')
                      ->get();
        return view('akademik.mahasiswa',['students' => $students]); 
    }

    public function find()
    {
        $students = Student::find(3);
        return view('akademik.mahasiswa',['students' => [$students]]);
    }

    public function first()
    {
        $students = Student::where('prodi','MI')->first();
        return view('akademik.mahasiswa',['students' => [$students]]);
    }
    
    public function latest()
    {
        $students = Student::latest()->get();
        return view('akademik.mahasiswa',['students' => $students]);
    }

    public function limit()
    {
        $students = Student::latest()->limit(2)->get();
        return view('akademik.mahasiswa',['students' => $students]);
    }

    public function skipTake()
    {
        $students = Student::orderBy('id')->skip(1)->take(2)->get();
        return view('akademik.mahasiswa',['students' => $students]);
    }

    public function softDelete()
    {
        Student::where('id','1')->delete();
        return('Data berhasil dihapus');
    }

    public function withTrashed()
    {
        $students = Student::withTrashed()->get();
        return view('akademik.mahasiswa',['students' => $students]);
    }

    public function restore()
    {
        Student::withTrashed()->where('id','3')->restore();
        return 'Berhasil di restore';
    }

    public function forceDelete()
    {
        Student::where('id','3')->forceDelete();
        return ('Data berhasil dihapus secara permanent');
    }

    // public function index()
    // {
    //     return "Ini adalah halaman mahasiswa";
    // }

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
    // public function update()
    // {
    //     $query = DB::update("UPDATE students SET tempat_lahir = 'Seattle Washington US' WHERE nama_lengkap =?",['Bill Gates']);
    // }
    //  public function delete()
    // {
    //     $query = DB::delete("DELETE FROM students WHERE nama_lengkap =?",['Bill Gates']);
    // }
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