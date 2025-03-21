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
<!-- Welcome Section -->
<div class="card bg-primary text-white mb-4">
    <div class="card-body py-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-1">Selamat Datang, Administrator!</h5>
                <p class="mb-0">Berikut adalah ringkasan data SMA Anda per tanggal {{ date('d F Y') }}</p>
            </div>
            <div class="d-none d-md-block">
                <img src="{{ asset('https://cdn.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.css') }}" alt="Illustration" style="height: 80px;">
            </div>
        </div>
    </div>
</div>

<!-- Overview Cards -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card h-100 border-start border-5 border-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-semibold mb-2">Total Siswa</h6>
                        <div class="d-flex align-items-center">
                            <h3 class="fw-bold mb-0 me-2">850</h3>
                            <span class="badge bg-success-subtle text-success small rounded-pill px-2 py-1">
                                <i class='bx bx-up-arrow-alt'></i> 5.27%
                            </span>
                        </div>
                        <small class="text-muted">Dari bulan lalu</small>
                    </div>
                    <div class="icon-box bg-primary-subtle text-primary rounded-4">
                        <i class="bx bxs-user-detail"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card h-100 border-start border-5 border-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-semibold mb-2">Total Guru</h6>
                        <div class="d-flex align-items-center">
                            <h3 class="fw-bold mb-0 me-2">45</h3>
                            <span class="badge bg-success-subtle text-success small rounded-pill px-2 py-1">
                                <i class='bx bx-up-arrow-alt'></i> 2.5%
                            </span>
                        </div>
                        <small class="text-muted">Dari bulan lalu</small>
                    </div>
                    <div class="icon-box bg-success-subtle text-success rounded-4">
                        <i class="bx bxs-user-badge"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 6px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card h-100 border-start border-5 border-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-semibold mb-2">Kehadiran</h6>
                        <div class="d-flex align-items-center">
                            <h3 class="fw-bold mb-0 me-2">92%</h3>
                            <span class="badge bg-success-subtle text-success small rounded-pill px-2 py-1">
                                <i class='bx bx-up-arrow-alt'></i> 1.2%
                            </span>
                        </div>
                        <small class="text-muted">Dari bulan lalu</small>
                    </div>
                    <div class="icon-box bg-warning-subtle text-warning rounded-4">
                        <i class="bx bxs-calendar-check"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 6px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card h-100 border-start border-5 border-danger">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-semibold mb-2">Pembayaran SPP</h6>
                        <div class="d-flex align-items-center">
                            <h3 class="fw-bold mb-0 me-2">Rp120jt</h3>
                            <span class="badge bg-success-subtle text-success small rounded-pill px-2 py-1">
                                <i class='bx bx-up-arrow-alt'></i> 12%
                            </span>
                        </div>
                        <small class="text-muted">Dari bulan lalu</small>
                    </div>
                    <div class="icon-box bg-danger-subtle text-danger rounded-4">
                        <i class="bx bx-money"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 6px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row mb-4">
    <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Perkembangan Akademik</h5>
                <div>
                    <select class="form-select form-select-sm" id="academicPeriod">
                        <option value="year">Tahun Ini</option>
                        <option value="lastYear">Tahun Lalu</option>
                        <option value="allTime">Semua Waktu</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div id="academicChartContainer" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card h-100">
            <div class="card-header">
                <h5 class="card-title">Distribusi Siswa</h5>
            </div>
            <div class="card-body d-flex flex-column justify-content-center">
                <div id="studentDistributionChart" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activities & Upcoming Events -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Aktivitas Terbaru</h5>
                <button class="btn btn-sm btn-outline-primary d-flex align-items-center">
                    <i class="bx bx-refresh me-1"></i> Refresh
                </button>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush">
                    <div class="list-group-item p-3 border-start border-4 border-primary">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-semibold">Rapat Guru dan Wali Murid</h6>
                            <small class="text-muted">3 jam yang lalu</small>
                        </div>
                        <p class="mb-1">Rapat evaluasi kinerja akademik semester ganjil telah selesai dilaksanakan.</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs me-2">
                                <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                    KS
                                </span>
                            </div>
                            <small class="text-muted">Kepala Sekolah</small>
                        </div>
                    </div>
                    <div class="list-group-item p-3 border-start border-4 border-success">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-semibold">Pembayaran SPP Kelas XII</h6>
                            <small class="text-muted">5 jam yang lalu</small>
                        </div>
                        <p class="mb-1">85% siswa kelas XII telah melunasi pembayaran SPP bulan ini.</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs me-2">
                                <span class="avatar-title rounded-circle bg-success-subtle text-success">
                                    BD
                                </span>
                            </div>
                            <small class="text-muted">Bendahara</small>
                        </div>
                    </div>
                    <div class="list-group-item p-3 border-start border-4 border-info">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-semibold">Penambahan Peralatan Lab Biologi</h6>
                            <small class="text-muted">1 hari yang lalu</small>
                        </div>
                        <p class="mb-1">10 unit mikroskop baru telah ditambahkan ke lab biologi.</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs me-2">
                                <span class="avatar-title rounded-circle bg-info-subtle text-info">
                                    KL
                                </span>
                            </div>
                            <small class="text-muted">Kepala Lab</small>
                        </div>
                    </div>
                    <div class="list-group-item p-3 border-start border-4 border-warning">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-semibold">Penyerahan Rapor Semester</h6>
                            <small class="text-muted">2 hari yang lalu</small>
                        </div>
                        <p class="mb-1">Penyerahan rapor semester ganjil telah selesai dilaksanakan dengan lancar.</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs me-2">
                                <span class="avatar-title rounded-circle bg-warning-subtle text-warning">
                                    WK
                                </span>
                            </div>
                            <small class="text-muted">Waka Kurikulum</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center bg-transparent border-top-0">
                <a href="#" class="btn btn-sm btn-link text-decoration-none">Lihat Semua Aktivitas</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Jadwal Mendatang</h5>
                <button class="btn btn-sm btn-outline-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addEventModal">
                    <i class="bx bx-plus me-1"></i> Tambah
                </button>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush">
                    <div class="list-group-item p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-4 text-white p-2 me-3 text-center" style="width: 50px; height: 50px;">
                                <div class="mb-0 small">APR</div>
                                <div class="fw-bold">15</div>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">Ujian Tengah Semester</h6>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="bx bx-time-five me-1"></i> 07:30 - 15:00
                                </small>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="bx bx-map me-1"></i> Semua Ruang Kelas
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-4 text-white p-2 me-3 text-center" style="width: 50px; height: 50px;">
                                <div class="mb-0 small">APR</div>
                                <div class="fw-bold">20</div>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">Lomba Debat Bahasa Inggris</h6>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="bx bx-time-five me-1"></i> 09:00 - 12:00
                                </small>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="bx bx-map me-1"></i> Aula Sekolah
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-danger rounded-4 text-white p-2 me-3 text-center" style="width: 50px; height: 50px;">
                                <div class="mb-0 small">APR</div>
                                <div class="fw-bold">25</div>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-semibold">Rapat Koordinasi Guru</h6>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="bx bx-time-five me-1"></i> 13:00 - 15:00
                                </small>
                                <small class="text-muted d-flex align-items-center">
                                    <i class="bx bx-map me-1"></i> Ruang Rapat
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center bg-transparent border-top-0">
                <a href="#" class="btn btn-sm btn-link text-decoration-none">Lihat Semua Jadwal</a>
            </div>
        </div>
    </div>
