@extends('one')
@section('content')

<div class=" pX-5 p-5 rounded">
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
   <div class="carousel-inner rounded">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item rounded" data-bs-interval="2000">
      <img src="img/1.PNG" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         </div>
    </div>
    <div class="carousel-item rounded" data-bs-interval="2000">
      <img src="img/2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <BR>    

    

    <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1">*_*</span>
      <input type="text-center" class="form-control" placeholder="Cari Promo" aria-label="Cari Promo" aria-describedby="basic-addon1">
    </div>
  </form>
<br>


<!-- card -->
 <section>
  <div class="container">
 <div class="row justify-content-evenly ">
 <div class="col-md-4 ">
 <div class="card" style="width: 20rem";>
  <img src="mng2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    </div>
</div>
 </div>

 <div class="col-md-4">
 <div class="card" style="width: 20rem;">
  <img src="mng1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
     </div>
</div>
 </div>

 <div class="col-md-4">
 <div class="card" style="width: 20rem;">
  <img src="mng.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
      </div>
</div>
 </div>

 </div>
 </div>
 </section>


<!-- 1 -->
 <br>
 <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
  </div>
  <br><br>




  
 <!-- card 2 -->
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-3 mb-3 ">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/b1.jpeg" class="card-img-top" style="width: 15rem; height:20rem;" alt="...">
          <div class="card-body">
          <h5 class="card-title">Jaket Batik Model #1<br> RP.170.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
      </div>
       </div>
        
      </div>

      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/b2.jpeg" class="card-img-top" style="width: 15rem; height:20rem;" alt="...">
          <div class="card-body">
          <h5 class="card-title">Jaket Batik Model #2 <br> RP.170.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
       </div>
       </div>
        
      </div>

      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/b3.jpeg" class="card-img-top" style="width: 15rem; height:20rem;" alt="...">
          <div class="card-body">
          <h5 class="card-title">Jaket Batik Model #3 <br> RP.170.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
      </div>
       </div>
        
      </div>

      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/b4.jpeg" class="card-img-top p-0 m-0" style="width: 15rem; height:20rem;" alt="...">
          <div class="card-body">
          <h5 class="card-title">Jaket Batik Model #4 
            <br> RP.170.000.00
          </h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>
<br> <hr>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/1.jpg" class="card-img-top " alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Batik Model BATASIA </h5>
          <h5 class="card-title">Model #5 <br><br> RP.70.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>

       <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Batik Model BATASIA </h5>
          <h5 class="card-title">Model #6  <br><br> RP.110.000.00 - 130.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
          </div>
       </div>
        
      </div>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Batik Model BATASIA </h5>
          <h5 class="card-title">Model #6 <br><br> RP.110.000.00 - 130.000.00 </h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
         </div>

       
       </div>
        
       
      </div>
      <div class="col-md-3 ">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Batik Model BATASIA </h5>
          <h5 class="card-title">Model #7  <br><br> RP.110.000.00 </h5>
          <p class="card-text"></p></BR><br>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>

      <br> <hr>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:32rem;">
        <img src="img4/bj1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Adat Model BATASIA </h5>
          <h5 class="card-title">Model #8  <br><br> RP.250.000.00 - 300.000.00</h5>
          <p class="card-text"></p></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
         </div>
       </div>
        
      </div>

       <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:32rem;">
        <img src="img4/bj2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Adat Model BATASIA </h5>
          <h5 class="card-title">Model #9 <br><br> RP.250.000.00 - 300.000.00</h5>
          <p class="card-text"></p></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:32rem;">
        <img src="img4/bj3.jpg" class="card-img-top " style="width: 15rem; height:19rem;" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Adat Model BATASIA </h5>
          <h5 class="card-title">Model #9 <br><br> RP.370.000.00</h5>
          <p class="card-text"></p></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
       </div>

       
       </div>
        
       
      </div>
      <div class="col-md-3 ">

      <div class="card"  style="width: 15rem; height:32rem;">
        <img src="img4/bj4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Baju Adat Model BATASIA </h5>
          <h5 class="card-title">Model #10 <br><br> RP.380.000.00 </h5>
          <p class="card-text"></p><br>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>
      <br> <hr>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j1.webp" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #11 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>

       <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #12 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j3.webp" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #13 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>

       
       </div>
        
       
      </div>
      <div class="col-md-3 ">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #14 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>
      <br> <hr>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #15 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
       </div>
       </div>
        
      </div>

       <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #16 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
       </div>
       </div>
        
      </div>
      <div class="col-md-3 mb-3">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/j7.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">JAM Tangan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #17 <br> RP.90.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
       </div>

       
       </div>
        
       
      </div>
      <div class="col-md-3 ">

      <div class="card"  style="width: 15rem; height:30rem;">
        <img src="img4/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Kebaya Instan Batik Model BATASIA </h5>
          <h5 class="card-title">Model #18 <br> RP.70.000.00</h5>
          <p class="card-text"></p><BR></BR>
          <a href="{{ route('create') }}" class="btn btn-primary bg-center center">PESAN</a>
        </div>
       </div>
        
      </div>


    </div>
  </div>
</section><!--
 hero secsen
</div class="bg-dark text-white ">
  <section class="jumbotron text-center " style="background-color:#fde86d">
    <br><br><br>
    <img src="{{asset('syahrul.jpg')}}" alt="PUSTAKA SEJARAH" width="300" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Syahrul Rizki Oktavian</h1>
    <p class="lead">saya seorang remaja pecinta ikan</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,53.3C384,53,480,75,576,117.3C672,160,768,224,864,218.7C960,213,1056,139,1152,122.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
 


    <section clas="tentang  " id="3">
        <div id="syahrul  ">
          <div class="container ">
          <div class="row text-center mb3" >
            <div class="col">
                <h1>Tentang <span>Saya</span></h1>
              <br><br>
            </div>
           </div>
           <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
              <p>Saya lahir pada 14 october 2007 di desa prigen</p>
            </div>
    
            <div class="col-md-4">
              <p>saya sekarang berusia 16 dan baru berusia 17 pada bulan depan</p>
            </div>
              <div class="col-md-4 ">
                <p>saya sekarang bersekolah di SMKN 1 purwosari</p>
            </div>
           </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fde86d" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,53.3C384,53,480,75,576,117.3C672,160,768,224,864,218.7C960,213,1056,139,1152,122.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>  -->
@endsection

