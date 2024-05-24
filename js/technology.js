function validate(){
var radio1 = document.getElementById('yes').checked;
var radio2 = document.getElementById('no').checked;
var radio3 = document.getElementById('may_be').checked;
var radio4 = document.getElementById('not_interested').checked;

if((((radio1 == "") && (radio2 == "") && (radio3 == "") && (radio4 == ""))))
{
alert("Select One Option");
return false;
}
return true;
}
