window.onload = () => {
    
    (function clickSelect() {
        const itmesTd = document.querySelectorAll('td')
        
        for (let item of itmesTd) {
            item.onmousedown = function(e) {
                this.classList.toggle('active')
            }
        }
        
    })()
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
