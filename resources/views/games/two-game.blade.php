@extends('layouts.head')

@section('content')

<div class="two-game">
      <div class="container text-center">
        <div class="row game mt-150">
          <p class="head-game" style="color: black">
            <img src="img/5iz.png" width="150px" alt="">
            Купить билет лотереи «Гослото «5 из 36» <br>
          </p>
        </div>

          <div class="content-4_20">
            <form action="{{ route('AddTicketValue') }}" method='post' style="display: flex; justify-content-space-between; width: 100%;">
            @csrf
                <div class="blocks-ticket" id="test">
                    <div class="card">
                        <div class="help-information">
                            <p>Отметьте не менее 4 чисел в каждом поле.</p>
                            <a href="#" class="btn btn-dark" onclick="addTicket()">Добавить билет</a>
                        </div>
                    
                        <div class="zone-worker">
                            <div class="zone-one">
                              <div class="zone-header">Поле 1 <p></p></div>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><label for="">1</label><input type="text"></td>
                                        <td><label for="">2</label><input type="text"></td>
                                        <td><label for="">3</label><input type="text"></td>
                                        <td><label for="">4</label><input type="text"></td>
                                        <td><label for="">5</label><input type="text"></td>
                                        <td><label for="">6</label><input type="text"></td>
                                        <td><label for="">7</label><input type="text"></td>
                                        <td><label for="">8</label><input type="text"></td>
                                        <td><label for="">9</label><input type="text"></td>
                                        <td><label for="">10</label><input type="text"></td>
                                      </tr>
                                      <tr>
                                        <td><label for="">11</label><input type="text"></td>
                                        <td><label for="">12</label><input type="text"></td>
                                        <td><label for="">13</label><input type="text"></td>
                                        <td><label for="">14</label><input type="text"></td>
                                        <td><label for="">15</label><input type="text"></td>
                                        <td><label for="">16</label><input type="text"></td>
                                        <td><label for="">17</label><input type="text"></td>
                                        <td><label for="">18</label><input type="text"></td>
                                        <td><label for="">19</label><input type="text"></td>
                                        <td><label for="">20</label><input type="text"></td>
                                      </tr>
                                      <tr>
                                        <td><label for="">21</label><input type="text"></td>
                                        <td><label for="">22</label><input type="text"></td>
                                        <td><label for="">23</label><input type="text"></td>
                                        <td><label for="">24</label><input type="text"></td>
                                        <td><label for="">25</label><input type="text"></td>
                                        <td><label for="">26</label><input type="text"></td>
                                        <td><label for="">27</label><input type="text"></td>
                                        <td><label for="">28</label><input type="text"></td>
                                        <td><label for="">29</label><input type="text"></td>
                                        <td><label for="">30</label><input type="text"></td>
                                      </tr>
                                      <tr>
                                        <td><label for="">31</label><input type="text"></td>
                                        <td><label for="">32</label><input type="text"></td>
                                        <td><label for="">33</label><input type="text"></td>
                                        <td><label for="">34</label><input type="text"></td>
                                        <td><label for="">35</label><input type="text"></td>
                                        <td><label for="">36</label><input type="text"></td>
                                      </tr>
                                    </tbody>
                                </table> 
                            </div>
                            <div class="zone-two">
                              <div class="zone-header">Поле 2 <p></p></div>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><label for="">1</label><input type="text"></td>
                                        <td><label for="">2</label><input type="text"></td>
                                        <td><label for="">3</label><input type="text"></td>
                                        <td><label for="">4</label><input type="text"></td>
                                      </tr>
                                    </tbody>
                                </table> 
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
            </form>
          </div>
      </div>
</div>



@endsection
