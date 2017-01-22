let app_kernel = {
    start : function () {
        lib_console.clear();
        lib_console.write("Simple Kernel online V 0.0.1<br>login : ");
        //login = lib_console.read();
        lib_console.onread = true
        /*lib_console.write("<br>password : ");
        password = lib_console.read();
        if(login == "louis" && password == "loulou123"){
            lib_console.write("<br>Connection etablished !");
        }*/
        console.log("script finish");
    }
}