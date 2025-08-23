@extends('backend.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                <!-- Profile Header -->
                <div class="bg-primary text-white text-center py-5"
                     style="background: linear-gradient(135deg, #0061ff, #60efff);">
                    <h3 class="fw-bold mb-0">{{ Auth::user()->name }}</h3>
                    <p class="mb-1">{{ Auth::user()->email }}</p>
                    <small>Member since: {{ Auth::user()->created_at->format('d M, Y') }}</small>
                </div>

                <!-- Body -->
                <div class="card-body text-center">
                    <h5 class="fw-bold mb-3">Profile Details</h5>
                    <div class="text-start px-4">
                        <table class="table table-borderless">
                            <tr>
                                <th class="text-muted">Full Name:</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Email:</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Last Updated:</th>
                                <td>{{ Auth::user()->updated_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Edit Button -->
                    <div class="mt-3">
                        <a href="{{ url('/admin/profile-settings') }}" 
                           class="btn btn-gradient w-50 rounded-pill py-2 shadow">
                            <i class="fas fa-edit"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Extra CSS --}}
<style>
    .btn-gradient {
        background: linear-gradient(90deg, #0061ff, #60efff);
        color: white;
        border: none;
        transition: 0.3s;
    }
    .btn-gradient:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }
</style>
@endsection
