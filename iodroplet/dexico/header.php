
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
      .menu-item{
        position: relative;
      }
      .menu-item:hover .sub-menu{
        display: block;
      }
      .sub-menu li:hover{
        background-color: #3c6e71;
      }
      
      li{
        list-style-type: none;
    padding-bottom: 10px;
      }
      .sub-menu{
        position: absolute;
    z-index: 1000;
    display: none;
    min-width: 10rem;
    padding: 0.5rem 0rem;
    padding:0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;    
      }
      .sub-menu a{
        display: block;
    width: 100%;
    padding: 0.25rem 1rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
      }
      a{
        color: #000;
        text-decoration: none;
      }
      .navbar li{
        margin:0px 25px
      }
      </style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-light " style="background-color: #fff;">
        <div class="container-fluid">
            <a class="flex-sm-fill nav-link dexico" href="#"
                >dexico <span1
                    class="dexico">.</span1></a>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <nav class="nav nav-pills flex-column flex-sm-row">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" data-bs-hover="dropdown" href="index.html" role="button" aria-expanded="false">HOME +</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="home2.html">Home 2</a></li>
                      <li><a class="dropdown-item" href="home3.html">Home 3</a></li>
                      <li><a class="dropdown-item" href="home4.html">Home 4</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="property.html" class="nav-link dropdown-toggle" data-bs-hover="dropdown"  role="button" aria-expanded="false">PROPERTY +</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="property_list.html">Property List</a></li>
                      <li><a class="dropdown-item" href="property_details.html">Property Details</a></li>
                      <li><a class="dropdown-item" href="property_detail_full.html">Property Details Full Width</a></li>
                      <li><a class="dropdown-item" href="agent.html">Agents</a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-hover="dropdown" href="about.html" role="button" aria-expanded="false">ABOUT +</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="oops.html">404</a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-hover="dropdown" href="blog.html" role="button" aria-expanded="false">BLOG +</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Single Post</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="flex-sm-fill text-sm-center nav-link" href="contacts.html">CONTACTS +</a>
                  </li>
            </nav> -->
            <?php 
        wp_nav_menu(array('
        theme_location'=>'primay-menu',
        'menu_class'=>'navbar'))
 ?>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"><i class='bx bx-menu toggle-sidebar'
                        style="font-size: xx-large;"></i></button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel" style="margin-top: 5%;">
                    <div class="offcanvas-body">
                       
                            <div class="card w-100 p-3">
                                <div class="card-body">
                                  <h5 class="card-title"><center>Let’s be Together</center></h5>
                                </div>
                                <div class="ratio ratio-1x1">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356933.8714888409!2d10.413661869378636!3d45.65994086120074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781eca8aec020b9%3A0x91dcf07c1c969bb8!2sGarda!5e0!3m2!1spl!2spl!4v1672244147501!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                              </div>
                    
                        <ul>
                            <li><spanf><i class="bx bxs-map icon "style="font-size:x-large;color:rgb(7, 115, 115)"></spanf></i><spanf>
                                LA, Vehicula Street , 58</spanf></li>
                            <li><spanf><i class="bx bxs-phone icon "style="font-size:x-large;color:rgb(7, 115, 115)"></span></i><spanf>
                                + 123 6897 8974</spanf></li>
                            <li><spanf><i class="bx bxs-envelope icon "style="font-size:x-large;color:rgb(7, 115, 115)"></span></i><spanf>hello@merkulov.design</spanf></li>
                            <li><spanf><i class="bx bxs-facebook icon " style="font-size:x-large;color:rgb(7, 115, 115)"></span></i><span></span></li>
                           </ul>
                    </div>
                </div>
            </div>
        </div>
</nav>
</body>

