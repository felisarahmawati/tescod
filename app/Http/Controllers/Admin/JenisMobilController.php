<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\JenisMobil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\JenisMobil as ModelsJenisMobil;

class JenisMobilController extends Controller
{
    public function index()
    {
        $jenismobil = JenisMobil::get();

        return view('admin.jenis_mobil.index', compact("jenismobil"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mobil' => 'required',
        ]);

        $jenismobil = JenisMobil::create([
            'nama_mobil' => $request->nama_mobil,
            'slug' => Str::slug($request->nama_mobil),
        ]);

        if ($jenismobil) {
            return redirect()->route('jenismobil.index')->with('berhasil', 'Kategori baru telah ditambahkan');
        } else {
            return redirect()->route('jenismobil.index')->with('gagal', 'Kategori baru gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_mobil' => 'required',
        ]);

        $jenismobil = JenisMobil::findOrFail($id);

        $updateData = [
            'nama_mobil' => $request->nama_mobil,
            'slug' => Str::slug($request->nama_mobil),
        ];

        $jenismobil->update($updateData);

        if ($jenismobil) {
            return redirect()->route('jenismobil.index')->with('berhasil', 'Kategori berhasil diperbarui');
        } else {
            return redirect()->route('jenismobil.index')->with('gagal', 'Kategori gagal diperbarui');
        }
    }

    public function destroy($id)
    {

        $jenismobil = JenisMobil::find($id);
        $jenismobil->delete();

        if ($jenismobil) {
            return redirect()->route('jenismobil.index')->with('berhasil', 'Kategori berhasil dihapus');
        } else {
            return redirect()->route('jenismobil.index')->with('gagal', 'Kategori gagal dihapus');
        }
    }
}
