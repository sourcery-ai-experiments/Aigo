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
  <style>
    .containeritem {
      background-color: #ffffff; 
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efect shadow */
      margin-left: 30px;
      padding: 10px;
      display: inline-flex;
      align-items: center; 
      width: calc(100% - 60px); 
    }

    .btn{
        background-color:#0B132B !important;
        border-color: #0B132B !important;
        color: #6FFFE9 !important;
        }

    .item {
    padding-left: 265px;
    padding-bottom:50px;
  }

  .col-md-6{
    padding:20px;
  }
  </style>
  <title>Admin Dashboard</title>
</head>
<body>

  <div class="container-flex">

   @include('sidebar')


    
    <div class="item">
        <div class="row">
            <h3 class="d-flex justify-content-center" style="padding:10px;">Result</h3>
            <div class="containeritem">
            <div class="row" style="width:90%; margin:10px;">
                <div class="col-md-6">
                    Berat
                </div>
                <div class="col-md-6">
                    Kegiatan Fisik
                </div>
                <div class="col-md-6">
                    Tinggi
                </div>
                <div class="col-md-6">
                    Jumlah Waktu Tidur
                </div>
                <div class="col-md-6">
                    Umur
                </div>
                <div class="col-md-6">
                    Waktu Tidur
                </div>
                <div class="col-md-6">
                    Jumlah Langkah Kaki
                </div>
                <div class="col-md-6">
                    Jumlah Kalori Makanan
                </div>
                <div class="col-md-6">
                    Jenis Olahraga
                </div>
                <div class="col-md-6">
                    Penyakit Yang Sedang di Derita
                </div>
                <div class="col-md-6">
                    Waktu Olahraga
                </div>
                <div class="col-md-6">
                    <span class="material-symbols-outlined">print</span>
                </div>
            </div>
            
            </div>
        </div>

    </div>
    </div>
  </div>
  

  


  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
 
</body>
</html>