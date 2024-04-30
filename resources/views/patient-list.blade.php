<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('/asset/svg/logo.svg') }}" />
    <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/css/dashboardAdmin.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>List Pasien</title>
    <style>
        
    </style>
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