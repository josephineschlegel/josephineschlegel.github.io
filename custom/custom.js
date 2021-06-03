
function showDiv(data) {
    if (document.querySelector('.visibleClass')) {
        document.querySelector('.visibleClass').classList.remove('visibleClass');
    }
    document.querySelector("#ele-" + data).classList.add('visibleClass');
}


