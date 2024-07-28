<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'from',
        'to',
        'is_current',
        'position',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
