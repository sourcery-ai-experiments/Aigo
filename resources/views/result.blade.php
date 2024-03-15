<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Calculation Result</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">The result of the calculation is: {{ $output }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ route('login') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
