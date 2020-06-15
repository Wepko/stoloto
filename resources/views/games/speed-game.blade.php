@extends('layouts.head')
@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif
  @if (Session::has('res'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('res') }}
  </div>
  @endif

<main id="main">
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            Быстрая игра
        </div>
        <div id="addRes"></div>
    </div>
        <div class=" container">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-9">
                    <div class="blocks-ticket">
                        <div class="block-ticket card">
                            <div class="help-information">
                                <p id='startInfo'>В этой игре вам нужно из 6 ячеек угадать 4 ячейки, где скрывается слово ПРИЗ. 
                                Общее количесвто попыток на открытие ячеек 5. Стоимость билета 20 рублей. 
                                В случае выигрыша вы получите 100 рублей. При оплате билета не обновляйте страницу! Приятной игры!</p>
                                <p id='runInfo' style='display: none;'>Выбирете в поле до 5 ячеек, В случае если 4 из них соберут слово ПРИЗ, то вы выйграете 100 рублей. Удачи!</p>
                            </div>
                            <div class="zone-worker">
                               <div id="addTable"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-3">
                    <div class="card panel-score box">
                        <img src="" alt="">
                        <p class="inpt2" id="summa">Сумма <strong>20</strong></p>
                        <button type="submit" class="btn btn-dark" id='payGame' onclick="createGame()">Оплатить</button>
                        <button type="submit" class="btn btn-dark" id='runGame' style='display: none' onclick="runGame()">Начать</button>
                    </div>
                </div>
             </div>
        </div>

</main>
<script src="{{ asset('js/speedGame.js')}}"></script>
@endsection
