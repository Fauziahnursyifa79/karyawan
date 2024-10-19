<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        //return view ('karyawan);
        $karyawan = Karyawan::orderBy('name','asc')->get(); //mengambil semua data post
        //return $karyawan
        return view('karyawan', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawans.create');
    }

    public function store(Request $request)
    {
        //return $request
        $request->validate([
            'name' => 'required|min:3|max:200',
            'address'=> 'required',
            'profesion' => 'required',
            'date_of_birth' => 'required',
            'no_hp' => 'required|numeric',
        ]);

        $insert = Karyawan::create([
            'name' => $request->name,
            'address' => $request->address,
            'profesion' => $request->profesion,
            'date_of_birth' => $request->date_of_birth,
            'no_hp' => $request->no_hp,
        ]);
        return redirect()->route('karyawan_index')->with('status', 'Data berhasil ditambahkan');
    }

    public function show(Karyawan $karyawan)
    {

    }

    public function edit(string $id)
    {
        //return $id;
        $karyawan = Karyawan::findOrFail($id);
        //return $karyawan;
        return view('karyawans.edit', compact('karyawan'));
        //return view ('karyawans.edit);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:200',
            'address' => 'required',
            'profesion' => 'required',
            'date_of_birth' => 'required',
            'no_hp' => 'required|numeric',
        ]);
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->update([
            'name' => $request->name,
            'address' => $request->address,
            'profesion' => $request->profesion,
            'date_of_birth' => $request->date_of_birth,
            'no_hp' => $request->no_hp
        ]);
        return redirect()->route('karyawan_index')->with('status', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        //return $karyawan;
        $karyawan->delete();
        // karyawan::where('id', $id)->delete();
        return redirect()->route('karyawan_index')->with(['status'=>'Data sudah berhasil dihapus!']);
    }
}
