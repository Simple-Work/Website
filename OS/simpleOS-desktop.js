let Machine = {
    shutdown: function () { Machine.screen.style.backgroundColor = "black"; Machine.screen.style.color = "white"; Machine.setscreen("OFF. press F5 to restart"); Machine.screen.style.backgroundImage = ""; },
    start : function () { SimpleOS.boot() },
    reboot : function () { Machine.shutdown(); Machine.start(); },
    screen: document.getElementById("desktop"),
    getscreen : function () { return Machine.screen.innerHTML; },
    setscreen : function (value) { Machine.screen.innerHTML = value; }
}

let SimpleOS = {
    boot : function () {
        Machine.screen.style.backgroundColor = "white"; Machine.screen.style.color = "black";
        Machine.setscreen("<div class='w3-display-middle w3-border w3-round-xlarge' style='min-width:25%;padding:1%;'>Username :<br/><br/><input type='text' class='w3-input' id='username'><br/>Password :<br/><br/><input type='password' class='w3-input' id='password'><br/><br/><button class='w3-left w3-btn w3-grey' onClick='SimpleOS.connect.invite()'>séssion invité</button><button class='w3-right w3-btn w3-grey' onClick='SimpleOS.connect.username()'>connection</button></div>");
    },
    connect: {
        invite : function () { SimpleOS.USER.username = "invite"; SimpleOS.desktop.load() },
        username : function () { SimpleOS.USER.username = document.getElementById("username").value /*
                    ATTENTION : SimpleOS.connect.username() est non sécurisé !    */
        }
    },
    desktop : {
        load : function () {
            Machine.screen.style.color = "white";
            Machine.setscreen("<div class='w3-display-middle w3-jumbo'>Loading &nbsp; <i class='fa fa-spinner fa-pulse'></i></div>");
            Machine.screen.style.backgroundImage = "url('wallpaper.jpg')";
            if(SimpleOS.USER.username != "invite") {
                
            }
            if(SimpleOS.USER.config.topbar.allow == true) {
                SimpleOS.desktop.value.top += "<div class='w3-display-topmiddle w3-grey' style='width: 100%;height:" + SimpleOS.USER.config.topbar.size + "%;'>";
                if(SimpleOS.USER.config.topbar.menu == true) {
                    SimpleOS.desktop.value.top += "<img src='maison-icone.png' style='height:100%;margin-right:2.5%;'>"
                }
                if(SimpleOS.USER.config.topbar.apps == true) {
                    let i = 0, x = SimpleOS.USER.apps.favoris;
                    for(i = 0; i < x.length; i++) {
                        eval("SimpleOS.desktop.value.top += apps." + x[i] + ".config.icone + ' &nbsp; '");
                    }
                }
                SimpleOS.desktop.value.top += "</div>"
            }
            Machine.setscreen(SimpleOS.desktop.value.top);
        },
        value : {
            top : "",
            left : "",
            right : "",
            bottom : ""
        }
    },
    USER : {
        username : null,
        wallpaper : "wallpaper.jpg",
        config : {
            topbar : {
                allow : true,
                size : "5",
                menu : true,
                apps : true,
                notif : true
            }
        },
        apps : {
            favoris : ["files", "simpleweb"], /*,"firefox","help","Simple office"],*/
            desktop : [
                {col1: "", col2 : "", col3 : "", col4 : "", col5 : "", col6 : "", col7 : "", col8 : "", col9 : "", col10 : "", col11 : "", col12 : ""},
                {col1: "", col2 : "", col3 : "", col4 : "", col5 : "", col6 : "", col7 : "", col8 : "", col9 : "", col10 : "", col11 : "", col12 : ""},
                {col1: "", col2 : "", col3 : "", col4 : "", col5 : "", col6 : "", col7 : "", col8 : "", col9 : "", col10 : "", col11 : "", col12 : ""},
                {col1: "", col2 : "", col3 : "", col4 : "", col5 : "", col6 : "", col7 : "", col8 : "", col9 : "", col10 : "", col11 : "", col12 : ""},
                {col1: "", col2 : "", col3 : "", col4 : "", col5 : "", col6 : "", col7 : "", col8 : "", col9 : "", col10 : "", col11 : "", col12 : ""}
            ]
        }
    }
}

let swl = {
    web : {
        request : function (url) {
            // AJAX
        },
        data : function (data) {
            return encodeURI(data);
        }
    }
}

let apps = {
    files : {
        config : {
            icone : "<i class='fa fa-folder-open-o fa-3x' onClick='apps.files.open()'></i>"
        },
        open : function (directory = "/") {
            alert("okay")
        }
    },
    simpleweb : {
        config : {
            icone : "<i class='fa fa-globe fa-3x' onClick='apps.simpleweb.open()'></i>"
        },
        open : function (url = "http://www.google.com") {

        }
    }
}

Machine.start();