@extends('layouts.app')

@section('title', 'Form Pendaftaran PAUD')

@section('content')
<div class="bg-slate-50 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden border border-slate-100">
            <div class="p-10 bg-gradient-to-r from-purple-700 to-fuchsia-700 text-white relative">
                <div class="relative z-10">
                    <h2 class="text-4xl font-black tracking-tight mb-2">Pendaftaran PAUD</h2>
                    <p class="text-purple-100 text-lg opacity-90 font-medium">Lengkapi data pendaftaran anak usia dini dengan teliti.</p>
                </div>
                <div class="absolute right-0 top-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
            </div>
            
            <form action="{{ route('ppdb.daftar.paud') }}" method="POST" enctype="multipart/form-data" class="p-10 space-y-12">
                @csrf
                
                <!-- 1. DATA UTAMA -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-child"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Data Anak</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2">
                            <label class="block text-sm font-bold text-slate-600 mb-2">Nama Lengkap Anak</label>
                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" pattern="[A-Za-zÀ-ÿ\s.'-]+" oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s.'-]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Email Orang Tua</label>
                            <input type="email" name="email" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">NIK Anak (Sesuai KK)</label>
                            <input type="text" name="nik" value="{{ old('nik') }}" inputmode="numeric" maxlength="16" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. KK</label>
                            <input type="text" name="no_kk" value="{{ old('no_kk') }}" inputmode="numeric" maxlength="16" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">No. Reg. Akta Kelahiran</label>
                            <input type="text" name="no_registrasi_akta" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all appearance-none">
                                <option value="1">Laki-laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" max="{{ date('Y-m-d') }}" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-600 mb-2">Tinggal Bersama</label>
                            <input type="text" name="tinggal_bersama" value="Orang Tua" required class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 outline-none transition-all">
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

                <!-- 2. ALAMAT -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-800 tracking-tight">Alamat Domisili</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-3">
                            <label class="block text-sm font-bold text-slate-600 mb-2">Alamat Lengkap</label>
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

                <!-- 3. DATA ORANG TUA -->
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
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <!-- 4. KESEHATAN -->
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
                        <input type="text" name="riwayat_penyakit" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-cyan-100 focus:border-cyan-600 outline-none transition-all">
                    </div>
                </div>
            </div>

            <hr class="border-slate-100">

            <!-- 5. UPLOAD BERKAS -->
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
                        <input type="file" name="file_akta_lahir" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                    </div>
                    <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Kartu Keluarga (KK)</label>
                        <input type="file" name="file_kk" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                    </div>
                    <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                        <label class="block text-sm font-bold text-slate-700 mb-2">KTP Ayah</label>
                        <input type="file" name="file_ktp_ayah" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                    </div>
                    <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                        <label class="block text-sm font-bold text-slate-700 mb-2">KTP Ibu</label>
                        <input type="file" name="file_ktp_ibu" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                    </div>
                </div>

                <div class="mt-12 bg-purple-50 p-8 rounded-[2rem] border border-purple-100">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="flex-grow space-y-4">
                            <h4 class="text-xl font-black text-purple-900">Informasi Pembayaran PPDB PAUD</h4>
                            <p class="text-purple-700 text-sm leading-relaxed">
                                Silakan melakukan transfer biaya pendaftaran sebesar <span class="font-black text-lg">Rp {{ $kontenUmum->ppdb_nominal ?? '0' }}</span> ke rekening berikut:
                            </p>
                            <div class="bg-white/60 p-6 rounded-2xl border border-purple-200 inline-block">
                                <p class="text-sm text-purple-500 font-bold uppercase tracking-wider mb-1">Tujuan Transfer</p>
                                <p class="text-2xl font-black text-purple-900">{{ $kontenUmum->ppdb_bank_name ?? '-' }}</p>
                                <p class="text-xl font-bold text-purple-700">{{ $kontenUmum->ppdb_bank_account ?? '-' }}</p>
                                <p class="text-sm font-medium text-purple-600">a.n {{ $kontenUmum->ppdb_bank_owner ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="w-full md:w-80 space-y-4">
                            <label class="block text-sm font-black text-purple-900 uppercase tracking-widest">Upload Bukti Bayar</label>
                            <div class="bg-white p-6 rounded-2xl border-2 border-dashed border-purple-200">
                                <input type="file" name="file_bukti_bayar" required class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-600 file:text-white hover:file:bg-purple-700">
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
                                <input type="checkbox" name="persetujuan" value="1" required class="mt-1.5 w-6 h-6 rounded-lg bg-white/20 border-white/30 text-fuchsia-500 focus:ring-fuchsia-500">
                                <span class="text-slate-300 leading-relaxed group-hover:text-white transition-colors">
                                    Saya menyatakan bahwa data yang diisi adalah benar dan dapat dipertanggungjawabkan sesuai ketentuan Pondok Pesantren Aisyah Samawa.
                                </span>
                            </label>
                            <button type="submit" class="mt-10 w-full py-6 bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white font-black text-xl rounded-2xl shadow-xl shadow-fuchsia-500/20 hover:scale-[1.02] active:scale-[0.98] transition-all uppercase tracking-widest">
                                Kirim Pendaftaran PAUD
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
