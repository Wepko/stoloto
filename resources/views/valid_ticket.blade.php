@extends('layouts.head')
@section('content')

<h1>Проверить билет</h1>
<div class="col-5 mt-5">
    <form action="" method="post">
      @csrf
        <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Игра</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Выберите название игры</option>
                <option value="1">Гослото 4 из 20</option>
                <option value="2">Гослото 5 из 36</option>
                <option value="3">Гослото 7 из 49</option>
                <option value="4">Гослото 6 из 45</option>
                <option value="5">Гослото 12 из 24</option>
                <option value="6">Рапидо</option>
              </select>
            </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Номер тиража">
          
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Номер билета">
        </div>
        <button type="submit" class="btn btn-primary">Проверить</button>
      </form>
</div>

@endsection