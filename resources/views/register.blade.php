<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 shadow p-4 rounded">
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
                        <label for="user_role" class="form-label">User Role:</label>
                        <select name="user_role" id="user_role" class="form-select">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

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

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net
