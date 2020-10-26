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
                <input type="submit" class="btn btn-dark mt-1"  value="Добавить таймер">
            </form>

            <form action="{{ route('StopGame') }}" class="mt-5" method="post">
              <input type="number" name="number" value="1" style="display: none"><br>
              <input type="submit" class="btn btn-dark mt-1"  value="Остановить игру">
            </form>

            <form action="{{ route('AddWinTicketValueOne') }}" method="post" >
              @csrf
                  <div class="content-4_20">
                      <label>Поле 1</label>
                      <input type="number" class="form-control" name="TicketOneFieldOne" placeholder="Введите номера билетов"><br><br>
                      <label>Поле 2</label>
                      <input type="number" class="form-control" name="TicketOneFieldTwo" placeholder="Введите номера билетов"><br><br>
                      <input type="submit" class="btn btn-dark" value="Добавить">
                  </div>
            </form>
            <h3 class="mt-5">Произвести розыгрыш</h3>
            <p class='inpt1'>Чтобы начать розыгрыш обязательно надо сначала добавить выйгрышный билет. Добавить его можно в игре.</p>
            <form action= "{{ route('WinnerOneGame') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-dark"  value="Начать разыгрыш 4 из 20">
            </form>
            <h3 class="mt-5">Изменить цену билета</h3>
            <form action= "{{ route('ReplaceOneGame') }}" method="post">
                @csrf
                <input type="number" name="price" class="btn border" placeholder="Введите новую цену">
                <input type="submit" class="btn btn-dark"  value="Изменить цену 4 из 20">
            </form>
            <h3 class="mt-5">Статистика</h3>
            <p class="inpt1">Проданных билетов: {{$count[0] ?? '0'}} На сумму: {{$sum[0] * 2 ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-twogame" role="tabpanel" aria-labelledby="nav-twogame-tab" align="left">
          <h3>Добавление таймера</h3>
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerTwoGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" value="Добавить таймер">
          </form>
          <form action="{{ route('StopGame') }}" class="mt-5" method="post">
            <input type="number" name="number" value="2" style="display: none"><br>
            <input type="submit" class="btn btn-dark mt-1"  value="Остановить игру">
          </form>
          <form action="{{ route('AddWinTicketValueTwo') }}" method="post" >
            @csrf
                <h1 class="mt-3">Добавить выигрышный билет</h1>
                <label>Поле 1</label>
                <input type="number" class="form-control" name="TicketTwoFieldOne" placeholder="Введите номера билетов"><br>
                <label>Поле 2</label>
                <input type="number" class="form-control" name="TicketTwoFieldTwo" placeholder="Введите номера билетов"><br>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </form>
          <form action= "{{ route('WinnerTwoGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 5 из 36">
          </form>

          <h3 class="mt-5">Изменить цену билета</h3>
            <form action= "{{ route('ReplaceTwoGame') }}" method="post">
                @csrf
                <input type="number" name="price" class="btn border" placeholder="Введите новую цену">
                <input type="submit" class="btn btn-dark"  value="Изменить цену 5 из 36">
            </form>

          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[1] ?? '0'}} На сумму: {{$sum[1] * 2 ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-threegame" role="tabpanel" aria-labelledby="nav-threegame-tab" align="left">
          <h3>Добавление таймера</h3>
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerThreeGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" value="Добавить таймер">
          </form>
          <form action="{{ route('StopGame') }}" class="mt-5" method="post">
            <input type="number" name="number" value="3" style="display: none"><br>
            <input type="submit" class="btn btn-dark mt-1"  value="Остановить игру">
          </form>
          <form action="{{ route('AddWinTicketValueThree') }}" method="post" >
            @csrf
                <h1>Добавить выигрышный билет</h1>
                <label>Поле 1</label>
                <input type="number" class="form-control" name="TicketThreeFieldOne" placeholder="Введите номера билетов"><br>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </form>
          <form action= "{{ route('WinnerThreeGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 7 из 49">
          </form>

          <h3 class="mt-5">Изменить цену билета</h3>
            <form action= "{{ route('ReplaceThreeGame') }}" method="post">
                @csrf
                <input type="number" name="price" class="btn border" placeholder="Введите новую цену">
                <input type="submit" class="btn btn-dark"  value="Изменить цену 7 из 49">
            </form>

          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[2] ?? '0'}} На сумму: {{$sum[2] * 2 ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-fourgame" role="tabpanel" aria-labelledby="nav-fourgame-tab" align="left">
          <h3>Добавление таймера</h3>
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerFourGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" value="Добавить таймер">
          </form>
          <form action="{{ route('StopGame') }}" class="mt-5" method="post">
            <input type="number" name="number" value="4" style="display: none"><br>
            <input type="submit" class="btn btn-dark mt-1"  value="Остановить игру">
          </form>
          <form action="{{ route('AddWinTicketValueFour') }}" method="post" >
            @csrf
                <h1>Добавить выигрышный билет</h1>
                <label>Поле 1</label>
                <input type="number" class="form-control" name="TicketFourFieldOne" placeholder="Введите номера билетов"><br>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </form>
          <form action= "{{ route('WinnerFourGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 6 из 45">
          </form>

          <h3 class="mt-5">Изменить цену билета</h3>
            <form action= "{{ route('ReplaceFourGame') }}" method="post">
                @csrf
                <input type="number" name="price" class="btn border" placeholder="Введите новую цену">
                <input type="submit" class="btn btn-dark"  value="Изменить цену 6 из 45">
            </form>

          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[3] ?? '0'}} На сумму: {{$sum[3] * 2 ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-fivegame" role="tabpanel" aria-labelledby="nav-fivegame-tab" align="left">
          <h3>Добавление таймера</h3>
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerFiveGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" value="Добавить таймер">
          </form>
          <form action="{{ route('StopGame') }}" class="mt-5" method="post">
            <input type="number" name="number" value="5" style="display: none"><br>
            <input type="submit" class="btn btn-dark mt-1"  value="Остановить игру">
          </form>
          <form action="{{ route('AddWinTicketValueFive') }}" method="post" >
            @csrf
                <h1>Добавить выигрышный билет</h1>
                <label>Поле 1</label>
                <input type="number" class="form-control" name="TicketFiveFieldOne" placeholder="Введите номера билетов"><br>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </form>
          <form action= "{{ route('WinnerFiveGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 12 из 24">
          </form>

          <h3 class="mt-5">Изменить цену билета</h3>
            <form action= "{{ route('ReplaceFiveGame') }}" method="post">
                @csrf
                <input type="number" name="price" class="btn border" placeholder="Введите новую цену">
                <input type="submit" class="btn btn-dark"  value="Изменить цену 12 из 24">
            </form>

          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[4] ?? '0'}} На сумму: {{$sum[4] * 2  ?? '0'}}</p>
        </div>

        <div class="tab-pane fade" id="nav-sixgame" role="tabpanel" aria-labelledby="nav-sixgame-tab" align="left">
          <h3>Добавление таймера</h3>
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerSixGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" value="Добавить таймер">
          </form>
          <form action="{{ route('StopGame') }}" class="mt-5" method="post">
            <input type="number" name="number" value="6" style="display: none"><br>
            <input type="submit" class="btn btn-dark mt-1"  value="Остановить игру">
          </form>
          <form action="{{ route('AddWinTicketValueSix') }}" method="post" >
            @csrf
                <h1>Добавить выигрышный билет</h1>
                <label>Поле 1</label>
                <input type="number" class="form-control" name="TicketSixFieldOne" placeholder="Введите номера билетов"><br>
                <label>Поле 2</label>
                <input type="number" class="form-control" name="TicketSixFieldTwo" placeholder="Введите номера билетов"><br>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </form>
          <form action= "{{ route('WinnerSixGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш рапидо">
          </form>

          <h3 class="mt-5">Изменить цену билета</h3>
            <form action= "{{ route('ReplaceSixGame') }}" method="post">
                @csrf
                <input type="number" name="price" class="btn border" placeholder="Введите новую цену">
                <input type="submit" class="btn btn-dark"  value="Изменить цену Рапидо">
            </form>

          <h3 class="mt-5">Статистика</h3>
          <p class="inpt1">Проданных билетов: {{$count[5] ?? '0'}} На сумму: {{$sum[5] * 2 ?? '0'}}</p>
        </div>

      </div>
    </div>

      <div class="mt-5"> 
        <h1>Модерация</h1>
        <br><br><br>
        @if($useroutputs)
          @forelse ($useroutputs as $user)
            <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">ID пользователя {{ $user->user_id}} Номер карты {{ $user->cardNumber }} Сумма {{ $user->price }}</h6>
          @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Счетов пока нету</h6>
          @endforelse
        @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Счетов нету</h6>     
        @endif  
      </div>
      <div class="mt-5"> 
        <h1>Распределение джекпота</h1>
        <form action= "{{ route('TimerDistGame') }}" method="post">
          @csrf
              <label>Добавить таймер</label><br>
              <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
              <input type="submit" class="btn btn-dark mt-1"  value="Добавить таймер">
          </form>
        <form action= "{{ route('distgame') }}" method="post">
          @csrf
          <input type="number" name="game" class="btn border" placeholder="Введите номер игры для распределения" style="width: 360px"><br>
          <input type="submit" class="btn btn-dark"  value="Начать распределение">
      </form>
      <form action= "{{ route('distribution') }}" method="post" class="mt-5">
          @csrf
          <label>Внимание! Розыгрыш распределение нужно проводить после окончания таймера</label><br>
          <input type="number" name="winticket" class="btn border" placeholder="Введите комбинацию распределения" style="width: 360px"><br>
          <input type="submit" class="btn btn-dark" value="Провести распределение">
      </form>
      </div>
      <div class="mt-5"> 
        <h1>Rename referal coff</h1>
        <form action= "{{ route('RenameRefCoff') }}" method="post">
          @csrf
              <label>Rename</label><br>
              <input id="number" type="number"  name="number"><br>
              <input type="submit" class="btn btn-dark mt-1"  value="Rename">
          </form>
      </div>
@endif
    </div>
@endsection
