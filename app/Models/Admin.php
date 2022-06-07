<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $table = 'admin';

    protected $guarded = ['id'];
    protected $with = ['toko'];
    protected $fillable = [
        'email',
        'password'
    ];

    public $timestamps = false;

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }
}
