@extends('backend.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center py-3">
            <h3 class="mb-0"><i class="fa-solid fa-user me-2"></i> {{ $human->name }}'s Profile</h3>
        </div>
        <div class="card-body p-4">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th width="30%"><i class="fa-solid fa-person me-2 text-primary"></i> Father Name</th>
                        <td>{{ $human->father_name }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-person-dress me-2 text-primary"></i> Mother Name</th>
                        <td>{{ $human->mother_name }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-id-card me-2 text-primary"></i> NID</th>
                        <td>{{ $human->nid }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-calendar-day me-2 text-primary"></i> Date of Birth</th>
                        <td>{{ $human->dob }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-hourglass-half me-2 text-primary"></i> Age</th>
                        <td>{{ $human->age }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-venus-mars me-2 text-primary"></i> Gender</th>
                        <td>{{ $human->gender }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-droplet me-2 text-danger"></i> Blood Group</th>
                        <td>{{ $human->blood }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-phone me-2 text-primary"></i> Phone</th>
                        <td>{{ $human->phone }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-envelope me-2 text-primary"></i> Email</th>
                        <td>{{ $human->email }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-location-dot me-2 text-primary"></i> Address</th>
                        <td>{{ $human->address }}</td>
                    </tr>
                    <tr>
                        <th><i class="fa-solid fa-briefcase me-2 text-primary"></i> Profession</th>
                        <td>{{ $human->profession }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ url('/admin/human-list') }}" class="btn btn-secondary">
                <i class="fa-solid fa-backward"></i> Back
            </a>
            <div>
                <a href="{{ url('/admin/human-list/edit/'.$human->id) }}" class="btn btn-warning">
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                </a>
                <a href="{{ url('/admin/human-list/delete/'.$human->id) }}" 
                   class="btn btn-danger"
                   onclick="return confirm('Are you sure to delete this profile?')">
                    <i class="fa-solid fa-trash"></i> Delete
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
