<?php

namespace App\Http\Controllers;

use App\Models\Spotify;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public function index(){
        $data = Spotify::all(); //Spotify ini adalah model
        // dd($data);
        return view('home', compact('data'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function insertdata(Request $request){
        Spotify::create($request->all());
        return redirect()->route('home')->with('berhasil', 'Lagu baru berhasil ditambahkan.');
    }

    public function tampilkandata($id){
        $data = Spotify::find($id);
        return view('edit', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Spotify::find($id);
        $data->update($request->all());
        return redirect()->route('home')->with('berhasil', 'Lagu berhasil diedit.');
    }

    public function delete($id){
        $data = Spotify::find($id);
        $data->delete();
        return redirect()->route('home')->with('berhasil', 'Lagu berhasil dihapus.');  
    }

    public function show($id)
    {
        $data = Spotify::find($id);
        return view('detail',compact('data'));
    }
}
