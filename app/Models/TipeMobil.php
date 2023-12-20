<?php

namespace App\Models;

use App\Models\JenisMobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipeMobil extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    public function jenismobil()
    {
        return $this->belongsTo(JenisMobil::class,"jenismobil_id", "id");
    }
}
