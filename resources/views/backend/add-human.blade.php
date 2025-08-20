@extends('backend.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Add Human</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Human</li>
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
            <div class="row g-4">
                <!--begin::Col-->
                <div class="col-md-12">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Add Human</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{url('/admin/store-human')}}" method="POST" novalidate enctype="multipart/form-data">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="name" class="form-label">Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" class="form-control" value="" name="name"
                                            id="name" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="father_name" class="form-label">Father Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" class="form-control" value="" name="father_name"
                                            id="father_name" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="mother_name" class="form-label">Mother Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" class="form-control" value="" name="mother_name"
                                            id="mother_name" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="nid" class="form-label">NID<span
                                                class="small text-danger">*</span></label>
                                        <input type="number" class="form-control" value="" name="nid"
                                            id="nid" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="dob" class="form-label">Date Of Birth<span
                                                class="small text-danger">*</span></label>
                                        <input type="date" class="form-control" value="" name="dob"
                                            id="dob" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="age" class="form-label">AGE</label>
                                        <input type="text" class="form-control" value="" name="age"
                                            id="age" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="email" class="form-label">E-mail<span
                                                class="small text-danger">*</span></label>
                                        <input type="email" class="form-control" value="" name="email"
                                            id="email" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="phone" class="form-label">Phone<span
                                                class="small text-danger">*</span></label>
                                        <input id="phone" name="phone" type="tel" class="form-control" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="blood" class="form-label">Blood Group<span
                                                class="small text-danger">*</span></label>
                                        <select id="blood" name="blood" class="form-select">
                                            <option selected disabled>-- Select Blood Group --</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="profession" class="form-label">Profession<span
                                                class="small text-danger">*</span></label>
                                        <select id="profession" name="profession" class="form-select">
                                            <option selected disabled>-- Select Profession --</option>
                                            <option value="student">ছাত্রী/ ছাত্র</option>
                                            <option value="developer">ওয়েব ডেভেলপার</option>
                                            <option value="business">ব্যবসায়ী</option>
                                            <option value="other">অন্যান্য</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label d-block">Gender<span
                                                class="small text-danger">*</span></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male"/>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female"/>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="other"
                                                value="other"/>
                                            <label class="form-check-label" for="other">Other</label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="address" class="form-label">Address<span
                                                class="small text-danger">*</span></label>
                                        <textarea name="address" class="form-control" id="address" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
@push('script')
    <script>
        // জন্ম তারিখ থেকে বয়স গণনা
        document.getElementById('dob').addEventListener('change', function() {
            const dob = new Date(this.value);
            if (!isNaN(dob)) {
                const today = new Date();
                let age = today.getFullYear() - dob.getFullYear();
                const m = today.getMonth() - dob.getMonth();
                if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                    age--;
                }
                document.getElementById('age').value = age;
            } else {
                document.getElementById('age').value = '';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
@endpush
