"use strict";

function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return !!right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(function () {
  var games = function games(option) {
    var root = option.root;
    var fields = option.fields;
    var itog = [];
    var $itog = option.itog;
    var coefficient = option.coefficient;
    var minStoimos = option.minStoimos;
    var type = option.type;
    var infoField = option.infoField;

    var Tablegame = function Tablegame(tr, td) {
      var offset = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
      var id = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : "1";
      var field = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : "One";
      var type = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 'default';

      _classCallCheck(this, Tablegame);

      this.tr = tr;
      this.td = td;
      this.offset = offset;
      this.id = id;
      this.field = field;
      this.type = type;
    };

    function elt(name) {
      var attrs = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
      var dom = document.createElement(name);

      for (var _i = 0, _Object$keys = Object.keys(attrs); _i < _Object$keys.length; _i++) {
        var attr = _Object$keys[_i];
        dom.setAttribute(attr, attrs[attr]);
      }

      for (var _len = arguments.length, children = new Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
        children[_key - 2] = arguments[_key];
      }

      for (var _i2 = 0, _children = children; _i2 < _children.length; _i2++) {
        var child = _children[_i2];
        dom.append(child);
      }

      return dom;
    }

    function checkNumber(num) {
      if (num.toString().length == 1) {
        return '0' + num;
      }

      return num;
    }

    function createGrid(obj_table) {
      var table = elt('table', {
        class: 'table is-bordered'
      });
      var count = 1;

      var label = function label(innerNumber) {
        return elt('label', {
          for: "ticket".concat(obj_table.id, "_field").concat(obj_table.field).concat(count)
        }, innerNumber);
      };

      for (var _i3 = 0; _i3 < obj_table.tr; _i3++) {
        var tr = elt('tr');

        for (var j = 0; j < obj_table.td; j++) {
          var _td = elt('td', {}, elt('input', {
            type: 'checkbox',
            name: "ticket".concat(obj_table.id, "_field").concat(obj_table.field).concat(count),
            id: "ticket".concat(obj_table.id, "_field").concat(obj_table.field).concat(count),
            value: "".concat(checkNumber(count))
          }), obj_table.type == 'default' ? label(count) : label(_i3 + 1));

          tr.append(_td);
          count += 1;
        }

        table.append(tr);
      }

      var td = _toConsumableArray(table.querySelectorAll('td'));

      td.forEach(function (item, index) {
        if (index + 1 > td.length - obj_table.offset) {
          item.remove();
        }
      });
      return table;
    }

    function startGame() {
      var game = root.querySelector('.game');
      var zone2 = "<div class=\"zone-two\">\n            <div class=\"zone-header\">\n                \u043F\u043E\u043B\u04352\n            </div>\n        </div>";
      game.insertAdjacentHTML('afterbegin', "   \n              <div class=\"blocks-ticket\">\n                <div class=\"block-ticket card\">\n                    <div class=\"help-information\">\n                        <p>".concat(infoField, "</p>\n                        <a href=\"#\" class=\"btn btn-dark\"  style=\"color: white!important\" id=\"addTicket\">\u0414\u043E\u0431\u0430\u0432\u0438\u0442\u044C \u0431\u0438\u043B\u0435\u0442</a>\n                    </div>\n                    <div class=\"zone-worker\">\n                        <div class=\"zone-one\">\n                            <div class=\"zone-header\">\n                                \u043F\u043E\u043B\u04351\n                            </div>\n                        </div>\n                       ").concat(fields.length > 1 ? zone2 : "", "\n                    </div>\n                    <div class=\"card-footer quick-panel\">\n                        <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\u0421\u043B\u0443\u0447\u0430\u0439\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430\"><i class=\"fas fa-random\"></i></div>\n                        <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\u0421\u043B\u0443\u0447\u0430\u0439\u043D\u044B\u0435 \u0447\u0435\u0442\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430\"><i class=\"fas fa-random\"></i></div>\n                        <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\u0421\u043B\u0443\u0447\u0430\u0439\u043D\u044B\u0435 \u043D\u0435 \u0447\u0435\u0442\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430\"><i class=\"fas fa-random\"></i></div>\n                        <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\u0423\u0434\u0430\u043B\u0438\u0442\u044C\"><i class=\"fas fa-times\"></i></div>\n                    </div>\n                </div>\n            </div>"));
      return game;
    }

    function generateZone(parrent, nameZone, tableField, field, id) {
      var zone = parrent.querySelector(".".concat(nameZone));
      var table = createGrid(new Tablegame(field.tr, field.td, field.offset, id, tableField));
      zone.append(table);
      return table;
    }

    function Create2DArray(rows) {
      var arr = [];

      for (var _i4 = 0; _i4 < rows; _i4++) {
        arr[_i4] = [];
      }

      return arr;
    }

    var game = startGame();
    var countInput = Create2DArray(5); // function valid(id) {  
    //     console.log(countInput)
    //     const activeNumberOne = countInput[id-1][0]
    //     const activeNumberTwo = countInput[id-1][1]
    //     function summa(arr) {
    //         const summ = arr.reduce((a, b) => { 
    //             return a + b
    //         })
    //         return summ
    //     }
    //     function ifes(num1,num2, place, summ) {  
    //         if (activeNumberOne == num1 && activeNumberTwo == num2) {
    //             itog[id-1] = summ
    //             place.innerHTML = summa(itog)
    //         }
    //     }
    //     coefficient.forEach((arr, indexK) => {
    //         arr.forEach((el, index) => {
    //             if (activeNumberTwo == indexK) {
    //                 ifes(index, activeNumberTwo, $itog, el * minStoimos)
    //             }
    //         })
    //     })
    // }

    function valid(id) {
      console.log(countInput);
      countInput[id - 1][0];
      countInput[id - 1][1];

      function summa(arr) {
        var summ = arr.reduce(function (a, b) {
          return a + b;
        });
        return summ;
      }

      if (type == 'game4_20') {
        var mas = coefficient;
        var price,
            price1,
            price2 = 0;
        var combinations = 0;

        for (var _i5 = 1; _i5 <= 7; _i5++) {
          if (countInput[id - 1][0] == _i5) {
            price1 = 100 * mas[_i5];
          }

          if (countInput[id - 1][1] == _i5) {
            price2 = 100 * mas[_i5];
          }
        }

        if (countInput[id - 1][0] == countInput[id - 1][1]) {
          price = price1 * (price1 / 100) + price2 * (price2 / 100);
        } else {
          price = price1 * 2 * (price2 / 100);
        }

        console.log(countInput[id - 1]);
        console.log(countInput[id - 1][0]);
        itog[id - 1] = isNaN(price) ? 0 : price;
        document.getElementById('combinations').textContent = price / 200;
        $itog.innerHTML = summa(itog);
      }

      if (type == 'game5_36') {
        var _mas = coefficient;

        var _price,
            _price2 = 0;

        for (var _i6 = 1; _i6 <= 11; _i6++) {
          if (countInput[id - 1][0] == _i6) {
            _price2 = 40 * _mas[_i6];
          }
        }

        _price = _price2 * countInput[id - 1][1];
        console.log(_price);
        itog[id - 1] = _price;
        document.getElementById('combinations').textContent = _price / 40;
        $itog.innerHTML = summa(itog);
      }

      if (type == 'game7_49') {
        var _mas2 = coefficient;
        console.log(_mas2);

        var _price3,
            _price4 = 0;

        for (var _i7 = 1; _i7 <= 14; _i7++) {
          if (countInput[id - 1][0] == _i7) {
            _price4 = 25 * _mas2[_i7];
          }
        }

        _price3 = _price4;
        itog[id - 1] = _price3;
        document.getElementById('combinations').textContent = _price3 / 25;
        $itog.innerHTML = summa(itog);
      }

      if (type == 'game6_45') {
        var _mas3 = coefficient;

        var _price5,
            _price6 = 0;

        for (i = 1; i <= 14; i++) {
          if (countInput[id - 1][0] == i) {
            _price6 = 100 * _mas3[i];
          }
        }

        _price5 = _price6;
        itog[id - 1] = _price5;
        document.getElementById('combinations').textContent = _price5 / 100;
        $itog.innerHTML = summa(itog);
      }

      if (type == 'game12_24') {
        var multiplierValue = 0;
        var $multiplier = root.querySelector('#factor');

        var multiplier = _toConsumableArray($multiplier.options);

        multiplier.forEach(function (el) {
          if (el.selected) {
            multiplierValue = el.value;
          }
        });

        $multiplier.onchange = function () {
          valid(id);
        };

        var _price7 = 0;

        if (countInput[id - 1][0] == 12) {
          _price7 = 60 * multiplierValue;
        } else {
          _price7 = 0;
        }

        itog[id - 1] = _price7;
        document.getElementById('combinations').textContent = _price7 / 60;
        $itog.innerHTML = summa(itog);
      }

      if (type == 'rapido') {
        var _multiplierValue = 0;

        var _$multiplier = root.querySelector('#factor');

        var _multiplier = _toConsumableArray(_$multiplier.options);

        _multiplier.forEach(function (el) {
          if (el.selected) {
            _multiplierValue = el.value;
          }
        });

        _$multiplier.onchange = function () {
          valid(id);
        };

        var _price8 = 0;

        if (countInput[id - 1][0] == 8) {
          _price8 = 60 * countInput[id - 1][1] * _multiplierValue;
        } else {
          _price8 = 0;
        }

        console.log(_price8);
        itog[id - 1] = _price8;
        document.getElementById('combinations').textContent = _price8 / 60;
        $itog.innerHTML = summa(itog);
      }
    }

    function analiz(id, table, index) {
      console.log(id, table, index);
      countInput[id - 1][index] = 0;

      var inputs = _toConsumableArray(table.querySelectorAll('input'));

      var _iterator = _createForOfIteratorHelper(inputs),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          input = _step.value;
          input.addEventListener('click', function () {
            if (this.checked) {
              countInput[id - 1][index]++;
            } else countInput[id - 1][index]--;

            valid(id);
          });
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
    }

    var nameZones = ['zone-one', 'zone-two'];
    var nameFields = ['One', 'Two'];

    var init = function init() {
      var _this = this;

      var arrBtns = _toConsumableArray(game.querySelector('.quick-panel').children);

      fields.forEach(function (field, index) {
        var idTicket = field.id;
        var table = generateZone(game, nameZones[index], nameFields[index], field, field.id);
        analiz(idTicket, table, index);

        var inputs = _toConsumableArray(table.querySelectorAll('input'));

        arrBtns.forEach(function (btn, indexBtn) {
          switch (indexBtn) {
            case 0:
              _this.randomBtn({
                btn: btn,
                type: 'rnd',
                inputs: inputs,
                id: idTicket,
                field: field,
                index: index
              });

              break;

            case 1:
              _this.randomBtn({
                btn: btn,
                type: 'even',
                inputs: inputs,
                id: idTicket,
                field: field,
                index: index
              });

              break;

            case 2:
              _this.randomBtn({
                btn: btn,
                type: 'odd',
                inputs: inputs,
                id: idTicket,
                field: field,
                index: index
              });

              break;

            case 3:
              btn.addEventListener('click', function () {
                console.log(field);
                inputs.forEach(function (item) {
                  item.checked = false;
                });
                countInput[idTicket - 1][index] = 0;
                console.log(countInput);
                valid(idTicket);
              });
              break;
          }
        });
      });
      var addTicket = game.querySelector('#addTicket');
      var h = 1;
      addTicket.addEventListener('click', function (e) {
        if (h < 5) {
          h++;
          document.getElementById('validTicketNumber').value++;
        }

        document.getElementById('numberTickets').textContent = h;
        e.preventDefault();

        _this.doubleTable();
      });
    };

    var doubleTable = function () {
      var countId = 1;
      return function () {
        var _this2 = this;

        countId++;
        var blocksTicket = game.querySelector('.blocks-ticket');
        var blockTicket = elt('div', {
          class: 'block-ticket card'
        });
        blockTicket.insertAdjacentHTML('afterbegin', "   \n                          <div class=\"zone-worker\">\n                              <div class=\"zone-one\">\n                                  <div class=\"zone-header\">\n                                      \u043F\u043E\u043B\u04351\n                                  </div>\n                              </div>\n                              <div class=\"zone-two\">\n                                  <div class=\"zone-header\">\n                                      \u043F\u043E\u043B\u04352\n                                  </div>\n                              </div>\n                          </div>\n                          <div class=\"card-footer quick-panel\">\n                            <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\u0421\u043B\u0443\u0447\u0430\u0439\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430\"><i class=\"fas fa-random\"></i></div>\n                            <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\u0421\u043B\u0443\u0447\u0430\u0439\u043D\u044B\u0435 \u0447\u0435\u0442\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430\"><i class=\"fas fa-random\"></i></div>\n                            <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\u0421\u043B\u0443\u0447\u0430\u0439\u043D\u044B\u0435 \u043D\u0435 \u0447\u0435\u0442\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430\"><i class=\"fas fa-random\"></i></div>\n                            <div class=\"btn btn-dark\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\u0423\u0434\u0430\u043B\u0438\u0442\u044C\"><i class=\"fas fa-times\"></i></div>\n                        </div>");
        fields.forEach(function (field, index) {
          var table = generateZone(blockTicket, nameZones[index], nameFields[index], field, countId);
          analiz(countId, table, index);

          var inputs = _toConsumableArray(table.querySelectorAll('input'));

          var arrBtns = _toConsumableArray(blockTicket.querySelector('.quick-panel').children);

          arrBtns.forEach(function (btn, indexBtn) {
            switch (indexBtn) {
              case 0:
                _this2.randomBtn({
                  btn: btn,
                  type: 'rnd',
                  inputs: inputs,
                  id: countId,
                  field: field,
                  index: index
                });

                break;

              case 1:
                _this2.randomBtn({
                  btn: btn,
                  type: 'even',
                  inputs: inputs,
                  id: countId,
                  field: field,
                  index: index
                });

                break;

              case 2:
                _this2.randomBtn({
                  btn: btn,
                  type: 'odd',
                  inputs: inputs,
                  id: countId,
                  field: field,
                  index: index
                });

                break;

              case 3:
                _this2.randomBtn({
                  btn: btn,
                  inputs: inputs,
                  id: countId,
                  field: field,
                  index: index
                });

                break;
            }
          });
        });
        blocksTicket.append(blockTicket);
      };
    }();

    var randomBtn = function randomBtn(option) {
      var btn = option.btn;
      var type = option.type;
      var inputs = option.inputs;
      var id = option.id;
      var field = option.field;
      var index = option.index;

      function rnd(feild, type, countActiveCell, allCell) {
        var inputs = feild;
        inputs.forEach(function (item) {
          item.checked = false;
        });
        var arrInedexRnd = [];
        var rnd,
            flagRandom = null;

        for (var _i8 = 0; _i8 < countActiveCell; _i8++) {
          if (type == 'rnd') {
            do {
              flagRandom = true;
              rnd = Math.floor(Math.random() * allCell);
              if (arrInedexRnd.includes(rnd)) flagRandom = false;
            } while (!flagRandom);

            arrInedexRnd.push(rnd);
            inputs[arrInedexRnd[_i8]].checked = true;
          }

          if (type == 'odd') {
            do {
              flagRandom = true;
              rnd = Math.floor(Math.random() * allCell);
              if (arrInedexRnd.includes(rnd) || rnd % 2 != 0) flagRandom = false;
            } while (!flagRandom);

            arrInedexRnd.push(rnd);
            inputs[arrInedexRnd[_i8]].checked = true;
          }

          if (type == 'even') {
            do {
              flagRandom = true;
              rnd = Math.floor(Math.random() * allCell);
              if (arrInedexRnd.includes(rnd) || rnd % 2 == 0) flagRandom = false;
            } while (!flagRandom);

            arrInedexRnd.push(rnd);
            inputs[arrInedexRnd[_i8]].checked = true;
          }
        }
      }

      btn.addEventListener('click', function () {
        rnd(inputs, type, field.activeCell, field.tr * field.td - field.offset);
        countInput[id - 1][index] = field.activeCell;
        valid(id);
      });
    };

    return {
      init: init,
      doubleTable: doubleTable,
      randomBtn: randomBtn
    };
  };

  window.games = games;
})();