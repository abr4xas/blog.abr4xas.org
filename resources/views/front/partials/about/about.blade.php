@extends('layouts.front') 
@section('content') 
@push('body')
<body>
@endpush
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section class="detail-info">
                        <div class="card">
                            <div class="card-body">
                                <h2>Acerca de este blog</h2>
                                <p>Este blog intenta ser un espacio en donde plasmar las ideas y tareas de mi vida profesional. Varios
                                    de los posts serán referencias o notas personales para no olvidar cómo hacer algunas cosas, otros
                                    posts intentarán compartir experiencias que creo pueden ser de utilidad para alguien más.
                                </p>
                                <p class="card-text">Si logro una cantidad interesante de lectores, también me gustaría que se transformase en un espacio
                                    de discusión y exposición de diferentes puntos de vista de cada uno de los lectores.
                                    <br> Desde ya agradezco el interés, y están invitados a comentar sobre lo que les parezca.
                                </p>
                                <p class="card-text">
                                    Como saben, escribir y mantener un blog requiere de mucho tiempo y esfuerzo. Por ese motivo he puesto a disposición de los
                                    lectores varias alternativas mediante las cuales pueden mostrar su apoyo. Las formas de hacerlo
                                    son las siguientes:
                                    <ul>
                                        <li>Usando este link de
                                            <a href="https://paypal.me/abr4xas" target="_blank">paypal</a>.
                                        </li>
                                        <li>Hazte un
                                            <a href="https://www.patreon.com/abr4xas" target="_blank">patreon</a>.
                                        </li>
                                        <li>Puedes hacer clic en los banners publicitarios que estan en los posts</li>
                                        <li>
                                            <a href="https://ko-fi.com/I3I78D6B" target="_blank">Buy me a
                                                <i>guaraná</i> @ ko-fi</a>.
                                        </li>
                                        <li>
                                            <a href="{{ url('#0') }}">Afiliados</a>.
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>

    @endsection
