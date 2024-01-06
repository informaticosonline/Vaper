<!-- Enlace al archivo CSS -->
<link rel="stylesheet" href="{{ asset ('css/footer.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


<div id = "footer">

    <div class = "footer-section">

        <h3>Contacta con HumoVibe</h1>
        <h4>Dirección: Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
        <h4>Teléfono: +34 625625625</h3>
        <h4>Email: info@paradas.es</h3>

    </div>

    <div class = "footer-section">

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

    <div class = "footer-section">

        <h1>Mapa grande</h1>

    </div>

</div>

<div id = "footer-dos">

    <div class = "footer-section">

        <h3>
            Índice
        </h3>

        <div class="footer-section-tres">

            <a href="#">
                <h6>Productos</h6>
            </a>

            <a href="#">
                <h6>Novedades</h6>
            </a>

        </div>
            
        <div class="footer-section-tres">

            <a href="#">
                <h6>Promociones</h6>
            </a>
            
            <a href="#">
                <h6>Próximamente</h6>
            </a>

        </div>

        <div class="footer-section-tres">
            
            <a href="#">
                <h6>Sobre nosotros</h6>
            </a>

        </div>
            
    </div>

    <div class = "footer-section">

        <h3>
            Información
        </h3>

        <div class="footer-section-tres">

            <a href="#">
                <h6>Contacte con nosotros</h6>
            </a>

        </div>

        <div class="footer-section-tres">
            <!-- Enlace para abrir el modal de Política de Cookies -->
            <a href="javascript:void(0)" onclick="openModal('modalCookies')">Política de Cookies</a>
        
            <!-- Modal de Política de Cookies -->
            <div id="modalCookies" class="modal">
                <div class="modal-content">
                    <span onclick="closeModal('modalCookies')" class="close">&times;</span>
                    <iframe src="/politicaCookies.pdf" frameborder="0" style="width:100%; height:80vh;"></iframe>
                </div>
            </div>
        
            <!-- Enlace para abrir el modal de Aviso Legal -->
            <a href="javascript:void(0)" onclick="openModal('modalLegal')">Aviso Legal</a>
        
            <!-- Modal de Aviso Legal -->
            <div id="modalLegal" class="modal">
                <div class="modal-content">
                    <span onclick="closeModal('modalLegal')" class="close">&times;</span>
                    <iframe src="/avisoLegal.pdf" frameborder="0" style="width:100%; height:80vh;"></iframe>
                </div>
            </div>
        </div>
        

        <div class="footer-section-tres">

            <a href="#">
                <h6>Condiciones generales  de compra</h6>
            </a>

        </div>
        
    </div>

    <div class = "footer-section">

        <h3>
            Índice
        </h3>

            <div class="footer-section-tres">

                <a href="#">
                    <h6>Productos</h6>
                </a>

                <a href="#">
                    <h6>Novedades</h6>
                </a>

            </div>

            <div class="footer-section-tres">

                <a href="#">
                    <h6>Promociones</h6>
                </a>

                <a href="#">
                    <h6>Próximamente</h6>
                </a>
            </div>

            <div class="footer-section-tres">
                
                <a href="#">
                    <h6>Sobre nosotros</h6>
                </a>

            </div>
        
    </div>

</div>

<script>

    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    // Cerrar el modal si el usuario hace clic fuera de él
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = "none";
        }
    }

</script>