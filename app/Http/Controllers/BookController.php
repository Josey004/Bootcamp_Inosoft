<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class BookController extends Controller
{
    //

    public function index() {
        $nama_buku = 'ini adalah buku';
        $data = ['judul' => $nama_buku];
        return view('book', $data);


        // echo "ini adalah function index dari BookController pakai new route";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['title' => 'create book'];
        return view('create_book', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $FormData = $request->all();
        // dump($FormData);
        
        // $judul = $request->judul;
        $judul = $request->get('judul');
        // $penulis = $request->penulis;
        $penulis = $request->get('penulis');
        dump($judul, $penulis);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
