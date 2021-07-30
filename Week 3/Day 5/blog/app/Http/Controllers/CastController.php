<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cast;

class CastController extends Controller
{    	
    public function index(){
                $cast = DB::table('cast')->get();
                
                return view('cast.show',compact('cast'));
    }
    
    public function delete($id)
    {
	   DB::table('cast')->where('id',$id)->delete();
       
       $cast = DB::table('cast')->get();
       return view('cast.show',compact('cast'));

	
    }

    public function edit($id){
        // $cast = array(
        //         'id'=>'cast',
        //         'cast'=> Cast::find($id)

        // );
        // return view('cast.show')->with($cast);
        $cast= DB::table('cast')->where('id',$id)->first();
        // $rdv= rendezvous::findOrFail('id');
        return view('cast.edit',compact('cast'));
        

    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama'=>'required|unique:post',
            'umur'=>'required',
            'bio'=>'required',
        
        ]);

        $cast = DB::table('cast')
        ->where('id',$id)
        ->update([
            'nama'=> $request['nama'],
            'umur'=> $request['umur'],
            'bio'=> $request['bio']
        ]);


        $cast->save();
        return view('cast.show')->with('Success','Data Disimpan');
    }

    public function create()
    {
        /// menampilkan halaman create
        return view('cast.create');
        
    }

    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Cast::create($request->all());
         
        /// redirect jika sukses menyimpan data
        $cast = DB::table('cast')->get();
        return view('cast.show',compact('cast'));
                        
    }
  
    
        

}
