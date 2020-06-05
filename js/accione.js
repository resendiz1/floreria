$(document).ready(function() {

if (document.getElementById("file")) {
//imagen con vista previa en tiempo real desde input file
document.getElementById("file").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();
  
    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);
  
    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function(){
      let preview = document.getElementById('preview'),
              image = document.createElement('img');
  
      image.src = reader.result;
      image.className="card-img-top";

  
      preview.innerHTML = '';
      preview.append(image);
      console.log(image.id);
    };
  }





//Inputs con vista previa en tiempo real
document.getElementById("nom").onkeyup=function(e){
var a = document.getElementById("nom").value;
document.getElementById("nomp").innerHTML=a;
}

document.getElementById("precio").onkeyup=function(e){
    var a = document.getElementById("precio").value;
    document.getElementById("preciop").innerHTML=a;
}

document.getElementById("descripcion").onkeyup=function(e){
    var a = document.getElementById("descripcion").value;
    document.getElementById("descripcionp").innerHTML=a;
}


}


$(document).ready(function(){
  $('.zoom').hover(function(){
    $(this).addClass('tansition');
  }, function(){
    $(this).removeClass('transition')
  })
    })


$(document).ready(function() {
  $('a[href^="#contacto"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 800);
    return false;
  });
});




})