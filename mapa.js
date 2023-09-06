//Esta es la función que inicia el mapa
function iniciarMap(){
  //esta variable son las coordenadas
    var cordena = {lat: 29.095528 ,lng: -110.972917};
    //Esta es la variable del mapa
    var map = new google.maps.Map(document.getElementById('map'),{
      //Este es el zoom del mapa
      zoom: 100,
      //Este es donde centrado el mapa
      center: cordena
    });
    //Este es el marcador del mapa
    var marker = new google.maps.Marker({
      //Esta es la posición del marcador
      position: cordena,
      //Este es el mapa en el que estara el marcador
      map: map
    });
   
}
 //este es un comentario altamente inecesario, pero sirve para aclarar que aquí acaba el script