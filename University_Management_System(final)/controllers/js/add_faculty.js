
function validateFaculty() {
    var id = document.getElementsByName('id')[0].value;
    var facultyName = document.getElementsByName('facultyName')[0].value;
    var facultyEmail = document.getElementsByName('facultyEmail')[0].value;
    var salary = document.getElementsByName('salary')[0].value;
    var facultyContact = document.getElementsByName('facultyContact')[0].value;
    var facultyGender = document.querySelector('input[name="facultyGender"]:checked');   //document.getElementsByName('gender')[0].value;
  
    var idError = document.getElementById('idError');
    var nameError = document.getElementById('nameError');
    var salaryError = document.getElementById('salaryError');
    var phoneError = document.getElementById('phoneError');
    var emailError = document.getElementById('emailError');
    var genderError = document.getElementById('genderError');
  
    var isValid = true;
  
  
  
    if (id === '') {
      idError.innerHTML = 'Please enter teacher id!';
      isValid = false;
    } else {
      idError.innerHTML = '';
    }
  
  
    if (facultyName === '') {
      nameError.innerHTML = 'Please enter teacher name!';
      isValid = false;
    } else {
      nameError.innerHTML = '';
    }
  
  
    if (salary === '') {
      salaryError.innerHTML = 'Please enter teacher salary!';
      isValid = false;
    } else if (isNaN(salary)) {
      salaryError.innerHTML = 'Salary must be a number!';
      isValid = false;
    } else {
      salaryError.innerHTML = '';
    }
  
  
    if (facultyContact === "") {
        phoneError.innerHTML = "Please enter faculty phone number";
        isValid = false;
    }else {
        phoneError.innerHTML = "";
    }
  
  
    if (facultyEmail === '') {
      emailError.innerHTML = 'Please enter faculty email!';
      isValid = false;
    } else {
      emailError.innerHTML = '';
    }
  
  if (facultyGender == null) {
      document.getElementById('genderError').innerHTML = 'Please select teacher gender!';
      isValid = false;
  }else {
      genderError.innerHTML = '';
    }

  return isValid;
  }
  
  