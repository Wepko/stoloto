@extends('layouts.head')
@section('content')

@if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

  </div>
</header>
{{-- <h1>Проверить билет</h1>
<div class="col-5 mt-5">
    <form action="{{ route('ValidTicketGame') }}" method="post">
      @csrf
        <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Игра</label>
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
            </div>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" name="circulation" placeholder="Номер тиража" required>
        </div>
        <div class="form-group">
            <input type="number" name="valid" class="form-control valid" id="valid" style="display:none" placeholder="valid number" required>
            <input type="number" name="fieldOne" class="form-control" placeholder="Номер билета" required>
            <input type="number" name="fieldTwo" class="form-control hide mt-2" placeholder="Номер билета" required>
        </div>
        <button type="submit" class="btn btn-primary">Проверить</button>
      </form>
</div> --}}

<div class="card bg-light mt-5">
  <article class="card-body mx-auto w-100" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Проверить билет</h4>
    <p class="text-center">Начните с вашего счастливого билета</p>

    <form class="" action="{{ route('ValidTicketGame') }}" method="post" novalidate>
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
  </article>
</div>


@endsection