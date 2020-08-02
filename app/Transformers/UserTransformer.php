<?php

namespace App\Transformers;

use App\User;
use App\Transformers\SchoolTransformer;
use League\Fractal\TransformerAbstract;



class UserTransformer extends TransformerAbstract{

    protected $availableIncludes= [
        'schools'
    ];

    public function transform(User $user){
        

        return[
            'id'          => $user->id,
            'name'        => $user->name,
            'email'       => $user->email,
            'registered'  => $user->created_at->diffForHumans(),
                
        ];
    }


    

    public function includeSchools(User $user)
    {
        $schools = $user->schools()->latestFirst()->get();

        return $this->collection($schools, new SchoolTransformer);
    }
}