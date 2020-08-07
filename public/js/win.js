
var blockAll = [...document.querySelectorAll('.ticketOne')]
var blockAllWin = [...document.querySelectorAll('.winTicketOne')]

for (var j = 0; j < blockAll.length; j++) {
    mas = []
    masWin = []

    var winTicketOne = blockAllWin[j].innerText
    var ticketOne = blockAll[j].innerText
    blockAll[j].innerHTML = ""

    for (var i = 0; i < ticketOne.length; i = i + 2) {
        mas.push(ticketOne[i] + ticketOne[i + 1])
    }

    for (var i = 0; i < winTicketOne.length; i = i + 2) {
        masWin.push(winTicketOne[i] + winTicketOne[i + 1])
    }
    
    for (var i = 0; i < mas.length; i++) {
        const span = document.createElement('span')
        var h = false

        for (var t = 0; t < mas.length; t++) {
            if (masWin[t] == mas[i]) {   
                span.append(mas[i])
                span.style.color = 'green'
                blockAll[j].append(span)
                h = true
            }
        }
        if (h == false) {
            span.append(mas[i])
            span.style.color = 'red'
            blockAll[j].append(span)
        }
    }
}

