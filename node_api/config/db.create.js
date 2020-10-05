var mysql = require('mysql');
var dbConfig = require('./db.config')

var con = mysql.createConnection({
    host: dbConfig.HOST,
    user: dbConfig.USER,
    password: dbConfig.PASSWORD,
});
con.connect(function (err) {
    if (err) throw err;
    console.log("Connected!");

    con.query("CREATE DATABASE test_advize", function (err, result) {
        if (err) throw err;
        console.log("Database created");
    });

    con.query("CREATE TABLE test_advize.users(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,birthdate DATE NOT NULL)", function (err, result) {
        if (err) throw err;
        console.log("Users table created");
    });
});