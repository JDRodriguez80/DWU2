//validaciones 
//Obtener edad
function edad(fecha){
let fechaActual=new Date();
let fechaNac=new Date(fecha);
var edad =fechaActual.getFullYear()-fechaNac.getFullYear();
if (mes < 0 || (mes === 0 && fechaActual.getDate() < fechaNacimiento.getDate())) 
{
    edad--;
}
return edad;
}

//obteniendo la fecha actual
function fecha(){
    let fecha= new Date();
    let dia=fecha.getDate();
    let mes=parseInt(fecha.getMonth())+1;
    let anio= fecha.getFullYear();
    let fechaInsc=anio+"-"+mes+"-"+dia;
    return fechaInsc;
}

//validando datos obtenidos en el formulario de inscripcion 

//++++++++++++++++++++ Asignando Valores enviados por el formulario a variables ++++++++++++++++++++++//
function formaValida(){
    let nombreAlumno=document.getElementById('nombres').value;
    let primAp=document.getElementById('primAp').value;
    let segAp=document.getElementById('segAp').value;
    let curp=document.getElementById('curp').value;
    let fechaNacimiento=new String(document.getElementById('fdn').value);
    let estado =document.getElementById('estado').value;
    let grado=document.getElementById('grado').value;
    let telefono=document.getElementById('telefono').value;
    let email=document.getElementById('email').value;
    var valEmail=  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    let edadProspecto=edad(fechaNacimiento);//obteniendo la edad del alumno mediante la funcion edad

    //validando por vacios
    if(nombreAlumno!="" && primAp!="" && segAp!="" && curp!="" && estado!="" && grado!="" && telefono!=""&& email!="" && fechaNacimiento!=""){
        let edadBool;
        let curpBool;
        let telBool;
        let emailBool;
    


    //validando edad
    if(edadProspecto<6){
        alert('[ERROR] solo se admiten alumnos maypres a 6 años');
        edadBool=false;
    }
    //validando longitud de curp 
    if(!curp.length==18){
        alert('[ERROR] el curp debe de contener 18 caracteres');
        curpBool=false;
    }
    //validando email
    if(valEmail.test(email)==false){
        alert('[ERROR] el email no es valido');
        edadBool=false;
    }
    //validando longitud del telefono 
    if(!telefono.length==10){
        alert('[ERROR] El teléfono debe de contener 10 caracteres');
        telBool-false;
    }
 }else{
    alert('[ERROR] Debe de llenar todos los campos');
    return false;
 }
 alert('[SUCESS] Datos enviados de manera correcta, nuestro departamento de control escolar analizara su solicitud y se pondra en contacto con usted !!!');
 document.getElementById('FormaInsc').submit();
 document.getElementById('FormaInsc').action='solicitarInscripcion.php';
}

