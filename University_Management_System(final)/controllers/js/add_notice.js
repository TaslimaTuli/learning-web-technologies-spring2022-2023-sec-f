function validateNoticeAdd(){
    var id = document.getElementsByName('id')[0].value;
    var noticeTitle = document.getElementsByName('noticeTitle')[0].value;
    var noticeDescription = document.getElementsByName('noticeDescription')[0].value;
    var time = document.getElementsByName('time')[0].value;
    
    var idError = document.getElementById ('idError');
    var titleError = document.getElementById('titleError');
    var desError = document.getElementById('desError');
    var timeError = document.getElementById('timeError');
    var isValid = true;

  if (id === '') {
    idError.innerHTML = ' Enter Notice ID!';
    isValid = false;
  } else {
    idError.innerHTML = '';
  }

  if (noticeTitle === '') {
    titleError.innerHTML = ' Enter Notice Title!';
    isValid = false;
  } else {
    titleError.innerHTML = '';
  }

  if (noticeDescription === '') {
    desError.innerHTML = ' Enter Notice Description!';
    isValid = false;
  } else {
    desError.innerHTML = '';
  }

  if (time === '') {
    timeError.innerHTML = ' Enter Notice Time!';
    isValid = false;
  } else {
    timeError.innerHTML = '';
  }

  return isValid;
}