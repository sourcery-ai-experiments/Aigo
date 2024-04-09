<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
      <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
      <link href="{{ asset('/asset/css/dashboard.css') }}" rel="stylesheet" />
      <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <style>
      </style>
      <title>Dashboard</title>
   </head>
   <body>
      <div class="container-flex">
         @include('sidebar')
         <div class="content">
            <h1 class="mt-5 mb-5">
               <center>Customer Dashboard</center>
            </h1>
            <div class="row me-4 ms-4 mb-5">
               <div class="col mb-3">
                  <div class="greetings-card">
                     <div class="frame">
                        <div class="text-wrapper">Welcome,</div>
                        <div class="div">{{auth()->user()->name}}</div>
                     </div>
                     <div class="table">
                        <div class="frame-2">
                           <div class="group">
                              <div class="text-wrapper-2">Tingkat Obesitas</div>
                              <div class="text-wrapper-3">Overweight</div>
                              <img class="line" src="{{ asset('/asset/svg/Lineshadow.svg') }}" />
                           </div>
                           <div class="group-2">
                              <div class="text-wrapper-2">Tinggi Badan</div>
                              <div class="text-wrapper-4">170 cm</div>
                              <img class="line" src="{{ asset('/asset/svg/Lineshadow.svg') }}" />
                           </div>
                           <div class="group-3">
                              <div class="text-wrapper-2">Berat Badan</div>
                              <div class="text-wrapper-5">92 kg</div>
                           </div>
                        </div>
                     </div>
                     <div class="add">
                        <a href="" class="ellipse">
                        <img class="vector" src="{{ asset('/asset/svg/edit.svg') }}" />
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-4 mb-3">
                  <div class="chart-container p-2">
                     <canvas id="myChart"></canvas>
                  </div>
               </div>
               <div class="col mb-3">
                  <div class="post">
                     <div class="author">
                        <div class="text-wrapper">Nama Dokter</div>
                        <div class="div">Minggu, 19 Mei 2024</div>
                     </div>
                     <div class="read">
                        <a href="https://www.example.com" class="circle-btn ellipse p-2" style="display: flex; ">
                        <img class="vector" src="{{ asset('/asset/svg/next-arrow.svg') }}" />
                        </a>
                     </div>
                     <div class="text-wrapper-2">Jadwal Konsultasi</div>
                     <img class="line" src="{{ asset('/asset/svg/dashline.svg') }}" />
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="containeritem">
               <div class="row" style="padding:10px;">
                  <h3>Recommendation</h3>
                  <div class="p-3 user-table" style="padding:0px; width:100%;">
                     <table id="example" class="display table">
                        <thead>
                           <tr>
                              <th>Tanggal</th>
                              <th>Jenis Olahraga</th>
                              <th>Jarak Lari</th>
                              <th>Durasi Olahraga</th>
                              <th>Avg. Kecepatan</th>
                              <th>Avg. Steps</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($activities as $activity)
                           <tr> 
                              {{-- start_date, id --}}
                              <td>{{ $activity['name'] }}</td>
                              <td>{{ $activity['sport_type'] }}</td>
                              <td>{{ $activity['distance'] }} meter</td>
                              <td>{{ $activity['moving_time'] }} detik</td>
                              <td>{{ $activity['average_speed'] }} m/s</td>
                              <td>{{ $activity['average_cadence'] ?? 'N/A' }}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
      <script>
         $('#example').DataTable();
      </script>
      @php
      $maxDistance = 0;
      foreach ($activities as $activity) {
      $maxDistance = max($maxDistance, $activity['distance']);
      }
      @endphp
      <script>
         var maxDistance = {{ $maxDistance }};
         var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
             type: 'line',
             data: {
                 labels: [
                     @foreach ($activities as $activity)
                         '{{ $activity["name"] }}',
                     @endforeach
                 ],
                 datasets: [{
                     label: 'Data',
                     data: [
                         @foreach ($activities as $activity)
                             {{ $activity['distance'] }},
                         @endforeach
                     ],
                     borderColor: 'rgba(55, 82, 183, 1)',
                     backgroundColor: 'rgba(63, 82, 109, 0.1)',
                     borderWidth: 1,
                     tension: 0.1
                 }]
             },
             options: {
                 scales: {
                     y: { // defining min and max so hiding the dataset does not change scale range
                         min: 0,
                         max: Math.ceil((maxDistance + (maxDistance * 0.05))/100)*100
                     }
                 }
             }
         });
      </script>
   </body>
</html>
