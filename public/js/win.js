document.querySelector('#ticketOne').style.color = 'red'
document.querySelector('#winTicketOne').style.color = 'green'

var winTicketOne = document.querySelector('#winTicketOne').innerText
var ticketOne = document.querySelector('#ticketOne').innerText

mas = []
document.querySelector('#ticketOne').innerHTML = ""

for (var i = 0; i < winTicketOne.length / 2; i++) {
    mas.push(ticketOne[i] + ticketOne[i + 1])
}

for (var i = 0; i < mas.length; i++) {
    const span = document.createElement('span')
    var str = mas[i]
    if (str[0] == winTicketOne[i] && str[1] == winTicketOne[i+1]) {   
        span.append(mas[i])
        span.style.color = 'green'
        document.querySelector('#ticketOne').append(span)
        continue
    }
    span.append(mas[i])
    span.style.color = 'red'
    document.querySelector('#ticketOne').append(span)
}


