<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/css/dashboardDoctor.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>List Pasien</title>
    <style>
        
    </style>
  </head>
  <body>
  @include('admin-sidebar')
  <div class="container-flex" >
  <div class="header">
    <div class="row">
        <div class="col-md-11">
        <h1 class="admin-dashboard-title">Doctor List</h1>
        </div>
        <div class="col-md-1">
        <img class="image-notif" src="https://cdn.builder.io/api/v1/image/assets/TEMP/839083ab12a483be3f1634a949afb096cd8fdaf8f72ca066190101d8acf561f8?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Patient avatar" class="patient-avatar" />
        </div>
    </div>
  </div>
  <div class="content">
    <div class="row">
    <div class="container-patient">
        <section class="data-table">
            <input type="search" class="search-input" placeholder="Cari.." aria-label="Search">
            <header class="table-header">
                <div class="header-cell">Nama</div>
                <div class="header-cell">Field 2</div>
                <div class="header-cell">Field 3</div>
                <div class="header-cell">Field 4</div>
                <div class="header-cell">Actions</div>
            </header>
            <!-- Contoh gambar tabel -->
            <img style="width:100%;" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7bf1c7aeaac22bac6f534c0ce9b8f5bd90b6333705a9e2817888ab24706e7ecf?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Table Image" class="table-image">
            <footer class="table-footer">
                <div class="entries-info">Showing 1 to 10 of 10 entries</div>
                <nav class="pagination">
                    <a href="#" class="previous-button">Previous</a>
                    <a href="#" class="page-number active-page">1</a>
                    <a href="#" class="page-number">2</a>
                    <a href="#" class="page-number">3</a>
                    <a href="#" class="page-number">4</a>
                    <a href="#" class="next-button">Next</a>
                </nav>
            </footer>
        </section>
    </div>
    </div>
  </div>
      
  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>