@extends('layouts.app')

@section('title', 'Form Pendaftaran SD/SMP/SMA')

@section('content')
<div class="bg-slate-50 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden border border-slate-100">
            <div class="p-10 bg-gradient-to-r from-indigo-700 to-purple-700 text-white relative">
                <div class="relative z-10">
                    <h2 class="text-4xl font-black tracking-tight mb-2">Formulir Pendaftaran</h2>
                    <p class="text-indigo-100 text-lg opacity-90 font-medium">Lengkapi seluruh data calon santri sesuai dengan dokumen resmi.</p>
                </div>
                <div class="absolute right-0 top-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
            </div>
            
            <form action="{{ route('ppdb.daftar.sekolah') }}" method="POST" enctype="multipart/form-data" class="p-10 space-y-12">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-300 text-red-700 p-6 rounded-2xl">
                        <h4 class="font-bold text-lg mb-3">Pendaftaran gagal dikirim</h4>
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <!-- Jenjang Selection -->
                <div class="bg-indigo-50/50 p-8 rounded-3xl border border-indigo-100">
                    <label class="block text-sm font-black text-indigo-900 uppercase tracking-widest mb-4">Pilih Jenjang Pendidikan</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach($openJenjangs as $j)
                        <label class="flex-grow md:flex-grow-0">
                            <input type="radio" name="jenjang" value="{{ $j }}" required class="hidden peer" onchange="updateRaporNote('{{ $j }}')">
                            <div class="px-8 py-4 bg-white rounded-2xl border-2 border-slate-100 text-center font-black text-lg cursor-pointer transition-all peer-checked:border-indigo-600 peer-checked:bg-indigo-600 peer-checked:text-white shadow-sm hover:shadow-md">
                                {{ $j }}
                            </div>
                        </label>
                        @endforeach
                    </div>
                </div>

                <script>
                    function updateRaporNote(jenjang) {
                        const note = document.getElementById('rapor-note');
                        const numericFields = document.getElementById('rapor-numeric-fields');
                        const fileField = document.getElementById('rapor-file-field');
                        const input1 = document.querySelector('input[name="nilai_rapor1"]');
                        const input2 = document.querySelector('input[name="nilai_rapor2"]');

                        if (jenjang === 'SMP') {
                            note.innerText = '(Rapor kelas 5 semester 2 dan rapor kelas 6 semester 1)';
                            numericFields.classList.remove('hidden');
                            fileField.classList.remove('hidden');
                            input1.disabled = false;
                            input2.disabled = false;
                            input1.required = true;
                            input2.required = true;
                        } else if (jenjang === 'SMA') {
                            note.innerText = '(Rapor kelas 8 semester 2 dan rapor kelas 9 semester 1)';
                            numericFields.classList.remove('hidden');
                            fileField.classList.remove('hidden');
                            input1.disabled = false;
                            input2.disabled = false;
                            input1.required = true;
                            input2.required = true;
                        } else {
                            note.innerText = '';
                            numericFields.classList.add('hidden');
                            fileField.classList.add('hidden');
                            input1.required = false;
                            input2.required = false;
                            input1.value = '';
                            input2.value = '';
                            input1.disabled = true;
                            input2.disabled = true;
                        }
                    }

                    document.addEventListener('DOMContentLoaded', function () {
                        const selectedJenjang = document.querySelector('input[name="jenjang"]:checked');

                        if (selectedJenjang) {
                            updateRaporNote(selectedJenjang.value);
                        } else {
                            const input1 = document.querySelector('input[name="nilai_rapor1"]');
                            const input2 = document.querySelector('input[name="nilai_rapor2"]');

                            if (input1 && input2) {
                                input1.disabled = true;
                                input2.disabled = true;
                            }
                        }
                    });
                </script>

                <!-- 1. DATA UTAMA -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Data Calon Santri</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2">
                            <label class="block text-sm font-bold text-slate-600 mb-2">Nama Lengkap (Sesuai Akta)</label>
                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" pattern="[A-Za-zÀ-ÿ\s.'-]+" oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s.'-]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Email Aktif</label>
                            <input type="email" name="email" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">NISN</label>
                            <input type="text" name="nisn" value="{{ old('nisn') }}" inputmode="numeric" maxlength="10" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">NIK</label>
                            <input type="text" name="nik" value="{{ old('nik') }}" inputmode="numeric" maxlength="16" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. KK</label>
                            <input type="text" name="no_kk" value="{{ old('no_kk') }}" inputmode="numeric" maxlength="16" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. Reg. Akta Kelahiran</label>
                            <input type="text" name="no_registrasi_akta" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all appearance-none">
                                <option value="1">Laki-laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" max="{{ date('Y-m-d') }}" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tinggal Bersama</label>
                            <select name="tinggal_bersama" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all appearance-none">
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Asrama">Asrama</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Anak Ke-</label>
                            <input type="number" name="anak_ke" min="1" step="1" oninput="if (this.value < 1) this.value = ''" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Jumlah Saudara</label>
                            <input type="number" name="jumlah_saudara" min="0" step="1" onkeydown="if(event.key === '-' || event.key === '+') event.preventDefault();" oninput="if (this.value < 0) this.value = ''" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 2. SEKOLAH ASAL -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-school"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Sekolah Asal</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Nama Sekolah Asal</label>
                            <input type="text" name="nama_sekolah_asal" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-emerald-100 focus:border-emerald-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">NPSN Sekolah Asal</label>
                            <input type="text" name="npsn_sekolah_asal" value="{{ old('npsn_sekolah_asal') }}" inputmode="numeric" maxlength="8" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-emerald-100 focus:border-emerald-600 outline-none transition-all">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 3. ALAMAT LENGKAP -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Alamat Domisili</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-3">
                            <label class="block text-sm font-bold text-slate-600 mb-2">Alamat Jalan / Blok</label>
                            <textarea name="alamat" rows="2" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all"></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">RT/RW</label>
                            <input type="text" name="rt_rw" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Dusun</label>
                            <input type="text" name="dusun" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Kelurahan</label>
                            <input type="text" name="kelurahan" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Kecamatan</label>
                            <input type="text" name="kecamatan" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Kabupaten</label>
                            <input type="text" name="kabupaten" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Provinsi</label>
                            <input type="text" name="provinsi" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amber-100 focus:border-amber-600 outline-none transition-all">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 4. DATA ORANG TUA -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- AYAH -->
                    <div class="space-y-8">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                                <i class="fas fa-male"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-800 tracking-tight">Data Ayah</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-600 mb-2">Nama Lengkap Ayah</label>
                                <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" pattern="[A-Za-zÀ-ÿ\s.'-]+" oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s.'-]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-600 mb-2">NIK Ayah</label>
                                <input type="text" name="nik_ayah" value="{{ old('nik_ayah') }}" inputmode="numeric" maxlength="16" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">No. HP Ayah</label>
                                    <input type="text" name="no_hp_ayah" value="{{ old('no_hp_ayah') }}" inputmode="numeric" pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">Pendidikan</label>
                                    <select name="pendidikan_ayah" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all appearance-none">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ayah" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">Penghasilan</label>
                                    <input type="text" name="penghasilan_ayah" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IBU -->
                    <div class="space-y-8">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                                <i class="fas fa-female"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-800 tracking-tight">Data Ibu</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-600 mb-2">Nama Lengkap Ibu</label>
                                <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" pattern="[A-Za-zÀ-ÿ\s.'-]+" oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s.'-]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-rose-100 focus:border-rose-600 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-600 mb-2">NIK Ibu</label>
                                <input type="text" name="nik_ibu" value="{{ old('nik_ibu') }}" inputmode="numeric" maxlength="16" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-rose-100 focus:border-rose-600 outline-none transition-all">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">No. HP Ibu</label>
                                    <input type="text" name="no_hp_ibu" value="{{ old('no_hp_ibu') }}" inputmode="numeric" pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-rose-100 focus:border-rose-600 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">Pendidikan</label>
                                    <select name="pendidikan_ibu" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all appearance-none">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ibu" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-rose-100 focus:border-rose-600 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-600 mb-2">Penghasilan</label>
                                    <input type="text" name="penghasilan_ibu" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-rose-100 focus:border-rose-600 outline-none transition-all">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 5. KESEHATAN & FISIK -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Kesehatan & Fisik</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Golongan Darah</label>
                            <select name="golongan_darah" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all appearance-none">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Berat Badan (kg)</label>
                            <input type="number" name="berat_badan" min="1" step="0.1" oninput="if (this.value < 1) this.value = ''" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-cyan-100 focus:border-cyan-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tinggi Badan (cm)</label>
                            <input type="number" name="tinggi_badan" min="1" step="0.1" oninput="if (this.value < 1) this.value = ''" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-cyan-100 focus:border-cyan-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Ukuran Pakaian</label>
                            <select name="ukuran_pakaian" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all appearance-none">
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                            </select>
                        </div>
                        <div class="lg:col-span-4">
                            <label class="block text-sm font-bold text-slate-600 mb-2">Riwayat Penyakit (Opsional)</label>
                            <input type="text" name="riwayat_penyakit" placeholder="Contoh: Asma, Alergi Kacang" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-cyan-100 focus:border-cyan-600 outline-none transition-all">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 6. BANTUAN & AKADEMIK -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Data Tambahan & Prestasi</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. KKS</label>
                            <input type="text" name="no_kks" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. KPS</label>
                            <input type="text" name="no_kps" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. KIP</label>
                            <input type="text" name="no_kip" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                        </div>
                        <div id="rapor-numeric-fields" class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                            <div>
                                <label class="block text-sm font-bold text-slate-600 mb-2">Nilai Rapor Smt 1</label>
                                <input type="number" step="0.01" name="nilai_rapor1" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-600 mb-2">Nilai Rapor Smt 2</label>
                                <input type="number" step="0.01" name="nilai_rapor2" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-600 mb-2">Prestasi yang Pernah Diraih</label>
                        <textarea name="prestasi" rows="3" placeholder="Sebutkan prestasi akademik/non-akademik..." class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all"></textarea>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 7. UPLOAD BERKAS -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-file-upload"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Upload Berkas Pendukung</h3>
                    </div>
                    
                    <p class="text-slate-500 text-sm italic">* Format file: PDF, JPG, JPEG, PNG. Maksimal 2MB per file.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Akta Kelahiran</label>
                            <input type="file" name="file_akta_lahir" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Kartu Keluarga (KK)</label>
                            <input type="file" name="file_kk" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Dokumen NISN</label>
                            <input type="file" name="file_nisn" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">KTP Ayah</label>
                            <input type="file" name="file_ktp_ayah" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">KTP Ibu</label>
                            <input type="file" name="file_ktp_ibu" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div id="rapor-file-field" class="bg-slate-50 p-6 rounded-3xl border border-slate-100 hidden">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Rapor 2 Semester Terakhir <span id="rapor-note" class="text-indigo-600"></span></label>
                            <input type="file" name="file_rapor" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Piagam Prestasi (Opsional)</label>
                            <input type="file" name="file_prestasi" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Ijazah / SKL</label>
                            <input type="file" name="file_ijazah" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                    </div>

                    <div class="mt-12 bg-indigo-50 p-8 rounded-[2rem] border border-indigo-100">
                        <div class="flex flex-col md:flex-row gap-8 items-start">
                            <div class="flex-grow space-y-4">
                                <h4 class="text-xl font-black text-indigo-900">Informasi Pembayaran PPDB</h4>
                                <p class="text-indigo-700 text-sm leading-relaxed">
                                    Silakan melakukan transfer biaya pendaftaran sebesar <span class="font-black text-lg">Rp {{ $kontenUmum->ppdb_nominal ?? '0' }}</span> ke rekening berikut:
                                </p>
                                <div class="bg-white/60 p-6 rounded-2xl border border-indigo-200 inline-block">
                                    <p class="text-sm text-indigo-500 font-bold uppercase tracking-wider mb-1">Tujuan Transfer</p>
                                    <p class="text-2xl font-black text-indigo-900">{{ $kontenUmum->ppdb_bank_name ?? '-' }}</p>
                                    <p class="text-xl font-bold text-indigo-700">{{ $kontenUmum->ppdb_bank_account ?? '-' }}</p>
                                    <p class="text-sm font-medium text-indigo-600">a.n {{ $kontenUmum->ppdb_bank_owner ?? '-' }}</p>
                                </div>
                            </div>
                            <div class="w-full md:w-80 space-y-4">
                                <label class="block text-sm font-black text-indigo-900 uppercase tracking-widest">Upload Bukti Bayar</label>
                                <div class="bg-white p-6 rounded-2xl border-2 border-dashed border-indigo-200">
                                    <input type="file" name="file_bukti_bayar" required class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-600 file:text-white hover:file:bg-indigo-700">
                                    <p class="text-[10px] text-slate-400 mt-2 italic">Pastikan foto bukti transfer terlihat jelas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PERSETUJUAN -->
                <div class="pt-10">
                    <div class="bg-slate-900 text-white p-8 rounded-[2rem] shadow-2xl relative overflow-hidden">
                        <div class="relative z-10">
                            <h4 class="text-xl font-bold mb-4">Pernyataan Persetujuan</h4>
                            <label class="flex gap-4 cursor-pointer group">
                                <input type="checkbox" name="persetujuan" value="1" required class="mt-1.5 w-6 h-6 rounded-lg bg-white/20 border-white/30 text-indigo-500 focus:ring-indigo-500">
                                <span class="text-slate-300 leading-relaxed group-hover:text-white transition-colors">
                                    Saya menyatakan dengan sesungguhnya bahwa seluruh data yang saya isikan dalam formulir ini adalah benar dan sesuai dengan dokumen aslinya. Apabila di kemudian hari ditemukan ketidaksesuaian data, saya bersedia menerima sanksi sesuai ketentuan Pondok Pesantren Aisyah Samawa.
                                </span>
                            </label>
                            <button type="submit" class="mt-10 w-full py-6 bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-black text-xl rounded-2xl shadow-xl shadow-indigo-500/20 hover:scale-[1.02] active:scale-[0.98] transition-all uppercase tracking-widest">
                                Kirim Pendaftaran Sekarang
                            </button>
                        </div>
                        <div class="absolute right-0 bottom-0 w-32 h-32 bg-white/5 rounded-full -mb-10 -mr-10"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
