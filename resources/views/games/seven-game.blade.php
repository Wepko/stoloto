@extends('layouts.head')
@section('content')

<main id="main">
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            Призовой фонт этой игры <span> 5123525 руб</span>
        </div>
      </div>
    <form action="{{ route('AddTicketValueFive') }}" method='post' style="display: flex; justify-content-space-between; width: 100%;">
    @csrf

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-xl-9">                    
                <div class="blocks-ticket" >
                    <div class="block-ticket card">
                        <div class="help-information">
                            <p>Выберите 12 чисел в игровом поле.</p>
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
            <div class="col-12 col-md-12 col-xl-3">
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

@endsection
