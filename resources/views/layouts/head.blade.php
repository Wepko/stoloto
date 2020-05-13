<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css.map')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css.map')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css.map')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map')}}">
  </head>
  <body>
    <!-- START left - panel -->
    <div class="left_panel">
      <div class="column">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalLong">
          Карта
        </button>
        @if (Auth::check())
            <div class="left_nav_panel">
              <a href="{{ route('lk') }}">Личный кабинет</a>
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
    </div>
    <!-- END left - panel -->
    <!-- START right - panel -->
    <div class="right_panel">
    <a href="/four-of-twenty"><p><img src="img/4iz.png" width="30px" alt=""> «Гослото «4 из 20»</p></a>
    <a href="/five-of-threety-six"><p><img src="img/5iz.png" width="30px" alt=""> «Гослото «5 из 36»</p></a>
    <a href="/seven-of-fourty-nine"><p><img src="img/7iz.png" width="30px" alt=""> «Гослото «7 из 49»</p></a>
    <a href="/six-of-fourty-five"> <p><img src="img/6iz.png" width="30px" alt=""> «Гослото «6 из 45»</p></a>
    <a href="/twenteen-of-twenty-four">  <p><img src="img/12iz.png" width="30px" alt=""> «Гослото «12 из 24»</p></a>
    <a href="/rapido"><p><img src="img/rapido.png" width="30px" alt=""> «Рапидо»</p></a>
    <a href="/top-4"> <p><img src="img/top-3.png" width="30px" alt=""> «Топ - 3»</p></a>

    </div>
    <!-- END right - panel -->
    <!-- site-map -->




    <!-- site-map -->
    <div class="container text-center">
      <!-- Modal -->
      <div class="modal fade"  id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document" style='width: 100%'>
          <div class="modal-content sitemap" style="max-width: 1500px; min-width:1000px;">
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

      @yield('content')

    </body>
    </html>
