<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Human Information</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
  @include('frontend.include.style')
</head>
<body>
  <div class="card">
    <h1>Human Management Information</h1>
    <h2>রেজিস্ট্রেশন ফর্ম</h2>
    <p class="lead">অনুগ্রহ করে নিচের তথ্যগুলো পূরণ করুন।</p>

    <form id="sampleForm" action="{{url('/data-store')}}" method="POST" novalidate enctype="multipart/form-data">
      @csrf
      <div class="row row-cols-1 row-cols-md-2 g-3">
        <div class="col">
          <label for="name" class="form-label">নাম <span class="small text-danger">*</span></label>
          <input id="name" name="name" type="text" class="form-control" placeholder="আপনার পুরো নাম" required />
        </div>

        <div class="col">
          <label for="father_name" class="form-label">পিতার নাম <span class="small text-danger">*</span></label>
          <input id="father_name" name="father_name" type="text" class="form-control" placeholder="আপনার পিতার নাম" required />
        </div>

        <div class="col">
          <label for="mother_name" class="form-label">মাতার নাম <span class="small text-danger">*</span></label>
          <input id="mother_name" name="mother_name" type="text" class="form-control" placeholder="আপনার মাতার নাম" required />
        </div>
        
        <div class="col">
         <label for="nid" class="form-label">জাতীয় পরিচয়পত্র / জন্ম নিবন্ধন <span class="small text-danger">*</span></label>
         <input id="nid" name="nid" type="text" class="form-control" placeholder="NID বা জন্ম নিবন্ধন নম্বর" required />

        </div>

        <div class="col">
          <label for="dob" class="form-label">জন্ম তারিখ <span class="small text-danger">*</span></label>
          <input id="dob" name="dob" type="date" class="form-control" required />
        </div>

        <div class="col">
          <label for="age" class="form-label">বয়স <span class="small text-danger">*</span></label>
          <input id="age" name="age" type="text" class="form-control" placeholder="বয়স" readonly />
        </div>

        <div class="col">
          <label for="email" class="form-label">ইমেইল <span class="small text-danger"></span></label>
          <input id="email" name="email" type="email" class="form-control" placeholder="example@mail.com" />
        </div>

        <div class="col">
          <label for="blood" class="form-label">রক্তের গ্রুপ <span class="small text-danger">*</span></label>
          <select id="blood" name="blood" class="form-select" required>
            <option value="">-- নির্বাচন করুন --</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>

        <div class="col">
          <label for="phone" class="form-label">মোবাইল নাম্বার <span class="small text-danger">*</span></label>
          <input id="phone" name="phone" type="tel" class="form-control" placeholder="+8801XXXXXXXXX" required />
        </div>

        <div class="col-12">
          <label for="address" class="form-label">ঠিকানা</label>
          <textarea id="address" name="address" rows="3" class="form-control" placeholder="গ্রাম, ইউনিয়ন, উপজেলা , জেলা"></textarea>
        </div>

        <div class="col-12">
          <label class="form-label d-block">লিঙ্গ</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked />
            <label class="form-check-label" for="male">পুরুষ</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
            <label class="form-check-label" for="female">নারী</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="other" value="other" />
            <label class="form-check-label" for="other">অন্যান্য</label>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <label for="profession" class="form-label">পেশা</label>
          <select id="profession" name="profession" class="form-select">
            <option value="">-- নির্বাচন করুন --</option>
            <option value="student">ছাত্রী / ছাত্র</option>
            <option value="developer">ওয়েব ডেভেলপার</option>
            <option value="business">ব্যবসায়ী</option>
            <option value="other">অন্যান্য</option>
          </select>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="agree" required />
            <label class="form-check-label" for="agree">আমি নীতিমালা মেনে চলি</label>
          </div>
        </div>

        <div class="col-12 d-flex justify-content-between align-items-center">
          <small class="text-muted">সব তথ্য সত্যিকারের হওয়া উচিত।</small>
          <button type="submit" class="btn btn-primary">সাবমিট</button>
        </div>

      </div>
    </form>
  </div>

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
</body>
</html>

