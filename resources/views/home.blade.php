<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        img{
            width:70%;
        }
        .homecontainer{
            padding-left:50px;
        }
        
        h3{
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }

        p{
            font-family: 'Roboto', sans-serif;
        }

        .row-container {
            display: flex;
            align-items: center; /* Mengatur teks dan gambar agar berada di tengah-tengah vertikal */
        }

        .text-container {
            max-width: 500px; /* Atur lebar maksimum sesuai kebutuhan */
            margin: 0 auto; /* Mengatur agar teks berada di tengah */
            text-align: center; /* Mengatur teks agar berada di tengah secara horizontal */
            display: flex;
            flex-direction: column; /* Mengatur agar elemen-elemen dalam kolom vertikal */
            align-items: center;
        }

        .btnreg{
            background-color: #008a60;
            width: 200px;
            margin: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            color: white;

        }
    </style>
  </head>
  <body>
  @include('navbar')
    <div class="row d-flex justify-content-center" style="padding-top:50px;">
        <section id="section1" style="background-color:#d0ecda;">
            <div class="homecontainer">
                <div class="row-container d-flex justify-content-center">
                    <div class="col-md-6 d-flex align-items-center text-container">
                        <H3> Cegah sebelum Terlambat. Kenali Risiko dan Amati Pola Makan serta Gaya Hidup Anda.</H3>
                        <p>Obesitas bukan hanya masalah penampilan, tapi juga kesehatan. Perubahan kecil dalam gaya hidup dapat membuat perbedaan besar.</p>
                        <a class="btn btnreg" href="/login">Kenali Tubuh Anda</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('asset/page4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="section2">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>

        </section>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>