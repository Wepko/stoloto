@extends('layouts.head')
@section('content')
</div>
</header>
<main role="main" >

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Тиражи в прямом эфире</h1>
        <p>Смотрите прямые трансляции тиражей государственных лотерей! Выигрышные комбинации определятся прямо на ваших глазах!</p>
        <p><a class="btn btn-primary btn-lg" href="https://www.youtube.com/channel/UCZcxoworiPEC3ejKEG_ZUPA/" target="_blank"  role="button" >Хочу на шоу</a></p>
      </div>
    </div>

    <div align="center">
      <!--<iframe style="width: 80vw; height: 80vh" src="https://www.youtube.com/embed/sRh0_W9eQow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    </div>

    <h1 class="display-5 text-center mb-5 mt-5" >Ближайшие трансляции</h1>
    <div class="container">
      
      <div class="row">
        <div class="col-md-4">
          <h2 >Гослото 4 из 20</h2>
          <p >Теперь вы знаете, за что играете!
            Выиграйте суперприз,
            угадав все числа!</p>
          <p><a class="btn btn-light" href="{{route('one-game')}}" role="button">Билет от 200р</a></p>
        </div>
        <div class="col-md-4">
            <h2 >Гослото</h2>
            <p >Теперь вы знаете, за что играете!
              Выиграйте суперприз,
              угадав 6 чисел!</p>
            <p><a class="btn btn-light" href="{{route('two-game')}}" role="button">Билет от 40р</a></p>
          </div>
          <div class="col-md-4">
            <h2 >Гослото</h2>
            <p >Теперь вы знаете, за что играете!
              Выиграйте суперприз,
              угадав 7 чисел!</p>
            <p><a class="btn btn-light" href="{{route('three-game')}}" role="button">Билет от 25р</a></p>
          </div>
      </div>

      <hr>

    </div> <!-- /container -->

  </main>

@endsection