/*Client Form Validation Start*/
function call()
{
	var a=document.forms.client.client_name.value;
	if(a=="")
	{
		alert("Please Enter Name!!!");
		client_name.focus();
		return false;
	}
	var a=document.forms.client.fathers_name.value;
	if(a=="")
	{
		alert("Please Enter Father's Name!!!");
		fathers_name.focus();
		return false;
	}
	var a=document.forms.client.birth.value;
	if(a=="")
	{
		alert("Please Enter Date of Birth!!!");
		birth.focus();
		return false;
	}
	{
	var radios = document.getElementsByName("gender");
    var formValid = false;
    var i = 0;
    while (!formValid && i < radios.length) 
	{
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid)
	{ 
	alert("Please Select Your Sex!");
    return false;
	}
	}
	var a=document.forms.client.nationality.value;
	if(a=="")
	{
		alert("Please Enter Your Nationality!!!");
		nationality.focus();
		return false;
	}
	var a=document.forms.client.present_address.value;
	if(a=="")
	{
		alert("Please Enter Present Address!!!");
		present_address.focus();
		return false;
	}
	var a=document.forms.client.present_pin.value;
	if(a=="")
	{
		alert("Please Enter Present Pin!!!");
		present_pin.focus();
		return false;
	}
	var a=document.forms.client.permanent_address.value;
	if(a=="")
	{
		alert("Please Enter Permanent Address!!!");
		permanent_address.focus();
		return false;
	}
	var a=document.forms.client.permanent_pin.value;
	if(a=="")
	{
		alert("Please Enter Permanent Pin!!!");
		permanent_pin.focus();
		return false;
	}
	var a=document.forms.client.mobile.value;
	if(a=="")
	{
		alert("Please Enter Mobile No.!!!");
		mobile.focus();
		return false;
	}
	var a=document.forms.client.email.value;
	if(a=="")
	{
		alert("Please Enter E-Mail Address!!!");
		email.focus();
		return false;
	}
	var a=document.forms.speak.value;
	if(a=="")
	{
		alert("Please Enter Your Speaking Language!!!");
		speak.focus();
		return false;
	}
	var a=document.forms.read.value;
	if(a=="")
	{
		alert("Please Enter Your Reading Language!!!");
		read.focus();
		return false;
	}
	var a=document.forms.write.value;
	if(a=="")
	{
		alert("Please Enter Your Writing Language!!!");
		write.focus();
		return false;
	}
	var a=document.forms.uid.value;
	if(a=="")
	{
		alert("Please Enter Your UID Number!!!");
		uid.focus();
		return false;
	}
	var a=document.forms.vehicle_number.value;
	if(a=="")
	{
		alert("Please Enter Your Vehicle Number!!!");
		vehicle_number.focus();
		return false;
	}
	var a=document.forms.licence.value;
	if(a=="")
	{
		alert("Please Enter Your Driving Licence Number!!!");
		licence.focus();
		return false;
	}
	var a=document.forms.photo.value;
	if(a=="")
	{
		alert("Please Upload Your Photo!!!");
		photo.focus();
		return false;
	}
	var a=document.forms.signature.value;
	if(a=="")
	{
		alert("Please Upload Your Signature!!!");
		signature.focus();
		return false;
	}
	var a=document.forms.id_proof.value;
	if(a=="")
	{
		alert("Please Upload Your ID Proof!!!");
		id_proof.focus();
		return false;
	}
	var a=document.forms.driving_licence.value;
	if(a=="")
	{
		alert("Please Upload Your Driving Licence!!!");
		driving_licence.focus();
		return false;
	}
	var a=document.forms.owner_book.value;
	if(a=="")
	{
		alert("Please Upload Your Owner Book!!!");
		owner_book.focus();
		return false;
	}
	/*client Form Validation End*/
}
// JavaScript Document
function same(form) 
{
  if(form.check_address.checked == true) 
  {
  form.permanent_state.value = form.present_state.value;
  form.permanent_dist.value = form.present_dist.value;
	form.permanent_address.value = form.present_address.value;
	form.permanent_pin.value = form.present_pin.value;
  }
}