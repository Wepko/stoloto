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
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
                <div class="zone-two">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
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
        <a href="#" class="btn btn-dark"">Оплатить</a>
    </div>
</div>


@endsection
