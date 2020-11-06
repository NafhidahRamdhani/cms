<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand text-warning" href="#">KUIS NAFHI</a>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto my-2 my-lg-1">
        <li class="nav-item active">
          <a class="nav-link btn btn-warning text-dark" href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <p><a class="btn btn-warning  text-dark" href="{{('https://instagram.com/nafhidahrq_')}}" role="button">CONTACT ME</a></p>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-warning text-dark" href="#" tabindex="-1" aria-disabled="true">KELOLA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-warning text-dark" href="#" tabindex="-1" data-toggle="modal" data-target="#kampret">MENU</a>
        </li>
        <li class="nav-item mr-2">
          <a class="nav-link btn btn-warning text-dark" href="#" tabindex="-1" data-toggle="modal" data-target="#free">ABOUT</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--end navbar-->
  <!--jumbotron-->
  <div class="jumbotron jumbotron-fluid bg-warning">
    <div class="container">
      <h1 class="display-3 text-center text-dark">SMALL BUSINESS</h1>
      <p class="lead text-center text-dark">You can search product, gift, or services everythink what do you need in here dear!</p>
      <div class="input-group mb-4">
        <input type="text-dark" class="form-control" placeholder="What do you need dear?" aria-label="Recipient's username"
          aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-dark text-warning" id="search">Search</button>
        </div>
      </div>
    </div>
  </div>
  <!--end jumbotron-->

      <!--end jumbotron-->
    <!-- Categories -->
    <div class="container-fluid">
      <h1 class="display-5 text-center mb-5 text-warning">CATEGORIES</h1>
      <div class="card-deck mb-5">
        <div class="card">
          <img class="card-img-top img-thumbnail" src="{{ asset ('nafhi.id.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">@nafhi.id</h5>
            <p class="card-text">OUTFIT SELEBGRAM HARGA ANAK KOSAN</p>
            <p class="card-text">Buat kalian para sistur yang pengen beli outfit highclass harga lowbudget BURUAN MERAPAT HYUNG</p>
            <a href="{{ 'https://instagram.com/nafhi.id' }}" class="btn btn-warning text-dark">View Product &rarr;</a>
          </div>
        </div>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="{{ asset ('all.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">@allcustomid_</h5>
              <p class="card-text">AESTHETHIC GIFT</p>
              <p class="card-text">HI lur! Mau kadoin doi, temen, sahabat, keluarga tapi gatau beli dimana? YOK GASKEUN cek to thr cek</p>
              <a href="{{ 'https://instagram.com/allcustomid_' }}" class="btn btn-warning text-dark">View More &rarr;</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="{{ asset ('sek.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">@sekresek_</h5>
              <p class="card-text">SERVICES AT ANYTIME</p>
              <p class="card-text">Punten akang teteh, yang punya kosan tapi ga ditempatin karena pandemi kuy pakai jasa kami, sayang duid nya atu</p>
              <a href="{{ 'https://instagram.com/sekresek_' }}" class="btn btn-warning text-dark">View Services &rarr;</a>
            </div>
        </div> 
      </div>    
    </div> 
    <!-- End Categories -->

    <!-- End Categories -->
    <!-- Article -->
    <div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row p-5 bg-dark text-warning">
        <div class="col-md-12">
            <h2 class="display-5 text-center mb-5">A R T I C L E</h2>
        </div>
        <div class="col-md-4">
          <h2>NAFHI.ID</h2>
          <p>@nafhi.id | Flashback 3 tahun lalu tepatnya 2016, saya mendirikan sebuah olshop kecil kecilan. Bermula posting di snap whatsapp sampe membuat grub olshop di WA. Namun pada tahun 2018 tepatnya saya udah memasuki bangku kelas 3 SMK, saya disibukkan dengan ujian demi ujian yang mana ortu menyuruh untuk break sebentar berjualan. TO BE CONTINUED</p> 
          <p><a class="btn btn-warning" href="{{ 'https://www.instagram.com/tv/B-3wCpyHCkw/?igshid=17ee4opqqiwys' }}" role="button">View Story &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>ALLCUSTOMID_</h2>
          <p>@allcustomid_ | Mulanya business ini dibangun bersama teman saya di malang. Dhea namanya. Kita punya cita cita dan tujuan yang sama, menjadi seorang entreprenuer. Sangat disayangkan pandemi membuat kita harus bersabar untuk menyiapkan sesuatu untung membangun bisnis ini. Bismillah kedepan ada jalan. aamiin
               </p>
          <p><a class="btn btn-warning" href=https://www.instagram.com/p/CCA8IU5B7Zl/?igshid=3mb74yvzshzl role="button">View Story &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>SEKRESEK_</h2>
          <p>@sekresek_ | Pandemi membuatku berpikir bagaimana carnya menghasilkan uang dengan cara yang halal tentunya. Kemudian saya inisiatif membuka jasa bersih2 kos, kontrakan atau asrama. Lalu ada pengosongan dan pengiriman paket. Yang baru berjalan agustus lalu. Doain lancar dan berkah ya! Aamiin Allahumaa Aamiin</p>
          <p><a class="btn btn-warning" href="#" role="button">View Services &raquo;</a></p>
        </div>
      </div>
      <hr>
    </div>
    <!-- End Article -->   

     <!-- End Article -->
    <!-- Top Author -->
  <section class="bg-warning" id="team">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-dark">
          <h2 class="section-heading text-uppercase">OWNER</h2>
          <h3 class="section-subheading text-muted">@nafhi.id @allcustomid_ @sekresek_</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle tayo" src="{{ asset ('tayo.jpg')}}" alt="width="20% height="20%" style="display: block; margin: auto;">
            <h4>NAFHIDAH RAMDHANI QURRAHMAN</h4>
            <p class="text-muted">Mahasiswa Politeknik Negeri Malang</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

    <!-- End Top Author -->