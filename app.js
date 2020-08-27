
// let account = document.getElementById("username").value;
let password = document.getElementById("password").value;





function checkpassword(){

  var mysql = require('mysql');

  var con = mysql.createConnection({
    host: "192.168.0.31",
    user: "admin",
    password: "20200101",
    database: "testing"
  });
  
  
  con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "select password from testing.customers where name = 'Mike'";
    
    con.query(sql, function (err, result) {
      if (err) throw err;

      password =  JSON.parse(JSON.stringify(result))[0].password
      if(password === '123456'){
        console.log("correct password")
      }
      else{
        console.log("incorrect password");
      }
    });
  });
  
  
}





