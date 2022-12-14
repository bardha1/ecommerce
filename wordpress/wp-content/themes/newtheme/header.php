<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="wp-content/themes/newtheme/style.css">  -->
</head>
<body <?php body_class(); ?> >

    <header class="sticky-top">


<div class="container">

        <?php wp_nav_menu(

            array(

                'theme-location' => 'top-menu',
                'menu-class' => 'navigation'

            )
    );     ?>


    </div>
</nav>

    </header>

    <style type="text/css">
        body {
    background: #e7e7e7;
}

header{
    background: #333;
    width: 100%;
    height: 100%;
}

.menu{
    display: flex;
    justify-content: space-between;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  text-decoration: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  text-decoration: none;
   color: white;
}
    </style>