<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\KontenBerita;
use App\Models\KontenEskul;
use App\Models\KontenKurikulum;
use App\Models\KontenPrestasi;
use App\Models\KontenUmum;
use App\Models\KontenYayasan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    public function edit($section)
    {
        $data = null;
        switch ($section) {
            case 'yayasan':
                $data = KontenYayasan::first() ?? new KontenYayasan();
                break;
            case 'berita':
                $data = KontenBerita::latest()->get();
                break;
            case 'prestasi':
                $data = KontenPrestasi::latest()->get();
                break;
            case 'eskul':
                $data = KontenEskul::latest()->get();
                break;
            case 'kurikulum':
                $data = KontenKurikulum::latest()->get();
                break;
            case 'umum':
                $data = KontenUmum::first() ?? new KontenUmum();
                break;
            default:
                abort(404);
        }

        return view("superadmin.konten.$section", compact('data', 'section'));
    }

    public function update(Request $request, $section)
    {
        switch ($section) {
            case 'yayasan':
                $validated = $request->validate([
                    'nama_kepala_yayasan' => 'required|string|max:150',
                    'quotes_kepala_yayasan' => 'nullable|string',
                    'sambutan_kepala_yayasan' => 'nullable|string',
                    'deskripsi_kepala_yayasan' => 'nullable|string',
                ]);
                $content = KontenYayasan::first() ?? new KontenYayasan();
                $content->fill($validated);
                if ($request->hasFile('foto_kepala_yayasan')) {
                    $content->foto_kepala_yayasan = $request->file('foto_kepala_yayasan')->store('konten', 'public');
                }
                $content->save();
                break;

            case 'berita':
                $validated = $request->validate([
                    'judul' => 'required|string|max:200',
                    'penulis' => 'required|string|max:100',
                    'isi' => 'required|string',
                    'gambar' => 'nullable|image|max:2048',
                ]);
                
                $data = [
                    'judul' => $validated['judul'],
                    'penulis' => $validated['penulis'],
                    'narasi' => $validated['isi'],
                    'slug' => Str::slug($validated['judul']) . '-' . rand(1000, 9999),
                    'tanggal' => date('Y-m-d'),
                ];

                if ($request->hasFile('gambar')) {
                    $data['foto'] = $request->file('gambar')->store('berita', 'public');
                }
                
                if ($request->id) {
                    $item = KontenBerita::findOrFail($request->id);
                    $item->update($data);
                } else {
                    KontenBerita::create($data);
                }
                break;

            case 'prestasi':
                $validated = $request->validate([
                    'nama_prestasi' => 'required|string|max:200',
                    'kategori' => 'required|string',
                    'tahun' => 'required|integer',
                    'deskripsi' => 'nullable|string',
                    'gambar' => 'nullable|image|max:2048',
                ]);

                $data = [
                    'judul' => $validated['nama_prestasi'],
                    'kategori' => $validated['kategori'],
                    'tahun' => $validated['tahun'],
                    'deskripsi' => $validated['deskripsi'],
                    'tanggal' => date('Y-m-d'),
                ];

                if ($request->hasFile('gambar')) {
                    $data['foto'] = $request->file('gambar')->store('prestasi', 'public');
                }
                
                if ($request->id) {
                    $item = KontenPrestasi::findOrFail($request->id);
                    $item->update($data);
                } else {
                    KontenPrestasi::create($data);
                }
                break;

            case 'eskul':
                $validated = $request->validate([
                    'nama_eskul' => 'required|string|max:100',
                    'deskripsi' => 'nullable|string',
                    'gambar' => 'nullable|image|max:2048',
                ]);

                $data = [
                    'nama_eskul' => $validated['nama_eskul'],
                    'deskripsi' => $validated['deskripsi'],
                    'jenis' => $validated['nama_eskul'], // fallback
                ];

                if ($request->hasFile('gambar')) {
                    $data['gambar'] = $request->file('gambar')->store('eskul', 'public');
                }
                
                if ($request->id) {
                    $item = KontenEskul::findOrFail($request->id);
                    $item->update($data);
                } else {
                    KontenEskul::create($data);
                }
                break;

            case 'kurikulum':
                $validated = $request->validate([
                    'nama_kurikulum' => 'required|string|max:150',
                    'target_capaian' => 'nullable|string',
                    'deskripsi' => 'nullable|string',
                    'urutan' => 'nullable|integer',
                ]);

                $data = [
                    'nama_kurikulum' => $validated['nama_kurikulum'],
                    'judul' => $validated['nama_kurikulum'],
                    'deskripsi' => $validated['deskripsi'],
                    'target_capaian' => $validated['target_capaian'],
                    'urutan' => $validated['urutan'] ?? 0,
                    'lembaga' => 'Aisyah',
                ];
                
                if ($request->id) {
                    $item = KontenKurikulum::findOrFail($request->id);
                    $item->update($data);
                } else {
                    KontenKurikulum::create($data);
                }
                break;

            case 'umum':
                $validated = $request->validate([
                    'alamat' => 'nullable|string',
                    'email' => 'nullable|email',
                    'no_telp' => 'nullable|string',
                    'facebook' => 'nullable|url',
                    'instagram' => 'nullable|url',
                    'youtube' => 'nullable|url',
                    'ppdb_bank_name' => 'nullable|string|max:100',
                    'ppdb_bank_account' => 'nullable|string|max:50',
                    'ppdb_bank_owner' => 'nullable|string|max:150',
                    'ppdb_nominal' => 'nullable|string|max:50',
                ]);
                $content = KontenUmum::first() ?? new KontenUmum();
                $content->fill($validated);
                $content->save();
                break;

            default:
                abort(404);
        }

        return back()->with('success', "Konten $section berhasil diperbarui.");
    }

    public function destroy($section, $id)
    {
        switch ($section) {
            case 'berita':
                KontenBerita::findOrFail($id)->delete();
                break;
            case 'prestasi':
                KontenPrestasi::findOrFail($id)->delete();
                break;
            case 'eskul':
                KontenEskul::findOrFail($id)->delete();
                break;
            case 'kurikulum':
                KontenKurikulum::findOrFail($id)->delete();
                break;
            default:
                abort(404);
        }

        return back()->with('success', "Item $section berhasil dihapus.");
    }
}
