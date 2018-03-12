function checkCheckBoxes(theForm) {
	if (
	theForm.CHECKBOX_1.checked == false &&
	theForm.CHECKBOX_2.checked == false)
	{
		alert ('Seleccione al menos una respuesta');
		return false;
	} else  if (
  theForm.CHECKBOX_1.checked == true &&
  theForm.CHECKBOX_2.checked == false)
  {
    alert ('Falso');
		return false;

  }
  else  if (
  theForm.CHECKBOX_1.checked == false &&
  theForm.CHECKBOX_2.checked == true)
  {
    alert ('True');
		return false;

  }
  else {
    alert ('Seleccione solo una respuesta');
		return true;
	}
}
