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
            <p class="doctor-total-value">21</p>
            </div>
          </div>
          <div class="col-md-6">
          <div class="patient-total-card">
            <header class="patient-total-header">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f7f8b8cc3c9387ef6438d10c3f8a38d3edcc47cc661ab6290ec0208ac5ed169?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Patient icon" class="patient-icon" />
              <div class="patient-total-label">Patient Total</div>
            </header>
            <p class="patient-total-value">47</p>
          </div>
          </div>
        </div>
        <section class="user-roles">
        <header class="user-roles-header">
            <h2 class="user-roles-title">User Roles</h2>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2881eb2f9fa237386626417fdf555871e9ef508dc73a3179cf70dbba2e8b3694?apiKey=e644a539de5445e499b1d21950fa439b&" alt="User roles icon" class="user-roles-icon" loading="lazy" />
        </header>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/030a1f6bffadffc6ce4ec13f1bd97e7576bd78d674f5fb6de947cdf5a33aa29d?apiKey=e644a539de5445e499b1d21950fa439b&" alt="User roles chart" class="user-roles-image" loading="lazy" />
        <div class="user-roles-legend">
            <div class="user-role">
            <div class="user-role-indicator patient"></div>
            <span class="user-role-label">Patient</span>
            </div>
            <div class="user-role">
            <div class="user-role-indicator admin"></div>
            <span class="user-role-label">Admin</span>
            </div>
            <div class="user-role">
            <div class="user-role-indicator doctor"></div>
            <span class="user-role-label">Doctor</span>
            </div>
        </div>
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
                  <div class="gender-count">28</div>
                  <div class="gender-label female-label">Female</div>
                  <div class="gender-count">19</div>
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
                  <div class="bmi-count">34</div>
                  <div class="bmi-label obesity-label">Obesity</div>
                  <div class="bmi-count obesity-count">13</div>
              </div>
              </div>
          </div>
          <div class="chart-column">
              <div class="chart-container">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4b6154d068a910cbd4517b70066ed4be3de76af4ab879c6fd66548de8c83d387?apiKey=e644a539de5445e499b1d21950fa439b&" alt="Statistics Chart" class="chart-image" />
              <div class="chart-legend">
                  <h3 class="chart-title">Statistics</h3>
                  <div class="legend-item obesity-legend">
                  <div class="legend-color obesity-color"></div>
                  <div class="legend-label">Obesity</div>
                  </div>
                  <div class="legend-item normal-legend">
                  <div class="legend-color normal-color"></div>
                  <div class="legend-label">Normal</div>
                  </div>
              </div>
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>