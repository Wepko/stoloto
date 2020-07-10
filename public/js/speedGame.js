

function createGame() {
    const zone = document.getElementById('addTable')
    const word = ['X','П','Р','И','З','Х']
    const lot = [word[0],word[1],word[2],word[3],word[4],word[5]]

    zone.insertAdjacentHTML('afterbegin', ` <table class="table table-bordered" id="tableX" style="width:80%">
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" name="lot1" id="lot1" value="1"><label for="lot1">${lot[0] ? lot[0] : '?'}</label></td>
                                                        <td><input type="checkbox" name="lot2" id="lot2" value="2"><label for="lot2">${lot[1] ? lot[1] : '?'}</label></td>
                                                        <td><input type="checkbox" name="lot3" id="lot3" value="3"><label for="lot3">${lot[2] ? lot[2] : '?'}</label></td>
                                                        <td><input type="checkbox" name="lot4" id="lot4" value="4"><label for="lot4">${lot[3] ? lot[3] : '?'}</label></td>
                                                        <td><input type="checkbox" name="lot5" id="lot5" value="5"><label for="lot5">${lot[4] ? lot[4] : '?'}</label></td>
                                                        <td><input type="checkbox" name="lot6" id="lot6" value="6"><label for="lot6">${lot[5] ? lot[5] : '?'}</label></td>
                                                    </tr>
                                                </tbody>
                                            </table>`)
    for (var i = 1; i <= 6; i++) {
        document.getElementById('lot' + i).setAttribute("disabled", "true")
    }

    document.getElementById('payGame').style.display = 'none'
    document.getElementById('summa').style.display = 'none'
    document.getElementById('runGame').style.display = 'inline'
}

function runGame() {
    document.getElementById('tableX').remove()
    const zone = document.getElementById('addTable')
    const word = ['X','П','Р','И','З','X']
    const lot = [word[0],word[1],word[2],word[3],word[4],word[5]]
    
    zone.insertAdjacentHTML('afterbegin', ` <table class="table table-bordered" style="width:80%">
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" onclick="validGame(1)" name="lot1" id="lot1" value="1"><label id="l1" for="lot1">?</label></td>
                                                        <td><input type="checkbox" onclick="validGame(2)" name="lot2" id="lot2" value="2"><label id="l2" for="lot2">?</label></td>
                                                        <td><input type="checkbox" onclick="validGame(3)" name="lot3" id="lot3" value="3"><label id="l3" for="lot3">?</label></td>
                                                        <td><input type="checkbox" onclick="validGame(4)" name="lot4" id="lot4" value="4"><label id="l4" for="lot4">?</label></td>
                                                        <td><input type="checkbox" onclick="validGame(5)" name="lot5" id="lot5" value="5"><label id="l5" for="lot5">?</label></td>
                                                        <td><input type="checkbox" onclick="validGame(6)" name="lot6" id="lot6" value="6"><label id="l6" for="lot6">?</label></td>
                                                    </tr>
                                                </tbody>
                                            </table>`)

    

    document.getElementById('startInfo').style.display = 'none'
    document.getElementById('runInfo').style.display = 'inline'
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
            zoneRes.insertAdjacentHTML('afterbegin',
            `<div class="alert alert-success text-center" role="alert">
                Вы проиграли...
            </div>`)
            document.getElementById('runGame').style.display = 'none'
            document.getElementById('restartGame').style.display = 'inline'
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
                zoneRes.insertAdjacentHTML('afterbegin',`<div class="alert alert-success text-center" role="alert">
                                                            Вы выйграли!
                                                        </div>`)
                document.getElementById('runGame').style.display = 'none'
                document.getElementById('restartGame').style.display = 'inline'
            }
            else {
                zoneRes.insertAdjacentHTML('afterbegin',`<div class="alert alert-success text-center" role="alert">
                                                            Вы проиграли...
                                                        </div>`)
                document.getElementById('runGame').style.display = 'none'
                document.getElementById('restartGame').style.display = 'inline'
            }
        }
    }
}


