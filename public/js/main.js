function addTicket() {
    let parent = document.getElementById('test');
    let elem1 = parent.querySelector('.card');

    let clone1 = elem1.cloneNode(true);
    parent.appendChild(clone1);

}

