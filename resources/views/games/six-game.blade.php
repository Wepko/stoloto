@extends('layouts.head')
@section('content')


@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif

<div class="content-4_20">
    <form action="{{ route('AddTicketValueSix') }}" method='post' style="display: flex; justify-content-space-between; width: 100%;">
    @csrf
        <div class="blocks-ticket" id="test">
            <div class="card">
                <div class="help-information">
                    <p>Отметьте 8 чисел в первом поле, и не менее 1 во втором</p>
                    <a href="#" class="btn btn-dark mb-5" onclick="addTicket()">Добавить билет</a>
                </div>
            
                <div class="zone-worker">
                    <div class="zone-one">
                      <div class="zone-header">Поле 1 <p></p></div>
                        <table class="table table-bordered">
                            <tbody>
                              <tr>
                                <td><label for="ticketOne_fieldOne1">1</label><input type="checkbox" name="ticket1_fieldOne1" id="ticketOne_fieldOne1" value="1"></td>
                                <td><label for="ticketOne_fieldOne2">2</label><input type="checkbox" name="ticket1_fieldOne2" id="ticketOne_fieldOne2" value="2"></td>
                                <td><label for="ticketOne_fieldOne3">3</label><input type="checkbox" name="ticket1_fieldOne3" id="ticketOne_fieldOne3" value="3"></td>
                                <td><label for="ticketOne_fieldOne4">4</label><input type="checkbox" name="ticket1_fieldOne4" id="ticketOne_fieldOne4" value="4"></td>
                                <td><label for="ticketOne_fieldOne5">5</label><input type="checkbox" name="ticket1_fieldOne5" id="ticketOne_fieldOne5" value="5"></td>
                                <td><label for="ticketOne_fieldOne6">6</label><input type="checkbox" name="ticket1_fieldOne6" id="ticketOne_fieldOne6" value="6"></td>
                                <td><label for="ticketOne_fieldOne7">7</label><input type="checkbox" name="ticket1_fieldOne7" id="ticketOne_fieldOne7" value="7"></td>
                                <td><label for="ticketOne_fieldOne8">8</label><input type="checkbox" name="ticket1_fieldOne8" id="ticketOne_fieldOne8" value="8"></td>
                                <td><label for="ticketOne_fieldOne9">9</label><input type="checkbox" name="ticket1_fieldOne9" id="ticketOne_fieldOne9" value="9"></td>
                                <td><label for="ticketOne_fieldOne10">10</label><input type="checkbox" name="ticket1_fieldOne10" id="ticketOne_fieldOne10" value="10"></td>
                              </tr>
                              <tr>
                                <td><label for="ticketOne_fieldOne11">11</label><input type="checkbox" name="ticket1_fieldOne11" id="ticketOne_fieldOne11" value="11"></td>
                                <td><label for="ticketOne_fieldOne12">12</label><input type="checkbox" name="ticket1_fieldOne12" id="ticketOne_fieldOne12" value="12"></td>
                                <td><label for="ticketOne_fieldOne13">13</label><input type="checkbox" name="ticket1_fieldOne13" id="ticketOne_fieldOne13" value="13"></td>
                                <td><label for="ticketOne_fieldOne14">14</label><input type="checkbox" name="ticket1_fieldOne14" id="ticketOne_fieldOne14" value="14"></td>
                                <td><label for="ticketOne_fieldOne15">15</label><input type="checkbox" name="ticket1_fieldOne15" id="ticketOne_fieldOne15" value="15"></td>
                                <td><label for="ticketOne_fieldOne16">16</label><input type="checkbox" name="ticket1_fieldOne16" id="ticketOne_fieldOne16" value="16"></td>
                                <td><label for="ticketOne_fieldOne17">17</label><input type="checkbox" name="ticket1_fieldOne17" id="ticketOne_fieldOne17" value="17"></td>
                                <td><label for="ticketOne_fieldOne18">18</label><input type="checkbox" name="ticket1_fieldOne18" id="ticketOne_fieldOne18" value="18"></td>
                                <td><label for="ticketOne_fieldOne19">19</label><input type="checkbox" name="ticket1_fieldOne19" id="ticketOne_fieldOne19" value="19"></td>
                                <td><label for="ticketOne_fieldOne20">20</label><input type="checkbox" name="ticket1_fieldOne20" id="ticketOne_fieldOne20" value="20"></td>
                              </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="zone-two">
                              <div class="zone-header">Поле 2 <p></p></div>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                      <td><label for="ticketOne_fieldTwo1">1</label><input type="checkbox" name="ticket1_fieldTwo1" id="ticketOne_fieldTwo1" value="1"></td>
                                      <td><label for="ticketOne_fieldTwo2">2</label><input type="checkbox" name="ticket1_fieldTwo2" id="ticketOne_fieldTwo2" value="2"></td>
                                      <td><label for="ticketOne_fieldTwo3">3</label><input type="checkbox" name="ticket1_fieldTwo3" id="ticketOne_fieldTwo3" value="3"></td>
                                      <td><label for="ticketOne_fieldOne4">4</label><input type="checkbox" name="ticket1_fieldTwo4" id="ticketOne_fieldTwo4" value="4"></td>
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

@endsection
