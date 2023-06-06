<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    // satuan memiliki banyak barang
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
