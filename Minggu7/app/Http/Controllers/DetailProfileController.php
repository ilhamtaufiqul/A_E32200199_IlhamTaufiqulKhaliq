<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProfileController extends Controller
{
    public function index(){
        //return "Halo ini adalah tampilan index dari controller";
       //return "Method ini nantinya akan mengambil semua data user";
        $nama = "Ilham Taufiqul Khaliq"; 
        $nim = "E32200199";
        $pelajaran = ["Pancasila","PKN"," Pemrograman Lanjut","Elektronika 2","Perancangan Perangkat Keras","Jaringan Komputer 1","Fisika Teknik"];
        
        return view('homepage', compact('nama','nim','pelajaran'));
    }
    public function create(){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    } 
    public function store(Request $request){
        return "Method ini nantinya akan digunakan untuk menciptakan data user baru";
    } 
    public function show($id){
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    } 
    public function edit($id){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id-" . $id;
    } 
    public function update(Request $request, $id){
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id-" . $id;
    } 
    public function destroy($id){
        return "Method ini nantinya digunakan untuk menghapus data user dengan id-" . $id;
    } 
}
