
/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* SweetAlert - 
* Usage: $.SweetAlert.methodname
*/

!function($) {
    "use strict";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').click(function(){
        swal("Here's a message!");
    });

    //A title with a text under
    $('#sa-title').click(function(){
        swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
    });
	
    //Success Message
    $('#sa-success').click(function(){
        swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
    });

    //Warning Message
    $('#sa-warning').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
    });
	
	
    //Incorrecto login
    $('#sa-unregister').click(function(){
        swal({   
            title: "Inicie sesión antes por favor.",   
            text: "Nesecita iniciar sesión antes de entrar al foro TeamHouse",   
            type: "warning",       
        });
    });
        
        
        //Incorrecto login
    $('#sa-incorrect').click(function(){
        swal({   
            title: "Usuario o contraseña Incorrecta",   
            text: "Tu usuario o contraseña es incorrecta, intenta recordar!",   
            type: "warning",       
        });
    });
        
        
     //Incorrecto regiser
    $('#sa-incorrect-u').click(function(){
        swal({   
            title: "El usuario no existe o ha expirado.",   
            text: "Lo sentimos el usuario no se ha creado o no existe contactenos para mas información!",   
            type: "warning",       
        });
    });
        
        
      //Inactive user
    $('#sa-incorrect-u').click(function(){
        swal({   
            title: "El usuario no se ha activado.",   
            text: "Lo sentimos el usuario no se ha activado, por favor revise su correo. De no existir contacte a su administrador.!",   
            type: "warning",       
        });
    });
        
        
//Activacion completa
    $('#sa-correct').click(function(){
        swal({   
            title: "Perfecto.",   
            text: "Su cuenta ha sido activada! Ahora puede acceder, inicie sesión por favor.",   
            type: "success",       
        });
    });
         
        
    //Incorrecto lock screen
    $('#sa-ls-incorrect').click(function(){
        swal({   
            title: "Contraseña Incorrecta",   
            text: "Tu Contraseña es incorrecta, intenta recordar!",   
            type: "warning",       
        });
    });
        
        
    //Incorrecto login
    $('#sa-incorrect-two').click(function(){
        swal({   
            title: "Algo salió mal.",   
            text: "Por favor asegurese de rellenar todos los campos correctamente!",   
            type: "warning",       
        });
    });
        
        
    //Parameter
    $('#sa-params').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Deleted!", "Your imaginary file has been deleted.", "success");   
            } else {     
                swal("Cancelled", "Your imaginary file is safe :)", "error");   
            } 
        });
    });

    //Custom Image
    $('#sa-image').click(function(){
        swal({   
            title: "Sweet!",   
            text: "Here's a custom image.",   
            imageUrl: "assets/sweet-alert/thumbs-up.jpg" 
        });
    });

    //Auto Close Timer
    $('#sa-close').click(function(){
         swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);