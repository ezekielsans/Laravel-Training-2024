<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    const name = 'Danniel Libor';
    const address = 'Philippines';
    const email = 'dan@mail.test';

    public function getData()
    {
        return [
            'name' => fake()->name()
        ];
    }
}
