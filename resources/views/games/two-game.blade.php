@extends('layouts.head')

@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif

<div class="two-game">
      <div class="container text-center">
        <div class="row game mt-150">
          <p class="head-game">
            <img src="img/5iz.png" width="150px" alt="">
            Купить билет лотереи «Гослото «5 из 36» <br>
          </p>
        </div>

          <div class="content-4_20">
            <form action="{{ route('AddTicketValueTwo') }}" method='post' style="display: flex; justify-content-space-between; width: 100%;">
            @csrf
                <div class="blocks-ticket" id="test">
                    <div class="card">
                        <div class="help-information">
                            <p>Отметьте от 5 до 11 чисел в первом поле и от 1 до 4 во втором. Чем больше чисел отмечено — тем выше вероятность выигрыша.</p>
                            <a href="#" class="btn btn-dark mb-5" onclick="addTicket()">Добавить билет</a>
                        </div>
                    
                        <div class="zone-worker">
                            <div class="zone-one">
                              <div class="zone-header">Поле 1 <p></p></div>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><label for="ticketOne_fieldOne1">1</label><input type="сheckbox" name="ticket1_fieldTwo1" id="ticketOne_fieldOne1" value="1"></td>
                                        <td><label for="ticketOne_fieldOne2">2</label><input type="сheckbox" name="ticket1_fieldTwo2" id="ticketOne_fieldOne2" value="2"></td>
                                        <td><label for="ticketOne_fieldOne3">3</label><input type="сheckbox" name="ticket1_fieldTwo3" id="ticketOne_fieldOne3" value="3"></td>
                                        <td><label for="ticketOne_fieldOne4">4</label><input type="сheckbox" name="ticket1_fieldTwo4" id="ticketOne_fieldOne4" value="4"></td>
                                        <td><label for="ticketOne_fieldOne5">5</label><input type="сheckbox" name="ticket1_fieldTwo5" id="ticketOne_fieldOne5" value="5"></td>
                                        <td><label for="ticketOne_fieldOne6">6</label><input type="сheckbox" name="ticket1_fieldTwo6" id="ticketOne_fieldOne6" value="6"></td>
                                        <td><label for="ticketOne_fieldOne7">7</label><input type="сheckbox" name="ticket1_fieldTwo7" id="ticketOne_fieldOne7" value="7"></td>
                                        <td><label for="ticketOne_fieldOne8">8</label><input type="сheckbox" name="ticket1_fieldTwo8" id="ticketOne_fieldOne8" value="8"></td>
                                        <td><label for="ticketOne_fieldOne9">9</label><input type="сheckbox" name="ticket1_fieldTwo9" id="ticketOne_fieldOne9" value="9"></td>
                                        <td><label for="ticketOne_fieldOne10">10</label><input type="сheckbox" name="ticket1_fieldTwo10" id="ticketOne_fieldOne10" value="10"></td>
                                      </tr>
                                      <tr>
                                        <td><label for="ticketOne_fieldOne11">11</label><input type="сheckbox" name="ticket1_fieldTwo11" id="ticketOne_fieldOne11" value="11"></td>
                                        <td><label for="ticketOne_fieldOne12">12</label><input type="сheckbox" name="ticket1_fieldTwo12" id="ticketOne_fieldOne12" value="12"></td>
                                        <td><label for="ticketOne_fieldOne13">13</label><input type="сheckbox" name="ticket1_fieldTwo13" id="ticketOne_fieldOne13" value="13"></td>
                                        <td><label for="ticketOne_fieldOne14">14</label><input type="сheckbox" name="ticket1_fieldTwo14" id="ticketOne_fieldOne14" value="14"></td>
                                        <td><label for="ticketOne_fieldOne15">15</label><input type="сheckbox" name="ticket1_fieldTwo15" id="ticketOne_fieldOne15" value="15"></td>
                                        <td><label for="ticketOne_fieldOne16">16</label><input type="сheckbox" name="ticket1_fieldTwo16" id="ticketOne_fieldOne16" value="16"></td>
                                        <td><label for="ticketOne_fieldOne17">17</label><input type="сheckbox" name="ticket1_fieldTwo17" id="ticketOne_fieldOne17" value="17"></td>
                                        <td><label for="ticketOne_fieldOne18">18</label><input type="сheckbox" name="ticket1_fieldTwo18" id="ticketOne_fieldOne18" value="18"></td>
                                        <td><label for="ticketOne_fieldOne19">19</label><input type="сheckbox" name="ticket1_fieldTwo19" id="ticketOne_fieldOne19" value="19"></td>
                                        <td><label for="ticketOne_fieldOne20">20</label><input type="сheckbox" name="ticket1_fieldTwo20" id="ticketOne_fieldOne20" value="20"></td>
                                      </tr>
                                      <tr>
                                        <td><label for="ticketOne_fieldOne21">21</label><input type="сheckbox" name="ticket1_fieldTwo21" id="ticketOne_fieldOne21" value="21"></td>
                                        <td><label for="ticketOne_fieldOne22">22</label><input type="сheckbox" name="ticket1_fieldTwo22" id="ticketOne_fieldOne22" value="22"></td>
                                        <td><label for="ticketOne_fieldOne23">23</label><input type="сheckbox" name="ticket1_fieldTwo23" id="ticketOne_fieldOne23" value="23"></td>
                                        <td><label for="ticketOne_fieldOne24">24</label><input type="сheckbox" name="ticket1_fieldTwo24" id="ticketOne_fieldOne24" value="24"></td>
                                        <td><label for="ticketOne_fieldOne25">25</label><input type="сheckbox" name="ticket1_fieldTwo25" id="ticketOne_fieldOne25" value="25"></td>
                                        <td><label for="ticketOne_fieldOne26">26</label><input type="сheckbox" name="ticket1_fieldTwo26" id="ticketOne_fieldOne26" value="26"></td>
                                        <td><label for="ticketOne_fieldOne27">27</label><input type="сheckbox" name="ticket1_fieldTwo27" id="ticketOne_fieldOne27" value="27"></td>
                                        <td><label for="ticketOne_fieldOne28">28</label><input type="сheckbox" name="ticket1_fieldTwo28" id="ticketOne_fieldOne28" value="28"></td>
                                        <td><label for="ticketOne_fieldOne29">29</label><input type="сheckbox" name="ticket1_fieldTwo29" id="ticketOne_fieldOne29" value="29"></td>
                                        <td><label for="ticketOne_fieldOne30">30</label><input type="сheckbox" name="ticket1_fieldTwo30" id="ticketOne_fieldOne30" value="30"></td>
                                      </tr>
                                      <tr>
                                        <td><label for="ticketOne_fieldOne31">31</label><input type="сheckbox" name="ticket1_fieldTwo31" id="ticketOne_fieldOne31" value="31"></td>
                                        <td><label for="ticketOne_fieldOne32">32</label><input type="сheckbox" name="ticket1_fieldTwo32" id="ticketOne_fieldOne32" value="32"></td>
                                        <td><label for="ticketOne_fieldOne33">33</label><input type="сheckbox" name="ticket1_fieldTwo33" id="ticketOne_fieldOne33" value="33"></td>
                                        <td><label for="ticketOne_fieldOne34">34</label><input type="сheckbox" name="ticket1_fieldTwo34" id="ticketOne_fieldOne34" value="34"></td>
                                        <td><label for="ticketOne_fieldOne35">35</label><input type="сheckbox" name="ticket1_fieldTwo35" id="ticketOne_fieldOne35" value="35"></td>
                                        <td><label for="ticketOne_fieldOne36">36</label><input type="сheckbox" name="ticket1_fieldTwo36" id="ticketOne_fieldOne36" value="36"></td>
                                      </tr>
                                    </tbody>
                                </table> 
                            </div>
                            <div class="zone-two">
                              <div class="zone-header">Поле 2 <p></p></div>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td><label for="ticketOne_fieldTwo1">1</label><input type="сheckbox" name="ticket1_fieldTwo1" id="ticketOne_fieldTwo1" value="1"></td>
                                        <td><label for="ticketOne_fieldTwo2">2</label><input type="сheckbox" name="ticket1_fieldTwo2" id="ticketOne_fieldTwo2" value="2"></td>
                                        <td><label for="ticketOne_fieldTwo3">3</label><input type="сheckbox" name="ticket1_fieldTwo3" id="ticketOne_fieldTwo3" value="3"></td>
                                        <td><label for="ticketOne_fieldTwo4">4</label><input type="сheckbox" name="ticket1_fieldTwo4" id="ticketOne_fieldTwo4" value="4"></td>
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
