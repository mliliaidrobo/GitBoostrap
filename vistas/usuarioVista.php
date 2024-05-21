<?php
require_once('../controladores/SprintControlador.php');
// Instanciamos el controlador
$sprintController = new SprintControlador();

$sprintController->manejarCreacionSprint();
$sprintController->eliminarSprint();
$sprintController->actualizarSprint();
//listar sprints
$sprints = $sprintController->obtenerSprints();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard PRO by Creative Tim
  </title>


  <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />

  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
  <meta name="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

  <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">

  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg" />
  <meta property="og:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <link href="../template/assets/css/nucleo-icons.css" rel="stylesheet" />

  <link href="../template/assets/css/black-dashboard.min.css?v=1.1.1" rel="stylesheet" />

  <link href="../template/assets/demo/demo.css" rel="stylesheet" />

  <!-- iconos boostraap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- estilos Fernando -->
  <style>
    /* Define el color del texto para la clase 'text-black' */
    .text-black {
      color: black;
    }

    /* Define el color del texto en negro incluso cuando el input está enfocado */
    .text-black:focus {
      color: black;
    }

    /* Si deseas que la clase 'text-black' también afecte a las etiquetas 'label' */
    label.text-black {
      color: black;
    }
  </style>
</head>

<body class="sidebar-mini ">
  <div class="wrapper">
    <div class="navbar-minimize-fixed" bis_skin_checked="1" style="opacity: 0;">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">

      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            SC
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Sprint o Clock
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="../vistas/dashboard.php">
              <i class="bi bi-box-arrow-in-right"></i>
              <p>Dashboard</p>
            </a>
            <a href="../vistas/sprintVista.php">
              <i class="bi bi-box-arrow-in-right"></i>
              <p>Sprint</p>
            </a>
          </li>
          <li class="active">
            <a href="../vistas/sprintVista.php">
              <i class="bi bi-box-arrow-in-right"></i>
              <p>Usuarios</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize d-inline">
              <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
                <!-- <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
                <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i> -->
                <i class="bi bi-menu-up"></i>
              </button>
            </div>
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <!-- <a class="navbar-brand" href="javascript:void(0)">Sprint o Clock</a> -->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="bi bi-search"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="bi bi-bell"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../template/assets/img/userIcon.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bi bi-file-excel"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div>

      </div>

      <div class="content" id="menuSprint">
        <h1>Modulo Sprint</h1>
        <div class="row">
          <!-- botonCrearSprint -->
          <button type="button" class="btn btn-fill btn-primary" data-toggle="modal" data-target="#crearSprintModal">
            Nuevo Sprint
          </button>

          <!-- modalCrearSprint -->
          <div class="modal fade" id="crearSprintModal" tabindex="-1" role="dialog" aria-labelledby="crearSprintModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">NUEVO SPRINT</h3>
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="bi bi-file-excel"></i>
                  </button> -->
                </div>
                <div class="modal-body">
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label>Nombre sprint</label>
                    <div class="form-group" bis_skin_checked="1">
                      <input type="text" class="form-control text-black" name="nameNombreSprint">
                    </div>
                    <label>Fecha inicio sprint</label>
                    <div class="form-group" bis_skin_checked="1">
                      <input type="text" class="form-control text-black" name="namefechaInicioSprint">
                    </div>
                    <label>Fecha fin sprint</label>
                    <div class="form-group" bis_skin_checked="1">
                      <input type="text" class="form-control text-black" name="namefechafinSprint">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-fill btn-primary" name="btnCrearSprint">Crear sprint</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- tablaObtenerSprints -->
          <div class="card " bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
              <h4 class="card-title">LISTA SPRINTS</h4>
            </div>
            <div class="card-body" bis_skin_checked="1">
              <div class="table-responsive ps" bis_skin_checked="1">
                <table class="table tablesorter tablesorter-default tablesorter40aa79c05efc1" id="simple-table" role="grid">
                  <thead class=" text-primary">
                    <tr role="row" class="tablesorter-headerRow">
                      <th data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="simple-table" unselectable="on" aria-sort="none" aria-label="Name: No sort applied, activate to apply an ascending sort" style="user-select: none;">
                        <div class="tablesorter-header-inner" bis_skin_checked="1">
                          Id Sprint
                        </div>
                      </th>
                      <th data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="simple-table" unselectable="on" aria-sort="none" aria-label="Country: No sort applied, activate to apply an ascending sort" style="user-select: none;">
                        <div class="tablesorter-header-inner" bis_skin_checked="1">
                          Nombre Sprint
                        </div>
                      </th>
                      <th data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="simple-table" unselectable="on" aria-sort="none" aria-label="City: No sort applied, activate to apply an ascending sort" style="user-select: none;">
                        <div class="tablesorter-header-inner" bis_skin_checked="1">
                          Fecha Inicio Sprint
                        </div>
                      </th>
                      <th data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="simple-table" unselectable="on" aria-sort="none" aria-label="City: No sort applied, activate to apply an ascending sort" style="user-select: none;">
                        <div class="tablesorter-header-inner" bis_skin_checked="1">
                          Fecha Fin Sprint
                        </div>
                      </th>
                      <th data-column="4" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="simple-table" unselectable="on" aria-sort="none" aria-label="City: No sort applied, activate to apply an ascending sort" style="user-select: none;">
                        <div class="tablesorter-header-inner" bis_skin_checked="1">
                          Acciones
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody aria-live="polite" aria-relevant="all">
                    <?php foreach ($sprints as $sprint) { ?>
                      <tr role="row">
                        <td>
                          <?php echo $sprint['id_sprint']; ?>
                        </td>
                        <td>
                          <?php echo $sprint['nombre_sprint']; ?>
                        </td>
                        <td>
                          <?php echo $sprint['fecha_inicio_sprint']; ?>
                        </td>
                        <td>
                          <?php echo $sprint['fecha_fin_sprint']; ?>
                        </td>
                        <td>
                          <!-- botonEditar -->
                          <button type="button" title="Editar sprint" data-toggle="modal" data-target="#editarModal<?php echo $sprint['id_sprint']; ?>">
                            <a href="#editarId=<?= $sprint['id_sprint']; ?>" class="bi bi-pencil-square"></a>
                          </button>
                          <!-- botonEliminar -->
                          <button type="button" title="Eliminar sprint"><a href="sprintVista.php?eliminarId=<?= $sprint['id_sprint']; ?>" class="bi bi-trash"></a></button>

                          <!-- modalEditar -->
                          <div class="modal fade" id="editarModal<?php echo $sprint['id_sprint']; ?>" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel<?php echo $sprint['id_sprint']; ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                  <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="bi bi-file-excel"></i>
                                  </button>  -->                                 
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <!-- idCampoOculto -->
                                    <input type="hidden" name="editarId" value="<?php echo $sprint['id_sprint']; ?>">

                                    <label class="text-black">Nombre sprint</label>
                                    <div class="form-group" bis_skin_checked="1">
                                      <input type="text" class="form-control text-black" name="nameNombreSprint" value="<?php echo $sprint['nombre_sprint']; ?>">
                                    </div>
                                    <label class="text-black">Fecha inicio sprint</label>
                                    <div class="form-group" bis_skin_checked="1">
                                      <input type="text" class="form-control text-black" name="namefechaInicioSprint" value="<?php echo $sprint['fecha_inicio_sprint']; ?>">
                                    </div>
                                    <label class="text-black">Fecha fin sprint</label>
                                    <div class="form-group" bis_skin_checked="1">
                                      <input type="text" class="form-control text-black" name="namefechafinSprint" value="<?php echo $sprint['fecha_fin_sprint']; ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                  <button type="submit" class="btn btn-fill btn-primary" name="btnActualizarSprint">Actualizar sprint</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>

                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;" bis_skin_checked="1">
                  <div class="ps__thumb-x" tabindex="0" bis_skin_checked="1" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;" bis_skin_checked="1">
                  <div class="ps__thumb-y" tabindex="0" bis_skin_checked="1" style="top: 0px; height: 0px;"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Sprint o Clock
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> Implementado por <i class="tim-icons icon-heart-2"></i> por
            <a href="javascript:void(0)" target="_blank">Fernando Lugo</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="red"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">
          Sidebar Mini
        </li>
        <li class="adjustments-line">
          <div class="togglebutton switch-sidebar-mini">
            <span class="label-switch">OFF</span>
            <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label data-off-label />
            <span class="label-switch label-right">ON</span>
          </div>
          <div class="togglebutton switch-change-color mt-3">
            <span class="label-switch">LIGHT MODE</span>
            <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label data-off-label />
            <span class="label-switch label-right">DARK MODE</span>
          </div>
        </li>
        <li class="button-container mt-4">
          <a href="../docs/1.0/getting-started/introduction.html" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/ct-black-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>

  <script src="../template/assets/js/core/jquery.min.js"></script>
  <script src="../template/assets/js/core/popper.min.js"></script>
  <script src="../template/assets/js/core/bootstrap.min.js"></script>
  <script src="../template/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../template/assets/js/plugins/moment.min.js"></script>

  <script src="../template/assets/js/plugins/bootstrap-switch.js"></script>

  <script src="../template/assets/js/plugins/sweetalert2.min.js"></script>

  <script src="../template/assets/js/plugins/jquery.tablesorter.js"></script>

  <script src="../template/assets/js/plugins/jquery.validate.min.js"></script>

  <script src="../template/assets/js/plugins/jquery.bootstrap-wizard.js"></script>

  <script src="../template/assets/js/plugins/bootstrap-selectpicker.js"></script>

  <script src="../template/assets/js/plugins/bootstrap-datetimepicker.js"></script>

  <script src="../template/assets/js/plugins/jquery.dataTables.min.js"></script>

  <script src="../template/assets/js/plugins/bootstrap-tagsinput.js"></script>

  <script src="../template/assets/js/plugins/jasny-bootstrap.min.js"></script>

  <script src="../template/assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="../template/assets/js/plugins/fullcalendar/daygrid.min.js"></script>
  <script src="../template/assets/js/plugins/fullcalendar/timegrid.min.js"></script>
  <script src="../template/assets/js/plugins/fullcalendar/interaction.min.js"></script>

  <script src="../template/assets/js/plugins/jquery-jvectormap.js"></script>

  <script src="../template/assets/js/plugins/nouislider.min.js"></script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

  <script src="../template/assets/js/plugins/chartjs.min.js"></script>

  <script src="../template/assets/js/plugins/bootstrap-notify.js"></script>

  <script src="../template/assets/js/black-dashboard.min.js?v=1.1.1"></script>

  <script src="../template/assets/demo/demo.js"></script>

  <script src="../template/assets/demo/jquery.sharrre.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46172202-12"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-46172202-12');
  </script>
  <script>
    $(document).ready(function() {


      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
      });



      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
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
      }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }


      //
      //
      //

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

      demo.initVectorMap();

    });
  </script>

  <!-- editarSprintScript -->
  <!--   <script>
    $(document).ready(function() {
        // Captura el ID del sprint cuando se abre el modal
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var sprintId = button.data('sprint-id'); // Extrae el ID del sprint de los datos del botón
            var modal = $(this);
            // Asigna el ID del sprint al campo oculto en el formulario
            modal.find('input[name="editarId"]').val(sprintId);
            
        });
    });
