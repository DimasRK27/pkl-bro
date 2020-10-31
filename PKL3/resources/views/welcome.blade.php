<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem SPMI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Styles -->
       
        <style>
            body {
                font-family: 'Calibri';
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
         <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
       

    </head>
    <body>

        <!-- navbar -->
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
    <img height="50" width="50" src="https://stmik-amikbandung.ac.id/wp-content/uploads/2019/01/LOGO-PNG.png">
    <span class="menu-collapsed">STMIK AMIK BANDUNG</span>
  </a>
            <div class="d-flex" id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-blue bg-blue">
        <div class="container-fluid">

            <div id="content">
         <nav>
        <div class="container-fluid">
        </div>
    </nav>
</div>

        </div>
    </nav>
</div>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit" >Search</button>
    </form>
  </div>
</nav>
    
  <div class="d-flex" id="wrapper" style="height: auto; min-height:100%" >

     <!-- Sidebar -->

  <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
      
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>


<aside class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-white d-flex align-items-center menu-collapsed bg-dark">
                <small>MAIN MENU</small>
            </li>


            
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center text-white">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
               <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">About</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center text-white">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Login</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Logout</span>
                </a>
            </div>            
           
        </ul>
    </aside> <!-- End Sidebar -->


    <!-- MAIN -->

</div>

<div class="wrapper" align="center">
    <!-- Sidebar Constructor -->
        <h1><strong>Dashboard</strong></h1>
        <p>
       <button><a href="http://localhost:8000/SOP">SOP</a></button>

       <button><a href="http://localhost:8000/Panduan">Panduan</a></button>

       <button><a href="http://localhost:8000/Standar">Standar</a></button></p>

       <p>
       <button><a href="http://localhost:8000/upload">Untuk Upload Silahkan Disini</a></button></p>
</div>

      
    </body>
</html>
