function required()
{
var empt = document.forms["form1"]["first_name"].value;
if (empt == "")
{
alert("Please input a Value");
return false;
}
else 
{
alert('Code has accepted : you can try another');
window.location('signup.php');
return true; 
}
}