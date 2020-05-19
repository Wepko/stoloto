@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

@if(Auth::user()->isAdmin())
      <h1 class="mt-5">Панель администратора</h1>
      <div class="card mt-5" style="width: 18rem;">
        <a href="{{ route('Winner') }}"class="btn btn-dark mt-2">Начать разыгрыш</a>
      </div>
@endif

@endsection