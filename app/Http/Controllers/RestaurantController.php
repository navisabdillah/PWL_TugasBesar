<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $restaurants = Restaurant::all(); // Mengambil semua isi tabel
        $restaurants1 = DB::table('restaurants')->simplePaginate(5);	
        $restaurants = Restaurant::where([
            ['Nama','!=',Null],
            [function($query)use($request){
                if (($term = $request->term)) {
                    $query->orWhere('Nama','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->orderBy('jenis','desc')
        ->simplePaginate(3);

        return view('restaurants.index' , compact('restaurants'))
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
        return view('restaurants.create');
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
        //melakukan validasi data
            $request->validate([
                'Nama' => 'required',
                'Jenis' => 'required',
                'Harga' => 'required',
                'Stok' => 'required',
                ]);
                //fungsi eloquent untuk menambah data
                Restaurant::create($request->all());
                //jika data berhasil ditambahkan, akan kembali ke halaman utama
                return redirect()->route('restaurant.index')
                ->with('success', 'Menu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nama)
    {
        //
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Restaurant = Restaurant::find($Nama);
        return view('restaurants.detail', compact('Restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nama)
    {
        //
        $Restaurant = Restaurant::find($Nama);
        return view('restaurants.edit', compact('Restaurant'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //melakukan validasi data
        $request->validate([
            'Nama' => 'required',
                'Jenis' => 'required',
                'Harga' => 'required',
                'Stok' => 'required',
    ]);

                //fungsi eloquent untuk mengupdate data inputan kita
            Restaurant::find($Nama)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('restaurants.index')
            ->with('success', 'Menu Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nama)
    {
        //fungsi eloquent untuk menghapus data
        Restaurant::find($Nama)->delete();
        return redirect()->route('restaurant.index')
        -> with('success', 'Menu Berhasil Dihapus');
    }
}
