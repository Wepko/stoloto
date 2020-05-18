function elt(name, attrs, ...children) {
    const dom = document.createElement(name)

    for (let attr of Object.keys(attrs)) {
        dom.setAttribute(attr, attrs[attr])
    }

    for (let child of children) {
        dom.append(child)
    }

    return dom
}

elt('div', {style: 'sdfa'}, 'sadf')

const Table = {tr: 4, td: 8}; 

function createGrid() {

}

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

$select.onchange = () => {
    const arrOptions = [...$select.options]
    $input.classList.add('hide')
    arrOptions.forEach(item => {
        if (item.selected) {
            if (item.id == 'game-4_20') {
                document.getElementById('valid').value = 1
                $input.classList.remove('hide')
            }
            if (item.id == 'game-5_36') {
                document.getElementById('valid').value = 2
                $input.classList.remove('hide')
            }
            if (item.id == 'game-7_49') {
                document.getElementById('valid').value = 3
            }
            if (item.id == 'game-6_45') {
                document.getElementById('valid').value = 4
            }
            if (item.id == 'game-12_24') {
                document.getElementById('valid').value = 5
            }
            if (item.id == 'game-rapido') {
                document.getElementById('valid').value = 6
                $input.classList.remove('hide')
            }
        }
    })
}