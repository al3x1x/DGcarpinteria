
function enviar() {
    validar();
   
    document.getElementById("ocultar").style.display="none";

    document.getElementById("form").innerHTML= '<h3>Su registro ha sido exitoso</h3>';
    document.getElementById("form").style.backgroundColor= "greenyellow";
    document.getElementById("form").style.textAlign= "center";


    
}
 


function validar() {
    if(document.getElementById("name").value==0){
        alert("Completa el campo nombre")
        document.form.name.focus();
        return 0;
    }

    if(document.getElementById("correo").value==0){
        alert("Tienes que escribir un correo para contactarnos contigo");
        document.form.correo.focus();
        return 0;
    }
    
    if(document.getElementById("numero").value==0){
        alert("Por favor escribe un numero de celular");
        document.form.numero.focus();
        return 0;
    }

    if(document.getElementById("descrip").value==0){
        alert("Olvidaste hacer una descripción");
        document.form.descrip.focus();
        return 0;
    }

}

    
