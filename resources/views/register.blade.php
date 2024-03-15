<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .background-image {
            background-image: url('{{ asset('asset/page1.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 140vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 56px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            margin-bottom: 30px;
            background-color: rgba(255, 255, 255, 1.0); /* Warna latar belakang container login dengan transparansi */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
@include('navbar')
    <div class="background-image">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Register</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="telepon" class="form-label">Telepon:</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="gender" class="form-label">Gender:</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" >Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net
