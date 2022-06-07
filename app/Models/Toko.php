<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    public $table = 'toko';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function loker()
    {
        return $this->hasMany(Admin::class);
    }
}
