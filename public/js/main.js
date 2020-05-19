// {
    //     type: 'checkbox',
    //     name: `ticket1_fieldOne${count}`,
    //     id: `ticketOne_fieldOne${count}`,
    //     value: `${count}`
    // }
    
    class Tablegame {
        constructor(tr, td, type) {
        this.tr = tr
        this.td = td
        if (type == 'default') {
            this.label = {

            }
            this.input = {
                
            }
        }
    }
}

function elt(name, attrs = {}, ...children) {
    const dom = document.createElement(name)

    for (let attr of Object.keys(attrs)) {
        dom.setAttribute(attr, attrs[attr])
    }

    for (let child of children) {
        dom.append(child)
        console.log(child)
    }

    return dom
}

const Table = {
    tr: 5,
    td: 4,
    input: {
        type: 'checkbox',
        name: `ticket1_fieldOne${count}`,
        id: `ticketOne_fieldOne${count}`,
        value: `${count}`
    }
}
const $parent = document.getElementById('q')

function createGrid(parent, obj_table) {
    const table = elt('table', {class: 'table table-bordered'})
    let count = 1
    for (let i = 0; i < obj_table.tr; i++) {
        const tr = elt('tr')
        for (let j = 0; j < obj_table.td; j++) {
            const td = elt('td', {}, elt('input', ), elt('label',{for: `ticketOne_fieldOne${count}`}, count))
            tr.append(td)
            count += 1
        }
        table.append(tr)
    }
    parent.append(table)
    console.log(table)
}

createGrid($parent ,Table)

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



$('[data-spy="scroll"]').each(function () {
    var $spy = $(this).scrollspy('refresh')
  })




  
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

