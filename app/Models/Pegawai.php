<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function surat(){
        $this->belongsToMany(Surat::class);
    }
}
