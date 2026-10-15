var form = document.getElementById('formUsuarios');
 function validar(){
    var ci = document.getElementById("ci").value ();
    var nombre = document.getElementById("nombre").value ();
    var correo = document.getElementById("correo").value ();
    var contrasena = document.getElementById("contrasena").value ();
if(ci==""){
    alert("no puede ir vacio");
    ci.focus();
    return false;
}if(nombre==""){
   alert("no puede ir vacio");
    nombre.focus();
    return false;
}if(correo==""){
   alert("no puede ir vacio");
    correo.focus();
    return false;
}
    if(contrasena==""){
   alert("no puede ir vacio");
    contrasena.focus();
    return false;
    }
 }



 
