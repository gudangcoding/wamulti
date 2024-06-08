const mysql = require("mysql2");
require('dotenv').config();
const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "wamulti"
})

db.connect((err) => {
    if (err) throw err;
    console.log('database terhubung.')
})

module.exports = { db }