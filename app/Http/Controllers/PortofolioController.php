<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\portofolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolio = Portofolio::all();
        return view('admin', [
            'portofolio' => $portofolio
        ]);
    }
    public function indexLanding()
    {
        $portofolio = portofolio::All();
        return view('index', [
            'portofolio' => $portofolio
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() {}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar1 = $request->file('gambar1')->store('portofolio', 'public');
        portofolio::create([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "tanggal" => $request->tanggal,
            "label" => $request->label,
            "gambar1" => $gambar1,
            "link" => $request->link,
        ]);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $portofolio = Portofolio::where('id', $id)->first();

    $rekomendasi = Portofolio::where('id', '!=', $id)->take(5)->get();  
    return view('detailHalaman', [
        'portofolio' => $portofolio,
        'rekomendasi' => $rekomendasi,
    ]);
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
        $portofolio = Portofolio::findOrFail($id);

        $gambar1 = $request->file('gambar1')
            ? $request->file('gambar1')->store('portofolio', 'public')
            : $portofolio->gambar1;

        if ($request->file('gambar1') && $portofolio->gambar1) {
            Storage::disk('public')->delete($portofolio->gambar1);
        }

        $portofolio->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'label' => $request->label,
            'gambar1' => $gambar1,
            'link' => $request->link,
        ]);

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portofolio = portofolio::find($id);
        if ($portofolio->gambar1) {
            Storage::disk('public')->delete($portofolio->gambar1);
        }
        $portofolio->delete();
        return redirect('admin');
    }
}
