function confirmacion(e){
	if (confirm ("¿Esta seguro de eliminar al usuario?")) {
		return true;
	} else {
		e.preventDefault();
	}

}

let linkDelete = document.querySelectorAll(".link_delete");

for (var i = 0; i < linkDelete.lenght; i++){
	linkDelete[i].addEventListener('click',confirmacion);
}

	
