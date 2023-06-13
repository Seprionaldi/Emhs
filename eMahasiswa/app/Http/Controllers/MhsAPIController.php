<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
     public function read()
     {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'data berhasil di tampilkan',
            'data' => $mhs 
        ],200);
     }
     public function create(request $request)
     {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);
        if($mhs)
        {
            return response()->json([
                
                'success'=> true,
                'message'=> 'data berhasil di tambah'
            ],200);
        } else {
            return response()->json([
                
                'success'=> false,
                'message'=> 'anda salah silahkan coba lagi'
            ],404);
        }

     }
     public function update($id, Request $request)
     {
        $mhs = Mahasiswa::whereId($id)->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$request->minat
        ]);
        if($mhs)
        {
            return response()->json([
                
                'success'=> true,
                'message'=> 'data berhasil ubah'
            ],200);
        } else {
            return response()->json([
                
                'success'=> false,
                'message'=> 'david salah'
            ],404);
        }
     }
     public function delete($id)
     {
        $mhs = Mahasiswa::whereId($id)->delete();
        
        if($mhs)
        {
            return response()->json([
                
                'success'=> true,
                'message'=> 'data berhasil di hapus'
            ],200);
        } else {
            return response()->json([
                
                'success'=> false,
                'message'=> 'david salah'
            ],401);
        }
        
     }

    //  public function update($id, Request $request)
    // {
    //     //
    //     $mhs= Mahasiswa::find($id);
    //     $mhs->update($request->all());
    //     return $mhs;

    // }
}
