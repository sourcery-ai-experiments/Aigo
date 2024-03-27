<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* CSS untuk menempatkan gambar sebagai background */
      #section1 {
        background-image: url('{{ asset('asset/page5.png') }}');
        background-size: cover;
        background-position: center;
        height: 500px;
        position: relative;
      }

      /* CSS untuk menempatkan teks di sebelah kiri dan rata tengah */
      #section1 .text-center {
        position: absolute;
        top: 50%;
        left: 25%; /* Sesuaikan dengan kebutuhan Anda */
        transform: translate(-50%, -50%);
        color: #F6F7FF;
        max-width: 30%; /* Warna teks putih agar kontras dengan latar belakang */
      }

      .text-container {
        text-align: left;
      }

      .text-left{
        color: #384C7F;
      }
      .logo{
        width:60%;
      }

      .vm{
        color:#384C7F;
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    @include('navbar')
    <div class="row d-flex justify-content-center" style="padding-top:50px;">
      <section id="section1">
        <div class="text-center">
          <h1>Kesehatan Anda Awal Dari Langkah Kami</h1>
        </div>
      </section>
      <section id="section2" style="background-color: #F6F7FF; padding:10px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center" style="padding: 20px;">
              <div class="text-container">
                <h3 class="text-center" style="color: #384C7F;">Apa itu AIGO ?</h3>
                <div class="text-containerr">
                <div class="text-left">
                      <p>
                      Aigo hadir sebagai sahabat setia dalam perjalanan Anda menuju kesehatan yang lebih baik. 
                      Awalnya dimulai dari keinginan sederhana untuk membantu individu dalam mengatasi obesitas, 
                      kami dengan penuh semangat berbagi informasi, dukungan, dan motivasi untuk mengubah gaya hidup Anda. 
                      Kami mengerti bahwa setiap langkah menuju kesehatan memiliki tantangan dan rintangan yang berbeda. 
                      Oleh karena itu, kami berkomitmen untuk menjadi tempat di mana Anda dapat menemukan inspirasi, 
                      saran yang dapat dipercaya, dan komunitas yang peduli. Bersama-sama, mari kita hadapi setiap rintangan 
                      dengan keyakinan dan semangat, karena setiap langkah kecil yang Anda ambil memiliki dampak besar dalam 
                      perjalanan menuju kesehatan yang lebih baik.
                      </p>
                  </div>
                </div>
              </div>
              </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center" style="padding: 20px;">
              <div class="container text-center">
                <img class="logo" src="{{ asset('asset/health care.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="section3" style="background-color: #F6F7FF; padding:10px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 vm" style="padding:50px;">
            <h1 class="card-title">Visi</h1>
                  <p class="card-text">Menjadi sumber terdepan dalam mengatasi obesitas melalui 
                    platform daring yang inovatif dan terpercaya.</p>
            </div>
            <div class="col-md-6 vm" style="padding:50px;">
            <h1 class="card-title">Misi</h1>
                  <ol class="card-text">
                    <li>Menyediakan informasi obesitas yang akurat dan mudah dipahami.</li>
                    <li>Mengembangkan alat evaluasi obesitas yang interaktif dan efektif.</li>
                    <li>Memberikan panduan praktis tentang pola makan sehat dan aktivitas fisik.</li>
                    <li>Membangun kesadaran komunitas tentang pentingnya kesehatan berat badan dan gaya hidup seimbang.</li>
                  </ol>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
