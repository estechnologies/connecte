function InvalidMsgError(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please fill in this field');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

 function selectrow1() {
var selectedValue = document.getElementById('loginas').value
if (selectedValue == 'User'){

 $("#Employee-form").attr('action','userUserLoginBack.php');
document.getElementById('User_id').style.display='inline';
document.getElementById('User_name').style.display='none';
 document.getElementById("UserId").setAttribute("required","required");
  document.getElementById("Username").required = false;
  document.getElementById("mainborder").style.marginBottom = "100px";
}
if (selectedValue == 'Admin'){

 $("#Employee-form").attr('action','userAdminLoginBack.php');
document.getElementById('User_id').style.display='none';
document.getElementById('User_name').style.display='inline';
 document.getElementById("Username").setAttribute("required","required");
  document.getElementById("UserId").required = false;
  document.getElementById("mainborder").style.marginBottom = "100px";
 
     }
 }
 function InvalidMsgpan(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please fill in this field');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('Please enter valid PAN number');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsgdate(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please select date of birth');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsgdate(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please select date of birth');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsgsdate(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please select date');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsgjoin(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please select Date of Joining');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsgEmail(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please fill in this field');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('Please enter valid Email Address');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsg(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please fill in this field');
    }
    else if(textbox.validity.patternMismatch){
        textbox.setCustomValidity('Please enter valid 10-digit mobile number');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
 