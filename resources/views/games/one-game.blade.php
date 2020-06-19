@extends('layouts.head')
@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif

<main id='main' class="card mt-5">
    <div class="container">
        <div class="countdown">
            До розыгрыша:
            <span id="clock"></span>
          </div>
        <div class="alert alert-warning text-center" role="alert">
            Призовой фонд игры <span>{{ $fond ?? '0' }}</span> рублей!
        </div>
    </div>
    <div class="container">
        <div class="title-game row">
            <div class="col-2">
                <img class="w-75 head-game-img" src="img/4iz.png" alt="">
            </div>
            <div class="col-10">
                <h2>Купить билет лотереи «ЗОЛОТАЯ АНТИЛОПА «4 из 20»</h2>
            </div>
        </div>
    </div>
    <form action="{{ route('AddTicketValueOne') }}" method='post'>
        @csrf
        <input type="number" name="valid" value="1" class="form-control valid d-none" id="validTicketNumber">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="game">
                        
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="card panel-score box">
                        <img src="" alt="">
                        <div class="future-draw"></div>
                        <p class="inpt1">Номер тиража: {{ $circulation ?? '1' }}</p>
                        <p class="inpt1">Кол-во тиражей<select name="12" id="12">
                            <option value="1">1</option> 
                            <option value="2">2</option> 
                            <option value="3">3</option>
                            <option value="4">4</option> 
                            <option value="5">5</option> 
                            <option value="6">6</option>
                            <option value="7">7</option> 
                            <option value="8">8</option> 
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select></p>
                    
                        <p class="inpt1">Билетов <span id="numberTickets">1</span></p>
                        <p class="inpt1">Комбинаций <span id="combinations">0</span></p>
                        <p class="inpt2" >Сумма <strong id="sum">0</strong></p>
                        <button type="submit" class="btn btn-dark">Оплатить</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.js"></script>

<script>

    $('#clock').countdown('2020/10/10 12:34:56')
    .on('update.countdown', function(event) {
    var format = '%H:%M:%S';
    if(event.offset.totalDays > 0) {
        format = '%-d day%!d ' + format;
    }
    if(event.offset.weeks > 0) {
        format = '%-w week%!w ' + format;
    }
    $(this).html(event.strftime(format));
    })
    .on('finish.countdown', function(event) {
    $(this).html('This offer has expired!')
        .parent().addClass('disabled');
    });
</script>

@if(Auth::check())
    @if(Auth::user()->isAdmin())
    <main id='main' class="card mt-5">
        <form action="{{ route('AddWinTicketValueOne') }}" method="post" >
        @csrf
            <div class="content-4_20">
                <h1>Добавить выигрышный билет</h1>
                <label>Поле 1</label>
                <input type="number" class="form-control" name="TicketOneFieldOne" placeholder="Введите номера билетов"><br><br>
                <label>Поле 2</label>
                <input type="number" class="form-control" name="TicketOneFieldTwo" placeholder="Введите номера билетов"><br><br>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </div>
        </form>
    </main>
    @endif
@endif()

@endsection


