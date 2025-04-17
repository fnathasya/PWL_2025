<?php
 
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
 use App\Models\UserModel;
 
 class PenjualanModel extends Model
 {
     use HasFactory;
     protected $table = 't_penjualan';
     protected $primaryKey = 'penjualan_id';
     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = ['user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal'];
 
     //Relasi ke tabel user
     public function user(): BelongsTo
     {
         return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
     }
 
      // Menambahkan method untuk mendapatkan nama
      public function getUsernameAttribute()
      {
          return $this->user->nama ?? null;  // Ambil nama dari relasi user
      }
 }