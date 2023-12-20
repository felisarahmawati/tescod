<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mobil;
use App\Models\TipeMobil;
use App\Models\JenisMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        $jenismobil = JenisMobil::all();
        $tipemobil = TipeMobil::all();

        return view("admin.mobil.index", compact("mobil", "jenismobil", "tipemobil"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "jenismobil_id" => 'required',
            "tipemobil_id" => 'required',
            "gambar" => 'required|mimes:jpg,jpeg,png',
            'nomor_plat' => 'required',
            "harga" => 'required',
        ], [
            'jenismobil_id.required' => 'Jenis Mobil harus diisi',
            'tipemobil_id.required' => 'Tipe Mobil harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'nomor_plat.required' => 'Nomor Plat harus diisi',
            'harga.required' => 'Harga harus diisi',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarmobilPath = $request->file('gambar')->store('Gambarmobil', 'public');
        } else {
            // Tangani situasi jika tidak ada file yang diunggah
            return back()->with(['gagal' => 'Tidak ada file yang diunggah!']);
        }

        $mobil = Mobil::create([
            "jenismobil_id" => $request->jenismobil_id,
            "tipemobil_id" => $request->tipemobil_id,
            "gambar" => $gambarmobilPath,
            "nomor_plat" => $request->nomor_plat,
            "harga" => $request->harga,
        ]);

        if ($mobil) {
            return redirect()->route('mobil.index')->with('berhasil', 'Mobil baru telah ditambahkan');
        } else {
            return redirect()->route('mobil.index')->with('gagal', 'Mobil baru gagal ditambahkan');
        }
    }
}
