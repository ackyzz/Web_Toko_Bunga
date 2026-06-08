@extends('layouts.main')

@section('container')
    <section id="finance" class="finance">
        <div class="container">
            <div class="section-title mt-5">
                <h1>Finance</h1>
            </div>
            <div class="row">
                
                <div class="col-4">
                    <div class="card mb-3 status-card shadow-sm" style="border-left: 5px solid #007bff;">
                        <div class="card-body">
                            <div class="card-header fw-bold text-muted">Total</div>
                            <div class="card-body">
                                <h4 class="card-title" style="color: #007bff;">Rp{{ number_format($totalPemasukan, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card mb-3 status-card shadow-sm" style="border-left: 5px solid #28a745;">
                        <div class="card-body">
                            <div class="card-header fw-bold text-muted">Total Keuntungan</div>
                            <div class="card-body">
                                @if ($totalKeuntungan > 0)
                                    <h4 class="card-title text-success">Rp{{ number_format($totalKeuntungan, 0, ',', '.') }}</h4>
                                @else
                                    <h4 class="card-title text-success">Rp0</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card mb-3 status-card shadow-sm" style="border-left: 5px solid #dc3545;">
                        <div class="card-body">
                            <div class="card-header fw-bold text-muted">Total Kerugian</div>
                            <div class="card-body">
                                @if ($totalKeuntungan < 0)
                                    <h4 class="card-title text-danger">Rp{{ number_format(abs($totalKeuntungan), 0, ',', '.') }}</h4>
                                @else
                                    <h4 class="card-title text-danger">Rp0</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card mt-5 shadow-sm">
                                        <div class="card-header fw-bold">Pie Chart Keuangan</div>
                                        <div class="card-body" style="position: relative; height: 360px; overflow: hidden; padding-bottom: 20px;">
                                            <canvas id="chart-pie" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-pie").getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                // Label chart pertama disesuaikan jadi Total
                labels: ["Total", "Total Keuntungan", "Total Kerugian"],
                datasets: [{
                    data: [
                        {{ $totalPemasukan }},
                        {{ $totalKeuntungan > 0 ? $totalKeuntungan : 0 }},
                        {{ $totalKeuntungan < 0 ? abs($totalKeuntungan) : 0 }}
                    ],
                    backgroundColor: [
                        "rgba(0, 123, 255, 0.8)",   // Biru untuk Total
                        "rgba(40, 167, 69, 0.8)",   // Hijau untuk Keuntungan
                        "rgba(220, 53, 69, 0.8)"    // Merah untuk Kerugian
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, 
                legend: {
                    position: 'bottom', 
                    labels: { padding: 15 }
                },
                title: {
                    display: true,
                    text: 'Finance Overview',
                    padding: 10
                },
                layout: {
                    padding: { bottom: 10 }
                }
            }
        });
    </script>
@endsection