<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // fungsi eloquent menampilkan data menggunakan pagination
        /*$barangs = Barang::all(); 
        $post = Barang::orderBy('Id_Barang', 'desc')->paginate(6);
        return view('barangs.index', compact('barangs'));
        with('i', (request()->input('page', 1) - 1) * 5);*/

        $pegawais1 = DB::table('pegawais')->simplePaginate(5);	
        $pegawais = Pegawai::where([
            ['Nama_Pegawai','!=',Null],
            ['Kode_Pegawai','!=',Null],
            [function($query)use($request){
                if (($term = $request->term)) {
                    $query->orWhere('Nama_Pegawai','LIKE','%'.$term.'%')->get();
                    $query->orWhere('Kode_Pegawai','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->orderBy('Kode_Pegawai','desc')
        ->simplePaginate(3);
        
        return view('pegawais.index' , compact('pegawais'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Id_Pegawai' => 'required',
            'Kode_Pegawai' => 'required',
            'Nama_Pegawai' => 'required',
            'Kategori_Pegawai' => 'required',
            'Umur' => 'required',
            
        ]);

            // Fungsi eloquent untuk menambah data
            Pegawai::create($request->all());

        // Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pegawais.index')
            ->with('success', 'Pegawai Berhasil Ditambahkan');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Pegawai)
    {
        //
        // Menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Pegawai = Pegawai::find($Id_Pegawai);
        return view('pegawais.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Pegawai)
    {
        //
        $Pegawai = Pegawai::find($Id_Pegawai);
        return view('pegawais.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Pegawai)
    {
        //
        $request->validate([
            'Id_Pegawai' => 'required',
            'Kode_Pegawai' => 'required',
            'Nama_Pegawai' => 'required',
            'Kategori_Pegawai' => 'required',
            'Umur' => 'required',
            
        ]);
         // Fungsi eloquent untuk mengupdate data inputan kita
         Pegawai::find($Id_Pegawai)->update($request->all());

         // Jika data berhasil diupdate, akan kembali ke halaman utama
         return redirect()->route('pegawais.index')
             ->with('success', 'Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Pegawai)
    {
        //
        // Fungsi eloquent untuk menghapus data
        Pegawai::find($Id_Pegawai)->delete();
        return redirect()->route('pegawais.index')
            -> with('success', 'Pegawai Berhasil Dihapus');
    }
    public function kembali(){
        return view('Home');
    }
}
