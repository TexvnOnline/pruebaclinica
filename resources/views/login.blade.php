
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>El Doctor | Login Médico</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="/app/js/jquery.js"></script>
    <script src="/app/assets/js/moment.min.js"></script>
    <style>
    .product-tab-box .tab-menu {
        left: 0 !important;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .product-tab-box .tab-menu li {
        margin: 1px;
    }
    .product-tab-box .tab-menu li a {
        padding: 8px !important;
    }
</style>
    <link rel="stylesheet" href="/app/css/style.css">
    <link rel="stylesheet" href="/app/css/responsive.css">
    <link rel="stylesheet" href="/app/fonts/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/app/css/custom.css?v=0.2.3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c7230525bf.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/app/images/favicon/favicon.png" type="image/x-icon">

    <style>
        #mapa {
            width: 100%;
            height: 500px;
        }

        .social {
            font-size: 25px;
        }

        .social a:hover {
            font-size: 25px;
            color: rgb(7, 163, 153);
        }

        .mainmenu-area.stricky .navigation>li.current>a {
            color: rgb(7, 163, 153);
        }

        .mainmenu-area.stricky .navigation>li.current>a:before {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0px;
            width: 100%;
            height: 5px;
            background: rgb(7, 163, 153);
        }
    </style>
    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        } (window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '371173077212623');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=371173077212623&ev=PageView&noscript=1"></noscript>
</head>

