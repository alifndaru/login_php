<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>D Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-11">
                <img src="img/logo.png">
            </div>
                  <div class="col-sm-1">
                  <a href="logout.php" class="btn btn-default btn-primary btn-lg">Logout</a>
                  </div>  
            </div>
        </div>
    </div>
    <!-- akhir header -->

    <!--navbar-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
              </ul>
              <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </nav>
    <!--akhir navbar-->

    <!--awal jumbotron-->
    <section class="banner">
            <div class="jumbotron">
                <h1>Easily Website Developing</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <p>Saya Seorang Mahasiswa Strata 1(S1) Jurusan Teknik Informatika. Hobby saya Mempelajari hal hal baru seputar Dunia Teknologi.</p>
                    </div>
                </div>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Hire Me Now!</a></p>
            </div>
    </section>
  <!--akhir jumbotron-->
  <a href="https://wa.me/6282249898921">Send Message</a>

  <!--Next-->
  <section class="next">
      <div class="container text-center">
          <h1>We can help developing your Website</h1>
          <p>Profile Company, Personal Website, Template Making</p>
      </div>
  </section>
    <!--akhir next-->

    <!--Awal Cards-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="https://c4.wallpaperflare.com/wallpaper/66/545/140/blue-exorcist-okumura-rin-anime-boys-wallpaper-preview.jpg" alt="...">
                    <div class="caption">
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

     <!--Next-->
     <section class="next">
        <div class="container text-center">
            <h1>Contact Me Now</h1>
            <p>Use Code JANCOKKOEASU for Discount 20%</p>
        </div>
    </section>
  <!--akhir next-->

  <!--form-->
  <section class="formulir">
      <div class="container">
          <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <form>
                        <div class="form-group">
                            <label input="Nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label input="email">Email</label>
                            <input type="email" class="form-control" placeholder="Masukan email Anda">
                        </div>
                        <div class="form-group">
                            <label input="pesan">Pesan</label>
                            <textarea class="form-control" rows="6" placeholder="Masukan pesan anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
  </section>
<!--akhir form-->

<!--footer-->
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <p>Copyright &copy; 2021 | built with <i class="glyphicon glyphicon-heart"></i> by <a href="#">Arif Darmawan</a> </p>
            </div>
        </div>
    </div>
</footer>
<!--akhir footer-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>