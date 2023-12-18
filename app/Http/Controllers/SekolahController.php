<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\SekolahResource;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sekolah::all();
        return view('sekolahs.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Sekolah::all();
        return view('sekolahs.create',[
            'sekolah' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namasekolah' => 'required|min:5',
            'kepsek' => 'required|min:5',
            'akre' => 'required|min:5',
            'visi' => 'required|min:5',
            'misi' => 'required|min:5',
            'npsn' => 'required|min:5',
            'ekskul' => 'required|min:5',
            'nohp' => 'required|min:10',
            'lokasi' => 'required|min:5',
            'berdiri' => 'required|date',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        // dd('Halo dek');
        // Upload image
        $image = $request->file('logo');
        $imagePath = $image->storeAs('public/', $image->hashName());

        // Create sekolah
        Sekolah::create([
            'namasekolah' => $request->namasekolah,
            'kepsek' => $request->kepsek,
            'akre' => $request->kepsek,
            'npsn' => $request->npsn,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'ekskul' => $request->ekskul,
            'nohp' => $request->nohp,
            'lokasi' => $request->lokasi,
            'berdiri' => $request->berdiri,
            'logo' => $image -> hashName(),
        ]);

        // Redirect to index
        return redirect()->route('sekolahs.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Sekolah::where('id', $id)->first();
        return view('sekolahs.show', [
            'data' => $data,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $data = Sekolah::find($id);
        return view('sekolahs.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'namasekolah' => 'required|min:5',
            'kepsek' => 'required|min:5',
            'akre' => 'required|min:5',
            'visi' => 'required|min:5',
            'misi' => 'required|min:5',
            'npsn' => 'required|min:5',
            'ekskul' => 'required|min:5',
            'nohp' => 'required|min:10',
            'lokasi' => 'required|min:5',
            'berdiri' => 'required|date',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $data = Sekolah::find($id);
        $image = $request->file('logo');
        if($image){
            $image->storeAs('public/', $image->hashName());
            Storage::delete('public/'.$data->file);

            $data->update([
                'namasekolah' => $request->namasekolah,
                'kepsek' => $request->kepsek,
                'akre' => $request->kepsek,
                'npsn' => $request->npsn,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'ekskul' => $request->ekskul,
                'nohp' => $request->nohp,
                'lokasi' => $request->lokasi,
                'berdiri' => $request->berdiri,
                'logo' => $image -> hashName(),
            ]);
        }else{
            $data->update([
                'namasekolah' => $request->namasekolah,
                'kepsek' => $request->kepsek,
                'akre' => $request->akre,
                'npsn' => $request->npsn,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'ekskul' => $request->ekskul,
                'nohp' => $request->nohp,
                'lokasi' => $request->lokasi,
                'berdiri' => $request->berdiri,
            ]);
        }

        // Redirect to index
        return redirect()->route('sekolahs.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Sekolah::find($id);

        if ($data === null) {
            return Redirect::route('sekolahs.index')->with('error', 'Record not found');
        }
    
        $data->delete();
    
        return redirect()->route('sekolahs.index')->with('success', 'Berhasil Dihapus');
        }
    }

