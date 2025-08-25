@extends('backend.master')
@section('content')
    <!doctype html>
    <htm lang="en">
        <!--begin::Head-->

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>AdminLTE 4 | Simple Tables</title>
            <!--begin::Primary Meta Tags-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="title" content="AdminLTE 4 | Simple Tables" />
            <meta name="author" content="ColorlibHQ" />
            <meta name="description"
                content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
            <meta name="keywords"
                content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
            <!--end::Primary Meta Tags-->
            <!--begin::Fonts-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
                integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
            <!--end::Fonts-->
            <!--begin::Third Party Plugin(OverlayScrollbars)-->
            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
                integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
            <!--end::Third Party Plugin(OverlayScrollbars)-->
            <!--begin::Third Party Plugin(Bootstrap Icons)-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
                integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
            <!--end::Third Party Plugin(Bootstrap Icons)-->
            <!--begin::Required Plugin(AdminLTE)-->
            <link rel="stylesheet" href="../../../dist/css/adminlte.css" />
            <!--end::Required Plugin(AdminLTE)-->
        </head>
        <!--end::Head-->
        <!--begin::Body-->
        <b class="layout-fixed sidebar-expand-lg bg-body-tertiary">
            <!--begin::App Wrapper-->
            <div class="app-wrapper">
                <!--begin::Sidebar-->
                <!--end::Sidebar-->
                <!--begin::App Main-->
                <main class="app-main">
                    <!--begin::App Content Header-->
                    <div class="app-content-header">
                        <!--begin::Container-->
                        <div class="container-fluid">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="mb-0">Weekly Human List</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                        <li class="breadcrumb-item"><a href="/admin/dashboard/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Weekly Human List</li>
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
                                <div class="col-md-12">
                                    <!-- /.card -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h3 class="card-title">Manage Today Human</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="text-success">SL</th>
                                                        <th class="text-success">name</th>
                                                        <th class="text-success">Father Name</th>
                                                        <th class="text-success">Mother Name</th>
                                                        <th class="text-success">NID No</th>
                                                        <th class="text-success">Date of birth</th>
                                                        <th class="text-success">Age</th>
                                                        <th class="text-success">Email</th>
                                                        <th class="text-success">Blood</th>
                                                        <th class="text-success">Phone</th>
                                                        <th class="text-success">Gender</th>
                                                        <th class="text-success">Address</th>
                                                        <th class="text-success">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($weeklyHumans as $human)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $human->name }}</td>
                                                            <td>{{ $human->father_name }}</td>
                                                            <td>{{ $human->mother_name }}</td>
                                                            <td>{{ $human->nid }}</td>
                                                            <td>{{ $human->dob }}</td>
                                                            <td>{{ $human->age }}</td>
                                                            <td>{{ $human->email }}</td>
                                                            <td>{{ $human->blood }}</td>
                                                            <td>{{ $human->phone }}</td>
                                                            <td>{{ $human->gender }}</td>
                                                            <td>{{ $human->address }}</td>
                                                            <td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">

                                                                    {{-- Edit --}}
                                                                    <a href="{{ url('/admin/human-list/edit/' . $human->id) }}"
                                                                        class="btn btn-sm btn-outline-primary">
                                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                                    </a>

                                                                    {{-- Delete --}}
                                                                    <a href="{{ url('/admin/human-list/delete/' . $human->id) }}"
                                                                        class="btn btn-sm btn-outline-danger">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </a>

                                                                    {{-- শুধু Active হলে Profile দেখাবে --}}
                                                                    @if ($human->status == 1)
                                                                        <a href="{{ url('/admin/human/profile/' . $human->id) }}"
                                                                            class="btn btn-sm btn-outline-success">
                                                                            <i class="fa fa-user"></i>
                                                                        </a>
                                                                    @endif

                                                                    {{-- Toggle Active/Inactive --}}
                                                                    <form
                                                                        action="{{ url('/admin/human-list/toggle-status/' . $human->id) }}"
                                                                        method="POST" class="m-0 p-0">
                                                                        @csrf
                                                                        <div class="form-check form-switch"
                                                                            style="transform: scale(1.2);">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                onchange="this.form.submit()"
                                                                                {{ $human->status ? 'checked' : '' }}>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::App Content-->
                @endsection
