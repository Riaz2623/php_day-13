<?php


namespace App\classes;


class User
{
    protected $user =[];

    public function getAllUser()
    {
        $this->user = [
            0=>[
                'name' => 'Riaz',
                'mobile' =>'1245',
                'location' =>'lalbag'
            ],
            1=>[
        'name' => 'Himel',
        'mobile' =>'1245',
        'location' =>'lalbag'
    ]
            ];
    }

}