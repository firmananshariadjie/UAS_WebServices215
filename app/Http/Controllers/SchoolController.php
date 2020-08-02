<?php

namespace App\Http\Controllers;

use App\School;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Transformers\SchoolTransformer;
use Auth;
use Alert;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function download(School $school)
    {
        $schools = $school->all();

        return fractal()
            ->collection($schools)
            ->transformWith(new SchoolTransformer)
            ->toArray();
    }
    public function index(School $school)
    {
        $school = $school->all();

        // return fractal()
        //     ->collection($schools)
        //     ->transformWith(new SchoolTransformer)
        //     ->toArray();

        return view('school.index',compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        
        $school = User::pluck('name','id');

        return view('school.create', [
            'school' => $school]);

            
    }

    /*  * 
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,School $school)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'kategori' => 'required',
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'tlp' => 'required',
            'email' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        
        $school = School::create([
            'user_id' => $request->user_id,
            'kategori' =>$request->kategori,
            'nama_sekolah'=>$request->nama_sekolah,
            'alamat' =>$request->alamat,
            'website' =>$request->website,
            'tlp' =>$request->tlp,
            'email' =>$request->email,
            'visi' =>$request->visi,
            'misi' =>$request->misi
        ]);

        $school = $school->all();

        Alert::success('Tambah Data','Berhasil Di Tambah !');       
        return view('school.index',compact('school'));
        // $response = fractal()
        // ->item($school)
        // ->transformWith(new SchoolTransformer)
        // ->toArray();

        // return response()->json($response,201);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        
        return view('school.show',compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('school.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
            $school->kategori = $request->get('kategori',$school->kategori);
            $school->nama_sekolah = $request->get('nama_sekolah',$school->nama_sekolah);
            $school->alamat = $request->get('alamat',$school->alamat);
            $school->website = $request->get('website',$school->website);
            $school->tlp = $request->get('tlp',$school->tlp);
            $school->email = $request->get('email',$school->email);
            $school->visi = $request->get('visi',$school->visi);
            $school->misi = $request->get('misi',$school->misi);

            $school->save();
            // return fractal()
            // ->item($school)
            // ->transformWith(new SchoolTransformer)
            // ->toArray();

            $school = $school->all();

            Alert::success('Edit Data','Berhasil Di Ubah !');       
            return view('school.index',compact('school'));
            
            // $request->validate([
                //     'kategori'=>'required',
                //     'nama_sekolah'=>'required',
                //     'alamat'=>'required',
                //     'website'=>'required',
                //     'tlp'=>'required',
                //     'email'=>'required',
                //     'visi'=>'required',
                //     'misi'=>'required'
                //     ]);
        
                //     School::where('id',$school->id)
                //     ->update([
                //         'kategori'=>$request->kategori,
                //         'nama_sekolah'=>$request->nama_sekolah,
                //         'alamat'=>$request->alamat,
                //         'website'=>$request->website,
                //         'tlp'=>$request->tlp,
                //         'email'=>$request->email,
                //         'visi'=>$request->visi,
                //         'misi'=>$request->misi,
                //     ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        School::destroy($school->id);
        $school = $school->all();
        
        Alert::success('Hapus Data','Berhasil Di Hapus !');       

        return view('school.index',compact('school'));
        
    }
}
