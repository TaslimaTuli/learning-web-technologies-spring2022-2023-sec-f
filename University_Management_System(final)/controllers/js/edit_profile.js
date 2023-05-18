
function editProfileValidation(){

    // var username = document.getElementById('username').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var gender = document.getElementById('gender').value;
    var dob = document.getElementById('dob').value;
    var submit = document.getElementById('submit').value;

//===================================================================================================

    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../../views/editProfile.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200) {
            alert('Update profile');
        }
    }
    xhttp.send('&name='+name+'&email='+email +'&gender='+gender+'&dob='+dob +'&submit='+submit);

//=====================================================================================
}
