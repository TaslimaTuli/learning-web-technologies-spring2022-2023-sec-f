function validateStudentAdd(){
    var id = document.getElementsByName('id')[0].value;
    var stuName = document.getElementsByName('stuName')[0].value;
  var contactNo = document.getElementsByName('stuContact')[0].value;
  var address = document.getElementsByName('stuAddress')[0].value;
  var email = document.getElementsByName('stuEmail')[0].value;
  var cgpa = document.getElementsByName('stuCgpa')[0].value;
  var gender = document.querySelector('input[name="stuGender"]:checked');   //document.getElementsByName('gender')[0].value;

  var idError = document.getElementById('idError');
  var nameError = document.getElementById('nameError');
  var contactError = document.getElementById('contactError');
  var addressError = document.getElementById('addressError');
  var emailError = document.getElementById('emailError');
  var genderError = document.getElementById('genderError');
  var cgpaError = document.getElementById('cgpaError');
    var isValid = true;

  if (id === '') {
    idError.innerHTML = ' Enter Student ID!';
    isValid = false;
  } else {
    idError.innerHTML = '';
  }

  if (stuName === '') {
    nameError.innerHTML = ' Enter Student Name!';
    isValid = false;
  } else {
    nameError.innerHTML = '';
  }

  if (email === '') {
    emailError.innerHTML = 'Enter student email!';
    isValid = false;
  } else {
    emailError.innerHTML = '';
  }

  if (gender == null) {
    document.getElementById('genderError').innerHTML = 'Select student gender!';
    isValid = false;
}else {
    genderError.innerHTML = '';
  }
  if (cgpa === '') {
    cgpaError.innerHTML = ' Enter Student CGPA!';
    isValid = false;
  } else {
    cgpaError.innerHTML = '';
  }

  if (contactNo === '') {
    contactError.innerHTML = ' Enter Student Contact No.!';
    isValid = false;
  } else {
    contactError.innerHTML = '';
  }

  if (address === '') {
    addressError.innerHTML = ' Enter Student Address!';
    isValid = false;
  } else {
    addressError.innerHTML = '';
  }

  return isValid;
}