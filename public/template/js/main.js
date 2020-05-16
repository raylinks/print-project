

var elements = this.document.getElementsByTagName('header')

window.onload = function () {
    if (window.location.pathname != '/home') {
        elements[0].classList.remove('navbar-ghost')
    }
}

window.onscroll = function () {
    if (window.location.pathname == '/home') {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            elements[0].classList.remove('navbar-ghost')
        } else {
            elements[0].classList.add('navbar-ghost')
        }
    } else {
        elements[0].classList.remove('navbar-ghost')
    }
}

