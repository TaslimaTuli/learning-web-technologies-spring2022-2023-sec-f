
function validateLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    var usernameError = document.getElementById('usernameError');
    var passwordError = document.getElementById('passwordError');
    
    var isValid = true;
  
  
  
    if (username === '') {
        usernameError.innerHTML = 'Please enter username!';
        isValid = false;
    } else {
        usernameError.innerHTML = '';
    }
    
    if (password === '') {
        passwordError.innerHTML = 'Please enter password!';
        isValid = false;
    } else {
        passwordError.innerHTML = '';
    }
  
  
  return isValid;


 
  }
  
  