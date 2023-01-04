$(document).ready(function()
{
    
	$("img").click(function(){
        $("#Menu").hide();
        $("ul li").hide();
		
    });
	
	$("#verForm").click(function(){
        $("#Formulario").slideToggle("slow");
    });

});