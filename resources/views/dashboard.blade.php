<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .dashboard-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        }
        .welcome-message {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }
        .logout-btn {
            float: right;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .logout-btn:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .card-text {
            color: #666;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="dashboard-container">
                <h2 class="welcome-message">Welcome to Your Dashboard</h2>
                <a href="#" class="btn btn-danger logout-btn">Logout</a>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Appointments</h5>
                                <p class="card-text">View and manage your appointments.</p>
                                <a href="#" class="btn btn-primary">Go to Appointments</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Prescriptions</h5>
                                <p class="card-text">Access your prescriptions and medication details.</p>
                                <a href="#" class="btn btn-primary">Go to Prescriptions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Medical Records</h5>
                                <p class="card-text">View and download your medical records.</p>
                                <a href="#" class="btn btn-primary">Go to Medical Records</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Billing</h5>
                                <p class="card-text">View and manage your billing information.</p>
                                <a href="#" class="btn btn-primary">Go to Billing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
