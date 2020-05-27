<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css.map')}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map')}}"> --}}

    <link rel="stylesheet" href="{{ asset('style.css')}}">
  
  <style>
  body {
    display: flex;
    flex-direction: column;
    position: relative;
    height: 100vh;
  }

  .left_panel{
    font-weight: 400;
    font-size: 16px;
    left: 0;
    position: fixed;
    top: 0;
    width: 5%;
    z-index: 7;
    padding-top: 7%;
    padding-left: 2%;
}
.left_panel p{
   text-decoration: underline;
}
.left_nav_panel{
  margin-top: 30%;
}
.left_panel p:hover{
  color: red;
}
.right_panel{
  position: fixed;
  top: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.8);
  height: 100%;
  padding-top: 5%;
  width: 13%;
}
.right_panel a {
  padding: 5% 0;
  padding-left: 4%;
  color: #fff;
  text-decoration: none;
}
.right_panel p{
  color: white;
  font-size: 15px;
}
.right_panel p:hover{
  background-color: rgba(0, 0, 0, 0.2);
}
.home_slider{
  margin: 2% 0;
}
.home_numbers p{
  font-size: 36px;
    font-weight: 500;
}
.modal-header .col-md-4 a{
  color: rgba(0, 0, 0, 0.8);
}
.modal-body .col-md-3 a{
  color: rgba(0, 0, 0, 0.8);
}
.modal-body .row{
  margin-top: 20px;
}
.a{
  color: rgba(0, 0, 0, 0.8);
  font-weight: 400;
  font-size: 20px;
  text-decoration: underline;
}
.a:hover{
  color: red;
}
.item-orange{
  background-color: rgba(255, 115, 0, 0.9);
}
.item{
  border-radius: 10px;
}
.item-img{
  height: 70px;
  margin: 20px;
}
.item:hover{
  background-color: rgba(0, 0, 0, 0.8);
}
.item:hover .item-img{
  transform: scale(1.2);
}
.item-text{
  color: white;
}
.item:hover .item-text{
  transform: scale(1.05);
}
.home_gameblock{
  margin: 50px 0;
}
.red{
  background-color: rgb(55%, 11%, 11%, 0.9);
}
.blue{
  background-color: rgba(8, 69, 150, 0.9);
}
.orange{
  background-color: rgba(255, 115, 0, 0.9);
}
.green{
   background-color: rgba(16, 130, 19, 0.9);
}
.dark{
  background-color: rgba(8, 10, 8, 0.9);
}
.fiolet{
  background-color: rgba(86, 23, 120, 0.9);
}
.pink{
  background-color: rgba(173, 0, 142, 0.9);
}
.carGames{
  height: 400px;
  border-radius: 20px;
}
.imgGames{
  width: 30%;
}
.carGame{
  margin: 100px 0;
}


.md-modal {
  margin: auto;
	position: fixed;
	top: 100px;
	left: 0;
  right: 0;
	width: 50%;
	max-width: 630px;
	min-width: 320px;
	height: auto;
	z-index: 2000;
	visibility: hidden;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}

.md-show {
	visibility: visible;
}

