@extends('layouts.head')
@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif

<div class="content-4_20">
    <form action="#" method='post' style="display: flex; justify-content-space-between; width: 100%;">
        <div class="blocks-ticket" id="test">
            <div class="card">
                <div class="help-information">
                    <p>Отметьте не менее 4 чисел в каждом поле.</p>
                    <a href="#" class="btn btn-dark" onclick="addTicket()">Добавить билет</a>
                </div>

                <div class="zone-headers">
                    <div class="zone-header">Поле 1 <p></p></div>
                    <div class="zone-header">Поле 2 <p></p></div>
                </div>
            
                <div class="zone-worker">
                    <div class="zone-one">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><label for="ticketOne_fieldOne">1</label><input type="checkbox" name="ticketOne_fieldOne" value="1"></td>
                                <td><label for="ticketOne_fieldOne">2</label><input type="checkbox" name="ticketOne_fieldOne" value="2"></td>
                                <td><label for="ticketOne_fieldOne">3</label><input type="checkbox" name="ticketOne_fieldOne" value="3"></td>
                                <td><label for="ticketOne_fieldOne">4</label><input type="checkbox" name="ticketOne_fieldOne" value="4"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldOne">5</label><input type="checkbox" name="ticketOne_fieldOne" value="5"></td>
                                <td><label for="ticketOne_fieldOne">6</label><input type="checkbox" name="ticketOne_fieldOne" value="6"></td>
                                <td><label for="ticketOne_fieldOne">7</label><input type="checkbox" name="ticketOne_fieldOne" value="7"></td>
                                <td><label for="ticketOne_fieldOne">8</label><input type="checkbox" name="ticketOne_fieldOne" value="8"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldOne">9</label><input type="checkbox" name="ticketOne_fieldOne" value="9"></td>
                                <td><label for="ticketOne_fieldOne">10</label><input type="checkbox" name="ticketOne_fieldOne" value="10"></td>
                                <td><label for="ticketOne_fieldOne">11</label><input type="checkbox" name="ticketOne_fieldOne" value="11"></td>
                                <td><label for="ticketOne_fieldOne">12</label><input type="checkbox" name="ticketOne_fieldOne" value="12"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldOne">13</label><input type="checkbox" name="ticketOne_fieldOne" value="13"></td>
                                <td><label for="ticketOne_fieldOne">14</label><input type="checkbox" name="ticketOne_fieldOne" value="14"></td>
                                <td><label for="ticketOne_fieldOne">15</label><input type="checkbox" name="ticketOne_fieldOne" value="15"></td>
                                <td><label for="ticketOne_fieldOne">16</label><input type="checkbox" name="ticketOne_fieldOne" value="16"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldOne">17</label><input type="checkbox" name="ticketOne_fieldOne" value="17"></td>
                                <td><label for="ticketOne_fieldOne">18</label><input type="checkbox" name="ticketOne_fieldOne" value="18"></td>
                                <td><label for="ticketOne_fieldOne">19</label><input type="checkbox" name="ticketOne_fieldOne" value="19"></td>
                                <td><label for="ticketOne_fieldOne">20</label><input type="checkbox" name="ticketOne_fieldOne" value="20"></td>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="zone-two">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><label for="ticketOne_fieldTwo">1</label><input type="checkbox" name="ticketOne_fieldTwo" value="1"></td>
                                <td><label for="ticketOne_fieldTwo">2</label><input type="checkbox" name="ticketOne_fieldTwo" value="2"></td>
                                <td><label for="ticketOne_fieldTwo">3</label><input type="checkbox" name="ticketOne_fieldTwo" value="3"></td>
                                <td><label for="ticketOne_fieldTwo">4</label><input type="checkbox" name="ticketOne_fieldTwo" value="4"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldTwo">5</label><input type="checkbox" name="ticketOne_fieldTwo" value="5"></td>
                                <td><label for="ticketOne_fieldTwo">6</label><input type="checkbox" name="ticketOne_fieldTwo" value="6"></td>
                                <td><label for="ticketOne_fieldTwo">7</label><input type="checkbox" name="ticketOne_fieldTwo" value="7"></td>
                                <td><label for="ticketOne_fieldTwo">8</label><input type="checkbox" name="ticketOne_fieldTwo" value="8"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldTwo">9</label><input type="checkbox" name="ticketOne_fieldTwo" value="9"></td>
                                <td><label for="ticketOne_fieldTwo">10</label><input type="checkbox" name="ticketOne_fieldTwo" value="10"></td>
                                <td><label for="ticketOne_fieldTwo">11</label><input type="checkbox" name="ticketOne_fieldTwo" value="11"></td>
                                <td><label for="ticketOne_fieldTwo">12</label><input type="checkbox" name="ticketOne_fieldTwo" value="12"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldTwo">13</label><input type="checkbox" name="ticketOne_fieldTwo" value="13"></td>
                                <td><label for="ticketOne_fieldTwo">14</label><input type="checkbox" name="ticketOne_fieldTwo" value="14"></td>
                                <td><label for="ticketOne_fieldTwo">15</label><input type="checkbox" name="ticketOne_fieldTwo" value="15"></td>
                                <td><label for="ticketOne_fieldTwo">16</label><input type="checkbox" name="ticketOne_fieldTwo" value="16"></td>
                            </tr>
                            <tr>
                                <td><label for="ticketOne_fieldTwo">17</label><input type="checkbox" name="ticketOne_fieldTwo" value="17"></td>
                                <td><label for="ticketOne_fieldTwo">18</label><input type="checkbox" name="ticketOne_fieldTwo" value="18"></td>
                                <td><label for="ticketOne_fieldTwo">19</label><input type="checkbox" name="ticketOne_fieldTwo" value="19"></td>
                                <td><label for="ticketOne_fieldTwo">20</label><input type="checkbox" name="ticketOne_fieldTwo" value="20"></td>
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
