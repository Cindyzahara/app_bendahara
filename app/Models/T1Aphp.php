<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T1Aphp extends Model
{
    use HasFactory;
    protected $table = "t1aphp";
    protected $primaryKey = "id";
    protected $fillable= [
    'id ', 'tanggal1', 'nama', 'nominal', 'pembayaran1', 'sisa1', 'tanggal2', 'pembayaran2', 'sisa2', 'tanggal3', 'pembayaran3', 'sisa3', 'tanggal4', 'pembayaran4', 'sisa4', 'tanggal5', 'pembayaran5', 'sisa5'];

    protected $appends = ['tanggal1_indo', 'tanggal2_indo', 'tanggal3_indo','tanggal4_indo','tanggal5_indo'];
    public function getTanggal1IndoAttribute()
    {
        if($this->attributes['tanggal1'])
        {
            return Carbon::parse($this->attributes['tanggal1'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
    }

    public function getTanggal2IndoAttribute()
    {
        if($this->attributes['tanggal2'])
        {
            return Carbon::parse($this->attributes['tanggal2'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
    }

    public function getTanggal3IndoAttribute()
    {
        if($this->attributes['tanggal3'])
        {
            return Carbon::parse($this->attributes['tanggal3'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
    }

    public function getTanggal4IndoAttribute()
    {
        if($this->attributes['tanggal4'])
        {
            return Carbon::parse($this->attributes['tanggal4'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
    }

    public function getTanggal5IndoAttribute()
    {
        if($this->attributes['tanggal5'])
        {
            return Carbon::parse($this->attributes['tanggal5'])->translatedFormat('d F Y');
        } else{
            return '-';
        }
    }
}
