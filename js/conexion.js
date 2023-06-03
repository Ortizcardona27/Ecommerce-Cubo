let mysql = require('mysql');

let con = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'Cubo'
});
con.connect(function (err) {
    if (err) {
        console.log(err);
    } else {
        con.query("SELECT * FROM `productos` WHERE 1;", function (err, result) {
            if (err) {
                console.log(err);
            } else {
                for (var elemento of result) {
                    console.log(elemento);
                }
            }
        });
    }
    //console.log("Connected!");
});
