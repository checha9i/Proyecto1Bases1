function TipoPregunta() {
var x = document.getElementById("TipoPregunta").value;
  var list = document.getElementById("res");

if(x==="FV"){
  //Borrar toda la lista
  while (list.firstChild) {
    list.removeChild(list.firstChild);
  }
  var opcion1 = document.createElement("LI");
    opcion1.className='list-group-item';
        var f = document.createElement("INPUT");
        f.setAttribute("type", "checkbox");
        f.setAttribute("value", "Falso");
        f.setAttribute("name", "CHECKBOX_1");
        var div1 = document.createElement("DIV");
        var label1= document.createElement("LABEL");
                label1.setAttribute("for", "checkbox");
                label1.innerHTML="FALSO";
        div1.className='checkbox';
        div1.appendChild(f);
        div1.appendChild(label1);
        opcion1.appendChild(div1);
    document.getElementById("res").appendChild(opcion1);

  var opcion2 = document.createElement("LI");
  opcion2.className='list-group-item';
  var v = document.createElement("INPUT");
  v.setAttribute("type", "checkbox");
  v.setAttribute("value", "Verdadero");
  v.setAttribute("name", "CHECKBOX_2");
  var label2= document.createElement("LABEL");
          label2.setAttribute("for", "checkbox");
          label2.innerHTML="VERDADERO";
  var div2 = document.createElement("DIV");
  div2.className='checkbox';
  div2.appendChild(v);
  div2.appendChild(label2);
  opcion2.appendChild(div2);
    document.getElementById("res").appendChild(opcion2);

}else if(x==="Multiple"){
//Borrar toda la lista
while (list.firstChild) {
  list.removeChild(list.firstChild);
}


  var opcion1 = document.createElement("LI");
    opcion1.className='list-group-item';
        var f = document.createElement("INPUT");
        f.setAttribute("type", "checkbox");
        f.setAttribute("name", "CHECKBOX_1");
        var div1 = document.createElement("DIV");
        var op1 = document.createElement("INPUT");
        op1.setAttribute("type", "text");
        op1.setAttribute("value", "");
        op1.setAttribute("name", "resmult1");
        div1.className='checkbox';
        div1.appendChild(f);
        div1.appendChild(op1);
        opcion1.appendChild(div1);
    document.getElementById("res").appendChild(opcion1);

  var opcion2 = document.createElement("LI");
  opcion2.className='list-group-item';
  var v = document.createElement("INPUT");
  v.setAttribute("type", "checkbox");
  v.setAttribute("name", "CHECKBOX_1");
  var op2 = document.createElement("INPUT");
  op2.setAttribute("type", "text");
  op2.setAttribute("value", "");
  op2.setAttribute("name", "resmult2");
  var div2 = document.createElement("DIV");
  div2.className='checkbox';
  div2.appendChild(v);
  div2.appendChild(op2);
  opcion2.appendChild(div2);
    document.getElementById("res").appendChild(opcion2);

    var opcion3 = document.createElement("LI");
      opcion3.className='list-group-item';
          var op3 = document.createElement("INPUT");
          op3.setAttribute("type", "checkbox");
          op3.setAttribute("name", "CHECKBOX_3");
          var res3 = document.createElement("INPUT");
          res3.setAttribute("type", "text");
          res3.setAttribute("value", "");
          res3.setAttribute("name", "resmult3");
          var div3 = document.createElement("DIV");
          div3.className='checkbox';
          div3.appendChild(op3);
          div3.appendChild(res3);
          opcion3.appendChild(div3);
      document.getElementById("res").appendChild(opcion3);

    var opcion4 = document.createElement("LI");
    opcion4.className='list-group-item';
    var op4 = document.createElement("INPUT");
    op4.setAttribute("type", "checkbox");
    op4.setAttribute("name", "CHECKBOX_4");
    var res4 = document.createElement("INPUT");
    res4.setAttribute("type", "text");
    res4.setAttribute("value", "");
    res4.setAttribute("name", "resmult4");
    var div4 = document.createElement("DIV");
    div4.className='checkbox';
    div4.appendChild(op4);
    div4.appendChild(res4);
    opcion4.appendChild(div4);
      document.getElementById("res").appendChild(opcion4);



}else if(x==="Directa"){
   while (list.firstChild) {
     list.removeChild(list.firstChild);
   }
  var opcion1 = document.createElement("LI");
  opcion1.className='list-group-item';
  var op1 = document.createElement("INPUT");
  op1.setAttribute("type", "text");
  op1.setAttribute("value", "");
  op1.setAttribute("name", "resDirecta");

  var div1 = document.createElement("DIV");
  div1.className='TEXTAREA';
  div1.appendChild(op1);
  opcion1.appendChild(div1);
    document.getElementById("res").appendChild(opcion1);
}

else if(x==="Final"){
   while (list.firstChild) {
     list.removeChild(list.firstChild);
   }
 }
 else{
   while (list.firstChild) {
     list.removeChild(list.firstChild);
   }
 }

}
