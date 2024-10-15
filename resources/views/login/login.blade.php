<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="/home" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="{{ asset('/img/logoS.jpg') }}" alt="easyclass" />
                            <h4>IEST "Carlos Salazar Romero"</h4>
                        </div>

                        <div class="heading">
                            <h2>Bienvenido</h2>
                            <h6>¿No estás registrado?</h6>
                            <a href="#" class="toggle">Regístrate aquí</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" class="input-field" autocomplete="off" required />
                                <label>Usuario</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" class="input-field" autocomplete="off" required />
                                <label>Contraseña</label>
                            </div>

                            <input type="submit" value="Iniciar Sesión" class="sign-btn">
                        </div>
                    </form>

                    <form action="" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="{{ asset('/img/logo.jpg') }}"" alt="easyclass" />
                            <h4>IEST "Carlos Salazar Romero"</h4>
                        </div>

                        <div class="heading">
                            <h2>Comienza ahora</h2>
                            <h6>¿Ya tienes una cuenta?</h6>
                            <a href="#" class="toggle">Iniciar sesión</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Nombre</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" class="input-field" autocomplete="off" required />
                                <label>Correo electrónico</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Contraseña</label>
                            </div>

                            <input type="submit" value="Registrarse" class="sign-btn" />

                            <p class="text">
                                Al registrarme, acepto los
                                <a href="#">Términos de Servicio</a> y la
                                <a href="#">Política de Privacidad</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="{{ asset('/img/image1.png') }}"" class="image img-1 show" alt="" />
                        <img src="{{ asset('/img/image2.png') }}"" class="image img-2" alt="" />
                        <img src="{{ asset('/img/image3.png') }}"" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Crea tus propios cursos</h2>
                                <h2>Personaliza a tu gusto</h2>
                                <h2>Invita a estudiantes a tu clase</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('/js/login.js') }}"></script>
</body>

</html>
