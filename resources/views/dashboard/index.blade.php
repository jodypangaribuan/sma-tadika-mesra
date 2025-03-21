@extends('layouts.dashboard')

@section('page-title', 'Dashboard')

@section('page-actions')
<div class="d-flex align-items-center">
    <div class="dropdown me-2">
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bx bx-export me-1"></i> Export
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="exportDropdown">
            <li><a class="dropdown-item" href="#"><i class="bx bxs-file-pdf me-2 text-danger"></i>PDF</a></li>
            <li><a class="dropdown-item" href="#"><i class="bx bxs-file-excel me-2 text-success"></i>Excel</a></li>
            <li><a class="dropdown-item" href="#"><i class="bx bxs-file me-2 text-primary"></i>CSV</a></li>
        </ul>
    </div>
    <button type="button" class="btn btn-sm btn-primary d-flex align-items-center" id="datePicker">
        <i class="bx bx-calendar me-1"></i> <span id="currentDate">{{ date('d M Y') }}</span>
    </button>
</div>
@endsection

@section('dashboard-content')
<!-- Welcome Section with Motto -->
<div class="card border-0 shadow-sm mb-4 overflow-hidden">
    <div class="card-body p-0">
        <div class="row g-0">
            <div class="col-md-8 p-4">
                <div class="d-flex flex-column h-100 justify-content-center">
                    <h4 class="fw-bold mb-2">Selamat Datang di Sistem Informasi Manajemen SMA</h4>
                    <p class="text-muted mb-3">Rangkuman data per tanggal {{ date('d F Y') }}</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle p-2 me-3">
                            <i class="bx bxs-quote-alt-left text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-semibold">"Tut Wuri Handayani"</h6>
                            <small class="text-muted">Di belakang memberi dorongan</small>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-sm btn-primary me-2">
                            <i class="bx bx-refresh me-1"></i> Refresh Data
                        </button>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="bx bx-cog me-1"></i> Pengaturan
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-primary d-flex align-items-center justify-content-center p-4">
                <div class="text-center text-white">
                    <img src="https://ui-avatars.com/api/?name=SMA&background=0066b3&color=fff&bold=true&size=80" alt="Logo SMA" class="img-fluid rounded mb-3" style="border: 5px solid rgba(255,255,255,0.2)">
                    <h5 class="mb-1">SMA Negeri</h5>
                    <p class="mb-0 small opacity-75">Pendidikan Berkualitas untuk Masa Depan Cemerlang</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row g-4 mb-4">
    <!-- Students Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                        <i class="bx bxs-user-detail fs-1 text-primary"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Siswa</h6>
                        <h3 class="mb-0 fw-bold">{{ $totalStudents }}</h3>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('students.index') }}" class="btn btn-sm btn-outline-primary w-100">
                        <i class="bx bx-show me-1"></i> Lihat Data Siswa
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Teachers Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-info bg-opacity-10 rounded-3 p-3 me-3">
                        <i class="bx bxs-user-badge fs-1 text-info"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Guru</h6>
                        <h3 class="mb-0 fw-bold">{{ $totalTeachers }}</h3>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('teachers.index') }}" class="btn btn-sm btn-outline-info w-100">
                        <i class="bx bx-show me-1"></i> Lihat Data Guru
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Classes Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-success bg-opacity-10 rounded-3 p-3 me-3">
                        <i class="bx bxs-school fs-1 text-success"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Kelas</h6>
                        <h3 class="mb-0 fw-bold">18</h3>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-sm btn-outline-success w-100">
                        <i class="bx bx-show me-1"></i> Lihat Data Kelas
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Events Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-box bg-warning bg-opacity-10 rounded-3 p-3 me-3">
                        <i class="bx bxs-calendar-event fs-1 text-warning"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Acara Bulan Ini</h6>
                        <h3 class="mb-0 fw-bold">3</h3>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-sm btn-outline-warning w-100">
                        <i class="bx bx-show me-1"></i> Lihat Jadwal
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Access Section -->
<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title mb-0">Menu Utama</h5>
            </div>
            <div class="card-body p-4">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('students.index') }}" class="text-decoration-none">
                            <div class="card h-100 bg-light border-0 hover-shadow">
                                <div class="card-body text-center py-4">
                                    <i class="bx bxs-user-detail fs-1 text-primary mb-3"></i>
                                    <h6 class="mb-1 text-dark">Data Siswa</h6>
                                    <p class="small text-muted mb-0">Kelola data siswa</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('students.create') }}" class="text-decoration-none">
                            <div class="card h-100 bg-light border-0 hover-shadow">
                                <div class="card-body text-center py-4">
                                    <i class="bx bx-user-plus fs-1 text-success mb-3"></i>
                                    <h6 class="mb-1 text-dark">Pendaftaran Siswa</h6>
                                    <p class="small text-muted mb-0">Tambah siswa baru</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('teachers.index') }}" class="text-decoration-none">
                            <div class="card h-100 bg-light border-0 hover-shadow">
                                <div class="card-body text-center py-4">
                                    <i class="bx bxs-user-badge fs-1 text-info mb-3"></i>
                                    <h6 class="mb-1 text-dark">Data Guru</h6>
                                    <p class="small text-muted mb-0">Kelola data guru</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('teachers.create') }}" class="text-decoration-none">
                            <div class="card h-100 bg-light border-0 hover-shadow">
                                <div class="card-body text-center py-4">
                                    <i class="bx bx-user-plus fs-1 text-warning mb-3"></i>
                                    <h6 class="mb-1 text-dark">Pendaftaran Guru</h6>
                                    <p class="small text-muted mb-0">Tambah guru baru</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add school calendar and announcement section -->
