<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>video</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto+Mono|Uncial+Antiqua|ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="videos.css">

</head>
<body>
    <nav class = "navbar navbar-expand-lg navbar-dark row">
        <a class="navbar-brand"><img src="C:\Users\Abena\Documents\WEB DIV\chef101\chef.svg"  width="60" height="60" class="d-inline-block align-center" alt="">
       Chef <em>101</em></a>   
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
           <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="chef101.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="recipes.html">Recipes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="videos.html">Video</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                <button id="searchBtn" class="btn btn-light" type="submit">Search</button>
              </form>
          </div>      
   </nav>
   <nav class=" navbar navbar-expand-lg navbar-light blanknav">
       <p id="navtext" >50% discount on the chef 101 cookbook!</p>

   </nav>

  <div class="container">
    <div class="row">
      <iframe  id ="video" class="col-12" height="750" src="<?php echo $_GET['src'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

 
  <div class="container-fluid">
        <div class="row">
         <div class="col-lg-5">
           <div class="row">
             <div class="col-lg-6">
                <img  class="icon2"src="C:\Users\Abena\Documents\WEB DIV\chef101\chef.svg" alt="">
             </div>
           <div class="col-lg-6">
           <h5 align="left" class="icon2txt">Chef 101</h5>

           <a  href="chef101.html">Home</a>
            <br>
            <a href="recipes.html">Recipes</a>
             <br>
            <a href="videos.html">Video</a>
            <br>
           </div>
          </div>
         </div>
            <div class="col-lg-7 newsletter">
              <h3>Subscribe too our weekly newsletter!</h3>
              <h5>pssst!! more healthy tips availble to our suscribers</h5>
              <div class="row">
               
                  <div class="form-inline">
                    <div class="col-12">
                    <div class="form-group">
                        <label for="Name"></label>
                        <input type="text" class="form-control" id="Name" placeholder="Jane Doe">
                    </div>
                    <br>
                    </div>
                    <div class="col-12">
                    <div class="form-group">
                      <label for="Email"></label>
                      <input type="email" class="form-control" id="Email" placeholder="Chef101@gmail.com">
                    </div>
                    <br>
                    </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-dark">Subscribe</button>
                    </div>
                  </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="chef101.js"></script>
</body>
</html>