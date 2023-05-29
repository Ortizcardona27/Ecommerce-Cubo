function readTxt(usuario, contrasena) {
    file = "usuarios.txt"
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status == 0) {
                var allText = rawFile.responseText;
                var usuarios = allText.split("/")
                console.log(usuarios)
                var es_usuario = false
                for (var i = 0; i < usuarios.length; i++) {
                    var usuario_temporal = usuarios[i].split("-")
                    var nombre_usuario_temporal = usuario_temporal[0]
                    var contrasena_usuario_temporal = usuario_temporal[1]
                    console.log(nombre_usuario_temporal)
                    if (nombre_usuario_temporal == usuario.value && contrasena_usuario_temporal == contrasena.value) {
                        es_usuario = true
                    }
                }
                if (es_usuario) {
                    alert("Welcome to CUBO.")
                    window.location = "index.html";
                } else {
                    alert("You have entered the wrong username and/or password, try again.")
                }
            }
        }
    }
    rawFile.send(null);
}

function abrirRedSocial() {
    var redSocial = "https://instagram.com/ortizcardona27?igshid=ZDdkNTZiNTM= "
    alert("Welcome to our instagram, here you can contact us and we will give you a username and password.");
    window.location = redSocial;
} 

$("#boton").click(function (e) {
    var ms = "";
    ms = generarRegsitro();
    $("mensaje").val(ms);
});

