<!doctype html>
<html lang="bn">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Human Information - অনুসন্ধান</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
    <style>
        body {
            background-color: #f5f7fb;
        }

        .card {
            max-width: 900px;
            margin: 50px auto;
            border-radius: 15px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .search-btn {
            background-color: #198754;
            border: none;
        }

        .search-btn:hover {
            background-color: #157347;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Human Information</h2>

            <!-- সার্চ বার -->
            <form action="{{ url('/human-identify')}}" method="GET">
                <div class="input-group mb-4">
                    <input type="text" name="search" id="search" class="form-control"
                        placeholder="নাম, NID বা ফোন নম্বর লিখুন" required>
                    <button class="btn btn-success text-white" type="submit">Search</button>
                </div>
            </form>


            <!-- রেজাল্ট টেবিল -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>নাম</th>
                            <th>পিতার নাম</th>
                            <th>মাতার নাম</th>
                            <th>NID</th>
                            <th>ফোন</th>
                            <th>রক্তের গ্রুপ</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($humans as $human)
                            <tr>
                                <td>{{ $human->name }}</td>
                                <td>{{ $human->father_name }}</td>
                                <td>{{ $human->mother_name }}</td>
                                <td>{{ $human->nid }}</td>
                                <td>{{ $human->phone }}</td>
                                <td>{{ $human->blood }}</td>
                                <td>
                                    <a href="{{url('human-details/'.$human->id)}}" class="btn btn-success">Details</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">কোনো তথ্য পাওয়া যায়নি</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
