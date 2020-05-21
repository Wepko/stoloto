
function games(url) {
    // Test -------------------
    
    // end ---------------------
    class Tablegame {
        constructor(tr, td, id = "1", field = "One",) {
            this.tr = tr
            this.td = td
            this.id = id
            this.field = field
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
                    name: `ticket${obj_table.id}_field${obj_table.field}${count}`,
                    id: `ticket${obj_table.id}_field${obj_table.field}${count}`,
                    value: `${checkNumber(count)}`
                }), elt('label',{for: `ticket${obj_table.id}_field${obj_table.field}${count}`}, count))
                tr.append(td)
                count += 1
            }
            table.append(tr)
        }
        parent.append(table)
    }

    if (url == '/four-of-twenty') {
        (function game4_20() {

            const $root = document.querySelector('#main')
            const $blocksTicket = $root.querySelector('.blocks-ticket')
            const $btnAddTicket = $root.querySelector('#addTicket') 
            const $parentfieldOne = $blocksTicket.querySelector('.zone-one')
            const $parentfieldTwo = $blocksTicket.querySelector('.zone-two')
            const $zoneHeaders = $blocksTicket.querySelector('.zone-headers')
            const $quickPanel = $blocksTicket.querySelector('.quick-panel')
            
            
            const createTicet = (function(){
                let count = 1
                return function(parentOne, parentTwo) {
                    createGrid(parentOne, new Tablegame(5, 4, count))
                    createGrid(parentTwo, new Tablegame(5, 4, count, "Two"))
                    return count++
                }
            }())
        
            createTicet($parentfieldOne, $parentfieldTwo)
        
            $btnAddTicket.addEventListener('click', function(e) {
                e.preventDefault()
        
                const zoneHeaders = $zoneHeaders.cloneNode(true)
                const quickPanel = $quickPanel.cloneNode(true)
        
                const fieldOne = elt('div', {class: 'zone-one'})
                const fieldTwo = elt('div', {class: 'zone-two'})
                createTicet(fieldOne, fieldTwo)
                const zoneWorker = elt('div', {class: 'zone-worker'}, fieldOne, fieldTwo)
        
                //
                // elem.append(parentfieldOne, parentfieldTwo)
                // block.append(elem)
        
        
                const blockTicket = elt('div', {class: 'block-ticket card'}, zoneHeaders, zoneWorker, quickPanel)
                
                $blocksTicket.append(blockTicket)
            })
        })()
    }

    if (url == '/five-of-threety-six') {
        (function game5_36() {
    
            const $root = document.querySelector('#main')
            const $blocksTicket = $root.querySelector('.blocks-ticket')
            const $btnAddTicket = $root.querySelector('#addTicket') 
            const $parentfieldOne = $blocksTicket.querySelector('.zone-one')
            const $parentfieldTwo = $blocksTicket.querySelector('.zone-two')
            const $zoneHeaders = $blocksTicket.querySelector('.zone-header')
            const $quickPanel = $blocksTicket.querySelector('.quick-panel')
            
            
            const createTicet = (function(){
                let count = 1
                return function(parentOne, parentTwo) {
                    createGrid(parentOne, new Tablegame(5, 8, count))
                    createGrid(parentTwo, new Tablegame(1, 4, count, "Two"))
                    return count++
                }
            }())
        
            createTicet($parentfieldOne, $parentfieldTwo)
        
            $btnAddTicket.addEventListener('click', function(e) {
                e.preventDefault()
        

                const quickPanel = $quickPanel.cloneNode(true)
        
                const fieldOne = elt('div', {class: 'zone-one'})
                const fieldTwo = elt('div', {class: 'zone-two'})
                createTicet(fieldOne, fieldTwo)
                const zoneWorker = elt('div', {class: 'zone-worker'}, fieldOne, fieldTwo)
        
                //
                // elem.append(parentfieldOne, parentfieldTwo)
                // block.append(elem)
        
        
                const blockTicket = elt('div', {class: 'block-ticket card'}, zoneHeaders, zoneWorker, quickPanel)
                
                $blocksTicket.append(blockTicket)
            })
        }())
    }

    if (url == '/seven-of-fourty-nine') {
        (function game7_49() {
            console.log('sdaf')
            const $root = document.querySelector('#main')
            const $blocksTicket = $root.querySelector('.blocks-ticket')
            const $btnAddTicket = $root.querySelector('#addTicket') 
            const $parentfieldOne = $blocksTicket.querySelector('.zone-one')
            const $parentfieldTwo = $blocksTicket.querySelector('.zone-two')
            const $zoneHeaders = $blocksTicket.querySelector('.zone-headers')
            const $quickPanel = $blocksTicket.querySelector('.quick-panel')
            
            
            const createTicet = (function(){
                let count = 1
                return function(parentOne, parentTwo) {
                    createGrid(parentOne, new Tablegame(5, 10, count))
                    return count++
                }
            }())
        
            createTicet($parentfieldOne, $parentfieldTwo)
        
            $btnAddTicket.addEventListener('click', function(e) {
                e.preventDefault()
        
                const zoneHeaders = $zoneHeaders.cloneNode(true)
                const quickPanel = $quickPanel.cloneNode(true)
        
                const fieldOne = elt('div', {class: 'zone-one'})
                const fieldTwo = elt('div', {class: 'zone-two'})
                createTicet(fieldOne, fieldTwo)
                const zoneWorker = elt('div', {class: 'zone-worker'}, fieldOne, fieldTwo)
        
                //
                // elem.append(parentfieldOne, parentfieldTwo)
                // block.append(elem)
        
        
                const blockTicket = elt('div', {class: 'block-ticket card'}, zoneHeaders, zoneWorker, quickPanel)
                
                $blocksTicket.append(blockTicket)
            })
        })()
    }

    if (url == '/six-of-fourty-five') {
        (function game6_45() {
            const $root = document.querySelector('#main')
            const $blocksTicket = $root.querySelector('.blocks-ticket')
            const $btnAddTicket = $root.querySelector('#addTicket') 
            const $parentfieldOne = $blocksTicket.querySelector('.zone-one')
            const $parentfieldTwo = $blocksTicket.querySelector('.zone-two')
            const $zoneHeaders = $blocksTicket.querySelector('.zone-headers')
            const $quickPanel = $blocksTicket.querySelector('.quick-panel')
            
            
            const createTicet = (function(){
                let count = 1
                return function(parentOne, parentTwo) {
                    createGrid(parentOne, new Tablegame(5, 10, count))
                    return count++
                }
            }())
        
            createTicet($parentfieldOne, $parentfieldTwo)
        
            $btnAddTicket.addEventListener('click', function(e) {
                e.preventDefault()
        
                const zoneHeaders = $zoneHeaders.cloneNode(true)
                const quickPanel = $quickPanel.cloneNode(true)
        
                const fieldOne = elt('div', {class: 'zone-one'})
                const fieldTwo = elt('div', {class: 'zone-two'})
                createTicet(fieldOne, fieldTwo)
                const zoneWorker = elt('div', {class: 'zone-worker'}, fieldOne, fieldTwo)
        
                //
                // elem.append(parentfieldOne, parentfieldTwo)
                // block.append(elem)
        
        
                const blockTicket = elt('div', {class: 'block-ticket card'}, zoneHeaders, zoneWorker, quickPanel)
                
                $blocksTicket.append(blockTicket)
            })
        })()
    }

    if (url == '/twenteen-of-twenty-four') {
        (function game12_24() {

            const $root = document.querySelector('#main')
            const $blocksTicket = $root.querySelector('.blocks-ticket')
            const $btnAddTicket = $root.querySelector('#addTicket') 
            const $parentfieldOne = $blocksTicket.querySelector('.zone-one')
            const $parentfieldTwo = $blocksTicket.querySelector('.zone-two')
            const $zoneHeaders = $blocksTicket.querySelector('.zone-headers')
            const $quickPanel = $blocksTicket.querySelector('.quick-panel')
            
            
            const createTicet = (function(){
                let count = 1
                return function(parentOne, parentTwo) {
                    createGrid(parentOne, new Tablegame(4, 6, count))
                    return count++
                }
            }())
        
            createTicet($parentfieldOne, $parentfieldTwo)
        
            $btnAddTicket.addEventListener('click', function(e) {
                e.preventDefault()
        
                const zoneHeaders = $zoneHeaders.cloneNode(true)
                const quickPanel = $quickPanel.cloneNode(true)
        
                const fieldOne = elt('div', {class: 'zone-one'})
                const fieldTwo = elt('div', {class: 'zone-two'})
                createTicet(fieldOne, fieldTwo)
                const zoneWorker = elt('div', {class: 'zone-worker'}, fieldOne, fieldTwo)
        
                //
                // elem.append(parentfieldOne, parentfieldTwo)
                // block.append(elem)
        
        
                const blockTicket = elt('div', {class: 'block-ticket card'}, zoneHeaders, zoneWorker, quickPanel)
                
                $blocksTicket.append(blockTicket)
            })
        })()
    }

    if (url == '/rapido') {
        (function rapido() {

            const $root = document.querySelector('#main')
            const $blocksTicket = $root.querySelector('.blocks-ticket')
            const $btnAddTicket = $root.querySelector('#addTicket') 
            const $parentfieldOne = $blocksTicket.querySelector('.zone-one')
            const $parentfieldTwo = $blocksTicket.querySelector('.zone-two')
            const $zoneHeaders = $blocksTicket.querySelector('.zone-headers')
            const $quickPanel = $blocksTicket.querySelector('.quick-panel')
            
            const createTicet = (function(){
                let count = 1
                return function(parentOne, parentTwo) {
                    createGrid(parentOne, new Tablegame(2, 10, count))
                    createGrid(parentTwo, new Tablegame(1, 4, count, 'Two'))
                    return count++
                }
            }())
        
            createTicet($parentfieldOne, $parentfieldTwo)
        
            $btnAddTicket.addEventListener('click', function(e) {
                e.preventDefault()
        
                const zoneHeaders = $zoneHeaders.cloneNode(true)
                const quickPanel = $quickPanel.cloneNode(true)
        
                const fieldOne = elt('div', {class: 'zone-one'})
                const fieldTwo = elt('div', {class: 'zone-two'})
                createTicet(fieldOne, fieldTwo)
                const zoneWorker = elt('div', {class: 'zone-worker'}, fieldOne, fieldTwo)
        
                //
                // elem.append(parentfieldOne, parentfieldTwo)
                // block.append(elem)
        
        
                const blockTicket = elt('div', {class: 'block-ticket card'}, zoneHeaders, zoneWorker, quickPanel)
                
                $blocksTicket.append(blockTicket)
            })
        })()
    }

    if (url == '/top-3') {

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


new Routing('/rapido', games)
new Routing('/twenteen-of-twenty-four', games)
new Routing('/six-of-fourty-five', games)
new Routing('/seven-of-fourty-nine', games)
new Routing('/five-of-threety-six', games)
new Routing('/four-of-twenty', games)
new Routing('/ticket', ticket)
new Routing('/valid', valid)
