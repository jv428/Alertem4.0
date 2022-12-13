//ejecutar funcion en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu );
//declara las variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");


//Evento para mostrar y ocultar el menu
    function open_close_menu(){
        body.classList.toggle("body_move");//este body_move es la clase imaginaria que creamos en el css
        side_menu.classList.toggle("menu__side_move");//este menu__side_move es la clase imaginaria que creamos en el css

    }

//desplegable derecha declaracion de variables


//evento para el click en el desplegble de derecha
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

  // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.img_nav_desple')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
}

//el toggle sirve porque cuano le damos clic al icono le aplicara la clase y mostrara y cuando le volvamos a dar clic no ocultara


//si el ancho de la pagina es menor a 760px, ocultara el menu al recargar la pagina
if(window.innerWidth < 760){
    
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//haciendo el menu responsive (adaptable)
window.addEventListener("resize", function(){

    if(this.window.innerWidth >760){

        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }
    
    if(this.window.innerWidth >760){

        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

});

