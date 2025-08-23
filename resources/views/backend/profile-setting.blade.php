@extends('backend.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">⚙️ Update Profile (Name, Email & Password)</h4>
                </div>

                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{url('/admin/update-profile')}}" method="POST">
                        @csrf

                        {{-- Name Section --}}
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" 
                                   name="name" 
                                   value="{{ old('name', Auth::user()->name) }}" 
                                   class="form-control" required>
                        </div>

                        {{-- Email Section --}}
                        <div class="form-group mb-3">
                            <label for="new_email" class="form-label">New Email</label>
                            <input type="email" id="new_email" 
                                   name="new_email" 
                                   value="{{ old('new_email', Auth::user()->email) }}" 
                                   class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="new_email_confirmation" class="form-label">Confirm New Email</label>
                            <input type="email" id="new_email_confirmation" 
                                   name="new_email_confirmation" 
                                   value="{{ old('new_email_confirmation', Auth::user()->email) }}" 
                                   class="form-control" required>
                        </div>

                        <hr>

                        {{-- Password Section --}}
                        <div class="form-group mb-3 position-relative">
                            <label for="current_password" class="form-label">Current Password</label>
                            <div class="input-group">
                                <input type="password" id="current_password" name="current_password" class="form-control" required>
                                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#current_password">
                                    👁️
                                </button>
                            </div>
                        </div>

                        <div class="form-group mb-3 position-relative">
                            <label for="new_password" class="form-label">New Password</label>
                            <div class="input-group">
                                <input type="password" id="new_password" name="new_password" class="form-control">
                                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#new_password">
                                    👁️
                                </button>
                            </div>
                            <div id="password-strength" class="mt-2 small"></div>
                        </div>

                        <div class="form-group mb-3 position-relative">
                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control">
                                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#new_password_confirmation">
                                    👁️
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                    </form>
                </div>

                <div class="card-footer text-center small text-muted">
                    To update email, name or password, current password is required 🔐
                </div>
            </div>

        </div>
    </div>
</div>

{{-- JS Section --}}
<script>
    // Show/Hide Password Toggle
    document.querySelectorAll('.toggle-password').forEach(btn => {
        btn.addEventListener('click', function () {
            const target = document.querySelector(this.getAttribute('data-target'));
            if (target.type === "password") {
                target.type = "text";
                this.textContent = "🙈";
            } else {
                target.type = "password";
                this.textContent = "👁️";
            }
        });
    });

    // Password Strength Meter
    const passwordField = document.getElementById('new_password');
    const strengthText = document.getElementById('password-strength');

    passwordField.addEventListener('input', function () {
        const val = passwordField.value;
        let strength = "";
        let strengthColor = "red";

        if (val.length >= 8 && /[A-Z]/.test(val) && /[0-9]/.test(val) && /[^A-Za-z0-9]/.test(val)) {
            strength = "Strong ✅";
            strengthColor = "green";
        } else if (val.length >= 6 && /[A-Z]/.test(val) && /[0-9]/.test(val)) {
            strength = "Medium ⚠️";
            strengthColor = "orange";
        } else if (val.length > 0) {
            strength = "Weak ❌";
            strengthColor = "red";
        }

        strengthText.textContent = strength;
        strengthText.style.color = strengthColor;
    });
</script>
@endsection
