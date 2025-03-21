@extends('layouts.dashboard')

@section('page-title', 'Tambah Akun Siswa')

@section('page-actions')
<a href="{{ route('students.index') }}" class="btn btn-sm btn-secondary">
    <i class="bx bx-arrow-back me-1"></i> Kembali
</a>
@endsection

@section('dashboard-content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5 class="card-title mb-0">Form Tambah Akun Siswa</h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-light border-0">
                        <div class="card-body">
                            <h6 class="card-title mb-3">Informasi Akun</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="profile_photo" class="form-label">Foto Profil</label>
                                    <input type="file" class="form-control" id="profile_photo" name="profile_photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-light border-0">
                        <div class="card-body">
                            <h6 class="card-title mb-3">Data Siswa</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nis" class="form-label">NIS <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis') }}" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{ old('nisn') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="birth_date" class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control datepicker" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="class" class="form-label">Kelas <span class="text-danger">*</span></label>
                                    <select class="form-select select2" id="class" name="class" required>
                                        <option value="" selected disabled>Pilih Kelas</option>
                                        <optgroup label="Kelas X">
                                            <option value="X-A" {{ old('class') == 'X-A' ? 'selected' : '' }}>X-A</option>
                                            <option value="X-B" {{ old('class') == 'X-B' ? 'selected' : '' }}>X-B</option>
                                            <option value="X-C" {{ old('class') == 'X-C' ? 'selected' : '' }}>X-C</option>
                                            <option value="X-D" {{ old('class') == 'X-D' ? 'selected' : '' }}>X-D</option>
                                            <option value="X-E" {{ old('class') == 'X-E' ? 'selected' : '' }}>X-E</option>
                                            <option value="X-F" {{ old('class') == 'X-F' ? 'selected' : '' }}>X-F</option>
                                        </optgroup>
                                        <optgroup label="Kelas XI">
                                            <option value="XI-A" {{ old('class') == 'XI-A' ? 'selected' : '' }}>XI-A</option>
                                            <option value="XI-B" {{ old('class') == 'XI-B' ? 'selected' : '' }}>XI-B</option>
                                            <option value="XI-C" {{ old('class') == 'XI-C' ? 'selected' : '' }}>XI-C</option>
                                            <option value="XI-D" {{ old('class') == 'XI-D' ? 'selected' : '' }}>XI-D</option>
                                            <option value="XI-E" {{ old('class') == 'XI-E' ? 'selected' : '' }}>XI-E</option>
                                            <option value="XI-F" {{ old('class') == 'XI-F' ? 'selected' : '' }}>XI-F</option>
                                        </optgroup>
                                        <optgroup label="Kelas XII">
                                            <option value="XII-A" {{ old('class') == 'XII-A' ? 'selected' : '' }}>XII-A</option>
                                            <option value="XII-B" {{ old('class') == 'XII-B' ? 'selected' : '' }}>XII-B</option>
                                            <option value="XII-C" {{ old('class') == 'XII-C' ? 'selected' : '' }}>XII-C</option>
                                            <option value="XII-D" {{ old('class') == 'XII-D' ? 'selected' : '' }}>XII-D</option>
                                            <option value="XII-E" {{ old('class') == 'XII-E' ? 'selected' : '' }}>XII-E</option>
                                            <option value="XII-F" {{ old('class') == 'XII-F' ? 'selected' : '' }}>XII-F</option>
                                        </optgroup>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="academic_year" class="form-label">Tahun Akademik</label>
                                    <select class="form-select" id="academic_year" name="academic_year">
                                        <option value="" selected disabled>Pilih Tahun Akademik</option>
                                        <option value="2022/2023" {{ old('academic_year') == '2022/2023' ? 'selected' : '' }}>2022/2023</option>
                                        <option value="2023/2024" {{ old('academic_year') == '2023/2024' ? 'selected' : '' }}>2023/2024</option>
                                        <option value="2024/2025" {{ old('academic_year') == '2024/2025' ? 'selected' : '' }}>2024/2025</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-light border-0">
                        <div class="card-body">
                            <h6 class="card-title mb-3">Data Orang Tua/Wali</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="parent_name" class="form-label">Nama Orang Tua/Wali</label>
                                    <input type="text" class="form-control" id="parent_name" name="parent_name" value="{{ old('parent_name') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="parent_phone" class="form-label">Nomor Telepon Orang Tua/Wali</label>
                                    <input type="text" class="form-control" id="parent_phone" name="parent_phone" value="{{ old('parent_phone') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('students.index') }}" class="btn btn-outline-secondary me-2">
                    <i class="bx bx-x me-1"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save me-1"></i> Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Select2
        if (typeof $.fn.select2 !== 'undefined') {
            $('.select2').select2({
                theme: 'bootstrap-5'
            });
        }
        
        // Initialize Flatpickr for date pickers
        if (typeof flatpickr !== 'undefined') {
            flatpickr(".datepicker", {
                dateFormat: "Y-m-d",
                allowInput: true,
                altInput: true,
                altFormat: "d M Y"
            });
        }
    });
</script>
@endsection 