<div class="row g-4 mt-4">
    <div class="col-md-7">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Kalender Akademik</h5>
                <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
            </div>
            <div class="card-body p-4">
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-0 py-3 d-flex border-top-0">
                        <div class="me-3 text-center">
                            <div class="badge bg-primary text-white fw-bold py-2 px-3">APR<br>20</div>
                        </div>
                        <div>
                            <h6 class="mb-1">Ujian Akhir Semester</h6>
                            <p class="mb-1 small text-muted">Ujian akan berlangsung untuk seluruh siswa kelas X-XII</p>
                            <span class="badge bg-light text-dark">08:00 - 12:00</span>
                        </div>
                    </div>
                    <div class="list-group-item px-0 py-3 d-flex">
                        <div class="me-3 text-center">
                            <div class="badge bg-info text-white fw-bold py-2 px-3">MEI<br>2</div>
                        </div>
                        <div>
                            <h6 class="mb-1">Rapat Orang Tua Siswa</h6>
                            <p class="mb-1 small text-muted">Pembahasan hasil ujian dan persiapan kenaikan kelas</p>
                            <span class="badge bg-light text-dark">09:00 - 11:00</span>
                        </div>
                    </div>
                    <div class="list-group-item px-0 py-3 d-flex">
                        <div class="me-3 text-center">
                            <div class="badge bg-success text-white fw-bold py-2 px-3">MEI<br>15</div>
                        </div>
                        <div>
                            <h6 class="mb-1">Pengumuman Kelulusan</h6>
                            <p class="mb-1 small text-muted">Pengumuman kelulusan untuk siswa kelas XII</p>
                            <span class="badge bg-light text-dark">10:00 - 12:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Pengumuman Terkini</h5>
                <button class="btn btn-sm btn-outline-primary">Semua</button>
            </div>
            <div class="card-body p-4">
                <div class="d-flex align-items-center p-3 bg-primary bg-opacity-10 rounded mb-3">
                    <div class="icon-box bg-primary rounded-circle p-2 me-3">
                        <i class="bx bx-news text-white"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Penerimaan Siswa Baru</h6>
                        <p class="mb-0 small">Pendaftaran dibuka mulai 1 Juni 2024</p>
                    </div>
                </div>
                <div class="d-flex align-items-center p-3 bg-info bg-opacity-10 rounded mb-3">
                    <div class="icon-box bg-info rounded-circle p-2 me-3">
                        <i class="bx bx-calendar-check text-white"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Libur Hari Raya</h6>
                        <p class="mb-0 small">Sekolah libur tanggal 5-10 Mei 2024</p>
                    </div>
                </div>
                <div class="d-flex align-items-center p-3 bg-success bg-opacity-10 rounded">
                    <div class="icon-box bg-success rounded-circle p-2 me-3">
                        <i class="bx bx-trophy text-white"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Prestasi Olimpiade Sains</h6>
                        <p class="mb-0 small">Selamat kepada Budi Santoso yang meraih juara 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .hover-shadow {
        transition: all 0.3s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .icon-box {
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Date picker
        if (typeof flatpickr !== 'undefined') {
            flatpickr("#datePicker", {
                dateFormat: "d M Y",
                defaultDate: "today",
                onChange: function(selectedDates, dateStr) {
                    document.getElementById('currentDate').textContent = dateStr;
                }
            });
            
            flatpickr(".datepicker", {
                dateFormat: "Y-m-d",
            });
        }
        
        // Academic Progress Chart using ApexCharts
        if (typeof ApexCharts !== 'undefined') {
            const academicOptions = {
                series: [{
                    name: 'IPA',
                    data: [78, 82, 80, 85, 83, 87, 88, 86, 84, 83, 85, 88]
                }, {
                    name: 'IPS',
                    data: [75, 78, 77, 79, 80, 81, 82, 81, 83, 82, 84, 85]
                }],
                chart: {
                    height: 300,
                    type: 'area',
                    toolbar: {
                        show: false
                    },
                    fontFamily: 'Inter, sans-serif',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                },
                yaxis: {
                    min: 70,
                    max: 100,
                    title: {
                        text: 'Nilai Rata-rata'
                    }
                },
                tooltip: {
                    x: {
                        format: 'MM'
                    },
                },
                colors: ['#0066b3', '#1e88e5'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.4,
                        opacityTo: 0.1,
                        stops: [0, 90, 100]
                    }
                },
                grid: {
                    borderColor: '#f1f1f1',
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                }
            };
            
            if (document.querySelector("#academicChartContainer")) {
                const academicChart = new ApexCharts(document.querySelector("#academicChartContainer"), academicOptions);
                academicChart.render();
            }
            
            // Student Distribution Chart
            const distributionOptions = {
                series: [320, 280, 250],
                chart: {
                    type: 'donut',
                    height: 300,
                    fontFamily: 'Inter, sans-serif',
                },
                labels: ['Kelas X', 'Kelas XI', 'Kelas XII'],
                colors: ['#0066b3', '#1e88e5', '#64b5f6'],
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Total Siswa',
                                    formatter: function (w) {
                                        return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                    }
                                }
                            }
                        }
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            height: 250
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                legend: {
                    position: 'bottom',
                },
                dataLabels: {
                    formatter: function (val, opts) {
                        return opts.w.globals.seriesTotals[opts.seriesIndex];
                    },
                }
            };
            
            if (document.querySelector("#studentDistributionChart")) {
                const distributionChart = new ApexCharts(document.querySelector("#studentDistributionChart"), distributionOptions);
                distributionChart.render();
            }
        }
        
        // Show notifications with SweetAlert2
        document.querySelector('.btn-primary').addEventListener('click', function() {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Data Diperbarui!',
                    text: 'Data dashboard telah diperbarui.',
                    icon: 'success',
                    confirmButtonColor: '#0066b3',
                    confirmButtonText: 'Oke'
                });
            }
        });
    });
</script>
@endsection 