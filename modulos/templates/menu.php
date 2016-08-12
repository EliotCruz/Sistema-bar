<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="../../componentes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../componentes/sidebar/css/simple-sidebar.css" rel="stylesheet">
    <script src="../../componentes/files/jquery.js"></script>
    <script src="../../componentes/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <p>
                      Menu
                    </p>
                </li>
                <li>
                    <a href="#">Inventario</a>
                </li>
                <li>
                    <a href="#">Nomina</a>
                </li>
                <li>
                    <a href="#">Pedidos</a>
                </li>
                <li>
                    <a href="#">Gestion de usuarios</a>
                </li>
            </ul>
        </div>
      <header>
        <div class="container">
          <h1>Sistema web</h1>
          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        </div>
      </header>
    </div>
    <div class="container">
      <section class="main row">
        <article class="col-xs12 col-sm-8 col-md-9 col-lg-9">
          <p>
            Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the .open class on the parent list item.
            On mobile devices, opening a dropdown adds a .dropdown-backdrop as a tap area for closing dropdown menus when tapping outside the menu, a requirement for proper iOS support. This means that switching from an open dropdown menu to a different dropdown menu requires an extra tap on mobile.
            Note: The data-toggle="dropdown" attribute is relied on for closing dropdown menus at an application level, so it's a good idea to always use it.
          </p>
        </article>
      </section>

    </div>
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
  </body>
</html>