.md-overlay {
	position: fixed;
	width: 100%;
	height: 100%;
	visibility: hidden;
	top: 0;
	left: 0;
	z-index: 1000;
	opacity: 0;
	background: rgba(#e4f0e3, 0.8);
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.md-show ~ .md-overlay {
	opacity: 1;
	visibility: visible;
}

.md-effect-12 .md-content {
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	-ms-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.md-show.md-effect-12 ~ .md-overlay {
	background-color: #e4f0e3;
}

.md-effect-12 .md-content h3,
.md-effect-12 .md-content {
	background: transparent;
}

.md-show.md-effect-12 .md-content {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}
.game{
  margin-top: 100px;
}

.logo {
  text-align: center;
}

.head-game{
  font-size: 34px;
  color: white;
  line-height: 1px;
}
.head-game a{
  font-size: 18px;
  color: black;
}
.head-game a:hover{
  color: red;
}
.main-game{
  background-color: rgba(232, 232, 232, 1);
  height: 100px;
  border-radius: 8px;
  margin-top: 30px;
  padding: 40px 50px;
}

.in-main-game{
  background-color: white;
  border-radius: 5px;
  text-align: left;
}


.content-4_20 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 4rem 0;
}

.blocks-ticket {

}

.block-ticket {
  margin-bottom: 1rem;
}

.help-information {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 1rem;
}

.zone-header{
   margin-bottom: 1rem;
}

.zone-worker {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}



.zone-one, .zone-two {
    flex-basis: 15rem;
}
.zone-worker tr > td {
  padding: 0;
  position: relative;
}

.zone-worker tr > td:hover {
    background-color: #eee;
}

.table label {
  margin: 0;
  cursor: pointer;
  width: 100%;
  text-align: center;
  padding: 2vmin 2.8vmin;
}

table input[type='checkbox'] {
  opacity: 0;
   z-index: -1;
  position: absolute;
}

table input[type='checkbox'] + label{
 transition: .5s;
}

table input[type='checkbox']:checked + label{
  background: var(--teal);
}

.quick-panel {
    text-align: center;
}

.panel-score {
    flex-grow: 0.3;
    padding: 1rem 2rem;
}


.inpt1,
.inpt2 {
    display: flex;
    justify-content: space-around;
}

.inpt2 {
    font-size: 18px;
    font-weight: bold;
    border-top: 1px solid #ccc;
    padding: 0.5rem 0;
}

.list-group-item.active {
  background: var(--gray-dark);
  border-color: var(--dark);
}

.hide {
  display: none;
}


.card-block {
  flex-basis: calc(33.333% - 2rem);
  margin-right: 2rem;
}




.shiny
{
  color: #F5C21B;
  background: -webkit-gradient(linear, left top, left bottom, from(#F5C21B), to(#D17000));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
  font-family: "Source Sans Pro", sans-serif;
  font-size: 2em;
  font-weight: 900;
  position: relative;
  text-transform: uppercase;
}

.shiny::before
{
    background-position: -180px;
    -webkit-animation: flare 5s infinite;
  -webkit-animation-timing-function: linear;
  background-image: linear-gradient(65deg, transparent 20%, rgba(255, 255, 255, 0.2) 20%, rgba(255, 255, 255, 0.3) 27%, transparent 27%, transparent 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  content: "Золотая антилопа";
  color: #FFF;
  display: block;
  padding-right: 140px;
  position: absolute;
}

.shiny::after
{
  content: "Золотая антилопа";
  color: #FFF;
  display: block;
  position: absolute;
  text-shadow: 0 1px #6E4414, 0 2px #6E4414, 0 3px #6E4414, 0 4px #6E4414, 0 5px #6E4414, 0 6px #6E4414, 0 7px #6E4414, 0 8px #6E4414, 0 9px #6E4414, 0 10px #6E4414;
  top: 0;
  z-index: -1;
}

.inner-shiny::after, .inner-shiny::before
{
        -webkit-animation: sparkle 5s infinite;
  -webkit-animation-timing-function: linear;
    background: #FFF;
  border-radius: 100%;
  box-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #FFF, 0 0 25px #FFF, 0 0 30px #FFF, 0 0 35px #FFF;
  content: "";
  display: block;
  height: 10px;
  opacity: 0.7;
  position: absolute;
  width: 10px;
}

.inner-shiny::before
{
    -webkit-animation-delay: 0.2s;
  height: 7px;
  left: 0.12em;
  top: 0.8em;
  width: 7px;
}

.inner-shiny::after
{
  top: 0.32em;
  right: -5px;
}

@-webkit-keyframes flare
{
  0%   { background-position: -180px; }
  30%  { background-position: 500px; }
  100% { background-position: 500px; }
}

@-webkit-keyframes sparkle
{
  0%   { opacity: 0; }
  30%  { opacity: 0; }
  40%  { opacity: 0.8; }
  60%  { opacity: 0; }
  100% { opacity: 0; }
}









/* ##########
  #####Menu####
  ###########
*/

@media (min-width: 768px) {
  .navbar-container {
      position: sticky;
      top: 0;
      overflow-y: auto;
      height: 100vh;
      z-index: 1000;
  }

  .navbar-container .navbar {
      align-items: flex-start;
      justify-content: flex-start;
      flex-wrap: nowrap;
      flex-direction: column;
      height: 100%;
  }

  .navbar-container .navbar-collapse {
      align-items: flex-start;
  }

  .navbar-container .nav {
      flex-direction: column;
      flex-wrap: nowrap;
  }

  .navbar-container .navbar-nav {
      flex-direction: column !important;
  }
  
  .right_panel {
    display: block;
  }
}





@media (max-width: 768px) {
  .right_panel {
    display: none;
  }

}

@media (max-width: 1400px) {
  .right_panel {
    text-align: center;
    width: 5%
  }
  .medium-a {
    display: none;
  }

}


</style>
</head>
  <body data-spy="scroll">
    <!-- START left - panel -->

    {{-- <div class="left_panel">
      <div class="column">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalLong">
          Карта
        </button>
        @if (Auth::check())
            <div class="left_nav_panel">
              <a href="{{ route('lk') }}">Личный кабинет</a>
              @if (Auth::user()->isAdmin())
              <a href="{{ route('admin') }}">Админ панель</a>
              @endif
              <a href="{{ route('logout') }}">Выйти</a>
            </div>
            <div class="left_nav_panel">
              <a href="{{ route('ticket') }}">Билеты по СМС</a>
            </div>
            <div class="left_nav_panel">
              <a href="{{ route('broadcast') }}">Трансляции</a>
            </div>
            <div class="left_nav_panel">
              <a href="{{ route('valid_ticket') }}">Проверка билетов</a>
            </div>
        @else
            <div class="left_nav_panel">
              <a href="{{ route('login') }}">Войти</a>
              <a href="{{ route('reg') }}">Регистрация</a>
            </div>
            <div class="left_nav_panel">
              <a href="{{ route('ticket') }}">Билеты по СМС</a>
            </div>
            <div class="left_nav_panel">
            <a href="{{ route('broadcast') }}">Трансляции</a>
            </div>
            <div class="left_nav_panel">
              <a href="{{ route('valid_ticket') }}">Проверка билетов</a>
            </div>
        @endif
      </div>
    </div> --}}

    <!-- END left - panel -->
    <!-- START right - panel -->

    <!-- END right - panel -->
    <!-- site-map -->




    <!-- site-map -->
    <div class="container-fluid" >
      <!-- Modal -->
        <div class="modal fade"  id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog w-100" style="max-width: 1500px; margin: .5rem auto" role="document" >
            <div class="modal-content sitemap">
              <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLongTitle">Карта сайта</h5>
                <h5><br><br>Информационна поддержка: <b>8 900 555-55-55</b> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-header">
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{ route('home') }}">Главная</a>
                  </div>
                  <div class="col-md-4">
                    <a href="#">Гос.лотереи</a>
                  </div>
                  <div class="col-md-4">
                    <a href="#">Лотереи в городе</a>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-3">
                    <h2>Многомиллионные суперпризы</h2>
                    <a href="#"><p>«Гослото «4 из 20»</p></a>
                    <a href="#"><p>«Гослото «7 из 49»</p></a>
                    <a href="#"><p>«Гослото «6 из 45»</p></a>
                    <a href="#"><p>«Гослото «5 из 36»</p></a>
                    <a href="#"><p>«Зодиак»</p></a>
                    <a href="#"><p>«Спортлото Матчбол»</p></a>
                  </div>
                  <div class="col-md-3">
                    <h2>Квартиры, автомобили, миллионы</h2>
                    <a href="#"><p>«Русское лото»</p></a>
                    <a href="#"><p>«Русское лото экспресс»</p></a>
                    <a href="#"><p>«Жилищная лотерея»</p></a>
                    <a href="#"><p>«Золотая подкова»</p></a>
                    <a href="#"><p>«Бинго-75»</p></a>
                    <a href="#"><p>«6 из 36»</p></a>
                  </div>
                  <div class="col-md-3">
                    <h2>Справочник участника</h2>
                    <a href="#"><p>Как купить билет на сайте</p></a>
                    <a href="#"><p>Как получить выигрыш</p></a>
                    <a href="#"><p>Вопрос-ответ</p></a>
                    <a href="#"><p>Правовая информация</p></a>
                    <a href="#"><p>Налогообложение</p></a>
                    <a href="#"><p>Как не попасться мошенникам</p></a>
                  </div>


                  <div class="col-md-3">
                    <h2>Полезные сервисы</h2>
                    <a href="#"><p>Бонусная программа</p></a>
                    <a href="#"><p>Подписка на лотерею</p></a>
                    <a href="#"><p>Билет в подарок</p></a>
                    <a href="#"><p>Система поощрений</p></a>
                    <a href="#"><p>Пригласить друга</p></a>
                    <a href="#"><p>Демо «Топ-3»</p></a>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-3">
                    <h2>Лотереи в вашем мобильном</h2>
                    <a href="#"><p>Мобильный сайт</p></a>
                    <a href="#"><p>Приложения для iOS и Android</p></a>
                    <a href="#"><p>Как купить билет по СМС</p></a>
                  </div>
                  <div class="col-md-3">
                    <h2>Билеты лотерей</h2>
                    <a href="#"><p>Где купить</p></a>
                    <a href="#"><p>Как проверить</p></a>
                    <a href="#"><p>Как получить выигрыш</p></a>
                    <a href="#"><p>Моментальные лотереи</p></a>
                  </div>
                  <div class="col-md-3">
                    <a href="#"> <h3>Все о «***лото»</h3> </a>
                    <a href="#"> <h3>Новости</h3> </a>
                    <a href="#"> <h3>Победители</h3> </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#"> <h3>Пресс-центр</h3> </a>
                    <a href="#"> <h3>Контакты</h3> </a>
                  </div>

                </div>

              </div>
              <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
      </div>

      <div class="row" id="wrapper">
        <div class="col-md-3 col-lg-2 navbar-container"  style="background: rgba(100, 100, 100, 0.0)" >
            <nav class="navbar navbar-expand-md navbar-light" id="sidebar-wrapper" role="navigation">
                <a class="navbar-brand text-uppercase"   href="/">Золотая антилопа</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbar">
                    <!-- Вертикальное меню -->
                    <ul class="navbar-nav w-100 mt-3">
                      <li class="nav-item">
                          <a class="nav-link text-danger" style="width: 100px" data-toggle="modal"  data-target="#exampleModalLong" href="#">Меню</a>
                      </li>

                      @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('lk') }}">Личный кабинет</a>
                        </li>

                            @if (Auth::user()->isAdmin())
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('admin') }}">Админ панель</a>
                            </li>
                            @endif
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                            </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{ route('ticket') }}">Билеты по СМС</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('broadcast') }}">Трансляции</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('valid_ticket') }}">Проверка билетов</a>
                        </li>
                        @else 
                          <li class="nav-item">
                            <a class="nav-link waves-effect" href="{{ route('login') }}">Войти</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('reg') }}">Регистрация</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('ticket') }}">Билеты по СМС</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('broadcast') }}">Трансляции</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('valid_ticket') }}">Проверка билетов</a>
                          </li>
                        @endif
                    </ul>

                </div>
            </nav>
        </div>
        <div class="col-md-7 col-lg-9 col-xl-8 content-container">
          <div class="logo">
            <p class="shiny"><span class="inner-shiny">Золотая антилопа</span></p>
          </div>
            @yield('content')
        </div>
        <div class="col-md-2 col-lg-1 col-xl-2 content-container">
          <div class="right_panel">
            <p><a  href="{{ route('one-game') }}"><img src="img/4iz.png" width="30px" alt=""><span class="medium-a">«Гослото «4 из 20»</span></a></p>
            <p><a  href="{{ route('two-game') }}"><img src="img/5iz.png"  width="30px" alt=""><span class="medium-a">«Гослото «5 из 36»</span></a></p>
            <p><a  href="{{ route('three-game') }}"><img src="img/7iz.png"  width="30px" alt=""><span class="medium-a">«Гослото «7 из 49»</span></a></p>
            <p><a  href="{{ route('four-game') }}"><img src="img/6iz.png" width="30px"  alt=""><span class="medium-a">«Гослото «6 из 45»</span></a></p>
            <p><a  href="{{ route('five-game') }}"><img src="img/12iz.png"  width="30px" alt=""><span class="medium-a">«Гослото «12 из 24»</span></a></p>
            <p><a  href="{{ route('six-game') }}"><img src="img/rapido.png"  width="30px" alt=""><span class="medium-a">«Рапидо»</span></a></p>
            <p><a  href="{{ route('seven-game') }}"><img src="img/top-3.png" width="30px"  alt=""><span class="medium-a">  «Топ - 3»</span></a></p>
          </div>
        </div>    
      </div>
      <!-- Footer -->
    <footer style="margin-top: auto" class="page-footer font-small stylish-color-dark pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ГОСЛОТО</h5>
            <p>Сайт где ты сможешь поднять бабла не напрягаясь, выигрыш в каждом билете!</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Меню</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Главная</a>
              </li>
              <li>
                <a href="#!">Билеты по СМС</a>
              </li>
              <li>
                <a href="#!">Трансляцию</a>
              </li>
              <li>
                <a href="#!">Проверка билетов</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Игры</h5>

            <ul class="list-unstyled">
            <li>
                <a href="#!">Гослото 4 из 20</a>
              </li>
              <li>
                <a href="#!">Гослото 5 из 36</a>
              </li>
              <li>
                <a href="#!">Гослото 7 из 49</a>
              </li>
              <li>
                <a href="#!">Гослото 6 из 45</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: white">Игры</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Гослото 12 из 24</a>
              </li>
              <li>
                <a href="#!">Рапидо</a>
              </li>
              <li>
                <a href="#!">Топ 3</a>
              </li>
           
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <hr>

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Начни прямо сейчас </h5>
        </li>
        <li class="list-inline-item">
          <a href="#!" class="btn btn-danger btn-rounded">Регистрация!</a>
        </li>
      </ul>
      <!-- Call to action -->

      <hr>

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#" class="text-uppercase">Золотая антилопа</a>
      </div>
      <!-- Copyright -->

    </footer>
      <!-- Footer -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js.map') }}"></script> --}}
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      {{-- <script src="{{ asset('js/bootstrap.min.js.map') }}"></script> --}}


      <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>
