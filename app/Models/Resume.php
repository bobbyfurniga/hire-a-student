<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{

    protected $fillable = [
      'user_id',
      'resume'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getBasicResumeStructure(string $firstName, string $lastName)
    {
        $resumeStructure = [
            'basic' => [
                'first_name' => $firstName,
                'last_name' => $lastName
            ]
        ];

        return $resumeStructure;
    }

    public static function getResumeStructure()
    {
        $resumeStructure = [
//            'value' => [
            'basic' => [
                'first_name' => [
//                        'label' => '',
//                        'value' => []
                ],
                'last_name' => '',
                'title' => '',
                'phone' => '',
                'date_of_birth' => '',
                'address' => ''
            ],
            'description' => '',
            'education' => [
                'school' => [
                    'institution' => '',
                    'specialization' => '',
                    'type' => '',
                    'city' => '',
                    'start' => '',
                    'end' => ''
                ]
            ],
            'experience' => [
                'job' => [
                    'position' => '',
                    'company' => '',
                    'location' => '',
                    'description' => '',
                    'start_date' => '',
                    'end_date' => ''
                ]
            ],
            'abilities' => [

            ]
//            ]
        ];

        return $resumeStructure;
    }
}
