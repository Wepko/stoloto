@extends('layouts.head')

@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif
<main id="main" class="card mt-5">
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            Призовой фонт этой игры <span>{{ $fond ?? '0' }}</span> рублей!
        </div>
      </div>
    <form action="{{ route('AddTicketValueFour') }}" method='post' style="display: flex; justify-content: space-between; width: 100%;">
      @csrf
      <input type="number" name="valid" value="1" class="form-control valid d-none" id="validTicketNumber">
      <div class="container">
        <div class="row mt-150">
            <p class="head-game" style="color: black">
              <img src="img/6iz.png" class="head-game-img" width="150px" alt="">
              <h2>Купить билет лотереи «ЗОЛОТАЯ АНТИЛОПА «6 из 45»</h2> <br>
            </p>
          </div>
          <div class="row">
              <div class="col-12 col-md-12 col-xl-9">
                  <div class="blocks-ticket" >
                      <div class="game"></div>
                  </div>
              </div>
              <div class="col-12 col-md-12 col-xl-3">
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
</main>

@if(Auth::check())
    @if(Auth::user()->isAdmin())
    <div class="content-4_20">
        <form action="{{ route('AddWinTicketValueFour') }}" method="post" >
        @csrf
            <h1>Добавить выигрышный билет</h1>
            <label>Поле 1</label>
            <input type="number" class="form-control" name="TicketFourFieldOne" placeholder="Введите номера билетов"><br>
            <input type="submit" class="btn btn-dark" value="Добавить">
        </form>
    </div>
    @endif
@endif()

@endsection
