function game(url) {
    const $root = document.getElementById('main')
    const itog = $root.querySelector('#sum') 

    if (url == '/four-of-twenty') {
        console.log($root)
        const game4_20 = games({
            root: $root,
            itog: itog,
            fields: [{tr: 5, td: 4, id: 1, offset: 0, activeCell:4},
                    {tr: 5, td: 4, id: 1, offset: 0, activeCell: 4}],
            coefficient: [0, 0, 0, 0, 1, 5, 15, 35, 70, 126],
            minStoimos: 100,
            type: 'game4_20'
        })

        game4_20.init()
    }

    if (url == '/five-of-threety-six') {
        const game5_36 = games({
            root: $root,
            itog: itog,
            fields: [{tr: 4, td: 10, id: 1, offset: 4, activeCell:5},
                     {tr: 1, td: 4, id: 1, offset: 0, activeCell: 1}],
            coefficient: [0, 0, 0, 0, 0, 1, 6, 21, 56, 126, 252, 462],
            minStoimos: 40,
            type: 'game5_36'
        })

        game5_36.init()
    }

 
    if (url == '/seven-of-fourty-nine') {
        const game7_49 = games({
            root: $root,
            itog: itog,
            fields: [{tr: 7, td: 7, id: 1, offset: 0, activeCell: 7}],
            coefficient:  [0, 0, 0, 0, 0, 0, 0, 1, 8, 36, 120, 330, 792, 1716, 3432, 6435, 11440],
            minStoimos: 40, 
            type: 'game7_49'
        })

        game7_49.init()
    }

    if (url == '/six-of-fourty-five') {
        const game6_45 = games({
            root: $root,
            itog: itog,
            fields: [{tr: 9, td: 5, id: 1, offset: 0, activeCell: 6}],
            coefficient: [0,0,0,0,0,0,1,7,28,84,210,462,924,1716],
            minStoimos: 40,
            type: 'game6_45'
        })

        game6_45.init()
    }

    if (url == '/twenteen-of-twenty-four') {

        const game12_24 = games({
            root: $root,
            itog: itog,
            fields: [{tr: 3, td: 8, id: 1, offset: 0, activeCell: 12}],
            coefficient: [],
            minStoimos: 40,
            type: 'game12_24',
        })

        game12_24.init()
    }

    
    if (url == '/rapido') {

        const rapido = games({
            root: $root,
            itog: itog,
            fields: [{tr: 4, td: 5, id: 1, offset: 0, activeCell: 8}, {tr:1, td:4, id: 1, offset: 0, activeCell: 1}],
            coefficient: [],
            minStoimos: 40,
            type: 'rapido',
        })

        rapido.init()
    }


}




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

new Routing('/top-4', game)
new Routing('/rapido', game)
new Routing('/twenteen-of-twenty-four', game)
new Routing('/six-of-fourty-five', game)
new Routing('/seven-of-fourty-nine', game)
new Routing('/five-of-threety-six', game)
new Routing('/four-of-twenty', game)
new Routing('/ticket', ticket)
new Routing('/valid', valid)
