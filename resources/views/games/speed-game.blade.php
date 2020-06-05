@extends('layouts.head')
@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif

<main id="main">
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            Призовой фонт этой игры <span> 5123525 руб</span>
        </div>
      </div>
      @if (Session::has('good'))
        <form action="{{ route('OneSpeedGameRes') }}" method='post'>
      @else
        <form action="{{ route('OneSpeedGame') }}" method='post'>
      @endif
      @csrf
        <div class=" container">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-9">
                    <div class="blocks-ticket">
                        <div class="block-ticket card">
                            <div class="help-information">
                                <p>В этой игре вам нужно из 6 ячеек угадать 4 ячейки, где скрывается слово ПРИЗ. 
                                Общее количесвто попыток на открытие ячеек 5. Стоимость билета 20 рублей. 
                                В случае выигрыша вы получите 100 рублей. При оплате билета не обновляйте страницу! Приятной игры!</p>
                            </div>
                            <div class="zone-worker">
                                @if (Session::has('good'))
                                <table class="table table-bordered" style="width:80%">
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="lot1" id="lot1" value="1"><label for="lot1">?</label></td>
                                            <td><input type="checkbox" name="lot2" id="lot2" value="2"><label for="lot2">?</label></td>
                                            <td><input type="checkbox" name="lot3" id="lot3" value="3"><label for="lot3">?</label></td>
                                            <td><input type="checkbox" name="lot4" id="lot4" value="4"><label for="lot4">?</label></td>
                                            <td><input type="checkbox" name="lot5" id="lot5" value="5"><label for="lot5">?</label></td>
                                            <td><input type="checkbox" name="lot6" id="lot6" value="6"><label for="lot6">?</label></td>
                                        </tr>
                                    </tbody>
                                </table>  
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-3">
                    <div class="card panel-score box">
                        <img src="" alt="">
                        @if (Session::has('good'))
                            <button type="submit" class="btn btn-dark">Испытать удачу!</button>
                        @else
                            <p class="inpt2">Сумма <strong>20</strong></p>
                            <button type="submit" class="btn btn-dark">Оплатить</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>

@if(Auth::check())
    @if(Auth::user()->isAdmin())
    <div class="content-4_20">
        <form action="{{ route('AddWinTicketValueFive') }}" method="post" >
        @csrf
            <h1>Добавить выигрышный билет</h1>
            <label>Поле 1</label>
            <input type="number" class="form-control" name="TicketFiveFieldOne" placeholder="Введите номера билетов"><br>
            <input type="submit" class="btn btn-dark" value="Добавить">
        </form>
    </div>
    @endif
@endif()

@endsection
