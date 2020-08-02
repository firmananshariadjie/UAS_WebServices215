<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class School extends Model
{
    protected $fillable = [
        'user_id',
        'kategori',
        'nama_sekolah',
        'alamat' ,
        'website' ,
        'tlp' ,
        'email' ,
        'visi' ,
        'misi' 
    ];

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id','DESC');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
