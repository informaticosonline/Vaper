<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HumoVibe</title>
    <link rel="icon" href="{{ asset('images/LogotipoIco.webp') }}" type="image/webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/mantenimiento.css') }}">
</head>

<body class="mi-div-de-fondo">

            <h1>HumoVibe</h1>

            <img src="{{ asset('images/LogotipoEscala.webp') }}" alt="Logotipo Grande">

            <h3>Página en construccion</h3>
            <h4>Estaremos en una calada</h4>

            <a href="https://www.tiktok.com/@humovibe" class="tiktok-icon" target="_blank">
                <i class="fab fa-tiktok" style="color:#aaca74"></i>
            </a>          

            <a href="https://www.instagram.com/humo_vibe?igsh=dmw2b2Ztc2gyc3h6" target="_blank">
                <i class="fab fa-instagram-square" style="color:#f018a3"></i>
            </a>

            <a href="https://www.facebook.com/profile.php?id=61554982893632" target="_blank">
                <i class="fab fa-facebook-square" style="color:#aaca74"></i>
            </a>

            <a href="https://twitter.com/HumoVibe3670" class="twitter-icon" target="_blank">
                <i class="fab fa-twitter" style="color:#f018a3"></i>
            </a>
            
            <a href="https://www.youtube.com/channel/UCykYzNnb4vWcafqcmyC-dPg" target="_blank">
                <i class="fab fa-youtube-square" style="color: #aaca74"></i>
            </a>

            <a href="https://t.me/Pepe_1997" class="telegram-icon" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>

            <a href="https://wa.me/34614180994" target="_blank" class="whatsapp-icon">
                <i class="fab fa-whatsapp"></i>
            </a>
            
            <p>&copy; {{ \Carbon\Carbon::now()->format('m/Y') }} - Todos los derechos reservados. Realizada por 
                <a href="https://informaticosonline.es/" target="_blank">
                    <img src="{{ asset('images/nuestroLogoPeque.png') }}" alt="Informaticos Online">
                </a>
            </p>

</body>