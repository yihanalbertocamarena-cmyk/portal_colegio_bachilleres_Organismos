<?php
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Milagro Mexicano </title>
    <link rel="stylesheet" href="css/Style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!--
        { <ul> } es una lista sin orden para crear la lista que será el menú

        { <li> } es el elemento de la lista en el que cada subtema es un punto de la lista

        { <a href= "#home"> } es un enlace para dirigirse al { id="home" }, lo que hay que cambiar para 
        dirigirse a otro lado es el nombre del id dentro del enlace y en el código

        { style= "..."} sirve para modificar el css en la etiqueta que se esta poniendo

        { list-style: none; } es para quitar los puntos de la lista

        { display: flex; } es para poner los elementos de la lista en una sola línea (horizontal)

        { gap: 20px; } es para poner un espacio entre cada elemento de la lista, se puede cambiar con el número

        { justify-content: flex-end; } es para alinear el menú a la derecha, la alineacion se puede cambiar 
         al cambiar la ultima palabra por { center } para el centro o { flex-start } para alinear a la izquierda

        { nav } sirve para que el código sepa que es un área de navegación, es decir, un menú

        { padding-right: 30px; } es para poner un espacio entre el menú y el borde derecho, se puede cambiar 
        con el número
        -->
    <div class="fondo">
        <br>
        <div class="component">
            <nav>
                <ul style="list-style: none; display: flex; gap: 20px; justify-content: flex-start; padding-left: 30px;">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#movimientos">Movimientos</a></li>
                    <li><a href="#protestas">Protestas</a></li>
                    <li><a href="#gobierno">Gobierno</a></li>
                </ul>
            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="titulin">
            <h1 style="text-align: left;">Milagro Mexicano</h1> <br>
            <h5>Esta página está dedicada al periodo del modelo económico <br>
                de desarrollo estabilizador, conocido como &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <spam class="milagrito">MILAGRO MEXICANO</spam> <br>
                Abrió una etapa de esperanza con un futuro mejor para el país.
            </h5>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

    <section>

        <section id="home">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card1-home.jfif" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Milagro mexicano</h3>
                            <p class="card-text" style="text-align: justify;">El milagro mexicano fue un periodo de crecimiento económico en Mexico, hubo un aumento anual del PIB de casi el 7%, esto gracias a la industrialización, la sustitución de importaciones y la estabilidad política entre los años (1940-1970)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card2-home.jfif" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Desigualdad</h3>
                            <p class="card-text" style="text-align: justify;">La desigualdad del periodo giro entorno al crecimiento económico, mientras se construían grandes obras públicas algunos sectores vivían en condiciones de carencia lo que los hizo empezar a reclamar espacios de libertad y una mejor calidad de vida</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card3-home.jfif" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Marginados</h3>
                            <p class="card-text" style="text-align: justify;">Los marginados del milagro mexicano fueron la base de toda la producción nacional. los campesinos contaban con tierras insuficientes, sometidos por cacicazgos y con escasa infraestructura, por otro lado, los obreros tenían salarios bajos, largas jornadas de trabajo y sindicatos bajo el control del corporativismo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="movimientos">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card1-movimientos.jfif" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Movimiento campesino</h3>
                            <p class="card-text" style="text-align: justify;">Los movimientos campesinos aparecieron por 3 tipos de problemáticas: económica, social y política.<br>Exigían tierras, justicia y apoyo social y económico.<br>El historiador Adolfo Gilly en "La revolución interrumpida(1971)" interpretaba los movimientos comoo una muestra de modernización desigual </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card2-movimientos.jfif" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Movimientos obreros</h3>
                            <p class="card-text" style="text-align: justify;">Hubo distintos movimientos de la clase obrera en los que destacan los siguientes :
                            <ul style="justify-content: flex-start;">
                                <li>Movimiento ferrocarrilero (1958-1959)</li>
                                <li>Movimiento magisterial (1958)</li>
                                <li>Movimiento médico (1964-1965)</li>
                            </ul>
                            </p>
                            <spam boton><a href="https://www.youtube.com/watch?v=MQ8V8GKQmg4" class="btn btn-dark">Video informativo de los movimientos</a>
                            </spam>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card3-movimientos.jfif" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Movimiento estudiantil</h3>
                            <p class="card-text" style="text-align: justify;">Comenzó en julio de 1968, varios estudiantes formaron el Consejo Nacional de Huelga (CNH), demandaban libertad, indemnizaciones y reprimentas a los políticos.<br>El desenlace fue la matanza de Tlatelolco el 2 de octubre de 1968, en la plaza de las Tres Culturas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="protestas">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card1-protestas.jfif" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Protestas económicas</h3>
                            <p class="card-text" style="text-align: justify;">Muchos trabajadores y campesinos protestaban por salarios bajos, desigualdad en la distribución de la riqueza y condiciones laborales injustas.<br>A pesar del crecimiento industrial, los beneficios se concentraban en empresarios y sectores urbanos, dejando al campo rezagado.<br>El aumento del costo de vida afectaba a las familias, lo que generaba mayor inconformidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card2-protestas.jfif" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Protestas sociales</h3>
                            <p class="card-text" style="text-align: justify;">Existía un fuerte descontento por la pobreza, la falta de servicios básicos (salud, educación, vivienda) y la desigualdad entre zonas urbanas y rurales.<br>Las clases populares no veían mejoras significativas en su calidad de vida.<br>También surgieron movimientos estudiantiles y sociales que exigían más oportunidades, igualdad y respeto a los derechos de la población.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card3-protestas.jfif" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Protestas políticas</h3>
                            <p class="card-text" style="text-align: justify;">El sistema político estaba dominado por un solo partido, lo que limitaba la democracia, la participación ciudadana y la libertad de expresión.<br>Muchas protestas denunciaban la represión del gobierno hacia opositores y movimientos sociales.<br>Un ejemplo importante fue el movimiento estudiantil de 1968, que exigía libertades políticas y terminó siendo reprimido por el Estado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gobierno">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/imagen1.jpg" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Tarjeta 1</h3>
                            <p class="card-text" style="text-align: justify;">La</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/imagen2.jpg" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Tarjeta 2</h3>
                            <p class="card-text" style="text-align: justify;">La</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/imagen3.jpg" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Tarjeta 3</h3>
                            <p class="card-text" style="text-align: justify;">La</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</body>

</html>