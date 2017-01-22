let lib_console = {
    clear : function () {
        lib_machine.setscreen("");
    },
    write : function (text) {
        lib_machine.setscreen(lib_machine.getscreen() + text);
    },
    read : function () {
        lib_console.startread();
        while(lib_console.checkreadstate() == false){
            console.log("on reading ...");
            lib_console.waitfor(500);
        }
        lib_machine.setscreen(lib_machine.getscreen() + lib_console.textreaded);
        return lib_console.textreaded;
    },
    startread : function () {
        console.log("startread actived");
        lib_console.textreaded = "";
        lib_console.onread = true;
    },
    endread : function (event) {
        console.log("endread actived with onread = "+lib_console.onread);
        if(lib_console.onread == true){
            if(event.keyCode == 13){
                lib_console.onread = false;
            } else {
                lib_console.textreaded += String.fromCharCode(event.keyCode || event.charCode)
                lib_console.write(String.fromCharCode(event.keyCode || event.charCode));
                console.log(String.fromCharCode(event.keyCode || event.charCode));
            }
        }
    },
    checkreadstate : function () {
        console.log("checked onread state with onread = "+lib_console.onread);
        if(lib_console.onread == true){
            return false;
        } else {
            return true;
        }
    },
    waitfor : function (ms) {
        ms += new Date().getTime();
        while (new Date() < ms){}
    },
    textreaded : "",
    onread : false
}