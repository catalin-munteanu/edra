<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edra</title>
    <!-- Add any additional meta tags, link tags, or stylesheets below this line -->
    <link rel="stylesheet" href="scss/style.css">
    <script src="js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <img class="edra-logo-header" src="img/mobile/edra-logo-mobile.png">
        <nav>
            <button id="burger-menu-toggler" aria-label="Menú de navegación">
                <img id="open-mobile-menu" src="img/mobile/burger-menu-open.png" alt="Botón de apertura del menú">
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-element moving-item">Quiénes somos</li>
                <li class="nav-menu-element moving-item">Qué hacemos?</li>
                <li class="nav-menu-element moving-item">Cómo lo hacemos?</li>
                <li class="nav-menu-element" id="saber-mas">Quiero saber más</li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="presentacion">
            <picture>
                <source media="(min-width:768px)" srcset="img/desktop/img-index-d.png">
                <img id="presentacion-mobile" src="img/mobile/img-index.png">
            </picture>
            <div class="article-container">
                <article class="presentacion-data">
                    <div class="container-title">
                        <p>Lanzamos DESAFÍO CERO con el objetivo de validar nuestra solución y su impacto positivo en la cadena de producción de alimentos. Juntos a nuestros aliados buscamos colaborar en la resolución de dos grandes desafíos: la seguridad alimentaria y el cambio climático.</p>
                        <h4>Colaboramos a resolver estos dos problemas</h4>
                    </div>
                    <div class="container-problemas">
                        <span id="icon-cambio-climatico"><img src="img/mobile/icon-cambio-climatico.png">
                            <h5>Cambio<br>climático</h5>
                        </span>
                        <img class="plus-sign" src="img/mobile/plus-sign.svg">
                        <span id="icon-seguridad-alimentaria"><img src="img/mobile/icon-seguridad-alimentaria.png">
                            <h5>Seguridad<br>alimentaria</h5>
                        </span>
                    </div>
                </article>
            </div>
        </section>

        <section class="objetivo-desarrollo-sostenible">
            <article class="impacto-ods">
                <h4>Impactamos en estos ODS<br>
                    (Objetivo de Desarrollo Sostenible)</h4>
                <div class="gallery-ods">
                    <img src="img/mobile/ODS 2.png">
                    <img src="img/mobile/ODS 12.png">
                    <img src="img/mobile/ODS 13.png">
                    <img src="img/mobile/ODS 15.png">
                    <img src="img/mobile/ODS 17.png">
                </div>
            </article>
            <article class="desarrollo-ods">
                <img src="img/mobile/logo-edra-body-mobile.png">
                <p>En esta oportunidad buscamos  incorporar, monitorear y cuantificar el impacto de la implementación de cuatro Prácticas de Agricultura Sostenible en la campaña 23-24. Para esto, creemos que es fundamental la articulación de diferentes actores de la cadena de suministro.</p>
                <p>Por tal motivo convocamos a 5 productores y 5 empresas. Desde EDRA creemos que es sumamente importante empezar a establecer relaciones de colaboración a largo plazo para compartir esfuerzos y beneficios que aceleren la transición a modelos productivos sustentables por medio de la tecnología.</p>
            </article>
        </section>

        <section class="propuestas-desafio-cero">
            <article class="container-title">
                <div>
                    <img src="img/mobile/icon-dardo-mobile.png">
                    <h5>Por eso en el DESAFÍO CERO nos propusimos</h5>
                </div>
            </article>
            <article class="container-propuestas">
                <div class="propuestas-implementar">
                    <p class="subtitle">Implementar</p>
                    <div class="container-prop-implementar">
                        <figure>
                            <img src="img/mobile/icon-conservacion-mobile.png">
                            <figcaption>10 hectáreas de áreas<br>de conservación</figcaption>
                        </figure>
                        <figure>
                            <img src="img/mobile/icon-cultivo-mobile.png">
                            <figcaption>500 hectáreas de<br>cultivo de cobertura</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="propuestas-recuperar">
                    <p class="subtitle">Recuperar</p>
                    <div class="container-prop-recuperar">
                        <figure>
                            <img src="img/mobile/icon-alimentos-mobile.png">
                            <figcaption>125 toneladas<br>de alimentos</figcaption>
                        </figure>
                        <figure>
                            <img src="img/mobile/icon-plasticos-mobile.png">
                            <figcaption>2.500 kilos<br>de plásticos</figcaption>
                        </figure>
                    </div>
                </div>
            </article>
        </section>

        <section class="card-video">
            <article class="container-title">
                <h4>EDRA es una climatech que promueve la implementación de soluciones basadas en la naturaleza a través de herramientas tecnológicas</h4>
            </article>
            <article class="flex-container">
                <div class="info-container">
                    <h4>LANZAMOS EL DESAFÍO CERO</h4>
                    <p>Te contamos sobre nuestra metodología y nuestra visión</p>
                    <button id="conoce-edra" aria-label="Conocé EDRA">
                        Conocé EDRA
                    </button>
                </div>
                <div class="video-section">
                    <div class="video-container">
                        <iframe class="item-video" width="560" height="315" src="https://www.youtube.com/embed/IaLK1fp808w?si=UqvpfDnzQ_BcYDHu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </article>
        </section>

        <section class="practicas-agricultura-sostenible">
            <h4>PRÁCTICAS DE AGRICULTURA SOSTENIBLE</h4>
            <div class="container-practicas">
                <article class="cultivo-cobertura">
                    <img src="img/mobile/icon-black-cult-cobertura.png">
                    <h4>Cultivo de cobertura</h4>
                    <p class="p2">El objetivo es promover la fertilidad y salud del suelo, controlar malezas, plagas y enfermedades e incrementar la biodiversidad dentro del agroecosistema.</p>
                    <h5>Impactos clave:</h5>
                    <ul class="p2">
                        <li>Mejora en la estructura del suelo.</li>
                        <li>Promueve la fertilidad</li>
                        <li>Reduce necesidad de fitosanitarios modera la temperatura del suelo.</li>
                    </ul>
                </article>
                <article class="areas-conservacion">
                    <img src="img/mobile/icon-black-area-conservacion.png">
                    <h4>Áreas de conservación</h4>
                    <p class="p2">Espacios de vegetación espontánea que difieren de su contexto o matriz en la que están inmersos en el paisaje agropecuario y se definen por su cobertura dominante (agrícola, forestal, pastizal).</p>
                    <h5>Impactos clave:</h5>
                    <ul class="p2">
                        <li>Provee hábitat para la biodiversidad.</li>
                    </ul>
                </article>
                <article class="gestion-perdidas-desperdicios">
                    <img src="img/mobile/icon-white-perdidas-desperdicios.png">
                    <h4>Gestión de pérdidas y desperdicios de alimentos</h4>
                    <p class="p2">Recuperación y distribución de producción frutihortícola por no cumplir estándares de mercado y redirecciona a personas que sufren inseguridad alimentaria.</p>
                    <h5>Impactos clave:</h5>
                    <ul>
                        <li>Otorga valor social y ambiental de alimentos que perdieron su valor comercial, evitando emisiones de GEI.</li>
                    </ul>
                </article>
                <article class="recuperacion-envases">
                    <img src="img/mobile/icon-white-recuperacion-envases.png">
                    <h4>Recuperación de envases de fitosanitarios</h4>
                    <p class="p2">Recuperación de envases vacíos de provenientes de la producción frutihortícola para promover su correcta gestión y disposición final.</p>
                    <h5>Impactos clave:</h5>
                    <ul>
                        <li>Otorga valor ambiental evitando la contaminación como consecuencia en malos hábitos en su eliminación.</li>
                    </ul>
                </article>
            </div>
            <button id="saber-mas">Quiero saber más</button>
        </section>

        <section class="aliados-y-objetivos">
            <h3>ALIADOS DEL DESAFÍO CERO</h3>
            <h4>Productores y empresas que se sumaron a esta prueba cerrada.</h4>
            <article class="cinco-productores-empresas">
                <div class="color-celeste"><strong class="big-number num" data-val="5">0</strong><br>
                    <h4>Productores</h4>
                </div>
                <div class="color-verde"><strong class="big-number num" data-val="5">0</strong><br>
                    <h4>Empresas</h4>
                </div>
            </article>
            <article class="gallery-container">
                <div class="gallery-logos" id="automatic-gallery">
                    <img src="img/mobile/01-papas-argentinas.png">
                    <img src="img/mobile/02-naika.png">
                    <img src="img/mobile/03-fundacion-bariloche.png">
                    <img src="img/mobile/04-basf.png">
                    <img src="img/mobile/05-tuberquality.png">
                    <img src="img/mobile/06-nodo.png">
                    <img src="img/mobile/07-potato-growers.png">
                    <img src="img/mobile/08-agro-spray.png">
                    <img src="img/mobile/09-capei.png">
                    <img src="img/mobile/10-avina.png">
                    <img src="img/mobile/11-chaye-hnos.png">
                    <img src="img/mobile/12-vadaju.png">
                    <img src="img/mobile/13-ximabe.png">
                </div>
            </article>
            <article class="data-objetivos">
                <div class="container-title-objetivos">
                    <h3>OBJETIVOS DEL DESAFÍO CERO</h3>
                </div>
            </article>
            <h4>En 250 días nos propusimos alcanzar:</h4>
            <article class="container-cards-objetivos">
                <div class="card-area-conservacion">
                    <div class="container-title">
                        <img src="img/mobile/icon-blue-area-conservacion.png">
                        <h5>Área de conservación</h5>
                    </div>
                    <div class="container-estadisticas color-azul">
                        <span><strong>10</strong><br>
                            <p class="p1">Hectáreas</p>
                        </span>
                        <span><strong>170</strong><br>
                            <p class="p1">tn CO2eq</p>
                        </span>
                    </div>
                </div>
                <div class="card-cultivo-cobertura">
                    <div class="container-title">
                        <img src="img/mobile/icon-blue-cult-cobertura.png">
                        <h5>Cultivo de cobertura</h5>
                    </div>
                    <div class="container-estadisticas color-azul">
                        <span><strong>500</strong><br>
                            <p class="p1">Hectáreas</p>
                        </span>
                        <span><strong>250</strong><br>
                            <p class="p1">tn CO2eq</p>
                        </span>
                    </div>
                </div>
                <div class="card-perdidas-desperdicios">
                    <div class="container-title">
                        <img src="img/mobile/icon-blue-perdidas-desperdicios.png">
                        <h5>En pérdidas y desperdicios de alimentos</h5>
                    </div>
                    <div class="container-estadisticas color-azul">
                        <span><strong>125</strong><br>
                            <p class="p1">toneladas de<br>alimentos</p>
                        </span>
                        <span><strong>62</strong><br>
                            <p class="p1">tn CO2eq</p>
                        </span>
                    </div>
                </div>
                <div class="card-recuperacion-envases">
                    <div class="container-title">
                        <img src="img/mobile/icon-blue-recuperacion-envases.png">
                        <h5>En recuperación de envases de fitosanitarios</h5>
                    </div>
                    <div class="container-estadisticas color-azul">
                        <span><strong>250</strong><br>
                            <p class="p1">kilos de plástico</p>
                        </span>
                    </div>
                </div>
            </article>
        </section>

        <section class="indicadores-impacto">
            <div class="indicadores-container">
                <picture class="background">
                    <source media="(min-width:768px)" srcset="img/desktop/indicadores-impacto-desktop.webp">
                    <img id="presentacion-mobile" src="img/mobile/indicadores-impacto-mobile.webp">
                </picture>
                <article class="indicadores">
                    <div class="titles-container">
                        <h2 class="uppercase-text">Indicadores de impacto</h2>
                        <h3 class="uppercase-text">(socioambiental)</h3>
                    </div>
                    <div class="stats-container">
                        <div class="un-indicador">
                            <article>
                                <p class="big-number">0</p>
                                <p>tn CO2e</p>
                            </article>
                            <h4>Emisiones de CO2</h4>
                        </div>
                        <div class="un-indicador">
                            <article>
                                <p class="big-number">0</p>
                                <p>m3</p>
                            </article>
                            <h4>Agua no desperdiciada</h4>
                        </div>
                        <div class="un-indicador">
                            <article>
                                <p class="big-number">0</p>
                                <p></p>
                            </article>
                            <h4>Raciones de comida</h4>
                        </div>
                        <div class="un-indicador">
                            <article>
                                <p class="big-number">0</p>
                                <p>Kg</p>
                            </article>
                            <h4>Plástico Recuperado</h4>
                        </div>
                    </div>
                </article>
            </div>
            <article class="gallery-partners">
                <h3>PARTNERS</h3>
                <article class="gallery-container">
                    <div class="gallery-logos" id="automatic-gallery">
                        <img src="img/mobile/01-papas-argentinas.png">
                        <img src="img/mobile/02-naika.png">
                        <img src="img/mobile/03-fundacion-bariloche.png">
                        <img src="img/mobile/04-basf.png">
                        <img src="img/mobile/05-tuberquality.png">
                        <img src="img/mobile/06-nodo.png">
                        <img src="img/mobile/07-potato-growers.png">
                        <img src="img/mobile/08-agro-spray.png">
                        <img src="img/mobile/09-capei.png">
                        <img src="img/mobile/10-avina.png">
                        <img src="img/mobile/11-chaye-hnos.png">
                        <img src="img/mobile/12-vadaju.png">
                        <img src="img/mobile/13-ximabe.png">
                    </div>
                </article>
            </article>
        </section>
    </main>

    <footer>

        <article class="subscribe-form">
            <h3>Suscribite a nuestro Newsletter</h3>
            <p class="p2">Recibí todas las novedades del programa Desafío Cero</p>
            <form>
                <label for="email" class="label-form">Correo Electrónico</label><br>
                <input type="email" name="mail" id="mail" class="input-email" required><br>
                <input type="submit" id="submit" value="Suscribirme" aria-label="Suscribirme">
            </form>
        </article>
        <article class="footer-data-container">
            <img class="logo-footer" src="img/mobile/logo-desafio-cero-footer.png">
            <h4 class="title-footer">DESAFÍO CERO</h4>
            <p class="powered-alt">Powered by ALT</p>
        </article>
    </footer>

</body>