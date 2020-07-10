@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

@if(Auth::user()->isAdmin())
      <h1 class="mt-5" style="color: white">Панель администратора</h1>
        <div class="card mt-3">
            <p class='inpt1'>Добавьте таймер для обратного отсчета до розыгрыша игры</p>
            <form action= "{{ route('TimerOneGame') }}" method="post">
            @csrf
                <label>Добавить таймер</label><br>
                <input id="datetime" type="datetime-local" id="datetime" name="timer"><br>
                <input type="submit" class="btn btn-dark mt-1" onclick="onegame()"  value="Добавить таймер">
            </form>
            <p class='inpt1'>Чтобы начать розыгрыш обязательно надо сначала добавить выйгрышный билет. Добавить его можно в игре.</p>
            <form action= "{{ route('WinnerOneGame') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-dark mt-1"  value="Начать разыгрыш 4 из 20">
            </form>
        </div>
        <form action= "{{ route('WinnerTwoGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 5 из 36">
        </form>
        <form action= "{{ route('WinnerThreeGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 7 из 49">
        </form>
        <form action= "{{ route('WinnerFourGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 6 из 45">
        </form>
        <form action= "{{ route('WinnerFiveGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 12 из 24">
        </form>
        <form action= "{{ route('WinnerSixGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш рапидо">
        </form>
      
@endif

@endsection