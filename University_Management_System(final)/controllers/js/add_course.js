function validateCourseAdd(){
    var id = document.getElementsByName('courseId')[0].value;
    var name = document.getElementsByName('courseName')[0].value;
    var sec = document.getElementsByName('section')[0].value;
    
    var idError = document.getElementById ('idError');
    var nameError = document.getElementById('nameError');
    var secError = document.getElementById('secError');
    var isValid = true;



  if (id === '') {
    idError.innerHTML = ' Enter Course ID!';
    isValid = false;
  } else {
    idError.innerHTML = '';
  }

  if (name === '') {
    nameError.innerHTML = ' Enter Course Name!';
    isValid = false;
  } else {
    nameError.innerHTML = '';
  }

  if (sec === '') {
    secError.innerHTML = ' Enter Course Sections!';
    isValid = false;
  } else {
    secError.innerHTML = '';
  }

  return isValid;

//   function ajax() {
//     var courseId = document.getElementById("typedText").value.trim();
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             var response = JSON.parse(this.responseText);
//             if (response.status == "error") {
//                 document.getElementById("idError").innerHTML = response.message;
//             } else {
//                 document.getElementById("idError").innerHTML = "";
//             }
//         }
//     };
//     xhttp.open("POST", "../controllers/checkCourseId.php", true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send("courseId=" + courseId);
// }

}