</script> -->

  <!-- cambios menus -->

  <!--   <script>
    $(document).ready(function() {
      $('#menuSprint').click(function() {
        $.get('sprintVista.php', function(data) {
          $('#menuContenido').html(data);
        });
      });
    });
  </script> -->

  <!--   <script>
    $(document).ready(function() {

      var currentPage = window.location.pathname.split('/').pop();

/*       // Evento click para cargar el contenido de dashboard
      $('#menuDashboard').click(function() {
        $.get('dashboard.php', function(data) {
          $('#menuContenido').html(data);
        });
      }); */

      // Evento click para cargar el contenido de sprint
      $('#menuSprint').click(function() {

        if(currentPage === 'sprintVista.php'){
          $.get('sprintVista.php', function(data) {
            $('#menuContenido').html(data);
        });
        }

      });

      // Evento para manejar el envío del formulario
      $('#menuContenido').on('submit', 'form', function(e) {
        e.preventDefault(); // Evita el envío del formulario de manera tradicional

        var formData = $(this).serialize(); // Obtiene los datos del formulario
        var url = $(this).attr('action'); // Obtiene la URL de la acción del formulario

        $.ajax({
          type: 'POST',
          url: url, // URL a la que se enviará el formulario
          data: formData,
          success: function(data) {
            $('#menuContenido').html(data);
          }
        });
      });
    });
  </script> -->

  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"8811c7bcf9007424","version":"2024.4.1","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

</html>