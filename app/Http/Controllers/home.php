<?php

namespace App\Http\Controllers;
use App\Models\table;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $data = table::count();
        return view('dashboard', compact('data'));
    }

    public function table(){
        $data = table::all();
        return view('table',compact('data'));
    }

    public function tambah(){
        return view('tambah');
    }
    public function store(Request $request)
     {
         $request->validate([
             'idProduk' => 'required',
             'judulProduk' => 'required',
             'deskripsi' => 'required',
             'harga' => 'required',
             'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
         ]);
   
         $input = $request->all();
   
         if ($gambar = $request->file('gambar')) {
             $destinationPath = 'foto/';
             $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
             $gambar->move($destinationPath, $fotogambar);
             $input['gambar'] = $fotogambar;
         }
     
         table::create($input);
      
         return redirect('/table');
     
     }
     public function edit($id)
    {
        $data = table::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request,$id, table $table)
    {
        $data = table::find($id);
        $request->validate([
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'foto/';
            $fotogambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $fotogambar);
            $input['gambar'] = "$fotogambar";
        }else{
            unset($input['gambar']);
        }

        $data->update($input);
        
        return redirect('/table')->with('success','Produk Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $data = table::find($id);
        $data->delete();

        return redirect('/table')->with('success','Produk Berhasil Dihapus!');
    }
}
