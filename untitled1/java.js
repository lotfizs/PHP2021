var instellingen = {
    aantalPaginas: 4,
    bestandsExtensie: ".jpg",
    siteNaam: "CET021",
    kleurThema: "#A2A6AD",

    // De basispagina van de clickdemo, bijvoorbeeld: http://z36.nl/2017/IP047/index.html
    // wordt /2017/IP047/index.html
    baseUrl: "index.html",

    ///////////////////////////////////////
    // 	VANAF HIERONDER NIET AANZITTEN!	 //
    ///////////////////////////////////////

    versie: "V.15"
};

var j = 1;
var x = "";
var maxi = instellingen.aantalPaginas + 1;
var imgArray = new Array();
var imgBGArray = new Array();

for (var n = 0; n < instellingen.aantalPaginas; n++) {
    imgArray[n] = new Image();
    imgBGArray[n] = new Image();

    if (n < 10) {
        imgArray[n].src = "img/0" + n + instellingen.bestandsExtensie;
        imgBGArray[n].src = "bg/0" + n + "bg" + instellingen.bestandsExtensie;
    } else {
        imgArray[n].src = "img/" + n + instellingen.bestandsExtensie;
        imgBGArray[n].src = "bg/" + n + "bg" + instellingen.bestandsExtensie;
    }
}

while (j < maxi) {
    if (j < 2) {
        x = x + "<li><a class='list' id = '1'>01</a><br />";
    }
    else if (j < 10) {
        x = x + "<li><a class = 'list' id = '" + j + "'>0" + j + "</a></li>";
    }
    else {
        x = x + "<li><a class = 'list' id = '" + j + "'>" + j + "</a></li>";
    }
    j++;
}

function toggleFullScreen(elem) {
    if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (elem.requestFullScreen) {
            elem.requestFullScreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullScreen) {
            elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}
$(document).ready(function(){
    var lightOn = 0;
    var vervaagTijd = 500;

    $("#teller").css("background-color", instellingen.kleurThema);
    $(".menu_begin").css("background-color", instellingen.kleurThema);

    $("#versie_nummer").text(instellingen.versie);

    function replaceQueryParam(param, newval, search) {
        var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
        var query = search.replace(regex, "$1").replace(/&$/, '');

        return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
    }

    function switchImage(pagina) {
        $("#teller").stop().css("opacity", "0.8");

        var stateObj = { index: instellingen.baseUrl };
        history.replaceState(stateObj, "", instellingen.baseUrl + "?page="+pagina);

        if(pagina < 10) {
            pagina = "0" + pagina;
        }

        $("#img").attr("src", "img/" + pagina + instellingen.bestandsExtensie);
        $("body").attr("style", "background-image: url(bg/" + pagina + "bg" + instellingen.bestandsExtensie + ");");

        document.title = pagina + " " + instellingen.siteNaam;

        $("#pagina_nummer").text(pagina);

        if (lightOn === 1) {
            $("#teller").show().delay(1000).fadeOut(vervaagTijd);
        }

    }

    function getURLParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split("&"),
            sParameterName,
            y;

        for(y = 0; y < sURLVariables.length; y++) {
            sParameterName = sURLVariables[y].split("=");

            if(sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    }

    function closeLightbox() {
        $("#lightbox").css("display", "none");
        $("#fullscreen_button").css("display", "none");
        $("#menu").removeClass("menu_begin");
        $("#menu").addClass("menu_standaard");
        $("#menu").css("background-color", "transparent");
        $("#teller").show().delay(1000).fadeOut(vervaagTijd);
        lightOn = 1;
    }

    function reOpenLightbox() {
        $("#lightbox").css("display", "block");
        $("#fullscreen_button").css("display", "inline-block");
        $("#menu").removeClass("menu_standaard");
        $("#menu").addClass("menu_begin");
        $("#menu").css("background-color", instellingen.kleurThema);
        $("#teller").stop().show().css("opacity", "0.8");
        lightOn = 0;
    }

    var i = getURLParameter("page");

    if (i > instellingen.aantalPaginas || i < 1 || typeof i === "undefined") {
        i = 1;
    }
    switchImage(i);

    $("#img").click(function() {
        if (i < instellingen.aantalPaginas) {
            i++;
        }
        else {
            i = 1;
        }

        switchImage(i);
    });

    $(".list").click(function() {
        i = $(this).attr("id");
        switchImage(i);
    });

    $(document).keydown(function(e) {
        switch(e.which) {
            //left arrow
            case 37:
                if(lightOn === 1) {
                    if (i < 2) {
                        i = instellingen.aantalPaginas;
                    }
                    else {
                        i--;
                    }
                    switchImage(i);
                }
                break;

            //right arrow
            case 39:
                if(lightOn === 1) {
                    if (i < instellingen.aantalPaginas) {
                        i++;
                    }
                    else {
                        i = 1;
                    }
                    switchImage(i);
                }
                break;

            //a button
            case 65:
                if(lightOn === 1) {
                    if (i < 2) {
                        i = instellingen.aantalPaginas;
                    }
                    else {
                        i--;
                    }
                    switchImage(i);
                }
                break;

            //d button
            case 68:
                if(lightOn === 1) {
                    if (i < instellingen.aantalPaginas) {
                        i++;
                    }
                    else {
                        i = 1;
                    }
                    switchImage(i);
                }
                break;


            //spatie
            case 32:
                if(lightOn === 1) {
                    if (i < instellingen.aantalPaginas) {
                        i++;
                    }
                    else {
                        i = 1;
                    }
                    switchImage(i);
                }
                break;

            //enter
            case 13:
                if(lightOn === 0) {
                    closeLightbox();
                } else if(lightOn === 1) {
                    if (i < instellingen.aantalPaginas) {
                        i++;
                    }
                    else {
                        i = 1;
                    }
                    switchImage(i);
                }
                break;

            //escape
            case 27:
                reOpenLightbox();
        }
    });

    $("#close").click(function() {
        closeLightbox();
    });

    $("#menu").hover(
        function() {
            $("#fullscreen_button").css("display", "inline-block");
            $("#menu").css("background-color", instellingen.kleurThema);
        },
        function() {
            if(lightOn === 1) {
                $("#fullscreen_button").css("display", "none");
                $("#menu").css("background-color", "transparent");
            }

        }
    );
});
