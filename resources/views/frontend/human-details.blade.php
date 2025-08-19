<!doctype html>
<html lang="bn">
<head>
    <meta charset="utf-8" />
    <title>Human Information - ডিটেইলস</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4 text-center">Human Details</h3>
        <table class="table table-bordered">
            <tr><th>নাম</th><td>{{ $human->name }}</td></tr>
            <tr><th>পিতার নাম</th><td>{{ $human->father_name }}</td></tr>
            <tr><th>মাতার নাম</th><td>{{ $human->mother_name }}</td></tr>
            <tr><th>NID</th><td>{{ $human->nid }}</td></tr>
            <tr><th>জন্ম তারিখ</th><td>{{ $human->dob }}</td></tr>
            <tr><th>বয়স</th><td>{{ $human->age }}</td></tr>
            <tr><th>ইমেইল</th><td>{{ $human->email }}</td></tr>
            <tr><th>ফোন</th><td>{{ $human->phone }}</td></tr>
            <tr><th>রক্তের গ্রুপ</th><td>{{ $human->blood }}</td></tr>
            <tr><th>ঠিকানা</th><td>{{ $human->address }}</td></tr>
            <tr><th>লিঙ্গ</th><td>{{ $human->gender }}</td></tr>
            <tr><th>পেশা</th><td>{{ $human->profession }}</td></tr>
        </table>
        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
    </div>
</div>
</body>
</html>
