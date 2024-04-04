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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .menu{
      margin : 20px;
    }
    

    .content{
      padding-left: 250px;
    }

    .nav-link.active {
    background-color: #6FFFE9 !important; 
    color: #0B132B !important; 
  }

   .nav-link{
    color: #0B132B !important;
   }

    .containerContent a {
      text-decoration: none;
      color: #8296C5; 
    }

    .containeritem {
      background-color: #ffffff; 
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
      margin-left: 30px;
      padding: 10px;
      display: inline-flex;
      align-items: center; 
      width: calc(100% - 120px); 
    }

    .tab.active {
      display: block; 
    }

    .nav-pills .nav-link {
      cursor: pointer;
    }

  .item {
    padding-left: 265px;
    padding-bottom:50px;
  }

  .nav-item {
  margin-right: 150px;
}

.nav-item:last-child {
  margin-right: 0; 
}

  .form-control {
  width: 100%; 
}

 .btn{
  background-color:#0B132B !important;
  border-color: #0B132B !important;
  color: #6FFFE9 !important;
 }
  </style>
  <title>Dashboard</title>
</head>
<body>

  <div class="container-flex">

  @include('sidebar')
      
      
    

    <div class="item justify-content-center">
        <div class="row">
            <div class="container d-flex justify-content-center" style="padding:50px;">
                <h2>Form Consultation</h2>
            </div>
        </div>
      <div class="containeritem d-flex justify-content-center">
        <div class="row d-flex justify-content-center" style="padding:10px; width:100%;">
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills d-flex justify-content-center" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#home">Proporsi Tubuh</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#menu1">Aktivitas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#menu2">Rutinitas</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="margin:10px;">
            <div id="home" class="container tab-pane active">
              <br>
                <div class="container d-flex justify-content-center">
                <form id="formHome" style="width:100%">
                <div class="mb-3">
                    <label class="form-label">Berat Badan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tinggi Badan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="text" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Next</button>
                </div>
                </form>
                </div>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
            <div class="container d-flex justify-content-center">
                <form id="formAktivitas" style="width:100%">
                <div class="mb-4">
                    <label class="form-label">Langkah Kaki Per Hari</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Olahraga</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Waktu Olahraga</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kegiatan Fisik</label>
                    <input type="text" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Next</button>
                </div>
                </form>
                </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
            <form id="formRutinitas" action="{{ route('result') }}" style="width:100%">
                <div class="mb-4">
                    <label class="form-label">Rata-Rata Jumlah Waktu Tidur</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Waktu Tidur</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Rata-rata Jumlah Kalori</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Penyakit Yang Sedang Diderita</label>
                    <input type="text" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  

  


  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
      // Simpan nilai input saat form disubmit
      $("#formHome").submit(function(e){
        e.preventDefault(); // Menghentikan pengiriman form bawaan
        var beratBadan = $("#beratBadan").val();
        var tinggiBadan = $("#tinggiBadan").val();
        var umur = $("#umur").val();

        $('#home').removeClass('active show');
        $('#home').addClass('fade');

        $('.nav-link.active').removeClass('active');
        $('.tab-pane.active').removeClass('active show');

        $('a[href="#menu1"]').addClass('active');
        $('#menu1').addClass('active show');

        $('#menu1').removeClass('fade');
        $('#menu1').addClass('active show');

        $("#menu1 #beratBadan").val(beratBadan);
        $("#menu1 #tinggiBadan").val(tinggiBadan);
        $("#menu1 #umur").val(umur);
      });

      $("#formAktivitas").submit(function(e){
        e.preventDefault();
        var langkah = $("#langkah").val();
        var jenisOlga = $("#jenisOlga").val();
        var waktuOlga = $("#waktuOlga").val();
        var kegiatanFisik = $("#kegiatanFisik").val();

        $('#menu1').removeClass('active show');
        $('#menu1').addClass('fade');

        $('.nav-link.active').removeClass('active');
        $('.tab-pane.active').removeClass('active show');

        $('a[href="#menu2"]').addClass('active');
        $('#menu2').addClass('active show');

        $('#menu2').removeClass('fade');
        $('#menu2').addClass('active show');

        // Set nilai input pada tab menu1
        $("#menu1 #langkah").val(langkah);
        $("#menu1 #jenisOlga").val(jenisOlga);
        $("#menu1 #waktuOlga").val(waktuOlga);
        $("#menu1 #kegiatanFisik").val(kegiatanFisik);
      });
    });

    document.getElementById('submitBtn').addEventListener('click', function() {
    // Ambil nilai input dari formulir
    var beratBadan = document.getElementById('beratBadan').value;
    var tinggiBadan = document.getElementById('tinggiBadan').value;
    var umur = document.getElementById('umur').value;

    // Mengarahkan pengguna ke halaman tujuan dengan menyertakan data formulir sebagai parameter query
    window.location.href = "{{ route('result') }}?beratBadan=" + beratBadan + "&tinggiBadan=" + tinggiBadan + "&umur=" + umur;
  });
  </script>
</body>
</html>