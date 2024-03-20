<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .navbar {
            position: fixed; /* Navbar tetap di bagian atas */
            width: 100%;
            z-index: 1000; /* Membuat navbar tampil di atas konten lain */
            background-color: #0B132B;
        }

        .navbar-nav .nav-link {
            margin-right: 50px; 
            color: #6FFFE9;
        }

        .navbar-nav .nav-link.active {
            color: #fff;
        }

        .btnlogin{
            border-color: #6FFFE9;
            border : solid 2px;
            color:#6FFFE9;
            background-color:#384C7F;
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-right:50px; color:#6FFFE9" href="#">AIGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/about">About Us</a>
                <a class="nav-link" href="#">Contact Us</a>
            </div>
            </div>
            <a class="btn btnlogin" href="/login">Login</a>
        </div>
        </nav>
  </body>
</html>