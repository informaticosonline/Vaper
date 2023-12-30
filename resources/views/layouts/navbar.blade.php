<!-- Enlace al archivo CSS -->
<link rel="stylesheet" href="{{ asset ('css/nav.css') }}">

<!-- Navegación -->

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
                <li><a href="#">Novedades</a></li>
                <li><a href="#">Promociones</a></li>
                <li><a href="#">Próximamente</a></li>
                <li><a href="#">Sobre nosotros</a></li>
            </ul>
        </nav>
    </div>
    
        <script>

            // Ajusta las variables y los selectores según sea necesario
            
            // Ajusta las variables y los selectores según sea necesario
            
            let navbarVisible = true;
            const navbar = document.getElementById('navbar');
            const toggleNavbar = document.getElementById('toggle-navbar');
            
            function checkWindowSize() {
                if(window.innerWidth <= 768) {
                    navbar.style.display = 'none';
                    navbarVisible = false;
                } else {
                    navbar.style.display = 'block';
                    navbarVisible = true;
                }
            }
            
            toggleNavbar.addEventListener('click', function() {
                if(navbarVisible) {
                    navbar.style.display = 'none';
                } else {
                    navbar.style.display = 'block';
                }
                navbarVisible = !navbarVisible;
            });
            
            window.addEventListener('resize', checkWindowSize);
            document.addEventListener('DOMContentLoaded', checkWindowSize);
            
        </script>