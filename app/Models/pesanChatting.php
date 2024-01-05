<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanChatting extends Model
{
    use HasFactory;
    protected $fillable = [
        'pengguna_id',
        'pesan',
    ];
    public function sender()
    {
        return $this->belongsTo(pengguna::class, 'pengguna_id');
    }
    
}
