//alert("Hello JavaScript")

/*Variables*/
var Nombre = "Antonio Perez";
var Hobbie = "Pintar bolitas en Ps";
var Ocupacion = "Multimediologo";

//alert("Hola, soy "+Nombre+" un "+Ocupacion+" que disfruta "+Hobbie)

/*Funciones en JavaScript*/
function validarDatos()
{
	//
	if(document.frmContacto.txtNombre.value.length==0)
	{
		alert("Favor digite su Nombre")
		document.frmContacto.txtNombre.focus()
		return false
		
	}
	if(document.frmContacto.txtDireccion.value.length==0)
	{

		document.getElementById("Notificaciones").innerHTML="<h3>Favor escribir su Direccion</h3>";
		document.frmContacto.txtDireccion.focus()		
		return false
		
	}
	if(document.frmContacto.txtCorreo.value.length==0)
	{

		document.getElementById("Notificaciones").innerHTML="<h3>Favor escribir su Correo</h3>";
		document.frmContacto.txtCorreo.focus()		
		return false
		
	}
	if(document.frmContacto.txtSexo.selectedIndex==0)
	{

		document.getElementById("Notificaciones").innerHTML="<h3>Favor seleccione G&eacute;nero: </h3>";
		document.frmContacto.txtSexo.focus()		
		return false
		
	}
}

