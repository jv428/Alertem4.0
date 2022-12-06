

var formulario = document.getElementById('frmPrincipal');
var respuesta = document.getElementById('respuesta');
var operacion = document.getElementById('operacion_asi').value;

if( operacion =="actualizar"){
	
	
	document.getElementById('btnactualizar').addEventListener('click', function(e){

		e.preventDefault();
		
		var id_asi = document.getElementById('id_asi').value;	 
		fntFetchFormulario(operacion,'POST','../Controladores/controlador_asistencia.php',formulario,'respuesta',id_asi);
	
	});
}


	
if( operacion =="guardar"){
	document.getElementById('btnguardar').addEventListener('click', function(e){

		e.preventDefault();
		
		var operacion = document.getElementById('operacion_asi').value;	 
		fntFetchFormulario(operacion,'POST','../Controladores/controlador_asistencia.php',formulario,'respuesta',null);
	
	});
}

//listarusuarios();
  





//  function listarusuarios(){
 	//fntFetchFormulario('listarTabla','POST','../Controladores/controlador_Usuario.php',formulario,'divTabla',null);
// 	fntFetchFormulario('listarTabla','POST','app/mod_Tseccional/operaciones.php',formulario,'seccional',null);
	
// } 

function  fntFetchFormulario  (funcion,metodo,url,formulario=null,divRespuesta,id=null){
	
	let datos = new FormData(formulario);
	codigo = id;	
	//datos.append("operacion", funcion);

	 if (id =!null) {
		datos.append("codigo", codigo)
	 }
	// if (funcion =="eliminar") {
	// 	let r = confirm("¿Seguro que desea eliminar el Asociado con código Nº "+codigo+" ?");
		
	// 	if (r==false) {
	// 		alert("Proceso Cancelado");
	// 		return;
	// 	}
	//}
	if (funcion =="actualizar") {
		let r = confirm("¿Seguro que desea modificar los datos de este asociado ?");
		
		if (r==false) {
			alert("Proceso Cancelado");
			return;
	 	}
	 }
	fetch(url,{
		method: metodo,
		body: datos
	})
	.then(response =>  response.json())
	.then(dataJSON => {
	 
		// if (divRespuesta != "divTabla" && divRespuesta != "respuesta" ) {

		// 	for (var i = 0; i < dataJSON.length; i++) {

		// 		elemento1 = document.createElement('option');
				
		// 		elemento1.appendChild(document.createTextNode(dataJSON[i][1]));
		// 		elemento1.value = dataJSON[i][0];
				
		// 		elemento2 = document.getElementById(divRespuesta);

		// 		elemento2.appendChild(elemento1);
        
        if (funcion == "listarTabla" || funcion == "filtro") {
			fntCreateDataTable(dataJSON,divRespuesta,[{'title':'#'},{'title':'ID'},{'title':'Documento'},{'title':'Nombre'},{'title':'Primer Apellido'},{'title':'Segundo Apellido'},{'title':'Telefono'},{'title':'Direccion'},{'title':'Correo'},{'title':'Clave'},{'title':'Tipo de Usuario'},{'title':'Grupo'},{'title':'Editar'},{'title':'Eliminar'}],'dataTableDefault','table table-striped dt-responsive nowrap');
			}
    	
    })
        //else{
		 		
			
		 //}
// 		if (funcion == "buscar") {
// 			document.getElementById('id').value = dataJSON[0].id_usuario;
// 			document.getElementById('nombre').value = dataJSON[0].nombre_usuario ;
// 			document.getElementById('correo').value = dataJSON[0].correo_usuario ;
// 			document.getElementById('seccional').value = dataJSON[0].seccional_usuario ;
// 			document.getElementById('operacion').value = "Actualizar";
// 		}
		if (funcion == "actualizar" || funcion == "guardar" || funcion == "eliminar") {
			

			if(funcion =="actualizar"){
				alert('Actualizado con exito');
				window.location.href ="../Vistas/mostrar_asistencia.php";


			 }
			if(funcion =="guardar"){
				alert('Guardado con exito');
				window.location.href ="mostrar_asistencia.php";

			}
		 //loadcontent('contenido','app/mod_usuarios/index.html');
		//  divRespuesta.innerHTML = dataJSON;
            //    alert("guardado");
		}
// 		}
		
		
		
// 	})
	  
 }


 var fntCreateDataTable=(data,divResponse,dataTableHeader,dataTableID='dataTableDefault',dataTableClass='table table-striped dt-responsive table-responsive nowrap')=>{
	
	let contenido=document.getElementById(divResponse);
	contenido.innerHTML='';
	if(data.length<1){
		contenido.innerHTML='<p class="text-center"><strong>No hay datos para mostrar</strong></p>';
		return;
	}

	let tbl=document.createElement('table');
	tbl.setAttribute('id',dataTableID);
	tbl.setAttribute('width','100%');
	tbl.setAttribute('class',dataTableClass);			
	contenido.appendChild(tbl);

	for (var i=0; i < data.length; i++) {
		data[i].unshift("<span role='button' onclick=fntFetchFormulario('buscar','POST','app/mod_clientes/operaciones.php',formulario,'respuesta',"+data[i][0]+")><i class='glyphicon glyphicon-pencil text-info'></i></span>","<span role='button' onclick=fntFetchFormulario('eliminar','POST','app/mod_clientes/operaciones.php',formulario,'respuesta',"+data[i][0]+") ><i class='glyphicon glyphicon-remove text-info'></i></span>");	
		data[i].unshift(i+1);
	}
	$('#'+dataTableID).DataTable({
		dom: 'Bfrtip',
		buttons: ['copy', 'csv', 'excel', 'pdf'],
	    select: true,
		data:data,
		columns:dataTableHeader
	})
		data=null;
}