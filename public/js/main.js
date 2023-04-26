function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$(function () {


    $("#a_change_color").click(function () {
        $("#user_panel").slideToggle('slow');
    });
    $(".change_color").click(function () {
       let color = $(this).data("color");
       setCookie("color", color, 365);

       if (color=='black'){
            $("body").toggleClass("theme-light");
        }
    });

    let bgcolor= getCookie('color');
    if (bgcolor=='black'){
        $("body").removeClass("theme-light");
    }else{
        $("body").addClass("theme-light");
    }
});
