<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\mahasiswa;

class pageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }
    public function mahasiswa()
    {
        $mhs = Mahasiswa::paginate(5);
        return view('mahasiswa', ['key' => 'mahasiswa', 'mhs'=> $mhs]);
    }
    public function pencarian(Request $request)
    {
        $cari = $request->q;
        $mhs = mahasiswa::where('nama', 'like','%'.$cari.'%')->paginate(5);
        $mhs ->appends($request ->all());
        return view('mahasiswa', ['key' =>'mahasiswa','mhs'=> $mhs]);
    }
    public function tambah()
    {
        return view('formtambah',['key'=>'mahasiswa']);
    }
    public function simpan(Request $request)
    {
        $minat = implode(',',$request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' =>$minat,
        ]);
        return redirect('mahasiswa')->with('flash','Data Berhasil Di Simpan');
    }
    public function edit($nim){
        $mhs = mahasiswa::find($nim);
        return view('formedit',['key'=> 'mahasiswa', 'mhs'=>$mhs]);
    }
    public function update($id, Request $request){
        $minat = implode(',',$request ->get('minat'));

        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
       
        $mhs->save();

        return redirect('mahasiswa')->with('flash', 'Data Berhasil Di Ubah');
    }
    public function delete($id){
        $mhs = Mahasiswa :: find ($id);
        $mhs ->delete();

        return redirect('mahasiswa')->with('flash', 'Data Berhasil Di hapus');
    }
    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }


}