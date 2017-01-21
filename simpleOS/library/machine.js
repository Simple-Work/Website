let lib_machine = {
    shutdown: function () { lib_machine.screen.style.backgroundColor = "black"; lib_machine.screen.style.color = "white"; lib_machine.setscreen("OFF. press F5 to restart"); lib_machine.screen.style.backgroundImage = ""; },
    start : function () { lib_machine.screen.style.backgroundColor = "black"; lib_machine.screen.style.color = "white"; lib_BIOS.boot(); },
    reboot : function () { lib_machine.shutdown(); lib_machine.start(); },
    screen : document.getElementById("desktop"),
    getscreen : function () { return lib_machine.screen.innerHTML; },
    setscreen : function (value) { lib_machine.screen.innerHTML = value; }
}