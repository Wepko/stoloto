@extends('layouts.head')

@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif
<main id="main" class="card mt-5">
  <div class="alert alert-success text-center" style="width:100%;" role="alert">
    <div data-countdown="{{ $time }}"></div>
</div>
<div class="alert alert-warning text-center" role="alert">
        Призовой фонт этой игры <span>{{ $fond ?? '0' }}</span> рублей!
    </div>
  <div class="container">

  </div>
  <div class="two-game">
        <div class="container text-center">
          <div class="row mt-150">
            <p class="head-game" style="color: black">
              <img  class="head-game-img" src="img/5iz.png" width="150px" alt="">
              <h2>Купить билет лотереи «ЗОЛОТАЯ АНТИЛОПА «5 из 36»</h2>
            </p>
          </div>
  
          <form action="{{ route('AddTicketValueTwo') }}" method='post' style="display: flex; justify-content-space-between; width: 100%;">
          @csrf
          <input type="number" name="valid" value="1" class="form-control valid d-none" id="validTicketNumber">
            <div class="container content-4_20">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-8">
                  <div class="game"></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card panel-score box">
                      <img src="" alt="">
                      <div class="future-draw"></div>
                      <p class="inpt1">Номер тиража: {{ $circulation ?? '1' }}</p>
                      <p class="inpt1">Кол-во тиражей<select name="12" id="12">
                          <option value="1">1</option> 
                          <option value="2">2</option> 
                          <option value="3">3</option>
                      </select></p>
                  
                      <p class="inpt1">Билетов <span id="numberTickets">1</span></p>
                      <p class="inpt1">Комбинаций <span id="combinations">0</span></p>
                      <p class="inpt2">Сумма <strong id="sum">0</strong></p>
                      <button type="submit" class="btn btn-dark">Оплатить</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
  </div>
</main>

@if(Auth::check())
    @if(Auth::user()->isAdmin())
    <div class="content-4_20">
        <form action="{{ route('AddWinTicketValueTwo') }}" method="post" >
        @csrf
            <h1>Добавить выигрышный билет</h1>
            <label>Поле 1</label>
            <input type="number" class="form-control" name="TicketTwoFieldOne" placeholder="Введите номера билетов"><br>
            <label>Поле 2</label>
            <input type="number" class="form-control" name="TicketTwoFieldTwo" placeholder="Введите номера билетов"><br>
            <input type="submit" class="btn btn-dark" value="Добавить">
        </form>
    </div>
    @endif
@endif()

</div>
</header>
@endsection
