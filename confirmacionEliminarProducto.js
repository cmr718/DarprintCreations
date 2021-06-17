function confirmacion(event){
	if confirm("¿Estas seguro de que sedea eliminar este registro?");; {
		return true;
	} else {
		event.preventDefault();
	}
}

let linkDelete = document.querySelectorAll("");
for ( car i = 0; i < linkDelete.length; i++){
	linkDelete[i].addEventListener('click',confirmacion);
}