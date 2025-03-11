<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bookIssues extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
