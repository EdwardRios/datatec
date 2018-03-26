var map;
var marker;
var coords={};
function initMap() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position){
            console.log("Latitud: " + position.coords.latitude);
            console.log("Longitud: " + position.coords.longitude);
            coords ={
                lat: position.coords.latitude ,
                lng: position.coords.longitude
            }    
        },        
        showError);
    } else {
        console.log("No soportado");
    }
    console.log("Hola");
    console.log(coords);
    var myUbication;
    // var myLatlng = new google.maps.LatLng(-17.863902, -63.214687);
    if (Object.keys(coords).length === 0){
        myUbication = new google.maps.LatLng(-17.863902, -63.214687);
    }else{
        myUbication = coords;    
    }
    var myOptions = {
        zoom: 12,
        center: myUbication,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    // console.log(myLatlng);
    map = new google.maps.Map(document.getElementById("map"), myOptions);
    //Inicializo el marcador
    marker = new google.maps.Marker({
        position: myUbication,
        map: map
    });    
    google.maps.event.addListener(map, "click", function (event) {
        // get lat/lon of click        
        var clickLat = event.latLng.lat();
        var clickLon = event.latLng.lng();
        console.log('lat:' + clickLat + ' lon: '+ clickLon);
        // show in input box
        // document.getElementById("lat").value = clickLat.toFixed(5);
        // document.getElementById("lon").value = clickLon.toFixed(5);
        document.getElementById("lng").innerText = clickLon;
        document.getElementById("lat").innerText = clickLat;

        document.getElementById("inputLat").value = clickLat;
        document.getElementById("inputLng").value = clickLon;

        // console.log(marker);
        marker.setMap(null);
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(clickLat, clickLon),
            map: map
        });
    });
    // marker refers to a global variable
    //Foto Vista Previa
    document.getElementById("photo").onchange = function (e) {

        let reader = new FileReader();

        reader.onload = function () {
            let preview = document.getElementById('preview'),
                image = document.createElement('img'),
                imageModal = document.createElement('img'),
                preview2 = document.getElementById('previewModal');
                image.classList.add('img-fluid');
                imageModal.classList.add('img-fluid');

            image.src = reader.result;
            imageModal.src = reader.result;
            preview.innerHTML = '';
            console.log(image);
            preview.append(imageModal);
            console.log(preview);
            console.log(preview2);
            console.log(image);
            preview2.innerHTML = '';
            preview2.append(image);
            // preview2.append('Hola')
            console.log('no carga mi js');
        };

        reader.readAsDataURL(e.target.files[0]);
    };
    document.getElementById('btn-register').addEventListener('click',function (e) {
        let lat = document.getElementById('lat').innerText,
            lng = document.getElementById('lng').innerText;
            document.getElementById('latModal').innerText= lat;
            document.getElementById('lngModal').innerText= lng;
        document.getElementById('codClienteModal').innerText = document.getElementById('codCliente').value;
        document.getElementById('ordTrabajoModal').innerText = document.getElementById('ordTrabajo').value;
    })
}
function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            console.log("User denied the request for Geolocation."); 
            break;
        case error.POSITION_UNAVAILABLE:
            console.log("Location information is unavailable."); 
            break;
        case error.TIMEOUT:
            console.log("The request to get user location timed out."); 
            break;
        case error.UNKNOWN_ERROR:
            console.log("An unknown error occurred.");
            break;
    }
}

// window.onload = function () { initialize() };