<?php


namespace App\Transformers;

use App\School;
use League\Fractal\TransformerAbstract;


class SchoolTransformer extends TransformerAbstract{

    public function transform(School $school)
    {
        return[
            'id'            =>$school->id,
            'nama_sekolah'  =>$school->nama_sekolah,
            'kategori'      =>$school->kategori,
            'alamat'        =>$school->alamat,
            'email'         =>$school->email,
            'tlp'           =>$school->tlp,
            'website'       =>$school->website,
            'visi'          =>$school->visi,
            'misi'          =>$school->misi,
            'published'     =>$school->created_at->diffForHumans()
        ];
    }
}