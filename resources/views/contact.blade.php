<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Aigo@w33zard" />
    <meta property="og:description" content="AIGO: AI-recommended Guidance for Obesity management " />
    <meta property="og:image" content="{{ asset('/asset/png/thumbnail.png') }}"/>
    <meta property="og:url" content="https://aigo.w333zard.my.id/" />
    <link rel="shortcut icon" href="{{ asset('/asset/svg/logo.svg') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body{
        background-color:#0B132B;
      }

      .text-container {
        text-align: center;
      }

      .text-center{
        color: #6FFFE9;
      }
    </style>
    <title>Contact</title>
  </head>
  <body>
  @include('navbar')
    <div class="row d-flex justify-content-center" style="padding-top:100px;">
        <h1 class="text-center"> Get In Touch </h1>
        <div class="row-container d-flex  justify-content-center" style="padding:50px;">
            <div class="col-md-4 text-center" style="padding:50px;">
              <div class="d-flex justify-content-center align-items-center text-container"></div>
                <img src="{{ asset('asset/phone.png') }}" alt="" class="mb-3">
                <div class="text-container">
                  <H3> Phone </H3>
                  <p>Admin</p>
                  <p>+62 817794453</p>
                  <p>Customer Service</p>
                  <p>+62 81334754</p>
                </div>
            </div>
            <div class="col-md-4 text-center" style="padding:50px;">
              <div class="d-flex justify-content-center align-items-center text-container"></div>
                <img src="{{ asset('asset/email.png') }}" alt="" class="mb-3">
                <div class="text-container">
                  <H3> Email </H3>
                  <p>@Aigo.com</p>
                </div>
            </div>
            <div class="col-md-4 text-center" style="padding:50px;">
              <div class="d-flex justify-content-center align-items-center text-container"></div>
                <img src="{{ asset('asset/address.png') }}" alt="" class="mb-3">
                <div class="text-container">
                  <H3> Address </H3>
                  <p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>