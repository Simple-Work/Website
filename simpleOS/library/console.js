let lib_console = {
    clear : function () {
        lib_machine.setscreen("");
    },
    write : function (text) {
        lib_machine.setscreen(lib_machine.getscreen() + text);
    },
    read : function () {
        lib_machine.setscreen(lib_machine.getscreen() + "<br><input type='text' style='display:inline;background-color: black;color: white;' autofocus>");
    }
}