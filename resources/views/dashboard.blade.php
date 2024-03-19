<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <link href="{{ asset('/asset/admin.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
  <title>Admin Dashboard</title>
</head>
<body>

  <div class="container-flex">

    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="container-flex header-logo p-0">
        <img src="{{ asset('/assets/img/UniShare-logo.png') }}" alt="" style="height: 36px; " >
        <h4 style="color: #F6F7FF" class="ms-2 mt-2"> Aigo </h4>
      </div>

      <div class="dashboard">
        <a href="">
          <button type="button" class="btn-dashboard">Dashboard</button>
        </a>
        
      </div>
      
      <div class="">
        {{-- MENU 1: USER DETAILS --}}
        <div class="menu">
          <aside></aside>
          <h6>User Details</h6>
        </div> <br>

        {{-- SUB-MENU 1: PATIENT INFO --}}
        <div class="btn-group submenu ms-4 ps-2 mt-3 mb-3">
          <span class="material-symbols-outlined"> personal_injury </span>
          <a href="{{ route('showPatient') }}" 
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Patient Info
          </a>
        </div>

        {{-- SUB-MENU 2: DOCTOR INFO --}}
        <div class="btn-group submenu ms-4 ps-2">
          <span class="material-symbols-outlined"> diversity_1 </span>
          <a href="{{ route('dashboard') }}"
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Doctor Info
          </a>
        </div>

        {{-- MENU 2: SETTINGS --}}
        <div class="menu">
          <aside></aside>
          <h6>Settings</h6>
        </div> <br>

        {{-- SUB-MENU 1: MY PROFILE --}}
        <div class="btn-group submenu ms-4 ps-2 mt-2 mb-3">
          <span class="material-symbols-outlined"> settings </span>
          <a href=""
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'"> My Profile
          </a>
        </div>

        {{-- SUB-MENU 2: HISTORY --}}
        <div class="btn-group submenu ms-4 ps-2">
          <span class="material-symbols-outlined"> history </span>
          <a href=""
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Log & History
          </a>
        </div>

        {{-- MENU 3: HELP --}}
        <div class="menu">
          <aside></aside>
          <h6>Help & More</h6>
        </div> <br>

        {{-- SUB-MENU 1: Privacy & Policy --}}
        <div class="btn-group submenu ms-4 ps-2 mt-3">
          <span class="material-symbols-outlined"> policy </span>
          <a href="" 
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Privacy & Policy
          </a>
        </div>

        {{-- SUB-MENU 2: Terms & Conditions --}}
        <div class="btn-group submenu ms-4 ps-2 mt-3 mb-5">
          <span class="material-symbols-outlined"> contract </span>
          <a href="" 
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Terms & Conditions
          </a>
        </div>
        <br>
        
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a class="logout" href="">
            <button class="btn-logout mt-5">
            <span class="material-symbols-outlined"> logout</span>Log Out</button>
          </a>
        </form>
        

      </div>


    </div>
    

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
                  <td>{{ $item->nama }}</td>
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