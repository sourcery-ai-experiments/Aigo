<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
  <title>Admin Dashboard</title>
</head>
<body>
  @include('admin-sidebar')
  <div class="container-flex">


    <div class="m-5 user-table">
      <table id="example" class="display table">
          <thead>
              <tr>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Action</th>
              </tr>
          </thead>

          
          <tbody>
            @foreach ($data as $item)
              <tr>
                  <td>{{ $item->username }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->gender }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->telepon }}</td>
                  {{-- <td>{{ $item->updated_at->format('d F Y') }}</td> --}}
                  <td>
                    <a href="/user/{{ $item->id }}" class="material-symbols-outlined me-2" href="">edit</a>
                    <a href="/delete/user/{{ $item->id }}" class="material-symbols-outlined"  id="delete-icon">delete_forever</a>
                  </td>
              </tr>
            @endforeach
          </tbody>
       
      </table>
    </div>
  </div>
  

  


  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $('#example').DataTable();
  </script>
</body>
</html>