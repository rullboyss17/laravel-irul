<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    function index () {
         $data = Aktivitas::latest()->get();
         return view('aktivitas.index', compact('data'));
      
    }

    public function create()
    {
        return view('aktivitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'status' => 'required|string',
        ]);
    
        Aktivitas::create($request->all());
    
        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil ditambahkan');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);
    
        $aktivitas = Aktivitas::find($id);
        $aktivitas->update($request->all());
    
        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil diubah');
    }
    
    public function destroy($id)
    {
        $aktivitas = Aktivitas::find($id);
        $aktivitas->delete();
    
        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil dihapus');
    }
    public function edit($id)
    {
    $aktivitas = Aktivitas::findOrFail($id);
    return view('aktivitas.edit', compact('aktivitas'));
    }
    public function show($id)
    {
    $aktivitas = Aktivitas::findOrFail($id);
    return view('aktivitas.show', compact('aktivitas'));
    }


}