@extends('layouts.head')
@section('content')
</div>
</header>
<div style="width:80%; margin: auto; margin-bottom:100px;">
    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

@if(Auth::user()->isAdmin())

<h1 class="mt-5">Панель администратора</h1>

    <div class="row w-100 mt-4 " >
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
            <h3>Добавление таймера</h3>
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerOneGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" onclick="onegame()"  value="Добавить таймер">
            </form>
            <h3 class="mt-5">Произвести розыгрыш</h3>
            <p class='inpt1'>Чтобы начать розыгрыш обязательно надо сначала добавить выйгрышный билет. Добавить его можно в игре.</p>
            <form action= "{{ route('WinnerOneGame') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-dark"  value="Начать разыгрыш 4 из 20">
            </form>
            <h3 class="mt-5">Статистика</h3>
            <p class="inpt1">Проданных билетов: {{$count[0] ?? '0'}} На сумму: {{$sum[0] ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-twogame" role="tabpanel" aria-labelledby="nav-twogame-tab" align="left">
          <form action= "{{ route('WinnerTwoGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 5 из 36">
          </form>
          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[1] ?? '0'}} На сумму: {{$sum[1] ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-threegame" role="tabpanel" aria-labelledby="nav-threegame-tab" align="left">
          <form action= "{{ route('WinnerThreeGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 7 из 49">
          </form>
          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[2] ?? '0'}} На сумму: {{$sum[2] ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-fourgame" role="tabpanel" aria-labelledby="nav-fourgame-tab" align="left">
          <form action= "{{ route('WinnerFourGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 6 из 45">
          </form>
          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[3] ?? '0'}} На сумму: {{$sum[3] ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-fivegame" role="tabpanel" aria-labelledby="nav-fivegame-tab" align="left">
          <form action= "{{ route('WinnerFiveGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 12 из 24">
          </form>
          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[4] ?? '0'}} На сумму: {{$sum[4] ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-sixgame" role="tabpanel" aria-labelledby="nav-sixgame-tab" align="left">
          <form action= "{{ route('WinnerSixGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш рапидо">
          </form>
          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[5] ?? '0'}} На сумму: {{$sum[5] ?? '0'}}</p>
        </div>

      </div>
    </div>

      <div class="mt-5"> 
        <h1>Модерация</h1>
        <br><br><br>
        @if($useroutputs)
          @forelse ($useroutputs as $user)
            <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Номер карты {{ $user->cardNumber }} Сумма {{ $user->price }}</h6>
          @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Счетов пока нету</h6>
          @endforelse
        @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Счетов нету</h6>     
        @endif  
      </div>
      <div class="mt-5"> 
        <h1>Распределение джекпота</h1>
        <form action= "{{ route('distribution') }}" method="post">
          @csrf
          <input type="submit" class="btn btn-dark mt-2" value="Начать распределение">
      </form>
      </div>
@endif
    </div>
@endsection
