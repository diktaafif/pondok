<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik PPMH</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="https://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong><font color="black">Sistem Informasi Akademik PP. Miftahul Huda</font></strong></a>
            </div>
            <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        
                               <a href="index.php?m=pengumuman">
                                    <span class="avatar"><i class="fa fa-bullhorn"></i></span>
                                    <span class="message">Pengumuman</span>
                                </a>
                            </li>
                     <li class="dropdown messages-dropdown">
                        
                                <a href="index.php?m=pertanyaan">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Pertanyaan</span>
                                </a>
                            </li>
                     <li class="dropdown messages-dropdown">
                        
                                <a href="index.php?m=petunjuk">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Petunjuk</span>
                                </a>
                            </li>
           
                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Pengguna<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="index.php?m=pendaftaran"><i class="fa fa-user"></i> Pendaftaran</a></li>
                           
                           <li class="divider"></li>
                           <li><a href="index.php?m=login"><i class="fa fa-power-off"></i> Masuk</a></li>
                       </ul>
                   </li>
                </ul>

            </nav>
</div>
</body>