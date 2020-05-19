

var elements = this.document.getElementsByTagName('header')

window.onload = function () {
    if (window.location.pathname != '/home') {
        elements[0].classList.remove('navbar-ghost')
        elements[0].classList.add('header-other-page')
    }
    if (window.location.pathname == '/home') {

        elements[0].classList.add('header-hide')
    }
}

window.onscroll = function () {
    if (window.location.pathname == '/home') {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            elements[0].classList.remove('navbar-ghost')
            elements[0].classList.remove('header-hide')

        } else {
            elements[0].classList.add('navbar-ghost')
            elements[0].classList.add('header-hide')

        }
    } else {
        elements[0].classList.remove('navbar-ghost')
    }
    if (window.location.pathname != '/home') {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            elements[0].classList.remove('header-other-page')
            elements[0].classList.add('header-other-page-2')
        } else {
            elements[0].classList.add('header-other-page')
            elements[0].classList.remove('header-other-page-2')
        }
    }
}


var fileInput = document.getElementById('file-input');
fileInput.onchange = function (event) {
    var label = document.getElementById('file-input-label');
    label.innerHTML = ""
    for (let i = 0; i < event.target.files.length; i++) {
        label.innerHTML += `  "${event.target.files[i].name}"`
    }
}
