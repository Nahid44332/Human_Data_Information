@extends('backend.master')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{ $humanscount }}</h3>
                            <p>All Mamber</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="{{ url('/admin/human-list') }}"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 3-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ $monthlyHumans }}</h3>
                            <p>Monthly Registrations</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="{{ url('/admin/monthly-humans') }}"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 3-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ $weeklyHumans }}</h3>
                            <p>Weekly Registrations</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="{{ url('/admin/weekly-humans') }}"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 3-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ $todayHuman }}</h3>
                            <p>Today Registrations</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="{{ url('/admin/today-humans') }}"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <!-- Start col -->
                <!-- Start col -->
                <div class="col-lg-7 connectedSortable">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Human Chart Value</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="revenueChart" height="320"></canvas>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.Start col -->
                <!-- Start col -->
                <div class="col-lg-5 connectedSortable">
                    <div class="card text-white bg-primary bg-gradient border-primary mb-4">
                        <div class="card-header border-0">
                            <h3 class="card-title">Sales Value</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-lte-toggle="card-collapse">
                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="world-map" style="height: 220px"></div>
                        </div>
                        <div class="card-footer border-0">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div id="sparkline-1" class="text-dark"></div>
                                    <div class="text-white">Visitors</div>
                                </div>
                                <div class="col-4 text-center">
                                    <div id="sparkline-2" class="text-dark"></div>
                                    <div class="text-white">Online</div>
                                </div>
                                <div class="col-4 text-center">
                                    <div id="sparkline-3" class="text-dark"></div>
                                    <div class="text-white">Sales</div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                </div>
                <!-- /.Start col -->
            </div>
            <!-- Right Side (Progress Bar Section) -->
            <div class="col-lg-5 connectedSortable">
                <div class="card text-white bg-success border-0 mb-4">
                    <div class="card-header border-0">
                        <h3 class="card-title">Human Data Progress</h3>
                    </div>
                    <div class="card-body bg-light text-dark">
                        <p>Total Members</p>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" style="width: {{ ($humanscount / 100) * 100 }}%">
                                {{ $humanscount }}
                            </div>
                        </div>

                        <p>Monthly Registrations</p>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" style="width: {{ ($monthlyHumans / 100) * 100 }}%">
                                {{ $monthlyHumans }}
                            </div>
                        </div>

                        <p>Weekly Registrations</p>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: {{ ($weeklyHumans / 50) * 100 }}%">
                                {{ $weeklyHumans }}
                            </div>
                        </div>

                        <p>Today Registrations</p>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: {{ ($todayHuman / 20) * 100 }}%">
                                {{ $todayHuman }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
@push('script')
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');

        const revenueChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Today', 'This Week', 'This Month', 'Total', 'Male', 'Female'],
                datasets: [{
                    label: 'Human Data',
                    data: [
                        {{ $todayHuman }},
                        {{ $weeklyHumans }},
                        {{ $monthlyHumans }},
                        {{ $humanscount }},
                        {{ $maleCount }},
                        {{ $femaleCount }}
                    ],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)', // Today
                        'rgba(255, 206, 86, 0.6)', // Weekly
                        'rgba(75, 192, 192, 0.6)', // Monthly
                        'rgba(153, 102, 255, 0.6)', // Total
                        'rgba(255, 99, 132, 0.6)', // Male
                        'rgba(255, 159, 64, 0.6)' // Female
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
