<?php

namespace App\Models;

use App\Models\bookIssues;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded =[];
    public function issues()
    {
        return $this->hasMany(bookIssues::class);
    }
}
