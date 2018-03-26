<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>DataRed</title>

</head>
<body>
<div class="logo">
    <img src="{{asset('images/DataRed Logo.jpg')}}" class="img-fluid mx-auto d-block" alt="logo">
</div>

<!-- Subir fotografia -->
<div class="container">
    <div class="row">
        <p class="col-md-12 text-center">Acceso a la camara</p>
         {!! Form::model(
                           $ticket = new \App\Ticket(),
                            [
                                'route' =>'ticket.store',
                                'id'=>'form',
                                'enctype' => 'multipart/form-data',
                                'class' => 'col-md-12'
                            ]
         )!!}
            @include('ticket.forms.registerTicket')

            <button id="btn-register" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalLong">
                Registrar
            </button>
            <br>
        @include('ticket.modal.confirmTicket')
         {!! Form::close() !!}
    </div>
    {{--Modal--}}

    {{--End modal--}}
</div>

{{--JS--}}

<script src="{{ asset('js/functions.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVTheGv7wwIvTFVE5_PnnwZcPES0o4fBI&callback=initMap">
</script>
</body>
</html>