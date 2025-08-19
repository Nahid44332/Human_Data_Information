@extends('backend.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit Human Info</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Human Info</li>
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
                            <div class="card-title">Edit Human Data</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{ url('/admin/human-list/update/'.$humans->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="name" class="form-label">Name*</label>
                                        <input type="text" class="form-control" value="{{ $humans->name }}"
                                            name="name" id="name" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="father_name" class="form-label">Father Name*</label>
                                        <input type="text" class="form-control" value="{{ $humans->father_name }}"
                                            name="father_name" id="father_name" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="mother_name" class="form-label">Mother Name*</label>
                                        <input type="text" class="form-control" value="{{ $humans->mother_name }}"
                                            name="mother_name" id="mother_name" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="nid" class="form-label">NID*</label>
                                        <input type="number" class="form-control" value="{{ $humans->nid }}"
                                            name="nid" id="nid" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="dob" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" value="{{ $humans->dob }}"
                                            name="dob" id="dob" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="age" class="form-label">AGE</label>
                                        <input type="text" class="form-control" value="{{ $humans->age }}"
                                            name="age" id="age" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" value="{{ $humans->email }}"
                                            name="email" id="email" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="blood" class="form-label">রক্তের গ্রুপ <span
                                                class="small text-danger">*</span></label>
                                        <select id="blood" name="blood" class="form-select">
                                            <option selected disabled>-- নির্বাচন করুন --</option>
                                            <option value="A+" @if ($humans->blood == 'A+') Selected @endif>A+
                                            </option>
                                            <option value="A-" @if ($humans->blood == 'A-') Selected @endif>A-
                                            </option>
                                            <option value="B+" @if ($humans->blood == 'B+') Selected @endif>B+
                                            </option>
                                            <option value="B-" @if ($humans->blood == 'B-') Selected @endif>B-
                                            </option>
                                            <option value="O+" @if ($humans->blood == 'O+') Selected @endif>O+
                                            </option>
                                            <option value="O-" @if ($humans->blood == 'O-') Selected @endif>O-
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="profession" class="form-label">পেশা</label>
                                        <select id="profession" name="profession" class="form-select">
                                            <option selected disabled>-- নির্বাচন করুন --</option>
                                            <option value="student" @if ($humans->profession == 'student') Selected @endif>ছাত্রী
                                                / ছাত্র</option>
                                            <option value="developer" @if ($humans->profession == 'developer') Selected @endif>
                                                ওয়েব ডেভেলপার</option>
                                            <option value="business" @if ($humans->profession == 'business') Selected @endif>
                                                ব্যবসায়ী</option>
                                            <option value="other" @if ($humans->profession == 'other') Selected @endif>
                                                অন্যান্য</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label d-block">লিঙ্গ</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male" {{ $humans->gender == 'male' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="male">পুরুষ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female" {{ $humans->gender == 'female' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="female">নারী</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="other"
                                                value="other" {{ $humans->gender == 'other' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="other">অন্যান্য</label>
                                        </div>

                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address" class="form-control" id="address">{{ $humans->address }}</textarea>
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
                document.getElementById('age').value = age + " বছর";
            } else {
                document.getElementById('age').value = '';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
@endpush
