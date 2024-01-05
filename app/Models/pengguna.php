<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'password',
    ];
    protected $hidden = ['password'];
    public function sentMessages()
    {
        return $this->hasMany(pesanChatting::class, 'pengguna_id');
    }
}
