if (crearRegistro) {
    crearRegistro.addEventListener("click", () => {

        fetch('php/registrar.php')
            .then(res => res.json())
            .then(data => {

                console.log(data);

                // Buscar una coincidencia exacta del correo, contraseña y rol en los datos
                var admin = data.find(item => item.correo === email && item.contrasena === password && item.id_rol === 1);
                var cliente = data.find(item => item.correo === email && item.contrasena === password && item.id_rol === 2);


                if (cliente) {

                    window.location.href = "../Vista productos/index.html";
                    localStorage.clear();

                } else if (admin) {

                    window.location.href = "../Adminsitrador/index.php";
                    localStorage.clear();

                } else {

                    alert("Email or password are incorrect.");


                }
            });
    });
};

// document.getElementById('formulario').addEventListener('submit', function (event) {
//     event.preventDefault();

//     var password = document.getElementById('password').value;
//     var confirm = document.getElementById('confirm-password').value;
//     var passwordError = document.getElementById('password-error');

//     if (password !== confirm) {
//         passwordError.style.display = 'block';
//     } else {
//         passwordError.style.display = 'none';

//         let formulario = new FormData(document.getElementById('formulario'));

//         fetch('registrar.php', {
//             method: 'POST',
//             body: formulario
//         })
//             .then(res => res.json())
//             .then(data => {
//                 if (data == 'true') {
//                     document.getElementById('username').value = '';
//                     document.getElementById('userID').value = '';
//                     document.getElementById('email').value = '';
//                     document.getElementById('password').value = '';
//                     document.getElementById('confirm-password').value = '';

//                     alert('The user was inserted successfully.');
//                     window.location.href = "../Login/index.html";
//                 } else {
//                     console.log(data);
//                 }
//             });
//     }
// });
