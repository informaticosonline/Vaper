<!-- Enlace al archivo CSS -->
<link rel="stylesheet" href="{{ asset ('css/nav.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Navegación -->
<div id="orden-cabecera">

    <div id="foto-cabecera">

        <a href="{{ route('inicio.index') }}">

            <img src=" {{ asset ('images/LogotipoEscala.webp') }}" alt="Logotipo-general" class="logo-escala">

        </a>

    </div>

    <div class="social-icons">

        <a href="https://www.tiktok.com/@humovibe" class="tiktok-icon" target="_blank">
            <i class="fab fa-tiktok"></i>
        </a>

        <a href="https://www.instagram.com/humo_vibe?igsh=dmw2b2Ztc2gyc3h6" target="_blank">
            <i class="fab fa-instagram-square"></i>
        </a>

        <a href="https://www.facebook.com/profile.php?id=61554982893632" target="_blank">
            <i class="fab fa-facebook-square"></i>
        </a>

        <a href="https://twitter.com/HumoVibe3670" class="twitter-icon" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>

        <a href="https://www.youtube.com/channel/UCykYzNnb4vWcafqcmyC-dPg" target="_blank">
            <i class="fab fa-youtube-square"></i>
        </a>

        <a href="https://t.me/Pepe_1997" class="telegram-icon" target="_blank">
            <i class="fab fa-telegram-plane" style="color: #0088cc;"></i>
        </a>

        <a href="https://wa.me/34614180994" target="_blank" class="whatsapp-icon">
            <i class="fab fa-whatsapp" style="color: #3af880;"></i>
        </a>

    </div>

    <div>

        <form id="search-form" action="{{ url('/buscar') }}" method="GET">
            <input type="text" id="search-query" name="query" placeholder="Buscar un producto, una marca..." aria-label="Buscar">
            <button type="submit" id="search-button">
                <i class="fa fa-search"></i> <!-- Icono de búsqueda, puedes usar una imagen o una clase de FontAwesome -->
            </button>
        </form>        

    </div>
    
    <div>

        <h1>Carrito</h1>

    </div>

</div>

<button id="toggle-navbar"></button>

<div id="navbar">

    <nav>

        <ul>
            <!-- Productos -->
            <li><a href="#">Productos</a>

                <ul>
                    <!-- Cajas -->
                    <li><a href="#">Cajas</a></li>

                    <!-- Líquidos -->
                    <li><a href="#">Líquidos</a>
                        <ul>
                            <li><a href="#">Sales de nicotina</a>
                                <ul>
                                    <li><a href="#">Mejores valorados</a></li>
                                    <li><a href="#">Todos</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Aromas</a>
                                <ul>
                                    <li><a href="#">Mejores valorados</a></li>
                                    <li><a href="#">Todos</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Nicotina</a>
                                <ul>
                                    <li><a href="#">Mejores valorados</a></li>
                                    <li><a href="#">Todos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Pods -->
                    <li><a href="#">Pods</a>
                        <ul>
                            <li><a href="#">Pods kit</a></li>
                            <li><a href="#">Resistencias</a></li>
                            <li><a href="#">Mejores valorados</a></li>
                        </ul>
                    </li>

                    <!-- Pods Desechables -->
                    <li><a href="#">Pods Desechables</a>
                        <ul>
                            <li><a href="#">Marcas</a></li>
                            <li><a href="#">Mejores valorados</a></li>
                        </ul>
                    </li>

                    <!-- Mods y Kits -->
                    <li><a href="#">Mods y Kits</a>
                        <ul>
                            <li><a href="#">Atomizadores</a></li>
                            <li><a href="#">Accesorios</a></li>
                            <!-- Más subcategorías aquí -->
                        </ul>
                    </li>

                    <!-- Cachimbas -->
                    <li><a href="#">Cachimbas</a>
                        <ul>
                            <li><a href="#">Cachimbas</a></li>
                            <li><a href="#">Accesorios</a>
                                <ul>
                                    <li><a href="#">Mangueras</a></li>
                                    <!-- Más subcategorías aquí -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Otras secciones -->
            <li><a href="#">Cajas</a></li>
            <li><a href="#">Novedades</a></li>
            <li><a href="#">Promociones</a></li>
            <li><a href="#">Próximamente</a></li>
            <li><a href="#">Sobre nosotros</a></li>

            <div class="social-icons">

                <a href="https://www.tiktok.com/@humovibe" class="tiktok-icon" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>

                <a href="https://www.instagram.com/humo_vibe?igsh=dmw2b2Ztc2gyc3h6" target="_blank">
                    <i class="fab fa-instagram-square"></i>
                </a>

                <a href="https://www.facebook.com/profile.php?id=61554982893632" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>

                <a href="https://twitter.com/HumoVibe3670" class="twitter-icon" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="https://www.youtube.com/channel/UCykYzNnb4vWcafqcmyC-dPg" target="_blank">
                    <i class="fab fa-youtube-square"></i>
                </a>

                <a href="https://t.me/Pepe_1997" class="telegram-icon" target="_blank">
                    <i class="fab fa-telegram-plane" style="color: #0088cc;"></i>
                </a>

                <a href="https://wa.me/34614180994" target="_blank" class="whatsapp-icon">
                    <i class="fab fa-whatsapp" style="color: #3af880;"></i>
                </a>

            </div>

        </ul>

    </nav>

</div>

<div id = "foto-login">
    <img src="{{ asset('images/FPruMia.webp') }}" alt="FotoLogin">
    <div id = "login-info">
        <p>Nombre</p>
        <a href="/ruta-cerrar-sesion">
            <h6>Cerrar sesión</h6>
        </a>
    </div>
</div>

 <script>

    let navbarVisible = true;

    const navbar = document.getElementById('navbar');
    const toggleNavbar = document.getElementById('toggle-navbar');

    function checkWindowSize() {
        if (window.innerWidth <= 768) {
            navbar.style.display = 'none';
            toggleNavbar.style.top = '262px';
            navbarVisible = false;
        } else {
            navbar.style.display = 'block';
            toggleNavbar.style.top = '112px';
            navbarVisible = true;
        }
    }

    toggleNavbar.addEventListener('click', function () {
        if (navbarVisible) {
            navbar.style.display = 'none';
        } else {
            navbar.style.display = 'block';
        }
        navbarVisible = !navbarVisible;
    });

    window.addEventListener('resize', checkWindowSize);
    document.addEventListener('DOMContentLoaded', checkWindowSize);

 </script>