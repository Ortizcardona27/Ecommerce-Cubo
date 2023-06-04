let mysql = require('mysql');

let con = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'Cubo'
});

// con.connect(function (err) {
//     if (err) {
//         console.log(err);
//     } else {
//         con.query("SELECT max(codigo) + 1 AS \"codigo\" FROM `usuarios`;", function (err, result) {
//             if (err) {
//                 console.log(err);
//             } else {
//                 // var id = result[0].codigo;
//                 // console.log(id);
//                 // let usuario = 'Johamhl';
//                 // let password = '123456';
//                 // let correo = 'johamhernandez81@gmail.com';
//                 con.query("INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`) VALUES ('" 
//                 + result[0].codigo + "','" + usuario + "','" + password + "','" + correo + "');");
//                 // for (var element of result) {
//                 //     console.log(element);
//                 // }
//             }
//         });
//         //console.log(id);

//         // con.query("INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`) VALUES (" + id +
//         //     "," + usuario + "," + password + "," + correo + ");", function (err, result) {
//         //         if (err) {
//         //             console.log(err);
//         //         } else {
//         //             console.log(result);
//         //         }
//         //     });
//     }
//     //console.log("Connected!");
// });

const crearRegistro = document.querySelector("#crearRegistro");

if (crearRegistro) {
    crearRegistro.addEventListener("click", () => {
        RegistrarUsuario(document.querySelector("#usuarioRegistro").value, document.querySelector("#passwordRegistro").value, 
        document.querySelector("#emailRegistro").value);
    });
};

function RegistrarUsuario(usuario, password, correo) {
    //console.log(usuario, password, correo);
    con.connect(function (err) {
        if (err) {
            console.log(err);
        } else {
            con.query("SELECT max(codigo) + 1 AS \"codigo\" FROM `usuarios`;", function (err, result) {
                if (err) {
                    console.log(err);
                } else {
                    con.query("INSERT INTO `usuarios`(`codigo`, `usuario`, `contrasena`, `correo`) VALUES ('"
                        + result[0].codigo + "','" + usuario + "','" + password + "','" + correo + "');");
                    // for (var element of result) {
                    //     console.log(element);
                    // }
                }
            });
        }
        //console.log("Connected!");
    });
};