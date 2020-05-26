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
    <form action="{{ route('AddTicketValueThree') }}" method='post' style="display: flex; justify-content-space-between; width: 100%;">
    @csrf
    <input type="number" name="valid" class="form-control valid d-none" id="validTicketNumber">
        <div class=" container content-4_20">
            <div class="row">
                <div class="col-9">
                    <div class="blocks-ticket">
                        <div class="block-ticket card">
                            <div class="help-information">
                                <p>Отметьте от 7 до 14 чисел. Чем больше чисел отмечено — тем выше вероятность выигрыша.</p>
                                <a href="#" class="btn btn-dark mb-5" id="addTicket">Добавить билет</a>
                            </div>
                        
                            <div class="zone-worker">
                                <div class="zone-one">
                                  <div class="zone-header">Поле 1 <p></p></div>
          
                                </div>
            
                            </div>
              
                            <div class="card-footer quick-panel">
                                <div class="btn btn-dark">1</div>
                                <div class="btn btn-dark">2</div>
                                <div class="btn btn-dark">3</div>
                                <div class="btn btn-dark">4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card panel-score box">
                        <img src="" alt="">
                        <div class="future-draw"></div>
                        <p class="inpt1">Кол-во тиражей<select name="12" id="12">
                            <option value="1">1</option> 
                            <option value="2">2</option> 
                            <option value="3">3</option>
                        </select></p>
                    
                        <p class="inpt1">Билетов <span>0</span></p>
                        <p class="inpt1">Комбинаций <span>0</span></p>
                        <p class="inpt2">Сумма <strong>0</strong></p>
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
        <form action="{{ route('AddWinTicketValueThree') }}" method="post" >
        @csrf
            <h1>Добавить выигрышный билет</h1>
            <label>Поле 1</label>
            <input type="number" class="form-control" name="TicketThreeFieldOne" placeholder="Введите номера билетов"><br>
            <input type="submit" class="btn btn-dark" value="Добавить">
        </form>
    </div>
    @endif
@endif()

@endsection
