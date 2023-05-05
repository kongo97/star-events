<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "enabled",
        "description",
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'client_id', 'id');
    }
}
