<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<style>


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.sign-in {
  background-color: #fff;
  padding: 50px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.sign-in h1 {
  font-size: 36px;
  text-align: center;
  margin-bottom: 30px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  display: block;
  font-size: 18px;
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
  padding: 15px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-bottom: 20px;
}

button[type="submit"] {
  padding: 15px;
  font-size: 18px;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

.not-registered {
  text-align: center;
  margin-top: 20px;
}

.not-registered p {
  font-size: 16px;
  color: #666;
}

.not-registered a {
  color: #4CAF50;
  text-decoration: none;
}

.not-registered a:hover {
  text-decoration: underline;
}

.password {
  position: relative;
}

.password input[type="password"] {
  padding-right: 40px;
}

.show-password-btn {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.show-password-btn i {
  color: #999;
  font-size: 24px;
}

.show-password-btn i:hover {
  color: #4CAF50;
}

.show-password-btn i.fa-eye {
  display: none;
}

.show-password-btn i.fa-eye-slash {
  display: block;
}

.show-password-btn:focus {
  outline: none;
}

.show-password-btn::-moz-focus-inner {
  border: 0;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="sign-in">
          <h1>Sign In</h1>
          <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <div class="password">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required>
              <button type="button" class="show-password-btn"><i class="fas fa-eye"></i><i class="fas fa-eye-slash"></i></button>
            </div>
            
            <button type="submit">Sign In</button>
          </form>
          
          <div class="not-registered">
            <p>Not registered yet? <a href="#">Sign up here</a></p>
          </div>
        </div>
      </div>
    

      <script src="../kit.fontawesome.com/1234567890.html" crossorigin="anonymous"></script>    
	
    <script> 

        const passwordInput = document.getElementById("password");
        const showPasswordButton = document.querySelector(".show-password-btn");


        showPasswordButton.addEventListener("click", function() {

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordButton.querySelector("i.fa-eye-slash").style.display = "block";
            showPasswordButton.querySelector("i.fa-eye").style.display = "none";
        }

        else {
            passwordInput.type = "password";
            showPasswordButton.querySelector("i.fa-eye-slash").style.display = "none";
            showPasswordButton.querySelector("i.fa-eye").style.display = "block";
        }
        });


    
    </script>
</body>


</html>
