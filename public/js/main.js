let count = 0;
function addTicket() {
    count += 1
    const parent = document.getElementById('test')
    const elem = parent.querySelector('.card')

    const clone = elem.cloneNode(true)

    const arrTagInput = [...clone.querySelectorAll('input')]

    for (let tagInput of arrTagInput) {
          tagInput.name = `ticket${count + 1}_fieldOne`
        console.log(tagInput)
    }

    parent.appendChild(clone)

}

