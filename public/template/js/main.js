window.onload = function () {
    if (window.location.pathname != '/home') {
        var elements = this.document.getElementsByTagName('header')
        elements[0].classList.remove('navbar-ghost')
    }
}
