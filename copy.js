// JavaScript Document
// function same(form) 
// {
//   if(form.check_address.checked == true) 
//   {
//     form.permanent_state.value = form.present_state.value;
//     form.permanent_dist.value = form.present_dist.value;
// 	form.permanent_address.value = form.present_address.value;
// 	form.permanent_pin.value = form.present_pin.value;
//   }
// }
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