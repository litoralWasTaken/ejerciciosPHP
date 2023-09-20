<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">LOGO</a>
    <ul class="nav justify-content-end">
        <?php
        if ($_SERVER['REQUEST_URI'] == '/servicios.php') {
            echo '<a class="link" id="link-active" href="servicios.php">Servicios</a>';
        } else {
            echo '<a class="link" href="servicios.php">Servicios</a>';
        }

        if ($_SERVER['REQUEST_URI'] == '/contacto.php') {
            echo '<a class="link" id="link-active" href="contacto.php">Contacto</a>';
        } else {
            echo '<a class="link" href="contacto.php">Contacto</a>';
        }
        ?>


        <li class="nav-item">
            <a class="btn btn-outline-light" href="#">Login</a>
        </li>
    </ul>
</nav>