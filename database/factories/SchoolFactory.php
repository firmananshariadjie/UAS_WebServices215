<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(\App\School::class, function (Faker $faker) {


    return [
        'user_id' => factory('App\User')->create()->id,
        'kategori' => $faker->randomElement($array=array ('SMA','SMK','MAN')),
        'nama_sekolah' => $faker->name,
        'alamat' => $faker->address,
        'email' =>  $faker->email,
        'tlp' =>  $faker->phoneNumber,
        'website' =>  $faker->url,
        'visi' =>   $faker->text,
        'misi' =>  $faker->text
        
        
    ];
});




