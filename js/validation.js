

function cont_validate1()
{
	

	if(document.cont1.name.value=="")
	{
		alert("Please Enter Name");
		document.cont1.name.focus();
		return false;
		
	}
	
	
	
	
			else if(document.cont1.phone.value=="")
	{
		alert("Please Enter Phone Number");
		document.cont1.phone.focus();
		return false;
		
	}
    return valid;
   
}






function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;

return true;
}