
const modal = m.modal({ typeModal: "lose" })
const modal2 = m.modal({ typeModal: "win" })


function createGame() {
    const zone = document.getElementById('exampleTable')
    const word = ['X','П','Р','И','З','Х']
    const lot = [word[0],word[1],word[2],word[3],word[4],word[5]]

    zone.insertAdjacentHTML('afterbegin', `     <div class="fast-game__zone-item">${lot[0] ? lot[0] : '?'}</div>
                                                <div class="fast-game__zone-item">${lot[0] ? lot[0] : '?'}</div>
                                                <div class="fast-game__zone-item">${lot[0] ? lot[0] : '?'}</div>
                                                <div class="fast-game__zone-item">${lot[0] ? lot[0] : '?'}</div>
                                                <div class="fast-game__zone-item">${lot[0] ? lot[0] : '?'}</div>
                                                <div class="fast-game__zone-item">${lot[0] ? lot[0] : '?'}</div>
                                            `)
    for (var i = 1; i <= 6; i++) {
        document.getElementById('lot' + i).setAttribute("disabled", "true")
    }
}

function runGame() {

    const btn = document.getElementById('btn')

    if (btn.innerText == "Заново")
        return location.reload()

    const zone = document.getElementById('userTable')
    btn.innerHTML = "Заново"
    const word = ['X','П','Р','И','З','X']
    const lot = [word[0],word[1],word[2],word[3],word[4],word[5]]
    
    zone.insertAdjacentHTML('afterbegin', ` <div class="fast-game__zone-item"><input type="checkbox" style="opacity:0" onclick="validGame(1)" name="lot1" id="lot1" value="1"><label id="l1" for="lot1">?</label></div>
                                            <div class="fast-game__zone-item"><input type="checkbox" style="opacity:0" onclick="validGame(2)" name="lot2" id="lot2" value="2"><label id="l2" for="lot2">?</label></div>
                                            <div class="fast-game__zone-item"><input type="checkbox" style="opacity:0" onclick="validGame(3)" name="lot3" id="lot3" value="3"><label id="l3" for="lot3">?</label></div>
                                            <div class="fast-game__zone-item"><input type="checkbox" style="opacity:0" onclick="validGame(4)" name="lot4" id="lot4" value="4"><label id="l4" for="lot4">?</label></div>
                                            <div class="fast-game__zone-item"><input type="checkbox" style="opacity:0" onclick="validGame(5)" name="lot5" id="lot5" value="5"><label id="l5" for="lot5">?</label></div>
                                            <div class="fast-game__zone-item"><input type="checkbox" style="opacity:0" onclick="validGame(6)" name="lot6" id="lot6" value="6"><label id="l6" for="lot6">?</label></div>
    `)
}

const wordRes = ['X','П','Р','И','З','X']

function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
}


shuffle(wordRes)

var h = 0
var hX = 0
var hRes = 0
var coff = Math.floor(Math.random() * (1 - 0 + 1)) + 0;
var value = []

function validGame(number) { 
    const zoneRes = document.getElementById('addRes')
    
    if (number == 1) {
        $("#l1").text(wordRes[1])
        document.getElementById('lot1').setAttribute("disabled", "true")
        value.push(wordRes[1])
        h++
    }
    if (number == 2) {
        $("#l2").text(wordRes[0])
        document.getElementById('lot2').setAttribute("disabled", "true")
        value.push(wordRes[0])
        h++
    }
    if (number == 3) {
        $("#l3").text(wordRes[2])
        document.getElementById('lot3').setAttribute("disabled", "true")
        value.push(wordRes[2])
        h++
    }
    if (number == 4) {
        $("#l4").text(wordRes[3])
        document.getElementById('lot4').setAttribute("disabled", "true")
        value.push(wordRes[3])
        h++
    }
    if (number == 5) {
        $("#l5").text(wordRes[5])
        document.getElementById('lot5').setAttribute("disabled", "true")
        value.push(wordRes[5])
        h++
    }
    if (number == 6) {
        $("#l6").text(wordRes[4])
        document.getElementById('lot6').setAttribute("disabled", "true")
        value.push(wordRes[4])
        h++
    }
    if (coff == 0) {
        if (h == 4) {
            for (i in value) {
                if (value[i] == 'X') {
                    hX++
                }
            }
            if (hX == 0) {
                $("#l"+number).text('X')
                document.getElementById('lot'+number).setAttribute("disabled", "true")
                value.push('X')
            }
        }
        if (h == 5) {
            if (hX == 1) {
                $("#l"+number).text('X')
                document.getElementById('lot'+number).setAttribute("disabled", "true")
                value.push('X')
            }
            for (var i = 1; i <= 6; i++) {
                document.getElementById('lot' + i).setAttribute("disabled", "true")
            }
            modal.open()

        }
    } else {
        if (h == 5) {
            for (var i = 1; i <= 6; i++) {
                document.getElementById('lot' + i).setAttribute("disabled", "true")
            }
            for (i in value) {
                if (value[i] == 'П' || value[i] == 'Р' || value[i] == 'И' || value[i] == 'З' ) {
                    hRes++
                }
            }

            if (hRes == 4) {
                var request = new XMLHttpRequest(); // Создвём объект запроса

                request.open('GET', '/games/speed-game/win'); // Указываем куда отправить запрос
                request.send(); // Выполняем отправку 
             
                modal2.open()

            }
            else {
                modal.open()
            }
            
        }
    }
}

