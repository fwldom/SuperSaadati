// Var Global
var User = "";
var Pass = "";
// End
function Login() {
  User = document.getElementById("User").value;
  Pass = document.getElementById("Pass").value;
  if (User.length >= 5 && Pass.length >= 8) {
    var LoginReq = new XMLHttpRequest();
    LoginReq.open("GET", "../../api/Login.php?User=" + User + "&Pass=" + Pass);
    LoginReq.send();
    LoginReq.onreadystatechange = function () {
      if (LoginReq.status == 200) {
        console.log(LoginReq.responseText);
        if (LoginReq.responseText == "T") {
          location.href = "../";
        } else if (LoginReq.responseText == "E") {
          alert("ERROR");
        } else if (LoginReq.responseText == "W") {
          alert("Wrong Password");
        } else if (LoginReq.responseText == "N") {
          alert("Not found User");
        }
      }
    };
  } else {
    alert("Lenght User And Pass Up 7 Character ");
  }
}
function SignUp() {
  User = document.getElementById("User").value;
  Pass = document.getElementById("Pass").value;
  if (User.length >= 5 && Pass.length >= 8) {
    var SignUpReq = new XMLHttpRequest();
    SignUpReq.open(
      "GET",
      "../../api/SignUp.php?User=" + User + "&Pass=" + Pass
    );
    SignUpReq.send();
    SignUpReq.onreadystatechange = function () {
      if (SignUpReq.status == 200) {
        console.log(SignUpReq.responseText);
        if (SignUpReq.responseText == "C") {
          location.href = "../";
        } else if (SignUpReq.responseText == "E") {
          alert("ERROR");
        } else if (SignUpReq.responseText == "A") {
          alert("Account Already");
        }
      }
    };
  } else {
    alert("Lenght User And Pass Up 7 Character ");
  }
}
