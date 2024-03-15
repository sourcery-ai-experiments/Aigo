<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0; overflow-y: auto; /* Membuat bagian lainnya dapat digulir */
        }

        .background-image {
            background-image: url('{{ asset('asset/page1.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 56px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background-color: rgba(255, 255, 255, 1.0); /* Warna latar belakang container login dengan transparansi */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container p {
            margin-top: 10px;
            text-align: center;
            font-size: 12px;
        }

    </style>
</head>
<body>
@include('navbar')
<div class="background-image">
    <div class="container">
        <h2>Login</h2>
        <div class="row d-flex justify-content-center">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('loginError')}}
                    </div>
                @endif
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <p>Belum memiliki akun? <a href="/register">Daftar sekarang</a></p>
        </div>
    </div>
</div>

</body>
</html>
