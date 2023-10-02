<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $incrementing = true;
    protected $keyType = 'int';

    // Mass Assigment
    protected $fillable = [
        'nama_produk',
        'harga_beli',
        'harga_jual',
        'stok_barang',
        'gambar',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
