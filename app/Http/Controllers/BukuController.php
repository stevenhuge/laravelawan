<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Get Buku
    public function index(){
        $data_buku = Buku::all();
        $no = 0;
        return view('buku.index', compact('data_buku','no'));
    }

    // Create Buku
    public function create(Request $request){
        return view('buku.create');
    }

    // Store Buku
    public function store(Request $request){
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index');
    }

    // Delete Buku
    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('buku.index');
    }

    // Edit Buku
    public function edit($id){
        $data_buku = Buku::find($id);
        return view('buku.edit', ['data_buku' => $data_buku]);
    }

    // Update Buku
    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route("buku.index");
    }
}
