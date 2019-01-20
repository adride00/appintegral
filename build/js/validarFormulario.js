function validarFormulario () {
    var txtNombre = document.getElementsById('name');

    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
        alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
}