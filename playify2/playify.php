<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Playify</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/simple-sidebar-right.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include 'search.php'; ?>
</head>


<body>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header"i>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form action="" method="post">
            <input type="text" name="search" value="">
            <input type="submit" name="submit" value="Search">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        <img src="images/spotify_logo.png" alt="" id="spotify-logo" />
                </li>
                <li>
                  <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span><br>&emsp;&ensp;&nbsp;Search</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-align-justify"></span><br>&emsp;&ensp;Browse</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-music"></span><br>&ensp;Your Music</a>
                </li>
                <li>
                  <a href="#"data-toggle="modal" data-target="#myModal2" ><span class="glyphicon glyphicon-plus"></span></a>
                </li>
                <br><br><br><br><br><br><br>
                <hr>
                <li>
                    <img class='img-circle' src='images/ed.jpg' />
                </li>
                <li>
                    <a href="#" id="settings"><span class="glyphicon glyphicon-cog"></span></a>
                    <a href="logout.php" id="logout"><span class="glyphicon glyphicon-off"></span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Sidebar -->
        <div id="sidebar-wrapper-right">

            <div id="container">
              <div id="audio-image"> <img class="cover"> </div>
              <div id="audio-player">
                <div id="audio-info"><span class="title"></span><br> <span class="artist"></span> </div>
                <hr>
                <div id="tracker">
                  <div id="progress-bar"> <span id="progress"></span> </div>
                  <span id="duration">0:00</span><span id="fullduration">0:00</span></div>
                <div class="clearfix"></div>
                <div id="buttons"> <span>
                  <button id="prev"></button>
                  <button id="play"></button>
                  <button id="pause"></button>
                  <button id="next"></button>
                  </span> </div>
                <div class="clearfix"></div>
              </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-1"></div>
                    <div class="col-lg-8">
                      <div class="clearfix"></div>
                      <ul id="playlist">
                        <?php echo $output; ?>
                      </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Modal -->

  <div class="container" >

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg" id="myModal2">
      <div class="modal-content"id="myModal2">
        <div class="modal-header"id="myModal2">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add A Song</h4>
          <hr>
          <form action="addsong.php" method="post">
            <fieldset class="form-group">
              <label for="inputFileName">File Name</label>
              <input type="text" name="inputFileName"class="form-control" id="inputFileName" placeholder="Make sure to enter the file name correctly">
            </fieldset>
            <fieldset class="form-group">
              <label for="coverSubmit">Cover Artwork</label>
              <input type="text" name="coverSubmit" class="form-control" id="coverSubmit" placeholder="Make sure to enter the file name correctly">
            </fieldset>
            <fieldset class="form-group">
              <label for="artistSubmit">Artist</label>
              <input type="text" name="artistSubmit" class="form-control" id="artistSubmit" placeholder="Artist">
            </fieldset>
            <fieldset class="form-group">
              <label for="titleSubmit">Title</label>
              <input type="text" name="titleSubmit" class="form-control" id="titleSubmit" placeholder="Title">
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
