<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    const name = 'Ariel F. Lagata';
    const address = 'Gubat, Sorsogon';
    const email = 'my@email.com';
}
