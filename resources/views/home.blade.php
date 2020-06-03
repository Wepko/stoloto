@extends('layouts.head')
@section('content')
<!-- <div class="collapse" id="collapseExample">
<div class="card card-body sitemap">
<p>Это меню</p>
</div>
</div> -->
<!-- logo -->

<!-- logo -->
@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
@endif
<<<<<<< HEAD
<!-- start home slider -->
=======
<!-- start home slider --> 
>>>>>>> 5d1948898491c18669ce63452a0d93719735c8e1
<header class="masthead">
  <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
          <h1 class="mx-auto my-5 text-uppercase" style="font-size: 4rem">Призовой фонд: 432 451 760 Р</h1>
          <h2 class=" mx-auto mt-5 mb-5">Сорви большой куш!</h2>
          <a class="btn btn-primary btn-lg" style="font-size: 1.5rem;" id="js-btn" href="#about">Начать играть</a>
      </div>
  </div>
</header>

<section id="about" class="conatiner-card">
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
  <div class="card-main card m-2" style="width: 18rem;">
    <a href="#" class="d-block">
      <img class="card-img-top" src="img/banner.PNG" alt="Card image cap">
      <div class="card-body card-tooltip">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </a>
  </div>
</div>
</section>
@endsection
