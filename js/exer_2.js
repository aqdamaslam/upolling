function validate(){
var radio1 = document.getElementById('bjp').checked;
var radio2 = document.getElementById('congress').checked;
var radio3 = document.getElementById('ncp').checked;
var radio4 = document.getElementById('cpim').checked;
var radio5 = document.getElementById('aitcp').checked;
var radio6 = document.getElementById('cpi').checked;
var radio7 = document.getElementById('bsp').checked;
var radio8 = document.getElementById('others').checked;

if((((((((radio1 == "") && (radio2 == "") && (radio3 == "") && (radio4 == "") && (radio5 == "") && (radio6 == "") && (radio7 == "") && (radio8 == ""))))))))
{
alert("Select Your National Party Or NOTA");
return false;
}
return true;
}
