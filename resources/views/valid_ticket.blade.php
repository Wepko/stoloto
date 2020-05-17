@extends('layouts.head')
@section('content')

<h1>Проверить билет</h1>
<div class="col-5 mt-5">
    <form>
        <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Выбирите лотерею</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Номер тиража">
          
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Номер билета">
            <button type="button" class="btn btn-outline-info mt-2">Добавить билет</button>
        </div>
        <button type="submit" class="btn btn-primary">Проверить</button>
      </form>
</div>

@endsection