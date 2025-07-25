<?php

namespace App\Models;
use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangMasuk extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int,string>
     */
    protected $fillable = [
        'jumlah',
        'kategori',
        'tanggal',
        'deskripsi',
    ];

    /**
     * The attributes that should be cast.
     * 
     * @return array<string, string>
     */
    protected $casts = [
        'jumlah' => 'decimal:2', // Cast jumlah to decimal with 2 digits
        'tanggal' => 'date', // Cast tanggal to date
    ];

}
