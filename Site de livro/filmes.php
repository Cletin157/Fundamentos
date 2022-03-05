<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="files/lightslider.css">
  <script src="files/JQuery3.3.1.js"></script>
  <script src="files/lightslider.js"></script>
  <link rel="shortcut icon" href="img/R-removebg-preview.png">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link rel="stylesheet" href="css2.css">
  <title>Adidas</title>
</head>

<body>
   
    
<nav>

<a href="index.html" class="logo">
  <img src="img/R-removebg-preview.png">
</a>
<input type="checkbox" class="menu-btn" id="menu-btn" />
<label class="menu-icon" for="menu-btn">
    <span class="nav-icon"></span>
</label>
<ul class="menu">
  <li><a href="index.html">Home</a></li>
  <li><a href="filmes.php">Filmes</a></li>
  <li><a href="livros.php">Livros</a></li>
 
  <li><a href="#">Deslogar</a></li>
</ul>

<div class="search">

  <input type="text" placeholder="Pesquisar livros"/>

  

  <a href="#">
      <i class="fas fa-search"></i>

  </a>

</div>
</nav>

 
    
    <div class="movies-heading">
        <h2>Filmes</h2>
    </div>
    <section id="movies-list">
        
        <div class="movies-box">
            
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/eterjos.jpg">
            </div>
            
            <a href="#">
                ETERNOS HD
            </a>
        </div>
        
        <div class="movies-box">
            
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/massacre.jpg">
            </div>
            
            <a href="#">
                O MASSACRE  HD
            </a>
        </div>
        
        <div class="movies-box">
          
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/kigms.jpg">
            </div>
           
            <a href="#">
                 KING'S MAN HD
            </a>
        </div>
        
        <div class="movies-box">
            
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/batma.jpg">
            </div>
           
            <a href="#">
                BATMAN HD
            </a>
        </div>
       
        <div class="movies-box">
           
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/panico.jpg">
            </div>
           
            <a href="#">
               PANICO HD
            </a>
        </div>
        
        <div class="movies-box">
            
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/sing.jpg">
            </div>
            
            <a href="#">
                SING 2 HD
            </a>
        </div>
       
        <div class="movies-box">
           
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/unchar.jpg">
            </div>
           
            <a href="#">
            UNCHARTED HD
            </a>
        </div>
       
        <div class="movies-box">
            
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/gjhos.jpg">
            </div>
            
            <a href="#">
                GHOSTBUSTERS HD
            </a>
        </div>
    </section>
    
  
    <div class="btns">
        <a href="#">Previous</a>
        <a href="#">Next</a>
    </div>
    <center>
    
    <footer>
        <p>Adidas</p>
        <p>&copy Copyright 2022 Pedro e Gay(Higor)</p>
    </footer>
    </center>
    <script>
        $(document).ready(function() {
            $('#autoWidth,#autoWidth2').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function() {
                    $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
                }
            });
        });
    </script>
    </form>
</body>

</html>