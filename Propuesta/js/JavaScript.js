  //alert("Wellcome")//

//Variables en JavaScript//

var Nombre="Susana de los Santos";
var Hobbie="Beber cerveza";
var Ocupacion="Banquera";
 //alert("Hola, mi nombre es "+Nombre+", Soy "+Ocupacion+" y Me gusta "+Hobbie);//
 
 function validarForm()
 {
	 //alert("Llamaste la funcion")
	 if(document.frmContacto.txtNombre.value.length==0)
	 {
		 alert("Escriba su nombre")
		 document.getElementById("Notificaciones").innerHTML="<h3>Favor escribir su Nombre</h3>";
		 document.frmContacto.txtNombre.focus()
		 return false 
	 }
	 if(document.frmContacto.txtDireccion.value.length==0)
	 {
		 alert("Escriba su Direccion")
		 document.frmContacto.txtDireccion.focus()
		 return false 
	 }
	 if(document.frmContacto.txtCorreo.value.length==0)
	 {
		 alert("Escriba su Correo")
		 document.frmContacto.txtCorreo.focus()
		 return false 
	 }
	 if(document.frmContacto.txtSexo.selectedIndex==0)
	 {
		 alert("Seleccione su Sexo")
		 document.frmContacto.txtSexo.focus()
		 return false 
	 }
	  
 }
