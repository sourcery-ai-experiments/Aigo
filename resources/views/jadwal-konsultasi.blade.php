<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
      <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
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
      </style>
      <title>Dashboard</title>
   </head>
   <body>
      <div class="container-flex">
         @include('client-sidebar')
         <div class="item justify-content-center">
            <div class="row">
               <div class="container d-flex justify-content-center" style="padding:50px;">
                  <h2>Jadwal Konsultasi</h2>
               </div>
            </div>
            <div class="event-form p-5 me-5 ms-5 mt-4">
               <form action="{{route('health-data.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  {{-- ROW 1 --}}
                  <div class="row">
                     {{-- Pilih Dokter --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="birthdate" class="form-label">Pilih Dokter</label>
                           <div class="input-group date" id="birthdatePicker" data-target-input="nearest">
                               <input type="text" class="form-control datetimepicker-input" id="birthdate" name="birthdate" style="border-radius: 20px" data-target="#birthdatePicker" placeholder="Pilih Dokter yang tersedia" value="{{ old('birthdate', $healthData->birthdate ?? '') }}"/>
                               <div class="input-group-append" data-target="#birthdatePicker" data-toggle="datetimepicker">
                               </div>
                           </div>
                       </div>
                     </div>
                     {{-- Tanggal Konsultasi --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="weight" class="form-label">Tanggal Konsultasi</label>
                           <input value="{{old('weight', $healthData->weight ?? '')}}" type="text" class="form-control" name="weight" id="weight" aria-describedby="weightHelp" style="border-radius: 20px" placeholder="Pilih jadwal konsultasi dengan dokter">
                        </div>
                     </div>
                  </div>
                  {{-- ROW 2 --}}
                  <div class="row">
                     {{-- Jam Konsultasi --}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="height" class="form-label">Jam Konsultasi</label>
                           <input value="{{old('height', $healthData->height ?? '')}}" type="text" class="form-control" id="height" name="height" aria-describedby="heightHelp" style="border-radius: 20px" placeholder="Pilih jam konsultasi dengan dokter">
                        </div>
                     </div>
                     {{-- Upload Transkrip Hasil--}}
                     <div class="col">
                        <div class="mb-3">
                           <label for="sleeptime" class="form-label">Upload Transkrip Hasil</label>
                           <input value="{{old('sleeptime', $healthData->sleeptime ?? '')}}" type="text" class="form-control" name="sleeptime" id="sleeptime" aria-describedby="sleeptimeHelp" style="border-radius: 20px" placeholder="8">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-end mt-5">
                     <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
         $(function () {
             $('#birthdatePicker').datepicker({
                 format: 'yyyy-mm-dd',
                 autoclose: true,
                 todayHighlight: true
             });
         });
     </script>
   </body>
</html>
