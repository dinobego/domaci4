<?php
$ime = $_POST['ime'];
$prezime= $_POST['prezime'];
$grad = $_POST['grad'];
$dobriLosi = dobriLosi= "Da" : dobriLosi = "Ne";
$zelja = $_POST['zelja'];

print "ime: $ime";
print "prezime: $prezime";
print "grad: $grad";
print "dobriLosi: $dobriLosi";
print "zelja: $zelja";
function chekforblank(){
    if(document.getElementById($ime).value ==""){
        return ("Location: ./index.html");
    }


}



















?>