<?php

namespace App\Models;

use App\Models\TipeMobil;
use App\Models\JenisMobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    public function jenismobil()
    {
        return $this->belongsTo(JenisMobil::class,"jenismobil_id", "id");
    }

    public function tipemobil()
    {
        return $this->belongsTo(TipeMobil::class,"tipemobil_id", "id");
    }
}
