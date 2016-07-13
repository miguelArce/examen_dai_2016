$('#post_to_ejec').click(function() {
    $("#login_usuario").hide("slow");
    $("#login_ejecutivo").show("slow");
}); 

$('#post_to_reg').click(function() {
    $("#login_usuario").hide("slow");
    $("#registro_postulante").show("slow");
}); 

$('#ejec_to_post').click(function() {
    $("#login_ejecutivo").hide("slow");
    $("#login_usuario").show("slow");
}); 

$('#volver').click(function() {
    $("#registro_postulante").hide("slow");
    $("#login_usuario").show("slow");
}); 
