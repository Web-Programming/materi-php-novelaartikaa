<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $listprodi = Prodi::get();
        return view("prodi.index", 
        ['listprodi' => $listprodi]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("prodi.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required|min:5|max:20',
                'kode_prodi' => 'required|min:2|max:2',
                'logo' => 'image|mimes:jpeg,png,jpg,gift,svg|max:2048'
                ]
        );

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama']; //$request->nama
        $prodi->kode_prodi = $validateData['kode_prodi'];
        $prodi->save();

        //upload logo
        if ($request->hasFile('logo')){
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'),$filename);
            $prodi->logo = $filename;
        }

        //Prodi::create([
        //    'nama' =>  $validateData['nama'],
        //    'kode_prodi' => $validateData['kode_prodi']
        //]);

        return redirect("prodi")->with("status", "Data Program Studi berhasil disimpan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //select prodi by id
        $prodi = Prodi::find($id);

        //buat view detail di folder view/prodi
        return view("prodi.detail", ['prodi' => $prodi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //select prodi by id
        $prodi = Prodi::find($id);

        //buat view edit di folder view/prodi
        return view("prodi.edit", ['prodi' => $prodi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input
    $validateData = $request->validate([
        'nama' => 'required|min:5|max:20',
        'kode_prodi' => 'required|min:2|max:2'
    ]);

    // Ambil data prodi yang mau diupdate
    $prodi = Prodi::findOrFail($id);

    // Update data
    $prodi->nama = $validateData['nama'];
    $prodi->kode_prodi = $validateData['kode_prodi'];
    $prodi->save();

    // Redirect kembali ke list prodi dengan pesan
    return redirect('prodi')->with('status', 'Data Program Studi berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ambil data pribadi berdasarkan id
        $prodi=prodi::find($id);
        $prodi->delete();
        // hapus data prodi
        return redirect("prodi")->with("status","Data Program Studi berhasil dihapus!");

    }
}
