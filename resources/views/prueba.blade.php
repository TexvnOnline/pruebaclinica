
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>El Doctor | Registro Médico</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="/app/js/jquery.js"></script>
    <script src="/app/assets/js/moment.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
        .embed-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        .embed-container iframe {
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <link rel="stylesheet" href="/app/css/style.css">
    <link rel="stylesheet" href="/app/css/responsive.css">


    <link rel="stylesheet" href="/app/fonts/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/app/css/custom.css?v=0.2.3">
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
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=371173077212623&ev=PageView&noscript=1" /></noscript>
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
                        <a href="https://www.facebook.com/eldoctorsolucionesmedicas" target="_blank"><span
                                class="fa fa-facebook-f"></span></a>
                        <a href="https://instagram.com/eldoctorsolucionesmedicas?igshid=1hacjhd1e80sl"
                            target="_blank"><span class="fa fa-instagram"></span></a>
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
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
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
                                            <li><a
                                                    href="/staff-medico/busqueda?medio_atencion=VIRTUAL&amp;id_especialidad=&amp;id_ubicacion=&amp;tipo_atencion=CONSULTA GRATUITA COVID-19">CONSULTA
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
                                            <li><a
                                                    href="/staff-medico/busqueda?medio_atencion=VIRTUAL&amp;id_especialidad=&amp;id_ubicacion=&amp;tipo_atencion=CONSULTA GRATUITA COVID-19">CONSULTA
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
                                <a href="/paciente/login" class="thm-btn donate-box-btn rounded"
                                    style="padding: 0 20px;">SOY PACIENTE</a>
                                <a href="/medico/login" class="thm-btn donate-box-btn rounded"
                                    style="padding: 0 20px;">SOY MÉDICO</a>
                                <p>
                                    <a href="javascript:;" class="mi_ubicacion">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px"
                                            height="15px" viewBox="0 0 561 561" style="margin: -2px;"
                                            xml:space="preserve">
                                            <path fill="#337ab7" d="M280.5,178.5c-56.1,0-102,45.9-102,102c0,56.1,45.9,102,102,102c56.1,0,102-45.9,102-102
												C382.5,224.4,336.6,178.5,280.5,178.5z M507.45,255C494.7,147.9,410.55,63.75,306,53.55V0h-51v53.55
												C147.9,63.75,63.75,147.9,53.55,255H0v51h53.55C66.3,413.1,150.45,497.25,255,507.45V561h51v-53.55
												C413.1,494.7,497.25,410.55,507.45,306H561v-51H507.45z M280.5,459C181.05,459,102,379.95,102,280.5S181.05,102,280.5,102
												S459,181.05,459,280.5S379.95,459,280.5,459z" />
                                        </svg>
                                    </a>
                                    <b><span class="departamento_ubicacion" data-id=""></span></b> <a
                                        href="javascript:;" class="cambiar_ubicacion"><i
                                            class="fas fa-map-marker-alt"></i> cambiar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="expart-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        
                        <div class="sec-title text-center">
                            <h3><span>REGISTRESE</span></h3>
                        </div>
                        <!-- <form method="post" id="form_registro_medico" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tipo_documento">Tipo de documento <span class="requerido">*</span></label>
                                        <select class="form-control" id="tipo_documento">
                                            <option value="DNI" selected>DNI</option>
                                            <option value="CARNET EXT">CARNET EXT.</option>
                                            <option value="PASAPORTE">PASAPORTE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="dni_registrar">Número de documento <span class="requerido">*</span></label>
                                        <input type="text" class="form-control no_is_dni" id="numero_documento_registrar" value="" style="display: none;">
                                        <div class="input-group is_dni">
                                            <input type="text" class="form-control" id="dni_registrar" value="">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary" id="buscar_persona"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="apellidos_registrar">Apellidos <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="apellidos_registrar" name="lastname" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombres_registrar">Nombres <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nombres_registrar" name="name" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="numero_celular_registrar">N° de celular <span class="required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <select class="form-control" id="celular_codigo_pais" style="width: 150px;">
                                                    <option value="7">ABJASIA</option>
                                                    <option value="93">AFGANISTÁN</option>
                                                    <option value="355">ALBANIA</option>
                                                    <option value="49">ALEMANIA</option>
                                                    <option value="376">ANDORRA</option>
                                                    <option value="244">ANGOLA</option>
                                                    <option value="1264">ANGUILLA</option>
                                                    <option value="1268">ANTIGUA Y BARBUDA</option>
                                                    <option value="599">ANTILLAS HOLANDESAS</option>
                                                    <option value="966">ARABIA SAUDITA</option>
                                                    <option value="213">ARGELIA</option>
                                                    <option value="54">ARGENTINA</option>
                                                    <option value="374">ARMENIA</option>
                                                    <option value="297">ARUBA</option>
                                                    <option value="61">AUSTRALIA</option>
                                                    <option value="43">AUSTRIA</option>
                                                    <option value="994">AZERBAIYÁN</option>
                                                    <option value="1242">BAHAMAS</option>
                                                    <option value="973">BAHREIN</option>
                                                    <option value="880">BANGLADESH</option>
                                                    <option value="1246">BARBADOS</option>
                                                    <option value="501">BELICE</option>
                                                    <option value="229">BENIN</option>
                                                    <option value="1441">BERMUDAS</option>
                                                    <option value="375">BIELORRUSIA</option>
                                                    <option value="591">BOLIVIA</option>
                                                    <option value="599">BONAIRE</option>
                                                    <option value="387">BOSNIA</option>
                                                    <option value="267">BOTSWANA</option>
                                                    <option value="55">BRASIL</option>
                                                    <option value="673">BRUNEI DARUSSALAM</option>
                                                    <option value="359">BULGARIA</option>
                                                    <option value="226">BURKINA FASO</option>
                                                    <option value="257">BURUNDI</option>
                                                    <option value="975">BUTÁN</option>
                                                    <option value="32">BÉLGICA</option>
                                                    <option value="238">CABO VERDE</option>
                                                    <option value="855">CAMBOYA</option>
                                                    <option value="237">CAMERÚN</option>
                                                    <option value="1">CANADÁ</option>
                                                    <option value="235">CHAD</option>
                                                    <option value="56">CHILE</option>
                                                    <option value="86">CHINA</option>
                                                    <option value="357">CHIPRE</option>
                                                    <option value="57">COLOMBIA</option>
                                                    <option value="269">COMORES</option>
                                                    <option value="242">CONGO</option>
                                                    <option value="243">CONGO RD</option>
                                                    <option value="850">COREA DEL NORTE</option>
                                                    <option value="82">COREA DEL SUR</option>
                                                    <option value="225">COSTA DE MARFIL</option>
                                                    <option value="506">COSTA RICA</option>
                                                    <option value="385">CROACIA</option>
                                                    <option value="53">CUBA</option>
                                                    <option value="599">CURACAO</option>
                                                    <option value="45">DINAMARCA</option>
                                                    <option value="1767">DOMINICA</option>
                                                    <option value="1">DOMINICANA, REPÚBLICA</option>
                                                    <option value="593">ECUADOR</option>
                                                    <option value="20">EGIPTO</option>
                                                    <option value="503">EL SALVADOR</option>
                                                    <option value="971">EMIRATOS ÁRABES UNIDOS</option>
                                                    <option value="291">ERITREA</option>
                                                    <option value="421">ESLOVAQUIA</option>
                                                    <option value="386">ESLOVENIA</option>
                                                    <option value="34">ESPAÑA</option>
                                                    <option value="1">ESTADOS UNIDOS</option>
                                                    <option value="372">ESTONIA</option>
                                                    <option value="251">ETIOPÍA</option>
                                                    <option value="679">FIJI</option>
                                                    <option value="63">FILIPINAS</option>
                                                    <option value="358">FINLANDIA</option>
                                                    <option value="33">FRANCIA</option>
                                                    <option value="241">GABÓN</option>
                                                    <option value="220">GAMBIA</option>
                                                    <option value="995">GEORGIA</option>
                                                    <option value="233">GHANA</option>
                                                    <option value="350">GIBRALTAR</option>
                                                    <option value="1473">GRANADA</option>
                                                    <option value="30">GRECIA</option>
                                                    <option value="299">GROENLANDIA</option>
                                                    <option value="590">GUADALUPE</option>
                                                    <option value="1671">GUAM</option>
                                                    <option value="502">GUATEMALA</option>
                                                    <option value="594">GUAYANA FRANCÉS</option>
                                                    <option value="44">GUERNSEY</option>
                                                    <option value="245">GUINEA BISSAU</option>
                                                    <option value="240">GUINEA ECUATORIAL</option>
                                                    <option value="592">GUYANA</option>
                                                    <option value="509">HAITI</option>
                                                    <option value="504">HONDURAS</option>
                                                    <option value="852">HONG KONG</option>
                                                    <option value="36">HUNGRÍA</option>
                                                    <option value="91">INDIA</option>
                                                    <option value="62">INDONESIA</option>
                                                    <option value="98">IRAN</option>
                                                    <option value="964">IRAQ</option>
                                                    <option value="353">IRLANDA</option>
                                                    <option value="247">ISLA ASCENSIÓN</option>
                                                    <option value="44">ISLA DE MAN</option>
                                                    <option value="61">ISLA DE NAVIDAD, ISLA CHRISTMAS</option>
                                                    <option value="358">ISLA DE ÅLAND</option>
                                                    <option value="672">ISLA NORFOLK</option>
                                                    <option value="699">ISLA PERIFÉRICAS MENORES DE ESTADOS UNIDOS</option>
                                                    <option value="354">ISLANDIA</option>
                                                    <option value="1345">ISLAS CAIMÁN</option>
                                                    <option value="61">ISLAS COCOS</option>
                                                    <option value="682">ISLAS COOK</option>
                                                    <option value="298">ISLAS FEROE</option>
                                                    <option value="500">ISLAS MALVINAS</option>
                                                    <option value="692">ISLAS MARSHALL</option>
                                                    <option value="872">ISLAS PITCAIRN</option>
                                                    <option value="677">ISLAS SALOMÓN</option>
                                                    <option value="1649">ISLAS TURCAS Y CAICOS</option>
                                                    <option value="128">ISLAS VÍRGENES BRITÁNICAS</option>
                                                    <option value="134">ISLAS VÍRGENES DE EE.UU.</option>
                                                    <option value="972">ISRAEL</option>
                                                    <option value="39">ITALIA</option>
                                                    <option value="187">JAMAICA</option>
                                                    <option value="81">JAPÓN</option>
                                                    <option value="44">JERSEY</option>
                                                    <option value="962">JORDANIA</option>
                                                    <option value="7">KAZAJSTÁN</option>
                                                    <option value="254">KENIA</option>
                                                    <option value="996">KIRGUISTÁN</option>
                                                    <option value="686">KIRIBATI</option>
                                                    <option value="383">KOSOVO</option>
                                                    <option value="965">KUWAIT</option>
                                                    <option value="856">LAOS</option>
                                                    <option value="266">LESOTHO</option>
                                                    <option value="371">LETONIA</option>
                                                    <option value="231">LIBERIA</option>
                                                    <option value="218">LIBIA</option>
                                                    <option value="423">LIECHTENSTEIN</option>
                                                    <option value="370">LITUANIA</option>
                                                    <option value="352">LUXEMBURGO</option>
                                                    <option value="961">LÍBANO</option>
                                                    <option value="853">MACAO</option>
                                                    <option value="389">MACEDONIA</option>
                                                    <option value="261">MADAGASCAR</option>
                                                    <option value="60">MALASIA</option>
                                                    <option value="265">MALAWI</option>
                                                    <option value="960">MALDIVAS</option>
                                                    <option value="356">MALTA</option>
                                                    <option value="223">MALÍ</option>
                                                    <option value="1670">MARIANAS DEL NORTE</option>
                                                    <option value="212">MARRUECOS</option>
                                                    <option value="596">MARTINICA</option>
                                                    <option value="230">MAURICIO</option>
                                                    <option value="222">MAURITANIA</option>
                                                    <option value="262">MAYOTTE</option>
                                                    <option value="52">MEXICO</option>
                                                    <option value="691">MICRONESIA</option>
                                                    <option value="373">MOLDAVIA</option>
                                                    <option value="976">MONGOLIA</option>
                                                    <option value="382">MONTENEGRO</option>
                                                    <option value="1664">MONTSERRAT</option>
                                                    <option value="258">MOZAMBIQUE</option>
                                                    <option value="95">MYANMAR</option>
                                                    <option value="377">MÓNACO</option>
                                                    <option value="264">NAMIBIA</option>
                                                    <option value="674">NAURU</option>
                                                    <option value="977">NEPAL</option>
                                                    <option value="505">NICARAGUA</option>
                                                    <option value="234">NIGERIA</option>
                                                    <option value="683">NIUE</option>
                                                    <option value="47">NORUEGA</option>
                                                    <option value="687">NUEVA CALEDONIA</option>
                                                    <option value="64">NUEVA ZELANDA</option>
                                                    <option value="227">NÍGER</option>
                                                    <option value="968">OMÁN</option>
                                                    <option value="92">PAKISTÁN</option>
                                                    <option value="680">PALAU</option>
                                                    <option value="970">PALESTINA</option>
                                                    <option value="507">PANAMÁ</option>
                                                    <option value="675">PAPÚA</option>
                                                    <option value="595">PARAGUAY</option>
                                                    <option value="31">PAÍSES BAJOS, HOLANDA</option>
                                                    <option value="51" selected>PERÚ</option>
                                                    <option value="689">POLINESIA FRANCESA</option>
                                                    <option value="48">POLONIA</option>
                                                    <option value="351">PORTUGAL</option>
                                                    <option value="1">PUERTO RICO</option>
                                                    <option value="974">QATAR</option>
                                                    <option value="44">REINO UNIDO</option>
                                                    <option value="236">REPÚBLICA CENTROAFRICANA</option>
                                                    <option value="420">REPÚBLICA CHECA</option>
                                                    <option value="224">REPÚBLICA GUINEA</option>
                                                    <option value="262">REUNIÓN</option>
                                                    <option value="250">RUANDA</option>
                                                    <option value="40">RUMANÍA</option>
                                                    <option value="7">RUSIA</option>
                                                    <option value="685">SAMOA</option>
                                                    <option value="1684">SAMOA AMERICANA</option>
                                                    <option value="1869">SAN CRISTÓBAL Y NEVIS</option>
                                                    <option value="378">SAN MARINO</option>
                                                    <option value="590">SAN MARTIN</option>
                                                    <option value="508">SAN PEDRO Y MIQUELÓN</option>
                                                    <option value="1784">SAN VINCENTE Y GRANADINAS</option>
                                                    <option value="290">SANTA HELENA</option>
                                                    <option value="1758">SANTA LUCÍA</option>
                                                    <option value="239">SANTO TOMÉ Y PRÍNCIPE</option>
                                                    <option value="221">SENEGAL</option>
                                                    <option value="381">SERBIA</option>
                                                    <option value="248">SEYCHELLES</option>
                                                    <option value="232">SIERRA LEONA</option>
                                                    <option value="65">SINGAPUR</option>
                                                    <option value="963">SIRIA</option>
                                                    <option value="252">SOMALILANDIA</option>
                                                    <option value="252">SOMALÍA</option>
                                                    <option value="94">SRI LANKA</option>
                                                    <option value="27">SUDÁFRICA</option>
                                                    <option value="249">SUDÁN</option>
                                                    <option value="211">SUDÁN DEL SUR</option>
                                                    <option value="46">SUECIA</option>
                                                    <option value="41">SUIZA</option>
                                                    <option value="597">SURINAM</option>
                                                    <option value="47">SVALBARD Y JAN MAYEN</option>
                                                    <option value="268">SWAZILANDIA</option>
                                                    <option value="212">SÁHARA OCCIDENTAL</option>
                                                    <option value="992">TADJIKISTAN</option>
                                                    <option value="66">TAILANDIA</option>
                                                    <option value="886">TAIWÁN</option>
                                                    <option value="255">TANZANIA</option>
                                                    <option value="246">TERRITORIO BRITÁNICO DEL OCÉANO ÍNDICO.</option>
                                                    <option value="262">TERRITORIOS FRANCESES DEL SUR</option>
                                                    <option value="670">TIMOR DEL ESTE</option>
                                                    <option value="228">TOGO</option>
                                                    <option value="690">TOKELAU</option>
                                                    <option value="676">TONGA</option>
                                                    <option value="1868">TRINIDAD Y TOBAGO</option>
                                                    <option value="993">TURKMENISTÁN</option>
                                                    <option value="90">TURQUÍA</option>
                                                    <option value="688">TUVALU</option>
                                                    <option value="216">TÚNEZ</option>
                                                    <option value="380">UCRANIA</option>
                                                    <option value="256">UGANDA</option>
                                                    <option value="598">URUGUAY</option>
                                                    <option value="998">UZBEKISTÁN</option>
                                                    <option value="678">VANUATU</option>
                                                    <option value="379">VATICANO</option>
                                                    <option value="58">VENEZUELA</option>
                                                    <option value="84">VIETNAM</option>
                                                    <option value="681">WALLIS Y FUTUNA</option>
                                                    <option value="967">YEMEN</option>
                                                    <option value="253">YIBUTI</option>
                                                    <option value="260">ZAMBIA</option>
                                                    <option value="263">ZIMBÁBUE</option>
                                                </select>
                                            </div>
                                            <input type="tel" class="form-control" id="numero_celular_registrar" name="phone" value="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email_registrar">Correo electrónico <span class="required">*</span></label>
                                        <input type="email" class="form-control" id="email_registrar" name="email" value="">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_registrar">Crea tu contraseña <span class="required">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password_registrar" name="password">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary" id="mostrar_pass_registrar"><i
                                                        class="fa fa-eye-slash"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="acepto_registrar"> Acepta los términos y condiciones
                                            <a href="/medico/terminos-condiciones" class="terminos-condiciones" target="_blank">ver términos y condiciones</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" id="registrar" disabled>REGISTRAR</button>
                                </div>
                            </div>
                        </form> -->

                        <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="document_type" class="col-md-4 col-form-label text-md-right">Tipo de documento *</label>

                            
                                
                             


                                  <select class="form-control" name="document_type" id="document_type">
                                    <option value="PASAPORTE">PASAPORTE</option>
                                    <option value="CARNETEXT">CARNET DE EXT</option>
                                  </select>
                            
                                @error('document_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="document_number" class="col-md-4 col-form-label text-md-right">Numero de documento *</label>

                           
                                <input id="document_number" type="number" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number" autofocus>

                                @error('document_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombres *</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="surnames" class="col-md-4 col-form-label text-md-right">Apellidos *</label>

                            
                                <input id="surnames" type="text" class="form-control @error('surnames') is-invalid @enderror" name="surnames" value="{{ old('surnames') }}" required autocomplete="surnames" autofocus>

                                @error('surnames')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="cell_number" class="col-md-4 col-form-label text-md-right">Nº de celular </label>

                            
                                <input id="cell_number" type="number" class="form-control @error('cell_number') is-invalid @enderror" name="cell_number" value="{{ old('cell_number') }}" required autocomplete="cell_number" autofocus>

                                @error('cell_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                        </div>

                        <div class="form-group row mb-0">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                    </form>


                    </div>
                    <div class="col-md-4">
                        
                        <div class="embed-container mb-2"><iframe width="500" height="255" src="https://www.youtube.com/embed/L7YbZTkzwdA?loop=1&autohide=1&modestbranding=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                    <div class="col-md-4">
                        <div class="sec-title" style="text-align: justify">
                            <h3>La nueva forma de captar y <span>atender a tus pacientes</span> a nivel nacional</h3>
                            <br>
                        </div>
                        <div class="text">
                            <p>Tecnología y Eficiencia en línea son claves para gestionar su consulta ante esta emergencia sanitaria.</p>
                            <br>
                        </div>
                        <div class="text">
                            <p>EL DOCTOR es la primera plataforma nacional que facilita la comunicación online entre el médico y el paciente.</p>
                            <br>
                        </div>
                        <div class="text">
                            <p>¿Qué beneficios tengo al pertenecer a la plataforma?</p>
                            <br>
                        </div>
                        <ul class="benifit-list">
                            <li><i class="fa fa-angle-right"></i>Presencia digital como médico.</li>
                            <li><i class="fa fa-angle-right"></i>Servicio de cita 24/7.</li>
                            <li><i class="fa fa-angle-right"></i>Telemedicina como un nuevo canal de comunicación.</li>
                            <li><i class="fa fa-angle-right"></i>Realice el seguimiento de sus pacientes.</li>
                            <li><i class="fa fa-angle-right"></i>Programe el tiempo, duración y costo de su atención.</li>
                            <li><i class="fa fa-angle-right"></i>Y muchos más.</li>
                            <br>
                        </ul>
                        <div class="text">
                            <p>
                                ¿Desea participar en nuestra plataforma?  ¿Quiere formar parte de esta nueva realidad?
                                Regístrese y conozca mas sobre nosotros y todos los beneficios que obtendrá.
                            </p>
                            <br>
                        </div>
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
                        <div class="item col-md-4 col-sm-6 col-md-offset-3">
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
                                <img src="/app/images/footer/2.jpg" alt=""
                                    class="img-thumbnail img-circle imangen-footer" />
                                <img src="/app/images/footer/1.jpg" alt=""
                                    class="img-thumbnail img-circle imangen-footer" />
                                <img src="/app/images/footer/3.jpg" alt=""
                                    class="img-thumbnail img-circle imangen-footer" />
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9B--joWu5p1v7jgBjeC_CpjUhXbtaiJ0">
        </script>
        <script>
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

    $('#tipo_documento').change(function (e) {
        e.preventDefault();
        var tipo_documento = $(this).val();

        if (tipo_documento == 'DNI') {
            $('.is_dni').show();
            $('.no_is_dni').hide();
        } else {
            $('.is_dni').hide();
            $('.no_is_dni').show();
        }
    });

    $('#registrar').click(function (e) {
        e.preventDefault();
        if(validarUsuario()) {

            // var formData = new FormData(document.getElementById("form_registro_medico"));

            var tipo_documento = $('#tipo_documento').val();
            var numero_documento = tipo_documento == 'DNI' ? $('#dni_registrar').val() : $('#numero_documento_registrar').val();
            var data = {
                _token: 'zh9HGMY2UOqt1llGqhiAzabphkZvnsVCjJyny2n5',
                tipo_documento,
                numero_documento,
                lastname: $('#apellidos_registrar').val(),
                name: $('#nombres_registrar').val(),
                celular_codigo_pais: $('#celular_codigo_pais').val(),
                phone: $('#numero_celular_registrar').val(),
                email: $('#email_registrar').val(),
                password: $('#password_registrar').val(),
            }
            $.ajax({
                type: "post",
                url: "/api/medicos",
                data,
                // contentType: false,
                // cache: false,
                // processData:false,
                success: function (response) {
                    if(response.success) {
                        $('#dni_registrar').val('');
                        $('#apellidos_registrar').val('');
                        $('#nombres_registrar').val('');
                        $('#numero_celular_registrar').val('');
                        $('#celular_codigo_pais').val('');
                        $('#email_registrar').val('');
                        $('#password_registrar').val('');
                        $('#curriculum_vitae').val(null);
                        msmToastr('REGISTRO!', 'SE REGISTRO CON EXITO. SE LE ENVIO UN CORREO A SU EMAIL.', 'success');
                    } else {
                        response.error.forEach(e => {
                            msmToastr('ERROR!', e, 'error');
                        });
                    }
                }
            });
        } else {
            msmToastr('ERROR!', 'COMPLETE TODOS LOS CAMPOS REQUERIDOS.', 'error');
        }
    });

    function validarUsuario () {
        var tipo_documento = $('#tipo_documento').val();
        console.log($('#dni_registrar').val());
        console.log($('#numero_documento_registrar').val());

        if (tipo_documento == 'DNI') {
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
            } else if ($('#password_registrar').val() == '') {
                return false;
            }
        } else {
            if ($('#numero_documento_registrar').val() == '') {
                return false;
            } else if ($('#apellidos_registrar').val() == '') {
                return false;
            } else if ($('#nombres_registrar').val() == '') {
                return false;
            } else if ($('#numero_celular_registrar').val() == '') {
                return false;
            } else if ($('#email_registrar').val() == '') {
                return false;
            } else if ($('#password_registrar').val() == '') {
                return false;
            }
        }

        return true;
    }

    $('#dni_registrar').keypress(function (e) {
        soloNumeros(e);
    });

    $('#numero_celular_registrar').keypress(function (e) {
        soloNumeros(e);
    });

    $('#apellidos_registrar').keypress(function (e) {
        soloLetras(e);
    });

    $('#nombres_registrar').keypress(function (e) {
        soloLetras(e);
    });

    function soloNumeros(e) {
        var key = window.event ? e.which : e.keyCode;
        if (key < 48 || key > 57) {
            e.preventDefault();
        }
    }

    function soloLetras(e) {
        var key = window.event ? e.which : e.keyCode;
        if (!((key > 64 && key < 91 ) || (key > 96 && key < 123) || key == 32)) {
            e.preventDefault();
        }
    }
    function validatorEmail(valor) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)){
            console.log("La dirección de email " + valor + " es correcta.");
        } else {
            console.log("La dirección de email es incorrecta.");
        }
    }
</script>
        <script src="/app/js/custom.js"></script>
                <!-- Start of HubSpot Embed Code -->
        
        
    </div>

</body>

</html>
