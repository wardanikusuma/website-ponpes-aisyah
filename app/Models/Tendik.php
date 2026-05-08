<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tendik extends Authenticatable
{
    use Notifiable;

    protected $table = 'tendik';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'jenjang',
        'nip',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function tugas()
    {
        return $this->hasMany(TugasTendik::class, 'id_tendik');
    }
}
