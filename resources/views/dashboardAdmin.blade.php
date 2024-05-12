<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="{{ asset('/asset/svg/logo.svg') }}" />
    <link href="{{ asset('/asset/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/css/dashboardAdmin.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admin</title>
    <style>
        
    </style>
  </head>
  <body>
  @include('admin-sidebar')
  <div class="container-flex" >
  <h1 class="admin-dashboard-title">Admin Dashboard</h1>
  <div class="content">
    <div class="row">
      <div class = "col-md-4">
        <div class="row">
          <div class="col-md-6">
          <div class="doctor-total-card">
            <header class="doctor-total-header">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d3fda8ac829174dd9d1dbcd455ce585419418563fcfc03fd18834062dbbd174?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Doctor Total Icon" class="doctor-total-icon" loading="lazy" />
                <div class="doctor-total-label">Doctor Total</div>
            </header>
            <p class="doctor-total-value">{{ $doctorCount }}</p>
            </div>
          </div>
          <div class="col-md-6">
          <div class="patient-total-card">
            <header class="patient-total-header">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f7f8b8cc3c9387ef6438d10c3f8a38d3edcc47cc661ab6290ec0208ac5ed169?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Patient icon" class="patient-icon" />
              <div class="patient-total-label">Patient Total</div>
            </header>
            <p class="patient-total-value">{{ $patientCount }}</p>
          </div>
          </div>
        </div>
        <section class="user-roles">
        <header class="user-roles-header">
            <h2 class="user-roles-title">User Roles</h2>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2881eb2f9fa237386626417fdf555871e9ef508dc73a3179cf70dbba2e8b3694?apiKey=e644a539de5445e499b1d21950fa439b&" alt="User roles icon" class="user-roles-icon" loading="lazy" />
        </header>
        <canvas id="myDoughnutChart" width="400" height="400"></canvas>
      </section>
      </div>
      <div class="col-md-8">
      <section class="patients-summary">
      <h2 class="patients-summary-title">Patients Summary</h2>
      <div class="patients-summary-content">
          <div class="patients-summary-row">
          <div class="patients-summary-column">
              <div class="gender-stats">
              <div class="gender-icons">
                  <div class="male-icon">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3fdf4134042a773bd7e5dc3089ac98934868c84a3f4c23fcc70dfc3110a076a1?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Male Icon" class="gender-icon" />
                  </div>
                  <div class="female-icon">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d565bbdb293dab51447f444ac9d0e036ecac199920286ad2afcd2f297588c3b?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Female Icon" class="gender-icon" />
                  </div>
              </div>
              <div class="gender-labels">
                  <div class="gender-label">Male</div>
                  <div class="gender-count">{{ $maleCount }}</div>
                  <div class="gender-label female-label">Female</div>
                  <div class="gender-count">{{ $femaleCount }}</div>
              </div>
              </div>
          </div>
          <div class="patients-summary-column">
              <div class="bmi-stats">
              <div class="bmi-icons">
                  <div class="normal-icon">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f2632d042097314d8e12a6aad6e2748f74e402eb74708d02408a76bd2386c297?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Normal BMI Icon" class="bmi-icon" />
                  </div>
                  <div class="obesity-icon">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/70410788d2db6c83061fe7845e69efac17364c900edc2f83d3d6977d4c2c47bd?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Obesity BMI Icon" class="bmi-icon" />
                  </div>
              </div>
              <div class="bmi-labels">
                  <div class="bmi-label">Normal</div>
                  <div class="bmi-count">{{ $normalCount }}</div>
                  <div class="bmi-label obesity-label">Obesity</div>
                  <div class="bmi-count obesity-count">{{ $obesityCount }}</div>
              </div>
              </div>
          </div>
          <div class="chart-column">
          <h3 class="chart-title">Statistics</h3>
              <div class="chart-container">
              <canvas id="statisticsChart" width="50" height="50"></canvas>
              </div>
          </div>
          </div>
        </div>
      </section>
      <section class="notification-container">
        <div class="notification-content">
          <div class="notification-details">
            <header class="notification-header">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/77d7c3d955ffa12565d49d0d052a4b93caae11cb9416aed0cd8b2199484e71a7?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Notification icon" class="notification-icon" />
              <div class="notification-text">
                <h3 class="notification-title">Don't forget to check notifications!</h3>
                <p class="notification-description">You might have missed something important!</p>
              </div>
            </header>
          </div>
          <div class="notification-action">
            <button class="notification-button">Notification</button>
          </div>
        </div>
      </section>
      </div>
    </div>
  </div>
      
  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script>
      var ctx = document.getElementById('myDoughnutChart').getContext('2d');
  
      var userRoleCounts = @json($userRoleCounts);
  
      var labels = userRoleCounts.map(function(item) {
          return item.user_role;
      });
  
      var data = userRoleCounts.map(function(item) {
          return item.count;
      });
  
      var chartData = {
          labels: labels,
          datasets: [{
              data: data,
              backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 205, 86)'
              ],
              hoverOffset: 4
          }]
      };
  
      var myDoughnutChart = new Chart(ctx, {
          type: 'doughnut',
          data: chartData,
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      position: 'bottom'
                  }
              }
          }
      });
  </script>

<script>
var ctxStatistics = document.getElementById('statisticsChart').getContext('2d');

const dataStatistics = {
  labels: ['Obesity','Normal'],
  datasets: [{
    label: 'Statistics Chart',
    data: [300, 100], // data: [{{ $obesityCount }}, {{ $normalCount }}], 
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)'
    ],
    hoverOffset: 3
  }]
};

const configStatistics = {
  type: 'doughnut',
  data: dataStatistics,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'right'
      },
      
      tooltip: {
        callbacks: {
          label: function(tooltipItem) {
            return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2) + '%';
          }
        }
      }
    }
  }
};

// Buat objek doughnut chart baru untuk Statistics
var statisticsChart = new Chart(ctxStatistics, configStatistics);

</script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>