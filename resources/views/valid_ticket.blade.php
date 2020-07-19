@extends('layouts.head')
@section('content')

  </div>
</header>
@if (Session::has('info'))
        <div class="alert alert-success" style=" margin:auto; width:100%; text-align: center;"  role="alert">
            {{   Session::get('info') }}
        </div>
@endif


<div class="card bg-light">
  <article class="card-body mx-auto w-100" style="max-width: 1200px;">
    <h4 class="card-title mt-3 text-center">Проверить билет</h4>
    <p class="text-center">Начните с вашего счастливого билета</p>

    <form class="" style="max-width: 800px; margin: auto;" action="{{ route('ValidTicketGame') }}" method="post" novalidate>
    @csrf     
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-gamepad"></i> </span>
        </div>
          <select class="custom-select"  id="inputGroupSelect01">
            <option selected>Выберите название игры</option>
            <option id="game-4_20" name="one" value="1">Гослото 4 из 20</option>
            <option id="game-5_36" name="two" value="2">Гослото 5 из 36</option>
            <option id="game-7_49" name="three" value="3">Гослото 7 из 49</option>
            <option id="game-6_45" name="four" value="4">Гослото 6 из 45</option>
            <option id="game-12_24" name="five" value="5">Гослото 12 из 24</option>
            <option id="game-rapido" name="six" value="6">Рапидо</option>
          </select>

      </div> <!-- form-group// -->
      
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-drum-steelpan"></i></span>
        </div>
        <input type="number" class="form-control" name="circulation" placeholder="Номер тиража">

      </div> <!-- form-group// -->
     
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-ticket-alt"></i></span>
        </div>
        <input type="number" name="valid" class="form-control valid" id="valid" style="display:none" placeholder="valid number">
        <input type="number" name="fieldOne" class="form-control" placeholder="Номер билета">
        <input type="number" name="fieldTwo" class="form-control hide" placeholder="Номер билета">
      </div> <!-- form-group// -->

      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Проверить</button>
      </div> 
      <!-- form-group// -->      
    </form>

    <h1 class="mt-5" align="center">Результаты текущих игр</h1>

    <div class="row w-100 mt-4" style="margin:auto">
      <nav class="w-100">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-onegame-tab" data-toggle="tab" href="#nav-onegame" role="tab" aria-controls="nav-onegame" aria-selected="true">Гослото 4 из 20</a>
          <a class="nav-item nav-link" id="nav-twogame-tab" data-toggle="tab" href="#nav-twogame" role="tab" aria-controls="nav-twogame" aria-selected="false">Гослото 5 из 36</a>
          <a class="nav-item nav-link" id="nav-threegame-tab" data-toggle="tab" href="#nav-threegame" role="tab" aria-controls="nav-threegame" aria-selected="false">Гослото 7 из 49</a>
          <a class="nav-item nav-link" id="nav-fourgame-tab" data-toggle="tab" href="#nav-fourgame" role="tab" aria-controls="nav-fourgame" aria-selected="false">Гослото 6 из 45</a>
          <a class="nav-item nav-link" id="nav-fivegame-tab" data-toggle="tab" href="#nav-fivegame" role="tab" aria-controls="nav-fivegame" aria-selected="false">Гослото 12 из 24</a>
          <a class="nav-item nav-link" id="nav-sixgame-tab" data-toggle="tab" href="#nav-sixgame" role="tab" aria-controls="nav-sixgame" aria-selected="false">Рапидо</a>
        </div>
      </nav>
      <div class="tab-content w-100 p-4 border border-top-0 text-center" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-onegame" role="tabpanel" aria-labelledby="nav-onegame-tab" align="left">
          @if($userwinner)
            @forelse ($userwinner as $user)
              @if ($user->numberGame == 1)
                <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Пользователь {{$user->user_id}} Результат: {{ $user->win }}</h6>
              @endif
            @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
          @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Розыгрыш еще не проходил</h6>     
          @endif     
        </div>

        <div class="tab-pane fade" id="nav-twogame" role="tabpanel" aria-labelledby="nav-twogame-tab">
          @if($userwinner)
            @forelse ($userwinner as $user)
              @if ($user->numberGame == 2)
                <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Пользователь {{$user->user_id}} Результат: {{ $user->win }}</h6>
              @endif
            @empty  
              <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
          @else
            <h6 class="card-subtitle  card-text mb-2 text-muted ">Розыгрыш еще не проходил</h6>     
          @endif     
        </div>

        <div class="tab-pane fade" id="nav-threegame" role="tabpanel" aria-labelledby="nav-threegame-tab">
          @if($userwinner)
            @forelse ($userwinner as $user)
              @if ($user->numberGame == 3)
                <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Пользователь {{$user->user_id}} Результат: {{ $user->win }}</h6>
              @endif
            @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
          @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Розыгрыш еще не проходил</h6>     
          @endif     
        </div>

        <div class="tab-pane fade" id="nav-fourgame" role="tabpanel" aria-labelledby="nav-fourgame-tab">
          @if($userwinner)
            @forelse ($userwinner as $user)
              @if ($user->numberGame == 4)
                <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Пользователь {{$user->user_id}} Результат: {{ $user->win }}</h6>
              @endif
            @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
          @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Розыгрыш еще не проходил</h6>     
          @endif     
        </div>

        <div class="tab-pane fade" id="nav-fivegame" role="tabpanel" aria-labelledby="nav-fivegame-tab">
          @if($userwinner)
            @forelse ($userwinner as $user)
              @if ($user->numberGame == 5)
                <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Пользователь {{$user->user_id}} Результат: {{ $user->win }}</h6>
              @endif
            @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
          @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Розыгрыш еще не проходил</h6>     
          @endif     
        </div>

        <div class="tab-pane fade" id="nav-sixgame" role="tabpanel" aria-labelledby="nav-sixgame-tab">
          @if($userwinner)
            @forelse ($userwinner as $user)
              @if ($user->numberGame == 6)
                <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Пользователь {{$user->user_id}} Результат: {{ $user->win }}</h6>
              @endif
            @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
          @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Розыгрыш еще не проходил</h6>     
          @endif     
        </div>

      </div>
    </div>
  </article>
  
</div>


@endsection