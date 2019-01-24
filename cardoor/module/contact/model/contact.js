$(document).ready(function initMap() {
    console.log("ruven");
    var cst = {lat: 39.078470, lng: -0.514171};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: cst
    });
 
    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Villanueva de Castellón</h1>'+
        '<div id="bodyContent">'+
        '<p><b>Villanueva de Castellón</b>, Situado en la confluencia de los ríos Júcar y Albaida. ' +
        'El relieve es totalmente llano y apenas sobresalen algunos cerros en la parte meridional: Destacan las '+
        'alturas del puerto de Cárcer (Serreta de Uchera), y la Montaña del Castillo (el Castellet), que corona los restos del antiguo castillo que dio nombre al pueblo,  '+
        'fortaleza vigía adelantada del de Játiva. El resto del término se mantiene a una altitud media de 30-40 m sobre el nivel del mar, y lo cubren sedimentos  '+
        'pleistocenos y holocenos procedentes de los acarreos de los ríos Júcar y Albaida. '+
        '<p>Mas información de Villanueva de Castellón en: '+
        '<a href="https://es.wikipedia.org/wiki/Villanueva_de_Castell%C3%B3n">'+
        'https://es.wikipedia.org/wiki/Villanueva_de_Castell%C3%B3n</a> '+
        '</div>'+
        '</div>';
 
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
 
    var marker = new google.maps.Marker({
      position: cst,
      map: map,
      title: 'Villanueva de castellon (Valencia)'
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  });