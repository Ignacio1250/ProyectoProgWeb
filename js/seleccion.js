


    function seleccionar( idcancion ){
        seleccion=document.getElementById("cancion");
        seleccion.setAttribute("value",idcancion);
       
    console.log(seleccion);
}
function busqueda(valor){

$.ajax({
 url:'../Modelo/busqueda.php',
 type:'POST',
 data:'valor='+valor
}).done(function (resp){
   var valores=eval(resp);
    alert(valores instanceof Array);
});

}