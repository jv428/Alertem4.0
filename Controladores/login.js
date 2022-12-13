var formulario = document.getElementById('frmPrincipal');
var respuesta = document.getElementById('respuesta');
var operacion = document.getElementById('operacion_lo').value;


document.getElementById('ingresar').addEventListener('click', function(e){

	e.preventDefault();

	fntFetchFormulario(operacion,'POST','../Controladores/controlador_login.php',formulario,respuesta);
	
	});


    function  fntFetchFormulario(funcion,metodo,url,formulario=null,divRespuesta){
	
        let datos = new FormData(formulario);
    
        
        fetch(url,{
            method: metodo,
            body: datos
        })
        .then(response =>  response.json())
        .then(dataJSON => {
           
            if(dataJSON ==1){
				alert('Inicio de sesion correcto');
				window.location.href ="../Vistas/mostrar_grupos.php";
            }else {
                alert('Credenciales incorrectas');
                window.location.href ="../Vistas/login.php";
            }
            
        })

        



        }

          
     