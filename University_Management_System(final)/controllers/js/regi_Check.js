
function validateRegi() {
  var username = document.getElementsByName('username')[0].value;
  var name = document.getElementsByName('name')[0].value;
  var password = document.getElementsByName('password')[0].value;
  var confirmPassword = document.getElementsByName('confirmPassword')[0].value;
  var email = document.getElementsByName('email')[0].value;
  var dob = document.getElementsByName('dob')[0].value;
  var gender = document.querySelector('input[name="gender"]:checked');   //document.getElementsByName('gender')[0].value;
  var role = document.querySelector('input[name="role"]:checked');      //document.getElementsByName('role')[0].value;

  var usernameError = document.getElementById('usernameError');
  var nameError = document.getElementById('nameError');
  var passwordError = document.getElementById('passwordError');
  var confirmPasswordError = document.getElementById('confirmPasswordError');
  var emailError = document.getElementById('emailError');
  var dobError = document.getElementById('dobError');
  var genderError = document.getElementById('genderError');
  var roleError = document.getElementById('roleError');

  var isValid = true;



  if (username === '') {
    usernameError.innerHTML = 'Please enter a username';
    isValid = false;
  } else {
    usernameError.innerHTML = '';
  }


  if (name === '') {
    nameError.innerHTML = 'Please enter your name!';
    isValid = false;
  } else {
    nameError.innerHTML = '';
  }


  if (password === '') {
    passwordError.innerHTML = 'Please enter a password!';
    isValid = false;
  } else if (password.length < 4) {
    passwordError.innerHTML = 'Password must be at least 4 characters!';
    isValid = false;
  } else {
    passwordError.innerHTML = '';
  }


  if (confirmPassword === '') {
    confirmPasswordError.innerHTML = 'Please confirm your password!';
    isValid = false;
  } else if (password !== confirmPassword) {
    confirmPasswordError.innerHTML = 'Passwords do not match!';
    isValid = false;
  } else {
    confirmPasswordError.innerHTML = '';
  }


  if (email === '') {
    emailError.innerHTML = 'Please enter your email!';
    isValid = false;
  } else {
    emailError.innerHTML = '';
  }

  if (dob === '') {
    dobError.innerHTML = 'Please enter your date of birth!';
    isValid = false;
  } else {
    dobError.innerHTML = '';
  }

if (gender == null) {
    document.getElementById('genderError').innerHTML = 'Please select your gender!';
    isValid = false;
}else {
    genderError.innerHTML = '';
  }


if (role == null) {
    document.getElementById('roleError').innerHTML = 'Please select your role!';
    isValid = false;
}else {
    roleError.innerHTML = '';
  }

return isValid;



}