<body>
    <div class="boxed_wrapper">
                <div class="header-top">
            <div class="container clearfix">
                <div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><a href="tel:064636363"><span class="fa fa-phone"></span>Celular: (959522200) </a></li>
                        <li><a href="mailto:atencionalcliente@eldoctor.pe"><span class="fa fa-envelope"></span>Email:
                                atencionalcliente@eldoctor.pe</a></li>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    <div class="social-links clearfix">
                        <a href="https://www.facebook.com/eldoctorsolucionesmedicas" target="_blank"><span class="fa fa-facebook-f"></span></a>
                        <a href="https://instagram.com/eldoctorsolucionesmedicas?igshid=1hacjhd1e80sl" target="_blank"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="mainmenu-area stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-logo">
                            <a href="/"><img src="/app/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 menu-column">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="/">INICIO</a></li>
                                    <li><a href="/nosotros">NOSOTROS</a></li>
                                    <li class="dropdown"><a href="/servicios">SERVICIOS</a>
                                        <ul>
                                            <li><a href="/servicios/servicio-linea">SERVICIOS EN LÍNEA</a></li>
                                            <li><a href="/servicios/citas-presenciales">CITAS PRESENCIALES</a></li>
                                            <li><a href="/servicios/servicio-medico">SERVICIOS MÉDICOS</a></li>
                                            <li><a href="/staff-medico/busqueda?medio_atencion=VIRTUAL&amp;id_especialidad=&amp;id_ubicacion=&amp;tipo_atencion=CONSULTA GRATUITA COVID-19">CONSULTA
                                                    GRATUITA COVID-19</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/staff-medico">STAFF MÉDICO</a></li>
                                    <li><a href="/contacto">CONTACTO</a></li>
                                    <li><a href="/blog">BLOG</a></li>

                                </ul>
                                <ul class="mobile-menu clearfix">
                                    <li><a href="/">INICIO</a></li>
                                    <li><a href="/nosotros">NOSOTROS</a></li>

                                    <li class="dropdown"><a href="/servicios">SERVICIOS</a>
                                        <ul>
                                            <li><a href="/servicios/servicio-linea">SERVICIOS EN LÍNEA</a></li>
                                            <li><a href="/servicios/citas-presenciales">CITAS PRESENCIALES</a></li>
                                            <li><a href="/servicios/servicio-medico">SERVICIOS MÉDICOS</a></li>
                                            <li><a href="/staff-medico/busqueda?medio_atencion=VIRTUAL&amp;id_especialidad=&amp;id_ubicacion=&amp;tipo_atencion=CONSULTA GRATUITA COVID-19">CONSULTA
                                                    GRATUITA COVID-19</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/staff-medico">STAFF MÉDICO</a></li>
                                    <li><a href="/contacto">CONTACTO</a></li>
                                    <li><a href="/blog">BLOG</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <div class="right-area">
                            <div class="link_btn float_right">
                                <a href="/paciente/login" class="thm-btn donate-box-btn rounded" style="padding: 0 20px;">SOY PACIENTE</a>
                                <a href="login.htm" class="thm-btn donate-box-btn rounded" style="padding: 0 20px;">SOY MÉDICO</a>
                                <p>
                                    <a href="javascript:;" class="mi_ubicacion">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewbox="0 0 561 561" style="margin: -2px;" xml:space="preserve">
                                            <path fill="#337ab7" d="M280.5,178.5c-56.1,0-102,45.9-102,102c0,56.1,45.9,102,102,102c56.1,0,102-45.9,102-102
												C382.5,224.4,336.6,178.5,280.5,178.5z M507.45,255C494.7,147.9,410.55,63.75,306,53.55V0h-51v53.55
												C147.9,63.75,63.75,147.9,53.55,255H0v51h53.55C66.3,413.1,150.45,497.25,255,507.45V561h51v-53.55
												C413.1,494.7,497.25,410.55,507.45,306H561v-51H507.45z M280.5,459C181.05,459,102,379.95,102,280.5S181.05,102,280.5,102
												S459,181.05,459,280.5S379.95,459,280.5,459z"></path>
                                        </svg>
                                    </a>
                                    <b><span class="departamento_ubicacion" data-id=""></span></b> <a href="javascript:;" class="cambiar_ubicacion"><i class="fas fa-map-marker-alt"></i> cambiar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="expart-details">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="sec-title text-center">
                    <h3>INICIO DE SESIÓN <span>MÉDICO</span> Ó <a href="/medico/registro" class="thm-btn donate-box-btn">REGISTRESE</a></h3>
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="usuario">Número de whatsapp o correo electronico:</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password_login" id="password_login" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12" style="margin-top: 5px;">
                                <button type="button" class="btn btn-primary btn-block" id="login">Iniciar sesión</button>
                            </div>
                        </div>
                    </div> -->

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label text-md-right">Correo electrónico *</label>

                            <div class="col-md-6 text-center">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label text-md-right">Contraseña *</label>

                            <div class="col-md-6 text-center">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="col-md-12" style="margin-top: 30px;">
                        <a href="/medico/recover-password">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="col-md-12" style="margin-top: 30px;">
                        Para iniciar sesión como asistente médico darle click <a href="/asistente/login">aquí</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

        <section class="call-to-action subscribe-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer bg-style" style="background-image:url(/app/images/background/bg-1.jpg);">
            <div class="container">
                <div class="footer-upper">

                    <div class="row">
                        <div class="item col-md-12 col-sm-6 col-md-offset-3">
                            <div class="footer-widget about-widget">
                                <a href="/"><img src="/app/images/logo/logo.png" alt=""></a>
                                <p class="title text-center">El Doctor | Soluciones Médicas</p>
                                <p class="text-center">es una plataforma completa que abarca servicios de <br>
                                    tele-orientación y tele-monitoreo de salud, el primero está orientado a brindar
                                    orientación y opinión médica, mientras que el segundo está orientado al seguimiento
                                    de pacientes con alguna patología determinada desde sus domicilios.</p>
                            </div>
                        </div>
                        <div class="item col-md-5 col-sm-6">
                            <div class="footer-widget about-widget text-center">
                                <img src="/app/images/footer/2.jpg" alt="" class="img-thumbnail img-circle imangen-footer">
                                <img src="/app/images/footer/1.jpg" alt="" class="img-thumbnail img-circle imangen-footer">
                                <img src="/app/images/footer/3.jpg" alt="" class="img-thumbnail img-circle imangen-footer">
                            </div>
                            <div class="datos text-right">
                                
                                <p><a href="/libro-reclamacion"><span class="fas fa-book-open"></span> Libro de
                                        reclamaciones virtual</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="pull-left">
                        <div class="copyright-text">Copyright © 2020 EL DOCTOR. Todos los derechos reservados.</div>
                    </div>
                    
                </div>
            </div>
        </footer>
        <button class="scroll-top tran3s color2_bg">
            <span class="fa fa-angle-up"></span>
        </button>
        <div class="preloader"></div>

        <div class="modal fade" id="modal_ubicacion" role="dialog" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Ubicación</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="departamento">Ubicación <span class="required">*</span></label>
                                    <select class="form-control" id="ubicacion_change"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="guardar_cambia_ubicacion">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        

        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="/app/js/bootstrap.min.js"></script>
        <script src="/app/js/jquery-ui.js"></script>
        <script src="/app/js/owl.carousel.min.js"></script>
        <script src="/app/js/jquery.validate.min.js"></script>
        <script src="/app/assets/js/bootbox.min.js"></script>
        
        
        <script src="/app/js/wow.js"></script>
        <script src="/app/js/jquery.mixitup.min.js"></script>
        <script src="/app/js/jquery.fitvids.js"></script>
        <script src="/app/js/bootstrap-select.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="/app/js/jquery.fancybox.pack.js"></script>
        <script src="/app/js/jquery.polyglot.language.switcher.js"></script>
        <script src="/app/js/nouislider.js"></script>
        <script src="/app/js/jquery.bootstrap-touchspin.js"></script>
        <script src="/app/js/SmoothScroll.js"></script>
        <script src="/app/js/jquery.appear.js"></script>
        <script src="/app/js/jquery.countTo.js"></script>
        <script src="/app/js/jquery.flexslider.js"></script>
        <script src="/app/js/imagezoom.js"></script>
        <script src="/app/js/isotope.js"></script>
        <script src="/app/js/validation.js"></script>
        <script id="map-script" src="/app/js/default-map.js"></script>
        <script src="/app/js/jquery.ptTimeSelect.js"></script>
        <script src="/app/js/lodash.min.js"></script>
        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9B--joWu5p1v7jgBjeC_CpjUhXbtaiJ0">
        </script>
        <script>
    $('#password_login').keypress(function (e) {
        if(e.keyCode == 13) {
            login();
        }
    });

    $('#login').click(function (e) {
        e.preventDefault();
        login();
    });
    function login() {
        var data = {
            _token: 'uKPjx9BpIN4mkOCyAHskmjpQW251m5tuo6ujglUA',
            usuario: $('#usuario').val(),
            password: $('#password_login').val()
        }
        $.ajax({
            type: "post",
            url: "/medico/login",
            data: data,
            success: function (response) {
                if(response.success) {
                    localStorage.setItem('session_cliente_token', response.data.session_cliente_token);
                    location.href = "/medico/doctor-linea";
                } else {
                    response.error.forEach(e => {
                        msmToastr('ERROR!', e, 'error');
                    });
                }
            }
        });
    }

    $('#dni_registrar').keypress(function (e) {
        if(e.keyCode == 13) {
            buscarDniPersona();
        }
    });

    $('#buscar_persona').click(function (e) {
        e.preventDefault();
        buscarDniPersona();
    });

    function buscarDniPersona() {
        var dni = $('#dni_registrar').val();
        if (dni.length == 8) {
            var requestURL = 'https://apis4.facttu.com/reniec/personas/' + dni;
            $.ajax({
                type: "GET",
                url: requestURL,
                dataType: "json",
                success: function(response) {
                    var persona = response.persona;
                    $('#dni_registrar').val(persona.dni);
                    $('#nombres_registrar').val(persona.nombres);
                    $('#apellidos_registrar').val(persona.apellido_paterno + ' ' + persona.apellido_materno);
                }
            });
        } else {
            msmToastr('ERROR!', 'INGRESE UN NÚMERO DE DNI VÁLIDO', 'error');
        }
    }
    $('#mostrar_pass_registrar').click(function (e) {
        e.preventDefault();
        var tipo = $('#password_registrar').attr('type');
        if(tipo == 'password') {
            $(this).html('<i class="fa fa-eye"></i>');
            $('#password_registrar').attr('type', 'text');
        } else {
            $(this).html('<i class="fa fa-eye-slash"></i>');
            $('#password_registrar').attr('type', 'password');
        }

    });

    $('#acepto_registrar').change(function () {
        checkChecked();
    });

    function checkChecked() {
        $('#acepto_registrar').is(":checked") ? $('#registrar').removeAttr("disabled") : $('#registrar').attr('disabled', 'disabled');
    }

    $('#registrar').click(function (e) {
        e.preventDefault();
        if(validarUsuario()) {
            var formData = new FormData(document.getElementById("form_registro_medico"));
            var data = {
                _token: 'uKPjx9BpIN4mkOCyAHskmjpQW251m5tuo6ujglUA',
                dni: $('#dni_registrar').val(),
                lastname: $('#apellidos_registrar').val(),
                name: $('#nombres_registrar').val(),
                celular: $('#numero_celular_registrar').val(),
                email: $('#email_registrar').val(),
                password: $('#password_registrar').val(),
            }
            $.ajax({
                type: "post",
                url: "/api/medicos",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function (response) {
                    console.log(response);
                    // if(response.success) {
                    //     location.reload();
                    // } else {
                    //     response.error.forEach(e => {
                    //         msmToastr('ERROR!', e, 'error');
                    //     });
                    // }
                }
            });
        } else {
            msmToastr('ERROR!', 'COMPLETE TODOS LOS CAMPOS REQUERIDOS.', 'error');
        }
    });

    function validarUsuario () {
        if ($('#dni_registrar').val() == '') {
            return false;
        } else if ($('#apellidos_registrar').val() == '') {
            return false;
        } else if ($('#nombres_registrar').val() == '') {
            return false;
        } else if ($('#numero_celular_registrar').val() == '') {
            return false;
        } else if ($('#email_registrar').val() == '') {
            return false;
        } else if ($('#curriculum_vitae').val() == '') {
            return false;
        } else if ($('#password_registrar').val() == '') {
            return false;
        }
        return true;
    }
</script>
        <script src="/app/js/custom.js"></script>
                <!-- Start of HubSpot Embed Code -->
        
        
    </div>

</body>

</html>
