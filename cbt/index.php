<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>CBT SMAN 1 Sunggal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #0d6efd, #6ea8fe);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      background-color: #ffffff;
      color: #333;
      text-align: center;
    }
    .logo {
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
    }
    .btn-custom {
      width: 100%;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="card col-md-4">
    <img src="assets/img/logo.png" class="logo" alt="Logo">
    <h3>Selamat Datang di CBT</h3>
    <h5>SMAN 1 Sunggal</h5>
    <hr>
    <a href="auth/login.php?role=siswa" class="btn btn-primary btn-custom">Masuk sebagai Siswa</a>
    <a href="auth/login.php?role=admin" class="btn btn-secondary btn-custom">Masuk sebagai Admin / Guru</a>
  </div>
</body>
</html>
