<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TipeMobil;
use App\Models\JenisMobil;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TipeMobilController extends Controller
{
    public function index()
    {
        $tipemobil = TipeMobil::with('jenismobil')->get();
        $jenismobil = JenisMobil::all();

        return view('admin.tipe_mobil.index', compact("tipemobil", "jenismobil"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "jenismobil_id" => 'required',
            "tipemobil" => 'required',
        ]);

        $tipemobil = TipeMobil::create([
            "jenismobil_id" => $request->jenismobil_id,
            "tipemobil" => $request->tipemobil,
            "slug" => Str::slug($request->tipemobil)
        ]);

        if ($tipemobil) {
            return redirect()->route('tipemobil.index')->with('berhasil', 'Sub Kategori baru telah ditambahkan');
        } else {
            return redirect()->route('tipemobil.index')->with('gagal', 'Sub Kategori baru gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jenismobil_id' => 'required',
            'tipemobil' => 'required',
        ]);

        $tipemobil = TipeMobil::findOrFail($id);

        $tipemobil->jenismobil_id = $request->jenismobil_id;
        $tipemobil->tipemobil = $request->tipemobil;
        $tipemobil->slug = Str::slug($request->tipemobil);

        $tipemobil->save();

        if ($tipemobil) {
            return redirect()->route('tipemobil.index')->with('berhasil', 'Sub Kategori berhasil diperbarui');
        } else {
            return redirect()->route('tipemobil.index')->with('gagal', 'Sub Kategori gagal diperbarui');
        }
    }

    public function destroy($id)
    {
        $tipemobil = TipeMobil::find($id);
        $tipemobil->delete();

        if ($tipemobil) {
            return redirect()->route('tipemobil.index')->with('berhasil', 'Sub Kategori berhasil dihapus');
        } else {
            return redirect()->route('tipemobil.index')->with('gagal', 'Sub Kategori gagal dihapus');
        }
    }
}
