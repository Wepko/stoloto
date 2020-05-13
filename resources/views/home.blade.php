@extends('layouts.head');
@section('content')
<!-- <div class="collapse" id="collapseExample">
<div class="card card-body sitemap">
<p>Это меню</p>
</div>
</div> -->
<!-- logo -->
<div class="logo">
<img src="img/crisis_logo.svg" alt="">
</div>
<!-- logo -->
@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
@endif
<!-- start home slider -->
<div class="home_slider">
<div id="home_slider1" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#home_slider1" data-slide-to="0" class="active"></li>
<li data-target="#home_slider1" data-slide-to="1"></li>
<li data-target="#home_slider1" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
  <img class="d-block w-100" src="img/home_slider1.jpg" alt="Первый слайд">
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="img/home_slider1.jpg" alt="Второй слайд">
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="img/home_slider1.jpg" alt="Третий слайд">
</div>
</div>
<a class="carousel-control-prev" href="#home_slider1" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#home_slider1" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<!-- end home slider -->

<div class="home_numbers">
<div class="row">
<div class="col-md 4">
  <p>123 💵</p>
</div>
<div class="col-md 4">
  <p>321 🔥</p>
</div>
<div class="col-md 4">
  <p>432 🌟</p>
</div>
</div>
<button type="button" data-modal="modal-12" class="btn btn-light md-trigger">
Карта
</button>
</div>
<div class="md-modal md-effect-12">
<div class="md-content">
    <h3>Modal Dialog</h3>
    <div>
        <p>This is a modal window. You can do the following things with it:</p>
        <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
        </ul>
        <button class="md-close">Close</button>
    </div>
</div>
</div>

<div class="md-overlay"></div>
<p>
<a class="a" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
Ссылка открытия по нажатию▼
</a>
</p>
<div class="collapse" id="collapseOne">
<div class="card card-body">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
</div>
</div>

<div class="home_gameblock">
<div class="row text-center" style="width: 120%">
<div class="col-md-2 item item-orange c1">
<div>
  <img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
  <p>Джекпот</p>
  <h2>8 000 000 ₽</h2>
  <p>Осталось 5 джекпотов</p>
  <p><b>Выигрывает каждый третий билет</b></p>
  <p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
  <img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
  <p>Джекпот</p>
  <h2>8 000 000 ₽</h2>
  <p>Осталось 5 джекпотов</p>
  <p><b>Выигрывает каждый третий билет</b></p>
  <p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
  <img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
  <p>Джекпот</p>
  <h2>8 000 000 ₽</h2>
  <p>Осталось 5 джекпотов</p>
  <p><b>Выигрывает каждый третий билет</b></p>
  <p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
  <img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
  <p>Джекпот</p>
  <h2>8 000 000 ₽</h2>
  <p>Осталось 5 джекпотов</p>
  <p><b>Выигрывает каждый третий билет</b></p>
  <p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
  <img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
  <p>Джекпот</p>
  <h2>8 000 000 ₽</h2>
  <p>Осталось 5 джекпотов</p>
  <p><b>Выигрывает каждый третий билет</b></p>
  <p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>

</div>
</div>


<p>
<a class="a" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
Ссылка открытия по нажатию▼
</a>
</p>
<div class="collapse" id="collapseOne">
<div class="card card-body">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
</div>
</div>

<div class="home_gameblock">
<div class="row text-center" style="width: 120%">
<div class="col-md-2 item item-orange c1">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>

</div>
</div>



<p>
<a class="a" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
Ссылка открытия по нажатию▼
</a>
</p>
<div class="collapse" id="collapseOne">
<div class="card card-body">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
</div>
</div>

<div class="home_gameblock">
<div class="row text-center" style="width: 120%">
<div class="col-md-2 item item-orange c1">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>

</div>
</div>


<p>
<a class="a" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
Ссылка открытия по нажатию▼
</a>
</p>
<div class="collapse" id="collapseOne">
<div class="card card-body">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
</div>
</div>

<div class="home_gameblock">
<div class="row text-center" style="width: 120%">
<div class="col-md-2 item item-orange c1">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>
<div class="col-md-2 item item-orange">
<div>
<img src="img/123.png" class="item-img" alt="">
</div>
<div class="item-text">
<p>Джекпот</p>
<h2>8 000 000 ₽</h2>
<p>Осталось 5 джекпотов</p>
<p><b>Выигрывает каждый третий билет</b></p>
<p>Купить за 100 ₽</p>
</div>
<div class="item-link">

</div>
</div>

</div>
</div>



<div class="carGame">
<div class="row">
<div class="col-md-8">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
</ol>
<div class="carousel-inner carGames">
<div class="carousel-item active red">
  <img class="d-block w-100" class="imgGames" src="img/123.png" alt="Первый слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
<div class="carousel-item blue">
  <img class="d-block w-100" class="imgGames" src="img/123.png" alt="Второй слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
<div class="carousel-item orange">
  <img class="d-block w-100" class="imgGames" src="img/123.png" alt="Третий слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
<div class="carousel-item green">
  <img class="d-block w-100" class="imgGames" src="img/123.png" alt="Четвертый слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
<div class="carousel-item dark">
  <img class="d-block w-100" class="imgGames" src="img/123.png" alt="Пятый слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
<div class="carousel-item fiolet">
  <img class="d-block w-100" class="imgGames" src="img/123.png" alt="Шестой слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
<div class="carousel-item pink">
  <img class="d-block w-100" height="400px" src="img/123.png" alt="Седьмой слайд">
  <div class="carousel-caption d-none d-md-block">
  <h3>...</h3>
  <p>...</p>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<div class="col-md-">
<p>ТЕКСТЕКСТЕКТС</p>
</div>
</div>
</div>



</div>
@endsection
