var form = document.getElementById('formUsuarios');
 function validar(){
    var CI = document.getElementById("CI").value ();
    var NOMBRE = document.getElementById("NOMBRE Y APELLIDOS").value ();
    var CORREO = document.getElementById("CORREO").value ();
    var CONTRASEÑA = document.getElementById("CONTRASEÑA").value ();
if(CI==""){
    alert("no puede ir vacio");
    CI.focus();
    return false;
}if(NOMBRE==""){
   alert("no puede ir vacio");
    NOMBRE.focus();
    return false;
}if(CORREO==""){
   alert("no puede ir vacio");
    CORREO.focus();
    return false;
}
    if(CONTRASEÑA==""){
   alert("no puede ir vacio");
    CONTRASEÑA.focus();
    return false;
    }
 }



 
