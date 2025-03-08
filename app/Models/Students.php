<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Students extends Authenticatable
{
    use HasFactory;
    protected $table = 'students';
    
    protected $guard = 'student';

    protected $guarded = [] ;

    protected function casts(): array
    {
        return [
           
            'password' => 'hashed',
        ];
    }
}
