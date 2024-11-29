<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cytisum</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khmer&family=Konkhmer+Sleokchher&family=Suez+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Barra de navegación -->
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-md cont_logo">
            <a  aria-current="page" href="#"><img class="logo text-white" src="imagenes/cytisum.png" alt="Logo Cytisum"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#linkbeneficio">Beneficios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#planes">Planes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#contactoo">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="login" id="iconoLogin" src="imagenes/lgin.png" alt="Icono de login">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</a>
                  </li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#crearCuentaModal">Crear cuenta</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Modal de Iniciar Sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">  
            <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="login-container"> 
              <div class="si">
                <div class="logi">
                  <div class="circu">
                    <div class="text-center">
                      <img src="imagenes/log.png" class="img_cytisumLogin" alt="Logo Cytisum">
                    </div>
                  </div>
                  <div class="mover">
                    <p class="sesion">Iniciar sesión</p>
                    <form>
                      <div class="mb-3 con">
                        <input type="text" class="form-control inicio_sesion" id="usuarios" placeholder="Usuario">
                      </div>
                      <div class="mb-3 con">
                        <input type="password" class="form-control inicio_sesion" id="contrasena" placeholder="Contraseña">
                      </div>
                      <div class="mb-3 text-center">
                        <a href="#" class="contra">¿Olvidaste tu contraseña?</a>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary ingresar">Ingresar</button>
                      </div>
                    </form>
                    <div class="footer-links mt-3">
                      <p>¿No tienes cuenta? <a href="#" data-bs-toggle="modal" data-bs-target="#crearCuentaModal">Crear una cuenta</a></p>
                      <p><a href="#">Aviso de privacidad</a> | <a href="#" data-bs-toggle="modal" data-bs-target="#">Términos y condiciones</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal para Crear Cuenta -->
    <div class="modal fade" id="crearCuentaModal" tabindex="-1" aria-labelledby="crearCuentaModalLabel" aria-hidden="true">
      <div class="modal-dialog modal_cuenta">
        <div class="modal-content cuenta_cont">
          <div class="modal-header">
            <h5 class="modal-title" id="crearCuentaModalLabel">Crear Cuenta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="custom-container">
              <div class="distancia">
                <div class="relleno">
                  <div class="informacion"></div>
                  <div class="text-center">
                    <img src="imagenes/log.png" class="img" alt="Logo Cytisum">
                  </div>
                  <form class="cont" method="POST">
                    <p class="infocue">Información de su cuenta</p>
                    <div class="row mb-3 control_cuenta">
                      <div class="col">
                        <label for="nombre" class="form-label lb_cuenta">Nombre(s)</label>
                        <input type="text" class="form-control cr_cuenta" id="registro_nombre" placeholder="Nombre">
                      </div>
                      <div class="col">
                        <label for="apellido" class="form-label lb_cuenta">Apellidos</label>
                        <input type="text" class="form-control cr_cuenta" id="registro_apellido" placeholder="Apellido">
                      </div>
                    </div>
                    <div class="row mb-3 control_cuenta">
                      <div class="col">
                        <label for="correo" class="form-label lb_cuenta">Correo electrónico</label>
                        <input type="email" class="form-control cr_cuenta" id="correo" placeholder="Gmail">
                      </div>
                      <div class="col">
                        <label for="telefono" class="form-label lb_cuenta">Teléfono</label>
                        <input type="text" class="form-control cr_cuenta" id="telefono" placeholder="Teléfono">
                      </div>
                    </div>
                    <p class="infocue">Información de acceso</p>
                    <div class="row mb-3 control_cuenta">
                      <div class="col">
                        <label for="usuario" class="form-label lb_cuenta">Usuario</label>
                        <input type="text" class="form-control cr_cuenta" id="usuario" placeholder="Usuario">
                      </div>
                      <div class="col">
                        <label for="contrasena" class="form-label lb_cuenta">Contraseña</label>
                        <input type="password" class="form-control cr_cuenta" id="contrasena" placeholder="Contraseña"> 
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary crear">CREAR CUENTA</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Inicio -->
    <div class="container-fluid">
      <div class="row">
        <div class="fondo">
          <section class="Inicio col-12">
            <div class="imgInicio text-center">
              <img class="imagen_inicio img-fluid" src="imagenes/img-inicio.png" alt="Imagen de inicio">
            </div>
            <h1 class="Bienvenida">Control total, más ventas menos estrés. ¡Descubre el mejor punto de venta!</h1>
            <p class="descripcion">
              Nuestro sistema de Punto de Venta es mucho más que una caja
              registradora. Es una herramienta diseñada para hacer tu vida más fácil: 
              control total sobre tus ventas, inventarios y más, con la tecnología más 
              avanzada del mercado. ¡El futuro de la gestión restaurantera está aquí!
            </p>
            <div class="boton-ver text-center ">
              <a href="#planes"><button type="button" class="btn_empezar btn-light"><h3>¡Empieza ahora!</h3></button></a>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- Porque elegirnos -->
    <div class="container-fluid">
      <h2 class="feature-title ">¿Por qué elegir Cytisum?</h2>
      <div class="feature-section">
        <div class="row">
          <div class="col-md-4 feature-item">
            <div class="feature-icon">
              <img class="ft_icon" src="img/control.png" alt="Img. de Control total">
            </div>
            <h4>Control total</h4>
            <div class="pedido">
              <p class="txt_pedido">Gestiona tus ventas, inventarios y
                más. Accede a información en
                tiempo real, toma decisiones rápidas
                y lleva el control de tu restaurante
                sin complicaciones.
              </p>
            </div>
          </div>
          <div class="col-md-4 feature-item">
            <div class="feature-icon">
              <img class="ft_icon" src="img/pedidos.png" alt="Img. de Optimizar pedidos">
            </div>
            <h4>Optimiza tus pedidos</h4>
            <div class="pedido">
              <p class="txt_pedido">Procesa cada orden de manera más 
                eficiente, permitiendo ofrecer un
                servicio rápido y de calidad, sin
                importar la cantidad de pedidos 
                recibidos.
              </p> 
            </div>    
          </div>
          <div class="col-md-4 feature-item">
            <div class="feature-icon">
              <img class="ft_icon" src="img/uso.png" alt="Img. de Facilidad de uso">
            </div>
            <h4>Facilidad de uso</h4>
            <div class="pedido">
              <p class="txt_pedido">Interfaz intuitiva que permite que tu 
                equipo se adapte rápidamente, sin 
                largas capacitaciones. Todos podrán
                utilizar el sistema sin problemas 
                desde el primer día.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Explora el punto de venta -->
    <div class="container">
      <h2 class="Explora">Explora nuestro punto de venta</h2>
      <div class="slid">
        <!-- Slider de Bootstrap -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <h4 class="titulos">Vista del Inicio de Sesión</h4>
              <img src="imagenes/vistaLogin.png" class="d-block w-100" alt="Vista del Inicio de Sesion">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista de los Reportes</h4>
              <img src="imagenes/vistaReportes.png" class="d-block w-100" alt="Vista de los Reportes">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista de las Mesas</h4>
              <img src="imagenes/vistaMesas.png" class="d-block w-100" alt="Vista de las Mesas">
            </div>
            <!-- Slide 4 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista de las Reservaciones</h4>
              <img src="imagenes/vistaReservaciones.png" class="d-block w-100" alt="Vista de las Reservaciones">
            </div>
            <!-- Slide 5 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista del Menú</h4>
              <img src="imagenes/vistaMenu.png" class="d-block w-100" alt="Vista del Menu">
            </div>
            <!-- Slide 6 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista del Inventario</h4>
              <img src="imagenes/vistaProductos.png" class="d-block w-100" alt="Vista del Inventario">
            </div>
            <!-- Slide 7 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista de los Pedidos</h4>
              <img src="imagenes/vistaPedidos.png" class="d-block w-100" alt="Vista de los Pedidos">
            </div>
            <!-- Slide 8 -->
            <div class="carousel-item">
              <h4 class="titulos">Vista del Personal</h4>
              <img src="imagenes/vistaPersonal.png" class="d-block w-100" alt="Vista del Personal">
            </div>
          </div>
          <!-- Controles de navegación -->
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <div class="descrip">
          <p class="texto"> Con la facilidad y comodidad de nuestro software, no perderás ni una 
            venta y podrás aumentar tus ganancias con mayor facilidad.
          </p>
        </div>
      </div>
    </div> 

    <!-- Como funciona cytisum -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h2 class="funcio offset-1">¿Cómo funciona Cytisum?</h2>
          <p class="gesti offset-1">Permite gestionar de manera eficiente las operaciones diarias del 
            negocio, desde la toma de pedidos hasta la gestión de pagos y la 
            administración de inventarios.
          </p>
          <p class="dise offset-1">está diseñado para optimizar todas las operaciones del 
            restaurante, mejorando la eficiencia, la precisión y la experiencia
            tanto para el personal como para los clientes.
          </p>
        </div>
        <div class="col-md-6">
          <div class="barra">
            <div class="benefits">
              <div class="benefit-item" id="ben">Seguridad y Control de Accesos</div>
              <div class="benefit-item" id="ben">Actualización Automática y Sin Interrupciones</div>
              <div class="benefit-item" id="ben">Integración con Sistemas Contables</div>
              <div class="benefit-item" id="ben">Seguimiento y Control de Reservaciones</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Beneficios -->
    <div class="container-fluid" id="linkbeneficio">
      <div class="bene">
        <h2 class="beneficios">Beneficios</h2>
        <div class="row">
          <div class="col-md-4 experiencia">
            <h4>Mejora en la experiencia del cliente</h4>
            <div class="si">
              <p class="col-md-12">Mejorar la experiencia del cliente 
                aumenta la satisfacción y la lealtad, lo 
                que impulsa las visitas recurrentes y 
                optimiza la rentabilidad del restaurante 
                a largo plazo.
              </p>
              <div class="text-center">
                <img src="img/si.png" alt="img1">
              </div>
            </div>
          </div>
          <div class="col-md-4 experiencia">
            <h4>Mejora en la eficiencia y rapidez del servicio</h4>
            <div class="si">
              <p class="col-md-12">Al optimizar el tiempo de servicio y 
                reducir los errores, el restaurante
                puede atender más clientes
                rápidamente, aumentando su 
                capacidad operativa y sus ventas
                diarias.
              </p> 
              <div class="text-center">
                <img src="img/si2.png" alt="img1">
              </div>
            </div>    
          </div>
          <div class="col-md-4 experiencia">
            <h4>Análisis de datos y toma de decisiones informada</h4>
            <div class="si">
              <p class="col-md-12">Con datos precisos, el restaurante
                puede optimizar el menú, ajustar los 
                horarios del personal y planificar 
                promociones efectivas, mejorando la
                gestión operativa.
              </p>
              <div class="text-center">
                <img src="img/si3.png" alt="img1">
              </div>
            </div>          
          </div>
        </div>
      </div>
    </div>

    <!-- Planes -->
    <div class="container-fluid py-1" id="planes">
      <h2 class="text-center mb-4 planes" >Planes</h2>
      <div class="row justify-content-center">
        <!-- Plan Básico -->
        <div class="res col-md-4 mb-4  pricing-card-basic align-plan-basic">
          <div class="card pricing-card shadow-sm border-0 h-100">
            <div class="card-body text-center">
              <h5 class="plan">Plan Básico</h5>
              <h6 class="card-price">$149 MXN/mes</h6>
              <ul class="list-unstyled mt-3 mb-4 usuario">
                <li>✓ 1 Usuario</li>
                <li>✓ Productos y Ventas ilimitados</li>
                <li>✓ Facturas limitadas</li>
                <li>✗ Gestión de Inventario</li>
                <li>✗ Gestión de Mesas y Reservaciones</li>
                <li>✗ Integración con Sistemas de Pago</li>
                <li>✗ Reportes Financieros</li>
              </ul>
              <div class="card-body justify-content-between text-center">
                <button class="btn btn-custom mt-auto" data-bs-toggle="modal" data-bs-target="#adquirirModal">Adquirir plan</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Plan Profesional -->
        <div class="res col-md-4 mb-4">
          <div class="card pricing-card shadow-sm border-0 h-100">
            <div class="card-body text-center azu">
              <h5 class=" plan">Plan Profesional</h5>
              <h6 class="card-price">$499 MXN/mes</h6>
              <ul class="list-unstyled mt-3 mb-4 usuario">
                <li>✓ Usuarios ilimitados</li>
                <li>✓ Productos y Ventas ilimitados</li>
                <li>✓ Facturas Ilimitadas</li>
                <li>✓ Gestión de Inventario</li>
                <li>✓ Gestión de Mesas y Reservaciones</li>
                <li>✓ Integración con Sistemas de Pago</li>
                <li>✓ Reportes Financieros</li>
              </ul>
              <div class="card-body justify-content-between text-center">
                <button class="btn btn-custom mt-auto" data-bs-toggle="modal" data-bs-target="#adquirirModal">Adquirir plan</button>
              </div>
            </div>
          </div>
        </div>
          <!-- Plan Estándar -->
          <div class="res col-md-4 mb-4 pricing-card-standard align-plan-standard">
            <div class="card pricing-card shadow-sm border-0 h-100">
              <div class="card-body text-center">
                <h5 class=" plan">Plan Estándar</h5>
                <h6 class="card-price">$299 MXN/mes</h6>
                <ul class="list-unstyled mt-3 mb-4 usuario">
                  <li>✓ 2 Usuarios</li>
                  <li>✓ Productos y Ventas ilimitados</li>
                  <li>✓ Facturas limitadas</li>
                  <li>✓ Gestión de Inventario</li>
                  <li>✗ Gestión de Mesas y Reservaciones</li>
                  <li>✗ Integración con Sistemas de Pago</li>
                  <li>✗ Reportes Financieros</li>
                </ul>
                <div class="card-body justify-content-between text-center">
                <button class="btn btn-custom mt-auto" data-bs-toggle="modal" data-bs-target="#adquirirModal">Adquirir plan</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- Modal para el formulario de compra -->
    <div class="modal fade" id="adquirirModal" tabindex="-1" aria-labelledby="adquirirModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adquirirModalLabel">Formulario de Compra</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="compra-container">
              <div class="mov_compra">
                <div class="rell">
                  <div class="cir">
                    <div class="text-center">
                      <img src="/Punto_Venta/imagenes/log.png" class="imge" alt="Logo Cytisum">
                    </div>
                  </div>
                  <div class="toc">
                  <form>
                    <div class="row mb-3 conti">
                      <div class="col">
                        <label for="companyNombre" class="form-label_compra">Nombre de la empresa (comercial o legal)</label>
                        <input type="text" class="form-control compra" id="companyNombre" placeholder="Empresa">
                      </div>
                    </div>
                    <div class="row mb-3 conti">
                      <div class="col">
                        <label for="tiponegocio" class="form-label_compra">Giro comercial</label>
                        <input type="text" class="form-control compra" id="tiponegocio" placeholder="¿En qué se dedica tu negocio?">
                      </div>
                    </div>
                    <div class="row mb-3 conti">
                      <div class="col-5">
                        <!-- Número de empleados -->
                        <label for="empleados" class="form-label_compra">Número de empleados</label>
                        <select class="form-select_compra" id="empleados">
                          <option value="0">Seleccione una opción</option>
                          <option value="1">Menos de 5 empleados</option>
                          <option value="2">De 5 a 10 empleados</option>
                          <option value="3">Más de 10 empleados</option>
                        </select>
                      </div>
                    </div>
                    <div class="text-center conti">
                      <a class="btn btn-primary continuar" data-bs-toggle="modal" data-bs-target="#pagoModal">Continuar</a>
                    </div>
                  </form>
                  <!-- <form>
                      <div class="row mb-3 conti">
                        <div class="col">
                          <label for="companyNombre" class="form-label_compra">Nombre de la empresa(comercial o legal)</label>
                          <input type="text" class="form-control" id="companyNombre" placeholder="Empresa">
                          <div class="col">
                            <label for="tiponegocio" class="form-label_compra">Giro comercial</label>
                            <input type="text" class="form-control" id="tiponegocio" placeholder="En qué se dedica tu negocio">
                          </div>
                          <div class="col-5">
                            <label for="empleados" class="form-label_compra">Número de empleados</label>
                            <select class="form-select" id="empleados">
                              <option value="1">Seleccione una opción</option>
                              <option value="1">Menos de 5 empleados</option>
                              <option value="2">De 5 a 10 empleados</option>
                              <option value="3">Más de 10 empleados</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="text-center">
                        <a class="btn btn-primary continuar" data-bs-toggle="modal" data-bs-target="#pagoModal">Continuar</a>
                      </div>
                    </form>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal de tipo de pago -->
    <div class="modal fade" id="pagoModal" tabindex="-1" aria-labelledby="pagoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pagoModalLabel">Formulario de Pago</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="payment-container">
              <div class="mov">
                <div class="relle">
                  <div class="circ">
                    <div class="text-center">
                      <img src="/Punto_Venta/imagenes/log.png" class="img_cytisum_pago" alt="Logo Cytisum">
                    </div>
                  </div>
                  <form class="todo">
                    <div class="row mb-3 cont_pago">
                      <div class="col">
                        <label for="numeroTarjeta" class="form-label">Número de la tarjeta</label>
                        <input type="text" class="form-control" id="numeroTarjeta" placeholder="XXXX-XXXX-XXXX-XXXX">
                      </div>
                      <div class="col">
                        <label for="titularTarjeta" class="form-label lb_tip">Titular de la tarjeta</label>
                        <input type="text" class="form-control tip" id="titularTarjeta" placeholder="Nombre de titular">
                      </div>
                    </div>
                    <div class="row mb-3 cont_pago">
                      <div class="col">
                        <label for="vencimiento" class="form-label lb_tip">Vencimiento</label>
                        <input type="text" class="form-control tip" id="vencimiento" placeholder="dd/mm/aa">
                      </div>
                      <div class="col">
                        <label for="cvv" class="form-label lb_tip">CVV</label>
                        <input type="text" class="form-control tip" id="cvv" placeholder="XXX">
                      </div>
                      <div class="col">
                        <label for="tipoTarjeta" class="form-label lb_tip">Tipo de tarjeta</label>
                        <select class="form-select select_pago" id="tipoTarjeta">
                          <option selected>Débito</option>
                          <option>Crédito</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-3 cont_pago">
                      <div class="col">
                        <label for="plan" class="form-label lb_tip">Plan</label>
                        <input type="text" class="form-control tip" id="plan" placeholder="XXX">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary elige">Pagar</button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Obten una prueba gratuita -->
    <div class="container-fluid">
      <div class="row">
        <section class="obt col-12">
          <div class="img_gratuita text-center">
            <img class="gratuita img-fluid"  src="imagenes/gratis.png" alt="Prueba gratuita">
          </div>
          <h2 class="prueba justify-content-center">Obtén una prueba gratuita</h2>
          <p class="contamos justify-content-center" width="50">
            ¡Contamos con una prueba completamente gratuita que 
            incluye el plan básico por 2 semanas, para que puedas 
            disfrutar de la comodidad de nuestro software!
          </p>
          <ul class="list-unstyled ilimitados">
            <li class="espaciado">✓ 1 Usuario</li>
            <li class="espaciado">✓ Productos y Ventas ilimitados</li>
            <li class="espaciado">✓ Facturas limitadas</li>
            <li class="espaciado">✗ Gestión de Inventario</li>
            <li class="espaciado">✗ Gestión de Mesas y Reservaciones</li>
            <li class="espaciado">✗ Integración con Sistemas de Pago</li>
            <li class="espaciado">✗ Reportes Financieros</li>
          </ul>
          <div class="text-center">
            <button type="button" class="btn_obtener btn-light" data-bs-toggle="modal" data-bs-target="#adquirirModal">¡Obtener!</button>
          </div>
        </section>
      </div>
    </div>

    <!-- Nuestros socios -->
    <div class="container-fluid my-5">
      <h2 class="socios">Nuestros socios</h2>
      <p class="text-center mb-4 confianza">
        Este espacio resalta la confianza y destaca a los negocios que han adoptado nuestra solución de punto de venta para optimizar sus 
        operaciones y aumentar la satisfacción del cliente.
      </p>
      <div class="row">
        <!-- Tarjeta 1 -->
        <div class="res col-md-4 mb-4">
          <div class="testimonial-card p-4">
            <div class="testimonial-img mx-auto mb-3">
              <div class="text-center">
                <img src="img/carlos.svg" class="rounded-circle" alt="Carlos Martínez" width="100">
              </div>
            </div>
            <h5 class="carlos">Carlos Martínez</h5>
            <p class="car">Supervisor de "Sabor a Casa"</p>
            <p class="funcionalidad col-sm-12">
              Desde que implementamos el sistema 
              POS, la gestión de nuestro restaurante
            ha mejorado significativamente. Ahora 
            podemos manejar el inventario y las 
            comandas con mayor rapidez y 
            precisión. La interfaz es intuitiva.
            </p>
          </div>
        </div>
        <!-- Tarjeta 2 -->
        <div class="res col-md-4 mb-4">
          <div class="testimonial-card p-4 move-down">
            <div class="testimonial-img mx-auto mb-3">
              <div class="text-center">
                <img src="img/laura.svg" class="rounded-circle" alt="Laura Gutiérrez" width="100">
              </div>
            </div>
            <h5 class="carlos">Laura Gutiérrez</h5>
            <p class="car1 mb-2">Gerente de "La Parrilla Dorada"</p>
            <p class="funcionalidad col-sm-12">
              La funcionalidad de gestión de mesas y
              reservaciones ha sido un cambio total 
              para nuestro negocio. Antes, todo se
              hacía manualmente y resultaba caótico
              en las horas pico. Con este sistema,
              podemos controlar las mesas.
            </p>
          </div>
        </div>
        <!-- Tarjeta 3 -->
        <div class="res col-md-4 mb-4">
          <div class="testimonial-card p-4">
            <div class="testimonial-img mx-auto mb-3">
              <div class="text-center">
                <img src="img/fernando.svg" class="rounded-circle" alt="Fernando López" width="100">
              </div>
            </div>
            <h5 class="carlos">Fernando López</h5>
            <p class="car">Propietario de "Gourmet"</p>
            <p class="funcionalidad col-sm-12">
              Lo que más me gusta del POS es la
              capacidad de personalizar el menú y
              gestionar las ventas desde múltiples
              dispositivos. Además, los reportes
              financieros detallados nos ayudan a
              entender mejor nuestro rendimiento.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Reseñas -->
    <div class="container-fluid">
      <h2 class="rese">Reseñas</h2>
      <p class="comen col-sm-12">Aquí podrás encontrar comentarios sobre los servicios, 
        el ambiente y la atención al cliente, ayudándote a conocer de primera mano
        lo que otros han experimentado.
      </p>
      <div class="row mt-4">
        <div class="res col-sm-12 col-md-4 mb-4">
          <div class="review-card review-card-margin">
            <div class="review-stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="POS col-sm-8">Con este sistema POS, recibimos las 
              órdenes de manera clara y sin errores, 
              lo que facilita la preparación de los
              platos y evita confusiones. Nos permite
              enfocarnos en lo que más importa.
            </p>
            <div class="author-info">
              <img src="img/jorge.svg" alt="Jorge Ortega" class="review-img">
              <div>
                <p class="review-author">Jorge Ortega</p>
                <p class="review-position">Chef en "Sabores"</p>
              </div>
            </div>
          </div>
        </div>
        <div class="res col-sm-12 col-md-4 mb-4">
          <div class="review-card review-card-sofia">
            <div class="review-stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="POS col-sm-8">El POS nos ha hecho el trabajo mucho 
              más fácil y rápido. Tomar órdenes y 
              enviarlas a la cocina es ahora mucho
              más eficiente, lo que reduce el tiempo
              de espera de los clientes.
            </p>
            <div class="author-info">
              <img src="img/sofia.svg" alt="Sofía Ramírez" class="review-img">
              <div>
                <p class="review-author">Sofía Ramírez</p>
                <p class="review-position">Mesera en "Gourmet"</p>
              </div>
            </div>
          </div>
        </div>
        <div class="res col-sm-12 col-md-4 mb-4">
          <div class="review-card review-card-margin">
            <div class="review-stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="POS col-sm-8">Trabajar en la caja es mucho más
              sencillo con el POS. El proceso de cobro 
              es rápido y preciso, y los reportes 
              diarios de ventas nos ayudan a llevar
              un control exacto de la jornada.
            </p>
            <div class="author-info">
              <img src="img/ana.svg" alt="Ana Morales" class="review-img">
              <div>
                <p class="review-author">Ana Morales</p>
                <p class="review-position">Cajera en "El Buen Sabor"</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contacto -->
    <div class="container-fluid">
      <div class="espa">
        <div class="contact-form">
          <div class="cir_contacto">
            <div class="text-center">
              <h2 class="form-title">¿Quieres saber más sobre nosotros?</h2>
              <p class="form-subtitle">Déjanos tus datos y te llamamos</p>
            </div>
          </div>
          <div class="formulario">
            <form>
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" class="form-control contacto_to" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="text" id="phone" class="form-control contacto_to" placeholder="Teléfono">
              </div>
              <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" class="form-control contacto_to" placeholder="Correo electrónico">
              </div>
              <button type="submit" class="btn btn-primary submit-btn">Continuar</button>
            </form>  
          </div>
          
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="foot text-center">
      <section class="d-flex justify-content-center p-4">
        <p class="condicion text-center">*El precio de los planes puede variar según el país en donde se encuentre la empresa compradora</p>
      </section>
      <section class="cnt-cuadro d-flex justify-content-center p-2">
        <div class="cuadrado"> 
          <h2 class="cdro">¡Empieza a Contactarnos!</h2>
          <h2>(998)-543-7970</h2>
        </div>
      </section>
      <div class="linea"></div>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Funciones</h6>
              <p><a href="#!" class="text-reset_txt">Menú</a></p>
              <p><a href="#!" class="text-reset_txt">Mesas</a></p>
              <p><a href="#!" class="text-reset_txt">Almacén</a></p>
              <p><a href="#!" class="text-reset_txt">Pedidos</a></p>
              <p><a href="#!" class="text-reset_txt">Personal</a></p>
              <p><a href="#!" class="text-reset_txt">Servicios</a></p>
              <p><a href="#!" class="text-reset_txt">Estadisticas</a></p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Mapa del sitio</h6>
              <p><a href="#!" class="text-reset_txt">Inicio</a></p>
              <p><a href="#!" class="text-reset_txt">¿Por qué nosotros?</a></p>
              <p><a href="#!" class="text-reset_txt">Beneficios</a></p>
              <p><a href="#!" class="text-reset_txt">Planes</a></p>
              <p><a href="#!" class="text-reset_txt">Opiniones</a></p>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Recursos</h6>
              <p><a href="#!" class="text-reset_txt">Programa de recomendaciones</a></p>
              <p><a href="#!" class="text-reset_txt">Terminos y condiciones</a></p>
              <p><a href="#!" class="text-reset_txt">Terminos de uso</a></p>
              <p><a href="#!" class="text-reset_txt">Politica de privacidad</a></p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Nuestras redes</h6>
              <section class="social-media">
                <div class="social-icons">
                  <a href="#!" class="text-reset"><img src="imagenes/fc.png" class="rounded mx-auto" alt="Facebook"></a>
                  <a href="#!" class="text-reset"><img src="imagenes/ig.png" class="rounded mx-auto" alt="Instagram"></a>
                  <a href="#!" class="text-reset"><img src="imagenes/x.png" class="rounded mx-auto" alt="X"></a>
                  <a href="#!" class="text-reset"><img src="imagenes/in.png" class="rounded mx-auto" alt="LinkedIn"></a>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <div class="linea"></div>
      <div class="text-center">
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <p>México</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <a href="#!" class="text-reset"><p> Facebook    |    Instagram    |    Linkedin</p> </a>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <p>© 2024 Cytisum</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
  </body>
</html>