</div>

<!-- Add Event Modal -->
<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Tambah Jadwal Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Judul Kegiatan</label>
                        <input type="text" class="form-control" id="eventTitle" placeholder="Masukkan judul kegiatan">
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Tanggal</label>
                        <input type="text" class="form-control datepicker" id="eventDate" placeholder="Pilih tanggal">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="eventStartTime" class="form-label">Waktu Mulai</label>
                            <input type="time" class="form-control" id="eventStartTime">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="eventEndTime" class="form-label">Waktu Selesai</label>
                            <input type="time" class="form-control" id="eventEndTime">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eventLocation" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="eventLocation" placeholder="Masukkan lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="eventDescription" rows="3" placeholder="Masukkan deskripsi kegiatan"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
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
                colors: ['#4361ee', '#6f42c1'],
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
            
            const academicChart = new ApexCharts(document.querySelector("#academicChartContainer"), academicOptions);
            academicChart.render();
            
            // Student Distribution Chart
            const distributionOptions = {
                series: [320, 280, 250],
                chart: {
                    type: 'donut',
                    height: 300,
                    fontFamily: 'Inter, sans-serif',
                },
                labels: ['Kelas X', 'Kelas XI', 'Kelas XII'],
                colors: ['#4361ee', '#6f42c1', '#fd7e14'],
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
            
            const distributionChart = new ApexCharts(document.querySelector("#studentDistributionChart"), distributionOptions);
            distributionChart.render();
        }
        
        // Show notifications with SweetAlert2
        document.querySelector('.btn-outline-primary').addEventListener('click', function() {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Data Diperbarui!',
                    text: 'Data dashboard telah diperbarui.',
                    icon: 'success',
                    confirmButtonColor: '#4361ee',
                    confirmButtonText: 'Oke'
                });
            }
        });
    });
</script>
@endsection 