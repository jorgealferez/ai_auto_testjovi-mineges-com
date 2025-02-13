<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Nombre de la Aplicación</a>
        </div>
        <button class="navbar-toggler" type="button" onclick="toggleNavbar()">☰</button>
        <div class="navbar-menu" id="navbarMenu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
    function toggleNavbar() {
        var menu = document.getElementById('navbarMenu');
        if(window.getComputedStyle(menu).display === 'none') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }
</script>