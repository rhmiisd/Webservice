<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Jurusan;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::all();

        return view('jurusans.index',[
            'jurusans' => $jurusans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sekolah = Sekolah::all();
        return view('jurusans.create',[
            'sekolah' => $sekolah,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->input('nmjurusan'));
        $request->validate([
            'nmjurusan' => 'required', 
            'idsekolah' => 'required',
            'deskripsi' => 'required',
            'prospek' => 'required',
            'tersedia' => 'required', 
        ]);

        // dd($request->nmjurusan);
        Jurusan::create([
            'nmjurusan' => $request->nmjurusan,
            'idsekolah' => $request->idsekolah,
            'deskripsi' => $request->deskripsi,
            'prospek' =>  $request->prospek,
            'tersedia' =>  $request->tersedia,
        ]);

        return redirect()->route('jurusans.index')->with(['success' => 'Jurusan created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $data = Jurusan::where('id', $id)->first();
        return view('jurusans.show', [
            'data' => $data,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $jurusans = Jurusan::all();
        $data = Jurusan::where('id', $id)->first();
        return view('jurusans.edit', [
            'data' => $data,
            'jurusans' => $jurusans,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nmjurusan' => 'required',
            'idsekolah' => 'required', // Ensure this line is correct
            'deskripsi' => 'required',
            'prospek' => 'required',
            'tersedia' => 'required',
        ]);
    
        $jurusan = Jurusan::find($id);
        $jurusan->update($request->all());
    
        return redirect()->route('jurusans.index')
            ->with('success', 'Jurusan updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $data = Jurusan::find($id);

    if ($data === null) {
        return Redirect::route('jurusans.index')->with('error', 'Record not found');
    }

    $data->delete();

    return redirect()->route('jurusans.index')->with('success', 'Berhasil Dihapus');
    }
}