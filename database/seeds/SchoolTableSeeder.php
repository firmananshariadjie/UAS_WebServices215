<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\School::class, 50)->create();

        // $faker = School::create();
        // $userID= DB::table('users')->pluck('id')->toArray();
        // foreach(range(0,10) as $i){
        //     DB::table('schools')->insert([
        //         'user_id' =>  $faker->randomElement($userID),
        //         'kategori' => $faker->randomElements($array=array ('SMA','SMK','MAN')),
        //         'nama_sekolah' => $faker->name,
        //         'alamat' => $faker->address,
        //         'email' =>  $faker->email,
        //         'tlp' =>  $faker->phoneNumber,
        //         'website' =>  $faker->url,
        //         'visi' =>   $faker->text,
        //         'misi' =>  $faker->text
        //     ]);
        // }
    }
}
