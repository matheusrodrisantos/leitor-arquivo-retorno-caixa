new WOW().init();

$(function () {
    $(".nav-link").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top - 50}, 800);
    });
});

$(document).on('click', '.collapse.show', function (e) {
    if ($(e.target).is('a')) {
        $(this).collapse('hide');
    }
});

function includeHTML() {
    var z, i, elmnt, file, xhttp;
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        file = elmnt.getAttribute("w3-include-html");
        if (file) {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4) {
                    if (this.status === 200) {
                        elmnt.innerHTML = this.responseText;
                    }
                    elmnt.removeAttribute("w3-include-html");
                    includeHTML();
                }
            };
            xhttp.open("GET", file, true);
            xhttp.send();
            return;
        }
    }

    $(".modal").on('hide.bs.modal', function () {
        let iframe = this.querySelector('iframe');
        let iframeSrc = iframe.src;
        iframe.src = iframeSrc;
    });
}