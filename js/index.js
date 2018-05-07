function validar(){
    let name=document.getElementById("name").value
    let identificador= document.getElementById("identificador").value
    let pass=document.getElementById("password").value
    var c1 = document.getElementById('politicas').checked;
    if(name =="" || name.length == 0){
        modal("nombre")
    }else if(identificador =="" || identificador.length == 0){
        alert("El nickname no esta ingresado")
    }else if(pass =="" || pass.length == 0){
        alert("El password no esta ingresado")
    }else if(c1 == false){
        alert("Las politicas no se han aceptado")
    }
}

function modal(valor=":("){
    let cancelButton = document.getElementById('cancel');
    let favDialog = document.getElementById('message');
    document.getElementById('muestra').innerHTML=`Faltan los datos, ${valor}`;
    // Form cancel button closes the dialog box
    cancelButton.addEventListener('click', function() {
      message.close();
    })();

  }