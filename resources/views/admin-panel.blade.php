@if(Auth::user()->isAdmin())
      <div class="card mt-5" style="width: 18rem;">
        <h1>Админ панель</h1>
      </div>
@endif