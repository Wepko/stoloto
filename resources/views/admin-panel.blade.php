@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

@if(Auth::user()->isAdmin())
      <h1 class="mt-5">Панель администратора</h1>
    
        <form action= "{{ route('WinnerOneGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 4 из 20">
        </form>
        <form action= "{{ route('WinnerTwoGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 5 из 36">
        </form>
      
@endif

@endsection