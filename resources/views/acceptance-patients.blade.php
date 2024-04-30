<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/asset/css/dashboardDoc.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Doctor Dashboard</title>
  </head>
  <body>
  @include('doctor-sidebar')
  <div class="container-flex" >
    <div class="content">
    <h1 class="patient-acceptance-title">Patient Acceptance</h1>
    <section class="search-container">
        <label for="search" class="visually-hidden">Cari..</label>
        <input type="search" id="search" class="search-input" placeholder="Cari.." aria-label="Cari..">
        <div class="appointment-row">
            <div class="appointment-info ">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a035700e6dde8893391104b4951e482b92fd90bf27ee7430998441c8f71bd031?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Moris Johnson avatar" class="patient-avatar" />
            <div class="name">Moris Johnson</div>
            </div>
            <div class="status">Online</div>
            <div class="date">28 September 2024</div>
            <div class="time">15:30 WIB</div>
            <div class="appointment-actions">
                <button class="decline-btn">Decline</button>
                <button class="confirm-btn">Confirmed</button>
            </div>
        </div>
        <div class="appointment-row">
            <div class="appointment-info ">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a035700e6dde8893391104b4951e482b92fd90bf27ee7430998441c8f71bd031?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Moris Johnson avatar" class="patient-avatar" />
            <div class="name">Moris Johnson</div>
            </div>
            <div class="status">Online</div>
            <div class="date">28 September 2024</div>
            <div class="time">15:30 WIB</div>
            <div class="appointment-actions">
                <button class="decline-btn">Decline</button>
                <button class="confirm-btn">Confirmed</button>
            </div>
        </div>
    </section> 
    </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>