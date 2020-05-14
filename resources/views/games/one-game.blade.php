@extends('layouts.head')
@section('content')

@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif

<div class="content-4_20">
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
                               <td><label for="ch1">1</label><input type="checkbox" name="ch1" id="ch1"></td>
                               <td><label for="ch2">2</label><input type="checkbox" name="ch2" id="ch2"></td>
                               <td><label for="ch3">3</label><input type="checkbox" name="ch3" id="ch3"></td>
                               <td><label for="ch4">4</label><input type="checkbox" name="ch4" id="ch4"></td>
                           </tr>
                           <tr>
                               <td><label for="ch5">5</label><input type="checkbox" name="ch5" id="ch5"></td>
                               <td><label for="ch6">6</label><input type="checkbox" name="ch6" id="ch6"></td>
                               <td><label for="ch7">7</label><input type="checkbox" name="ch7" id="ch7"></td>
                               <td><label for="ch8">8</label><input type="checkbox" name="ch8" id="ch8"></td>
                           </tr>
                           <tr>
                               <td><label for="ch9">9</label><input type="checkbox" name="ch9" id="ch9"></td>
                               <td><label for="ch10">10</label><input type="checkbox" name="ch10" id="ch10"></td>
                               <td><label for="ch11">11</label><input type="checkbox" name="ch11" id="ch11"></td>
                               <td><label for="ch12">12</label><input type="checkbox" name="ch12" id="ch12"></td>
                           </tr>
                           <tr>
                               <td><label for="ch13">13</label><input type="checkbox" name="ch13" id="ch13"></td>
                               <td><label for="ch14">14</label><input type="checkbox" name="ch14" id="ch14"></td>
                               <td><label for="ch15">15</label><input type="checkbox" name="cр15" id="ch15"></td>
                               <td><label for="ch16">16</label><input type="checkbox" name="ch16" id="ch16"></td>
                           </tr>
                           <tr>
                               <td><label for="ch17">17</label><input type="checkbox" name="ch17" id="ch17"></td>
                               <td><label for="ch18">18</label><input type="checkbox" name="ch18" id="ch18"></td>
                               <td><label for="ch19">19</label><input type="checkbox" name="ch19" id="ch19"></td>
                               <td><label for="ch20">20</label><input type="checkbox" name="ch20" id="ch20"></td>
                           </tr>
                        </tbody>
                    </table> 
                </div>
                <div class="zone-two">
                    <table class="table table-bordered">
                        <tbody>
                           <tr>
                               <td><label for="ch1">1</label><input type="checkbox" name="ch1" id="ch1"></td>
                               <td><label for="ch2">2</label><input type="checkbox" name="ch2" id="ch2"></td>
                               <td><label for="ch3">3</label><input type="checkbox" name="ch3" id="ch3"></td>
                               <td><label for="ch4">4</label><input type="checkbox" name="ch4" id="ch4"></td>
                           </tr>
                           <tr>
                               <td><label for="ch5">5</label><input type="checkbox" name="ch5" id="ch5"></td>
                               <td><label for="ch6">6</label><input type="checkbox" name="ch6" id="ch6"></td>
                               <td><label for="ch7">7</label><input type="checkbox" name="ch7" id="ch7"></td>
                               <td><label for="ch8">8</label><input type="checkbox" name="ch8" id="ch8"></td>
                           </tr>
                           <tr>
                               <td><label for="ch9">9</label><input type="checkbox" name="ch9" id="ch9"></td>
                               <td><label for="ch10">10</label><input type="checkbox" name="ch10" id="ch10"></td>
                               <td><label for="ch11">11</label><input type="checkbox" name="ch11" id="ch11"></td>
                               <td><label for="ch12">12</label><input type="checkbox" name="ch12" id="ch12"></td>
                           </tr>
                           <tr>
                               <td><label for="ch13">13</label><input type="checkbox" name="ch13" id="ch13"></td>
                               <td><label for="ch14">14</label><input type="checkbox" name="ch14" id="ch14"></td>
                               <td><label for="ch15">15</label><input type="checkbox" name="cр15" id="ch15"></td>
                               <td><label for="ch16">16</label><input type="checkbox" name="ch16" id="ch16"></td>
                           </tr>
                           <tr>
                               <td><label for="ch17">17</label><input type="checkbox" name="ch17" id="ch17"></td>
                               <td><label for="ch18">18</label><input type="checkbox" name="ch18" id="ch18"></td>
                               <td><label for="ch19">19</label><input type="checkbox" name="ch19" id="ch19"></td>
                               <td><label for="ch20">20</label><input type="checkbox" name="ch20" id="ch20"></td>
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
        <a href="#" class="btn btn-dark">Оплатить</a>
    </div>
</div>


@endsection
