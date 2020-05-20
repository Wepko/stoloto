function games() {

    class Tablegame {
        constructor(tr, td, field = "One", id = "1") {
            this.tr = tr
            this.td = td
            this.field = field
            this.id = id
        }   
    }
    
    function elt(name, attrs = {}, ...children) {
        const dom = document.createElement(name)
        
        
        for (let attr of Object.keys(attrs)) {
            
            dom.setAttribute(attr, attrs[attr])
    
        }
        
        for (let child of children) {
            dom.append(child)
        }
        
        return dom
    }
    
    function checkNumber(num) {
        if (num.toString().length == 1) {
            return '0' + num
        } 
        return num
    }
    
    function createGrid(parent, obj_table) {
        const table = elt('table', {class: 'table table-bordered'})
        let count = 1
        for (let i = 0; i < obj_table.tr; i++) {
            const tr = elt('tr')
            for (let j = 0; j < obj_table.td; j++) {
    
                const td = elt('td', {}, elt('input', {
                    type: 'checkbox',
                    name: `ticket1_field${obj_table.field}${count}`,
                    id: `ticketOne_field${obj_table.field}${count}`,
                    value: `${checkNumber(count)}`
                }), elt('label',{for: `ticketOne_field${obj_table.field}${count}`}, count))
                tr.append(td)
                count += 1
            }
            table.append(tr)
        }
        parent.append(table)
    }
    
    
    
    // const Table = {
    //     tr: 5,
    //     td: 4,
    //     field: 'Two',
    //     id: '1'
    // }
    const $parent = document.getElementById('zone-worker')
    const $parentfieldOne = $parent.querySelector('.zone-one')
    const $parentfieldTwo = $parent.querySelector('.zone-two')
    
    createGrid($parentfieldOne, new Tablegame(5, 4))
    createGrid($parentfieldTwo, new Tablegame(5, 4, "Two"))
    
    let count = 0
    function addTicket() {
        count += 1
        const parent = document.getElementById('test')
        const elem = parent.querySelector('.card')
        const clone = elem.cloneNode(true)
    
        const arrTagInput = [...clone.querySelectorAll('input')]
    
        for (let tagInput of arrTagInput) {
              tagInput.name = `ticket${count + 1}_fieldOne`
        }
    
        parent.appendChild(clone)
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
            this.fn()
        }
    }
}

new Routing('/four-of-twenty', games)
new Routing('/ticket', ticket)
new Routing('/valid', valid)
