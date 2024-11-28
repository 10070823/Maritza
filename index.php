<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Rincon De Las Delicias</title>
    <link rel="shortcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
        <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">El Rincon De las Delicias</h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="nosotros.php" class="nav__links">Quienes Somos</a>
                </li>
                <li class="nav__items">
                    <a href="registrar.php" class="nav__links">Registrar</a>
                </li>
                <li class="nav__items">
                    <a href="ingresar.php" class="nav__links">Ingresar</a>
                </li>

                <img src="./images/close.svg" class="nav__close">   
            </ul>
            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Bienvenidos</h1>
            <p class="hero__paragraph">Estamos encantandos de brindar nuestra atencion y servicio a nuestra comunidad deleitando su paladar, con los sabores exquisitos que ofrecen nuestros postres y helados a sus gustos</p>
            <a href="mejores postres.php" class="cta">Mejores Postres</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">Nustros Productos</h2>
            <p class="about__paragraph">Ven a deleitarte con nuestros productos</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/bxs-drink.svg" class="about__icon">
                    <h3 class="about__title">Malteadas</h3>
                    <p class="about__paragrah">Chocolate, Frutos rojos, Dulce Moscou, 
                        Maravilla Francesa, Colombia Tropical, Encanto Dulce</p>
                </article>

                <article class="about__icons">
                    <img src="./images/helados.svg" class="about__icon">
                    <h3 class="about__title">Helados</h3>
                    <p class="about__paragrah">Fresa, Chocolate, Frutos Rojos, 
                        Oreo, Vainilla, Mora, Naranja, Frutos Verdes</p>
                </article>

                <article class="about__icons">
                    <img src="./images/tortas.svg" class="about__icon">
                    <h3 class="about__title">Tortas</h3>
                    <p class="about__paragrah">Tres Leches, Chocolate, Reina Roja, Vainilla, 
                        Chispas de Chocolate, Nuez de Macadamia, Trozos Fresa, Napolitana</p>
                </article>
            </div> 
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledge__text">
                    <h2 class="subtitle">Nuestros Deliciosos Postres</h2>
                    <p class="knowledge__paragraph">
                        ¡Si deseas saber cuáles son nuestros mejores postres! puedes ingresar acá,
                        siendo aquellos los más calificados por los usuarios con buena reputación y sabor.
                    </p>
                    <a href="registrar.php" class="cta">Entrar</a>
                    
                </div>
        
                <figure class="knowledge__picture">
                    <img src="./images/postre2.jpg" class="knowledge__img" alt="Postre delicioso">
                </figure>
            </div>
        </section>
        

        <section class="price container">
            <h2 class="subtitle">DIAS DE PROMICION DE NUESTROS MEJORES HELADOS</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Frutos Rojos</p>
                    <h3 class="price__price">$4000</h3>

                    <div class="price__items">
                        <p class="price__features">Trozos de Fresa</p>
                        <p class="price__features">Trozos de Frambuesa</p>
                        <p class="price__features">Trozos de Cereza</p>
                    </div>
                        <a href="registrar.php" class="price__cta">Compra ahora</a>
                    </div>


                    <div class="price__element price__element--best">
                        <p class="price__name">Oreo</p>
                        <h3 class="price__price">$4000</h3>
    
                        <div class="price__items">
                            <p class="price__features">Trozos de Galleta Oreo</p>
                            <p class="price__features">Vainilla</p>
                            <p class="price__features">Chocolate</p>
                        </div>
                            <a href="registrar.php" class="price__cta">Compra ahora</a>
                        </div>

                        <div class="price__element">
                            <p class="price__name">Vainilla</p>
                            <h3 class="price__price">$4000</h3>
        
                            <div class="price__items">
                                <p class="price__features">Intensidad</p>
                                <p class="price__features">Cremoso</p>
                                <p class="price__features">El Mas Pedido</p>
                            </div>
                                <a href="registrar.php" class="price__cta">Compra ahora</a>
                            </div>
                </div>
            

            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
               <img src="./images/arrow-back.svg" class="testimony__arrow" id="before"> 
               <section class="testimony__body testimony__body--show" data-id="1">
                <div class="testimony__texts">
                    <h2 class="subtitle">Empleados del Año<span class="testimony__course">Buena atencion con el cliente, Juan Camilo Castros Rios</span></h2>
                    <p class="testimony__review">Mi deber es saber que el cliente se sienta satisfecho a la hora de hacer su compra y deleitar su paladar 
                        con nuestros deliciosos postres
                    </p>
                </div>
                <figure class="testimony__picture">
                    <img src="./images/cara1.jpg" class="testimony__img">
                </figure>
               </section>

               <img src="./images/right-arrow-alt.svg" class="testimony__arrow" id="next">
             </div>
        </section>



       
    <section class="questions container">
        <h2 class="subtitle">Preguntas frecuentes</h2>
        <p class="question__paragraph">¿Para cuando nuevos postres? - Respuesta: Estamos en la nueva implementacion de sabores a nuestro Menu!</p>
        </p>

        <section class="question__container">
            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="question__title"> Como Realizo La Compra de Un Producto <span class="question__arrow"> <img src="./images/arrow-back.svg" class="question__img"></span> </h3>

                    <p class="question__show">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, inventore officiis? Dolor modi enim ratione.</p>
                </div>
            </article>
        </section>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="question__title">La Forma Del Envio <span class="question__arrow"> <img src="./images/arrow-back.svg" class="question__img"></span> </h3>

                <p class="question__show">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, inventore officiis? Dolor modi enim ratione.</p>
            </div>
        </article>
    </section>


    <section class="questions__offer">
        <h2 class="subtitle">Agradecemos Su Apoyo</h2>
        <p class="questions__copy"></p>
        <a href="registrar.php" class="cta">Iniciar Compra</a>
    </section>
</section>
                          
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">El Rincon De Las Delicias</h2>
                <ul class="nav__link nav__link--menu">
                    <li class="nav__items">
                        <a href="nosotros.php" class="nav__links">Nosotros</a>
                    </li>
                    <li class="nav__items">
                        <a href="registrar.php" class="nav__links">Registrar</a>
                    </li>
                    <li class="nav__items">
                        <a href="ingresar.php" class="nav__links">Ingresar</a>
                    </li>
                    <li class="nav__items">
                        <a href="manual de usuario.php" class="nav__links">Manual de usuario</a>
                    </li>
                <ul>    
            </nav>

            <form class="footer__form">
                <h2 class="footer__newsletter">Subscribite</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__imput">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/faceb.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/instagram-alt.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/whatsapp.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyrigth">Derechos Reservados &copy;2024</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
</body>
</html>