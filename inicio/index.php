<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mewgins records</title>
    <link rel="stylesheet" href="inicio.css">
</head>

<body>
    <section class="navs">
        <main>
            <header>
                <div class="embacezado">
                    <nav class="navba">
                        <ul>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-x-twitter"></i></li>
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                            <li><i class="fa-brands fa-tiktok"></i></li>
                        </ul>
                    </nav>
                    <h1><a href="/index.html">Mewing<strong class="bold">Records</strong></a></h1>
                </div>
            </header>
        </main>
    </section>
    <section class="formulario">
        <form action="conexion/validar.php" method="POST">
            <div class="mb-3">
                <label for="email_per" class="form-label"><i class="fa-solid fa-envelope"></i></label>
                <input type="email" name="email_per" id="email_per" placeholder="your@gmail.com"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label"><i class="fa-solid fa-lock"></i></label>
                <input type="text" name="password" id="password" placeholder="xxxxxx" required>
            </div>
            <button type="submit" class="btn">Enviar</button>
            <button type="submit">Crear cuenta</button>
            <?php
        if(isset($_GET['error']) && $_GET['error'] == 1){
            echo "
            <p class='error'>Error en la autenticación</p>
            ";
        }
        if(isset($_GET['sesion']) && $_GET['sesion'] == 1){
            echo "
            <p class='sesion'>Sesion cerrada correctamente</p>
            ";
        }
        ?>
        </form>
    </section>
    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevenir el envío predeterminado

            // Aquí puedes agregar una validación adicional si es necesario

            fetch(this.action, {
                method: this.method,
                body: new FormData(this),
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    alert('Mensaje enviado con éxito!');
                    this.reset(); // Reiniciar el formulario
                } else {
                    alert('Error al enviar el mensaje. Por favor, intenta nuevamente.');
                }
            }).catch(error => {
                alert('Error en la conexión. Por favor, intenta nuevamente.');
            });
        });
    </script>
</body>

</html>