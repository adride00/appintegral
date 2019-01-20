$(document).ready(function(){
                         
    var consulta;
           
    //hacemos focus
    $("#email").focus();
                                               
    //comprobamos si se pulsa una tecla
    $("#email").keyup(function(e){
           //obtenemos el texto introducido en el campo
           consulta = $("#name").val();
                                    
           //hace la búsqueda
           $("#resultado").delay(1000).queue(function(n) {      
                                         
                $("#resultado").html('<img src="ajax-loader.gif" />');
                                         
                      $.ajax({
                            type: "POST",
                            url: "../includes/comprobar.php",
                            data: "b="+consulta,
                            dataType: "html",
                            error: function(){
                                  alert("error petición ajax");
                            },
                            success: function(data){                                                      
                                  $("#resultado").html(data);
                                  n();
                            }
                });
                                         
           });
                              
    });
                        
});