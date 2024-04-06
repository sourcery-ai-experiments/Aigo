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
  <style>
    .menu{
      margin : 20px;
    }

    .content{
      padding-left: 250px;
    }

    .container-notification {
      background-color: #ffffff; 
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efect shadow */
      padding: 10px;
      width: 45px; 
      height : 45px;
      display: inline-flex;
      align-items: center; 
      justify-content: flex-end;
    }


    .container-notification a {
      text-decoration: none; /* Menghapus dekorasi hyperlink */
      color: #8296C5; /* Warna teks */
    }

    .container-notification a:hover {
      color: #6FFFE9; /* Warna teks saat dihover */
    }

    .containerContent{
      background-color: #ffffff; 
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efect shadow */
      width: 250px;
      height: 150px;
      /* margin-left: 30px;
      padding: 10px; */
      display: inline-flex;
      align-items: center; 
    }

    .containerContent a {
      text-decoration: none; /* Menghapus dekorasi hyperlink */
      color: #8296C5; /* Warna teks */
    }

    .containeritem {
      background-color: #ffffff; 
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efect shadow */
      margin-left: 30px;
      padding: 10px;
      display: inline-flex;
      align-items: center; 
      width: calc(100% - 120px); 
    }

  /* Styling untuk item-item */
  .item {
    padding-left: 265px;
    padding-bottom:50px;
  }
  </style>
  <title>Dashboard</title>
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

        {{-- SUB-MENU 1: Consultation --}}
        <div class="btn-group submenu ms-4 ps-2 mt-3 mb-3">
          <span class="material-symbols-outlined"> personal_injury </span>
          <a href="{{ route('consultation') }}" 
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Consultation
          </a>
        </div>

        {{-- SUB-MENU 2: Doctor Consultation --}}
        <div class="btn-group submenu ms-4 ps-2  mb-3">
          <span class="material-symbols-outlined"> diversity_1 </span>
          <a href="{{ route('dashboard') }}"
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Doctor Consultation
          </a>
        </div>

        {{-- SUB-MENU 3: Transaction --}}
        <div class="btn-group submenu ms-4 ps-2">
          <span class="material-symbols-outlined"> payment </span>
          <a href="{{ route('dashboard') }}"
            onmouseover="this.style.color='#6FFFE9'" 
            onmouseout="this.style.color='#8296C5'">Transaction
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
    
    
    <div class="content">
      <div class = "m-5 row">
        <div class="col-md-9">
          <h2>Welcome, Costumer 1</h2>
          <p>Here’s what’s happening in your account today.</p>
        </div>
        <div class = "col-md-3 d-flex justify-content-end">
          <div class= "container-notification">
            <div class = "row">
              <span class="material-symbols-outlined"> notifications </span>
              <a href="{{ route('dashboard') }}"
                onmouseover="this.style.color='#6FFFE9'">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="m-5 row">
        <div class="col-md-4 containerContent  d-flex justify-space-between">
          <div class="row align-items-start">
            <div class="d-flex align-items-center">
              <span class="material-symbols-outlined"> monitor_weight </span>
              <a href="" 
                onmouseover="this.style.color='#6FFFE9'" 
                onmouseout="this.style.color='#8296C5'">Tingkat Obesitas
              </a>
            </div>
            <div class="container" style="padding:20px;">

            </div>
            <h2 class="text-center">test</h2>

          </div>
        </div>
        <div class="col-md-4 containerContent d-flex justify-space-between" style="margin-left: 190px; margin-right: 95px;">
        <div class="row align-items-start">
            <div>
              <span class="material-symbols-outlined"> Conditions </span>
              <a href="" 
                onmouseover="this.style.color='#6FFFE9'" 
                onmouseout="this.style.color='#8296C5'">Proporsi Tubuh
              </a>
            </div>
            <div class="container" style="padding:20px;">

            </div>
            <h2 class="text-center">test</h2>

          </div>
        </div>
        <div class="col-md-4 containerContent d-flex justify-space-between" style="margin-left: 95px;">
        <div class="row align-items-start">
            <div>
              <span class="material-symbols-outlined"> clinical_notes </span>
              <a href="" 
                onmouseover="this.style.color='#6FFFE9'" 
                onmouseout="this.style.color='#8296C5'">Jadwal Konsultasi Dokter
              </a>
            </div>
            <div class="container" style="padding:20px;">

            </div>
            <h2 class="text-center">test</h2>

          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="containeritem">
        <div class="row" style="padding:10px;">
          <h3>Recomendation</h3>
          <div class="m-5 user-table" style="padding:0px; width:100%;">
          <table id="example" class="display table">
              <thead>
                  <tr>
                      <th>Makanan</th>
                      <th>Olahraga</th>
                      <th>Kualitas Tidur</th>
                  </tr>
              </thead>

              
          
          </table>
        </div>
        </div>
      </div>
    </div>


    <!-- <div class="m-5 user-table">
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

          
       
      </table>
    </div> -->
  </div>
  

  


  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $('#example').DataTable();
  </script>
</body>
</html>