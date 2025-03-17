<?php

namespace App\Http\Controllers;

use App\Models\Item; // mengimpor model item untuk dihubungkan dgn tabel items di database
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all(); //mengambil semua data dari tabel items dan disimpan ke dalam variable $items
        return view('items.index', compact('items')); //mengembalikan tampilan items.index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ // validate input dari request sebelum disave ke database
            'name' => 'required', // kolom name hrs diisi
            'description' => 'required', // deskripsi harus diisi
        ]);
        Item::create($request->only(['name', 'description'])); // membuat data baru di table items
        return redirect()->route('items.index')->with('success', 'Item added successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item')); // mengembalikan tampilan items.show dgn data item tertentu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item')); // mengembalikan tampilan items.edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required', 
            'description' => 'required', 
        ]);
        $item->update($request->only(['name', 'description'])); //
        return redirect()->route('items.index')->with('success', 'Item updated successfully.'); //mengembalikan item jika telah succeess diupdate
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete(); // hapus item dari database
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); // mengembalikan item jika telah succeess dihapus

    }
}