
"use strict";

function game(url) {
  var $root = document.getElementById('main');
  var itog = $root.querySelector('#sum');
  var $nav = document.getElementById('nav');

  if (url == '/games/four-of-twenty') {
    var game4_20 = games({
      root: $root,
      itog: itog,
      fields: [{
        tr: 5,
        td: 4,
        id: 1,
        offset: 0,
        activeCell: 4
      }, {
        tr: 5,
        td: 4,
        id: 1,
        offset: 0,
        activeCell: 4
      }],
      coefficient: [0, 0, 0, 0, 1, 5, 15, 35, 70, 126],
      minStoimos: 100,
      type: 'game4_20',
      infoField: 'Отметьте не менее 4 чисел в каждом поле. '
    });
    game4_20.init();
  }

  if (url == '/games/five-of-threety-six') {

    var game5_36 = games({
      root: $root,
      itog: itog,
      fields: [{
        tr: 6,
        td: 6,
        id: 1,
        offset: 0,
        activeCell: 5
      }, {
        tr: 1,
        td: 4,
        id: 1,
        offset: 0,
        activeCell: 1
      }],
      coefficient: [0, 0, 0, 0, 0, 1, 6, 21, 56, 126, 252, 462],
      minStoimos: 40,
      type: 'game5_36',
      infoField: ''
    });
    game5_36.init();
  }

  if (url == '/games/seven-of-fourty-nine') {
    var game7_49 = games({
      root: $root,
      itog: itog,
      fields: [{
        tr: 7,
        td: 7,
        id: 1,
        offset: 0,
        activeCell: 7
      }],
      coefficient: [0, 0, 0, 0, 0, 0, 0, 1, 8, 36, 120, 330, 792, 1716, 3432, 6435, 11440],
      minStoimos: 40,
      type: 'game7_49',
      infoField: 'Отметьте от 7 до 14 чисел. Чем больше чисел отмечено — тем выше вероятность выигрыша'
    });
    game7_49.init();
  }

  if (url == '/games/six-of-fourty-five') {
    var game6_45 = games({
      root: $root,
      itog: itog,
      fields: [{
        tr: 9,
        td: 5,
        id: 1,
        offset: 0,
        activeCell: 6
      }],
      coefficient: [0, 0, 0, 0, 0, 0, 1, 7, 28, 84, 210, 462, 924, 1716],
      minStoimos: 40,
      type: 'game6_45',
      infoField: 'Отметьте от 6 до 13 чисел. Чем больше чисел отмечено — тем выше вероятность выигрыша.'
    });
    game6_45.init();
  }

  if (url == '/games/twenteen-of-twenty-four') {
    var game12_24 = games({
      root: $root,
      itog: itog,
      fields: [{
        tr: 3,
        td: 8,
        id: 1,
        offset: 0,
        activeCell: 12
      }],
      coefficient: [],
      minStoimos: 40,
      type: 'game12_24',
      infoField: 'Выберите 12 чисел в игровом поле.'
    });
    game12_24.init();
  }

  if (url == '/games/rapido') {
    var rapido = games({
      root: $root,
      itog: itog,
      fields: [{
        tr: 4,
        td: 5,
        id: 1,
        offset: 0,
        activeCell: 8
      }, {
        tr: 1,
        td: 4,
        id: 1,
        offset: 0,
        activeCell: 1
      }],
      coefficient: [],
      minStoimos: 40,
      type: 'rapido',
      infoField: 'Первая часть поля Отметьте 8 чисел Вторая часть поля Отметьте не менее 1 числа'
    });
    rapido.init();
  }
}

$(document).on('ready', function() {
    $(".regular").slick({
      dots: false,
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3
    });
    
    $('.banner').slick();
  })

function ticket() {
    $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
      })
}

function valid() {
    const $select = document.querySelector('#inputGroupSelect01')
    const $input = document.querySelector('input.hide')
    const $valid = document.getElementById('valid')
    
    $select.onchange = () => {
        const arrOptions = [...$select.options]
        $input.classList.add('hide')
        arrOptions.forEach(item => {
            if (item.selected) {
                if (item.id == 'game-4_20') {
                    $valid.value = 1
                    $input.classList.remove('hide')
                }
                if (item.id == 'game-5_36') {
                    $valid.value = 2
                    $input.classList.remove('hide')
                }
                if (item.id == 'game-7_49') {
                    $valid.value = 3
                }
                if (item.id == 'game-6_45') {
                    $valid.value = 4
                }
                if (item.id == 'game-12_24') {
                    $valid.value = 5
                }
                if (item.id == 'game-rapido') {
                    $valid.value = 6
                    $input.classList.remove('hide')
                }
            }
        })
    }
}



class Routing {
    constructor(url, fn) {
        this.url = url
        this.fn = fn
        this.start()
    }

    start() {
        if (document.location.pathname == this.url) {
            this.fn(this.url)
        }
    }
}


//new Routing('/games/game5_36.html', game)

new Routing('/games/top-4', game)
new Routing('/games/rapido', game)
new Routing('/games/twenteen-of-twenty-four', game)
new Routing('/games/six-of-fourty-five', game)
new Routing('/games/seven-of-fourty-nine', game)
new Routing('/games/five-of-threety-six', game)
new Routing('/games/four-of-twenty', game)
new Routing('/ticket', ticket)
new Routing('/valid', valid)




