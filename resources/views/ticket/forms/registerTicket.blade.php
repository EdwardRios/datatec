<div id="camera-button" class="btn btn-outline-secondary btn-block camera-button">
    <label for="photo" class="photo">
        <i class="fas fa-camera-retro fa-3x"></i>
        <span class="takephoto align-top">Tomar Foto</span>
    </label>
    <input type="file" name="photo" id="photo" capture="camera" class="photo-input" >
</div>
<p class="text-center">Vista Previa</p>
<hr>
<div id="preview"></div>
<hr>
<p class="geotitle">Geolocalizacion</p>
<div id="map" class="map"></div>
<div class="card text-center cardcoords">
    <div class="card-header">Coordenadas</div>
    <div class="card-body">
        <p>Latitud : <span id="lat" name="lat"></span></p>
        <input type="text" hidden id="inputLat" name="inputLat">
        <p class="lngText">Longitud : <span id="lng" name="lng"></span></p>
        <input type="text" hidden id="inputLng" name="inputLng">
    </div>
</div>
<div class="form-group">
    <label for="codCliente">Codigo Cliente</label>
    <input id="codCliente" name="client_code" type="number" class="form-control" placeholder="Ingrese codigo cliente" required>
</div>
<div class="form-group">
    <label for="ordTrabajo">Orden de trabajo</label>
    <input id="ordTrabajo" name="work_order" type="number" class="form-control" placeholder="Ingrese orden trabajo">
</div>