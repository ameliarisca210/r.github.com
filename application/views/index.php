<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Konohamaru</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
      <a class="navbar-brand" href="#"><img src="images/loho.png" width="70"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/head.png" class="d-block w-100" alt="...">
        </div>
      </div>      
    </div>

    <div class="container">
      <!--row in bootstrap-->
      <div class="row">
        <div class="col-md-12 text-center">
          <h5>About My Website</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <p>Web belajar bootstrap</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 text-center bg-info text-white pt-3">
          <p>Easy to use</p>
        </div>
        <div class="col-md-4 text-center bg-info text-white pt-3">
          <p>Fast Learning</p>
        </div>
        <div class="col-md-4 text-center bg-info text-white pt-3">
          <p>Professional Work</p>
        </div>
      </div>

      <br>
      <div class="row">
        <div class="col-md-6 pl-5">
            <!--make standart form group-->
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama anda" name="nama" required="required">
              </div>
              <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" class="form-control" id="usia" placeholder="Masukkan usia anda " name="usia" required="required">
              </div>
              <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas" placeholder="Masukkan kelas anda" name="kelas" required="required">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>

      <!--make standart table with bootstrap-->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Kelas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Junior</td>
            <td>21</td>
            <td>Frontend</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Junior</td>
            <td>21</td>
            <td>Frontend</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Junior</td>
            <td>21</td>
            <td>Frontend</td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer>
      <div class="bg-primary text-white text-center pt-3 pb-1">
        <p>Copyrigth &copy; 2019 by <a href="#" style="color: #fff">Hinata</a>  </p>
      </div>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->

    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>