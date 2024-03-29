<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MEDELLIN 360</title>
        <link rel="stylesheet" href="../css/informacion.css">
        <link rel="icon" href="../image/logo2.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="../image/Barra2.png" alt="BARRA PROGRESO">
            <img class="efect" src="../image/Fondo.png" alt="Dec">
            <img class="efect2" src="../image/fondo2.png" alt="Dec">
            <a href="./genero.html"><img class="atras" src="../image/Atras.png" alt="Atras"></a>
        </header>
        <main>
            <form action="../php/register.php" method="POST" id="formulario">
                <h1>Create your username</h1>
                <input type="text" name="username" class="username" placeholder="Username" required>
                <span>This will be the name that other users <br>will see on your profile</span>
                <h1>What's your name?</h1>
                <input type="text" name="name" class="name" placeholder="Name" autocomplete="name" required>
                <input type="text" name="lastName" class="last-name" placeholder="Last name" required>
                <span>Try to use your real name</span>
                <h1>What is your birth date?</h1>
                <input type="number" class="day" placeholder="Day" required>
                <input type="text" class="month" placeholder="Month" required>
                <input type="number" class="year" placeholder="Year" required>
                <span>You must be over 18 years old</span>
                <h1>Email</h1>
                <input type="email" name="email" class="email" placeholder="Email" autocomplete="email" required>
                <h1>Create your password</h1>
                <input type="password" name="contrasena" class="password" placeholder="Password" required>
                <input type="password" class="c-password" placeholder="Confirm The Password" required>
                <<button type="submit">Continue</button>
            </form>  
        </main>
    </body>
</html>