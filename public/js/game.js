(function() {
    const games = (option) => {
        const root = option.root
        const fields = option.fields
        const itog = []
        const $itog = option.itog
        const coefficient = option.coefficient
        const minStoimos = option.minStoimos
        const type =  option.type
        const infoField = option.infoField

        class Tablegame {
            constructor(tr, td, offset = 0, id = "1", field = "One", type='default') {
                this.tr = tr
                this.td = td
                this.offset = offset
                this.id = id
                this.field = field
                this.type = type
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
        
        function createGrid(obj_table) {
            const table = elt('table', {class: 'game-table'})
            let count = 1
            const label = function (innerNumber) {
                return elt('label',{for: `ticket${obj_table.id}_field${obj_table.field}${count}`}, innerNumber)
            }
            for (let i = 0; i < obj_table.tr; i++) {
                const tr = elt('tr')
                for (let j = 0; j < obj_table.td; j++) {
                    const td = elt('td', {}, elt('input', {
                        type: 'checkbox',
                        name: `ticket${obj_table.id}_field${obj_table.field}${count}`,
                        id: `ticket${obj_table.id}_field${obj_table.field}${count}`,
                        value: `${checkNumber(count)}`,
                    }), obj_table.type == 'default' ? label(count) : label(i+1))
                    tr.append(td)
                    count += 1
                }
                table.append(tr)
            }
            const td = [...table.querySelectorAll('td')]
            td.forEach((item, index) => {
                if (index + 1 > td.length - obj_table.offset) {
                    item.remove()
                }
            })
            
            return table
        }
        function startGame() {
          const game = root.querySelector('.game')
            const zone2 = `<div class="zone-two">
                                <div class="zone-header">
                                    Поле 2
                                </div>
                            </div>`
             game.insertAdjacentHTML('afterbegin', `   
              <div class="blocks-ticket">
                <div class="block-ticket">
                    <div class="block-ticket__title"> Билет 1</div>
                    <div class="zone-worker">
                        <div class="zone-one">
                            <div class="zone-header">
                                Поле 1
                            </div>
                        </div>
                       ${fields.length > 1 ? zone2 : ""}
                    </div>
                    <div class="block-ticket__footer quick-panel">
                        <div class="block-ticket__icon">
                            <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink">

                                 <defs>
                                  <style type="text/css">
                                   <![CDATA[
                                    .str0 {stroke:#2B2A29;stroke-width:0.755906}
                                    .fil0 {fill:#1F1B20}
                                   ]]>
                                  </style>
                                 </defs>
                                 <g id="Слой_x0020_1">
                                  <metadata id="CorelCorpID_0Corel-Layer"/>
                                  <path class="fil0 str0" d="M450 497l-398 0c-27,0 -49,-22 -49,-49l0 -398c0,-27 22,-49 49,-49l398 0c27,0 49,22 49,49l0 398c0,27 -22,49 -49,49zm-130 -142l65 0 -38 37c-2,2 -4,6 -4,9 0,7 6,13 13,13 3,0 7,-1 9,-4l60 -60c2,-2 4,-6 4,-9 0,-3 -1,-7 -4,-9l-60 -60c-2,-2 -5,-3 -9,-3 -7,0 -13,6 -13,13 0,3 1,6 3,9l38 38 -59 0 -68 -80 68 -80 59 0 -38 38c-3,2 -4,6 -4,9 0,7 6,13 13,13 4,0 7,-1 9,-4l60 -60c2,-2 4,-6 4,-9 0,-3 -1,-7 -4,-9l0 0 -60 -60c-2,-2 -5,-3 -9,-3 -7,0 -13,6 -13,13 0,3 1,6 3,9l38 37 -65 0c-4,0 -7,2 -10,5l-69 81 -69 -81c-2,-3 -6,-5 -10,-5l-77 0c-7,0 -13,6 -13,13 0,7 6,13 13,13l71 0 68 80 -68 80 -71 0c-7,0 -13,6 -13,13 0,7 6,13 13,13l77 0c4,0 7,-2 10,-5l69 -81 69 81c2,3 6,5 10,5l0 0z"/>
                                 </g>
                            </svg>
                        </div>

                        <div class="block-ticket__icon">
                            <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                 <defs>
                                  <style type="text/css">
                                   <![CDATA[
                                    .fil0 {fill:black}
                                   ]]>
                                  </style>
                                 </defs>
                                 <g id="Слой_x0020_1">
                                  <metadata id="CorelCorpID_0Corel-Layer"/>
                                  <g id="_272720688">
                                   <path class="fil0" d="M449 2l-397 0c-27,0 -49,22 -49,49l0 0 0 397c0,27 22,49 49,49l397 0c27,0 49,-22 49,-49l0 0 0 -397c0,-27 -22,-49 -49,-49l0 0zm-309 417c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm0 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm221 221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm0 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0z"/>
                                  </g>
                                 </g>
                            </svg>
                        </div>

                        <div class="block-ticket__icon">
                            <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="500px" height="500px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                 <defs>
                                  <style type="text/css">
                                   <![CDATA[
                                    .fil0 {fill:black}
                                   ]]>
                                  </style>
                                 </defs>
                                 <g id="Слой_x0020_1">
                                  <metadata id="CorelCorpID_0Corel-Layer"/>
                                  <g id="_271839368">
                                   <path class="fil0" d="M446 2l-397 0c-27,0 -49,22 -49,49l0 0 0 397c0,27 22,49 49,49l397 0c27,0 49,-22 49,-49l0 0 0 -397c0,-27 -22,-49 -49,-49l0 0zm-309 417c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0z"/>
                                  </g>
                                 </g>
                            </svg>
                        </div>

                        <div class="block-ticket__icon">
                                    <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="500px" height="500px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                    <defs>
                                    <style type="text/css">
                                    <![CDATA[
                                    .fil0 {fill:black}
                                    ]]>
                                    </style>
                                    </defs>
                                    <g id="Слой_x0020_1">
                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                    <g id="_271839368">
                                    <path class="fil0" d="M446 2l-397 0c-27,0 -49,22 -49,49l0 0 0 397c0,27 22,49 49,49l397 0c27,0 49,-22 49,-49l0 0 0 -397c0,-27 -22,-49 -49,-49l0 0zm-309 417c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0z"/>
                                    </g>
                                    </g>
                            </svg>
                        </div>
                        <div style="margin-left: auto;">
                             <a href="#" class="btn-game" id="addTicket">Добавить билет</a>
                        </div>
                        
                    </div>
                </div>
            </div>`
            )
             return game
        }
        function generateZone(parrent, nameZone, tableField, field, id) {
           
            const zone = parrent.querySelector(`.${nameZone}`)
            const table = createGrid( new Tablegame(field.tr, field.td, field.offset, id, tableField))
            zone.append(table)
            return table
        }
        function Create2DArray(rows) {
            var arr = []
            for(let i = 0; i < rows; i++) {
                arr[i] = []
            }
            return arr
        }
      
        const game = startGame()
        let countInput = Create2DArray(5)

        function valid(id) {  
            countInput[id-1][0]
            countInput[id-1][1]
           function summa(arr) {
                const summ = arr.reduce((a, b) => { 
                    return a + b
                })
                return summ
            }
            if (type == 'game4_20') {
                const mas = coefficient
                let price, price1, price2 = 0
                for (let i = 1; i <= 7; i++) {
                    if (countInput[id-1][0] == i) {
                        price1 = 100 * mas[i]
                    }
                    if (countInput[id-1][1] == i) {
                        price2 = 100 * mas[i]
                    }
                }
    
                if (countInput[id-1][0] == countInput[id-1][1]) {
                    price = (price1 * (price1 / 100)) + (price2 * (price2 / 100)) 
                } else {
                    price = (price1 * 2) * (price2 / 100)
                }
                itog[id-1] = isNaN(price) ? 0 : price
                $itog.innerHTML = summa(itog)
            }
            if (type == 'game5_36') {
                
                const mas = coefficient
                let price, price1 = 0
                for (let i = 1; i <= 11; i++) {
                    if (countInput[id-1][0] == i) {
                        price1 = 40 * mas[i];
                    }
                } 
                price = price1 * countInput[id-1][1];
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }
            if (type == 'game7_49') {
                const mas = coefficient
                let price, price1 = 0
                for (let i = 1; i <= 14; i++) {
                    if (countInput[id-1][0] == i) {
                        price1 = 25 * mas[i];
                    }
                } 
                price = price1
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }
           
            if (type == 'game6_45') {
                const mas = coefficient
                let price, price1 = 0
                for (i = 1; i <= 14; i++) {
                    if (countInput[id-1][0] == i) {
                        price1 = 100 * mas[i];
                    }
                } 
                price = price1;
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }
            if (type == 'game12_24') {
                let multiplierValue = 0
                const $multiplier = root.querySelector('#factor')
                const multiplier = [...$multiplier.options]
                multiplier.forEach(el => {
                    if (el.selected) {
                        multiplierValue = el.value
                    }
                })
      
                $multiplier.onchange = function() {
                    valid(id)
                }
                let price = 0
                if (countInput[id-1][0] == 12) {
                    price = 60 * multiplierValue
                } else  {
                    price = 0
                }
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }
            if (type == 'rapido') {
                let multiplierValue = 0
                const $multiplier = root.querySelector('#factor')
                const multiplier = [...$multiplier.options]
                multiplier.forEach(el => {
                    if (el.selected) {
                        multiplierValue = el.value
                    }
                })
                $multiplier.onchange = function() {
                    valid(id)
                }
                let price = 0
                if (countInput[id-1][0] == 8) {
                    price = (60 * countInput[id-1][1]) * multiplierValue;
                } else  {
                    price = 0
                }
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }
        }
        function analiz(id, table, index) {
            countInput[id-1][index] = 0
            const inputs = [...table.querySelectorAll('input')]
            
            for (input of inputs) {
                input.addEventListener('click', function() {
                    if (this.checked) {
                        countInput[id-1][index]++
                    } else countInput[id-1][index]--
                    valid(id)
                })
            }
        }

        const nameZones = ['zone-one','zone-two']
        const nameFields = ['One', 'Two']

        const init = function() {
            const arrBtns = [...game.querySelector('.quick-panel').children]
           fields.forEach((field, index) => {
               const idTicket = field.id
               const table = generateZone(game, nameZones[index], nameFields[index], field, field.id)
               analiz(idTicket, table, index)
               const inputs = [...table.querySelectorAll('input')]
               arrBtns.forEach((btn , indexBtn) => {
                    switch(indexBtn) {
                        case 0: 
                            this.randomBtn({btn, type: 'rnd', inputs, id: idTicket, field, index})
                        break
                        case 1:
                            this.randomBtn({btn, type: 'even', inputs, id: idTicket, field, index})
                        break
                        case 2:
                            this.randomBtn({btn, type: 'odd', inputs, id: idTicket, field, index})
                        break
                        case 3:
                            btn.addEventListener('click', () => {
                                inputs.forEach(item => {
                                    item.checked = false
                                })
                                countInput[idTicket-1][index] = 0
                                valid(idTicket)
                            })
                        break
                    }
                })
                    
            }) 
            
            const addTicket = game.querySelector('#addTicket')
            addTicket.addEventListener('click', (e) => {
                if (document.getElementById('validTicketNumber').value < 5)
                    document.getElementById('validTicketNumber').value++
                e.preventDefault()
                this.doubleTable() 
            })
        }

        const doubleTable = (function() {
            let countId = 1
            return function() {
                countId++
                const blocksTicket = game.querySelector('.blocks-ticket')
                const blockTicket = elt('div', {class : 'block-ticket'})
                   blockTicket.insertAdjacentHTML('afterbegin', `   
                          <div class="block-ticket__title"> Билет ${countId}</div>
                          <div class="zone-worker">
                              <div class="zone-one">
                                  <div class="zone-header">
                                      поле1
                                  </div>
                              </div>
                              <div class="zone-two">
                                  <div class="zone-header">
                                      поле2
                                  </div>
                              </div>
                          </div>
                          <div class="block-ticket__footer quick-panel">
                                 <div class="block-ticket__icon">
                                     <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink">

                                          <defs>
                                           <style type="text/css">
                                            <![CDATA[
                                             .str0 {stroke:#2B2A29;stroke-width:0.755906}
                                             .fil0 {fill:#1F1B20}
                                            ]]>
                                           </style>
                                          </defs>
                                          <g id="Слой_x0020_1">
                                           <metadata id="CorelCorpID_0Corel-Layer"/>
                                           <path class="fil0 str0" d="M450 497l-398 0c-27,0 -49,-22 -49,-49l0 -398c0,-27 22,-49 49,-49l398 0c27,0 49,22 49,49l0 398c0,27 -22,49 -49,49zm-130 -142l65 0 -38 37c-2,2 -4,6 -4,9 0,7 6,13 13,13 3,0 7,-1 9,-4l60 -60c2,-2 4,-6 4,-9 0,-3 -1,-7 -4,-9l-60 -60c-2,-2 -5,-3 -9,-3 -7,0 -13,6 -13,13 0,3 1,6 3,9l38 38 -59 0 -68 -80 68 -80 59 0 -38 38c-3,2 -4,6 -4,9 0,7 6,13 13,13 4,0 7,-1 9,-4l60 -60c2,-2 4,-6 4,-9 0,-3 -1,-7 -4,-9l0 0 -60 -60c-2,-2 -5,-3 -9,-3 -7,0 -13,6 -13,13 0,3 1,6 3,9l38 37 -65 0c-4,0 -7,2 -10,5l-69 81 -69 -81c-2,-3 -6,-5 -10,-5l-77 0c-7,0 -13,6 -13,13 0,7 6,13 13,13l71 0 68 80 -68 80 -71 0c-7,0 -13,6 -13,13 0,7 6,13 13,13l77 0c4,0 7,-2 10,-5l69 -81 69 81c2,3 6,5 10,5l0 0z"/>
                                          </g>
                                     </svg>
                                 </div>

                                 <div class="block-ticket__icon">
                                     <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                          <defs>
                                           <style type="text/css">
                                            <![CDATA[
                                             .fil0 {fill:black}
                                            ]]>
                                           </style>
                                          </defs>
                                          <g id="Слой_x0020_1">
                                           <metadata id="CorelCorpID_0Corel-Layer"/>
                                           <g id="_272720688">
                                            <path class="fil0" d="M449 2l-397 0c-27,0 -49,22 -49,49l0 0 0 397c0,27 22,49 49,49l397 0c27,0 49,-22 49,-49l0 0 0 -397c0,-27 -22,-49 -49,-49l0 0zm-309 417c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm0 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm221 221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm0 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0z"/>
                                           </g>
                                          </g>
                                     </svg>
                                 </div>

                                 <div class="block-ticket__icon">
                                     <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="500px" height="500px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                          <defs>
                                           <style type="text/css">
                                            <![CDATA[
                                             .fil0 {fill:black}
                                            ]]>
                                           </style>
                                          </defs>
                                          <g id="Слой_x0020_1">
                                           <metadata id="CorelCorpID_0Corel-Layer"/>
                                           <g id="_271839368">
                                            <path class="fil0" d="M446 2l-397 0c-27,0 -49,22 -49,49l0 0 0 397c0,27 22,49 49,49l397 0c27,0 49,-22 49,-49l0 0 0 -397c0,-27 -22,-49 -49,-49l0 0zm-309 417c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0z"/>
                                           </g>
                                          </g>
                                     </svg>
                                 </div>

                                 <div class="block-ticket__icon">
                                        <svg class="icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="500px" height="500px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                        <defs>
                                        <style type="text/css">
                                        <![CDATA[
                                            .fil0 {fill:black}
                                        ]]>
                                        </style>
                                        </defs>
                                        <g id="Слой_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"/>
                                        <g id="_271839368">
                                        <path class="fil0" d="M446 2l-397 0c-27,0 -49,22 -49,49l0 0 0 397c0,27 22,49 49,49l397 0c27,0 49,-22 49,-49l0 0 0 -397c0,-27 -22,-49 -49,-49l0 0zm-309 417c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 -221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0zm111 221c-33,0 -59,-27 -59,-59 0,-33 27,-59 59,-59 33,0 59,27 59,59l0 0c0,33 -27,59 -59,59l0 0z"/>
                                        </g>
                                        </g>
                                    </svg>
                                 </div>
                                 <div style="margin-left: auto;">
                                      <a href="#" class="btn-game"  id="addTicket">Добавить билет</a>
                                 </div>                 
                            </div>
                        `
                  )
                fields.forEach((field, index) => {
                    const table = generateZone(blockTicket, nameZones[index], nameFields[index], field, countId)
                    analiz(countId, table, index)
                    const inputs = [...table.querySelectorAll('input')]
                    const arrBtns = [...blockTicket.querySelector('.quick-panel').children]
                    arrBtns.forEach((btn , indexBtn) => {
                         switch(indexBtn) {
                             case 0: 
                                 this.randomBtn({btn, type: 'rnd', inputs, id: countId, field, index})
                             break
                             case 1:
                                 this.randomBtn({btn, type: 'even', inputs, id: countId, field, index})
                             break
                             case 2:
                                 this.randomBtn({btn, type: 'odd', inputs, id: countId, field, index})
                             break
                             case 3:
                                 this.randomBtn({btn, inputs , id: countId, field, index})
                             break
                         }
                     })


                })
                blocksTicket.append(blockTicket)
            }
        })()
        const randomBtn = function(option) {
            const btn = option.btn
            const type = option.type
            const inputs = option.inputs
            const id  = option.id
            const field = option.field
            const index = option.index
            function rnd(feild, type, countActiveCell, allCell) {
               const inputs = feild
               inputs.forEach(item => {
                   item.checked = false
               })
               const arrInedexRnd = []
               let rnd, flagRandom = null
               for (let i = 0; i < countActiveCell; i++) {
                   if (type == 'rnd') { 
                       do {
                           flagRandom = true
                           rnd = Math.floor(Math.random() * allCell) 
                           if (arrInedexRnd.includes(rnd))  flagRandom = false
                       } while (!flagRandom)
                       
                       arrInedexRnd.push(rnd)
                       inputs[arrInedexRnd[i]].checked = true
                   }
                   if (type == 'odd') {
                       do {
                           flagRandom = true
                           rnd = Math.floor(Math.random() * allCell) 
                           if (arrInedexRnd.includes(rnd) || rnd % 2 != 0)  flagRandom = false
                       } while (!flagRandom)
                       arrInedexRnd.push(rnd)
                       inputs[arrInedexRnd[i]].checked = true
                   }
                   if (type == 'even') {
                       do {
                           flagRandom = true
                           rnd = Math.floor(Math.random() * allCell) 
                           if (arrInedexRnd.includes(rnd) || rnd % 2 == 0)  flagRandom = false
                       } while (!flagRandom)
                       arrInedexRnd.push(rnd)
                       inputs[arrInedexRnd[i]].checked = true
                   }
               }
            }
            
            btn.addEventListener('click', () => {
                rnd(inputs, type, field.activeCell, field.tr * field.td - field.offset)
                countInput[id-1][index] = field.activeCell
            
                valid(id)
            }) 
        }
        return {
            init,
            doubleTable,
            randomBtn,
        }
    }
    window.games = games
})()