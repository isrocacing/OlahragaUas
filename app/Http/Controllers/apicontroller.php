<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class apicontroller extends Controller
{
    public function getMahasiswa(){
    	$data = Mahasiswa::all();
    	return $data;
    }

    public function destroy($id){
    	$mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return $mahasiswa;
    }

    public function postMahasiswa(Request $request){
    	$save = Mahasiswa::create($request->all());
    	if ($save){
    		$res = array(
    			'status' => true,
    			'message' => 'berhasil disimpan'
    		);
    	}else{
    		$res = array(
    			'status' => false,
    			'message' => 'gagal disimpan'
    		);
    	}
    	return response()->json($res);
    }

    public function updateSiswa($id, Request $request){
    	$save = Mahasiswa::where('id', $id) -> update($request->all());
    	if ($save){
    		$res = array(
    			'status' => true,
    			'message' => 'berhasil diubah'
    		);
    	}else{
    		$res = array(
    			'status' => false,
    			'message' => 'gagal diubah'
    		);
    	}
    	return response()->json($res);
    }
}
