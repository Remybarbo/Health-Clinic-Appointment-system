function test() {

  var user = document.getElementById('username').value;
  var pass = document.getElementById('password').value;

  var username = localStorage.setItem("username", user);
  var password = localStorage.setItem("password", pass);

  var username = localStorage.getItem("username", user);
  var password = localStorage.getItem("password", pass);

  var usernameValue="ThunderBayHealthClinic"
  var passwordValue="AdminOnly"

  if (usernameValue===username && passwordValue===password) {

      window.open("adminTable.php");
  }
  else {
    alert("username or password is incorrect")
  }

}
