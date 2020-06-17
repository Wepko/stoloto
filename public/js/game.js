

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
            const table = elt('table', {class: 'table is-bordered'})
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
                поле2
            </div>
        </div>`
             game.insertAdjacentHTML('afterbegin', `   
              <div class="blocks-ticket">
                <div class="block-ticket card">
                    <div class="help-information">
                        <p>${infoField}</p>
                        <a href="#" class="btn btn-dark"  style="color: white!important" id="addTicket">Добавить билет</a>
                    </div>
                    <div class="zone-worker">
                        <div class="zone-one">
                            <div class="zone-header">
                                поле1
                            </div>
                        </div>
                       ${fields.length > 1 ? zone2 : ""}
                    </div>
                    <div class="card-footer quick-panel">
                        <div class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Случайные числа"><i class="fas fa-random"></i></div>
                        <div class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Случайные четные числа"><i class="fas fa-random"></i></div>
                        <div class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Случайные не четные числа"><i class="fas fa-random"></i></div>
                        <div class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Удалить"><i class="fas fa-times"></i></div>
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

        // function valid(id) {  
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
            console.log(countInput)
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

                console.log(countInput[id-1])
                console.log(countInput[id-1][0])


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
                console.log(price)
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }

            if (type == 'game7_49') {
                const mas = coefficient
                console.log(mas)
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
                console.log(price)
                itog[id-1] = price
                $itog.innerHTML = summa(itog)
            }

        }

        function analiz(id, table, index) {
            console.log(id, table, index)
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
                                console.log(field)
                                inputs.forEach(item => {
                                    item.checked = false
                                })
                                countInput[idTicket-1][index] = 0
                                console.log(countInput)
                                valid(idTicket)
                            })
                        break
                    }
                })
                    
            }) 
            
            const addTicket = game.querySelector('#addTicket')
            addTicket.addEventListener('click', (e) => {
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
                const blockTicket = elt('div', {class : 'block-ticket card'})

                   blockTicket.insertAdjacentHTML('afterbegin', `   
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
                          <div class="card-footer quick-panel">
                            <div class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Случайные числа"><i class="fas fa-random"></i></div>
                            <div class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Случайные четные числа"><i class="fas fa-random"></i></div>
                            <div class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Случайные не четные числа"><i class="fas fa-random"></i></div>
                            <div class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Удалить"><i class="fas fa-times"></i></div>
                        </div>`
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







