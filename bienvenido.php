<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.html");
    exit();
}
?>

<body>
    <div class = "container">
        <h1> Bienvenido, <?= htmlspecialchars ($_SESSION['user']) ?> ! </h1>
        <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
        <a href= "logout.php"> Cerrar sessión </a>
    </div>
</body>