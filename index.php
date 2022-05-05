<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicons/icon-removebg-preview.png">
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="resources/css/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <script src="resources/js/library/jquery-3.6.0.min.js"></script>
    <link href="resources/css/library/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header id="head" class = "p-3 text-white">
        <ul id="menu" class="hed-c col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li id="list_1" class="px-2">home</li>
            <li id="list_2" class="px-2">insert</li>
            <img src="resources/images/favicons/icon-removebg-preview.png" alt="icon">
            <li id="list_3" class="px-2">select</li>
            <li id="list_4" class="px-2">show</li>
            </ul>
    </header>
    
    <main id="main">
        <?php include'Template/home.php';?>
    </main>

    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
             ><i class="fab fa-linkedin"></i
             ></a>
             <!-- Github -->
             <a
               class="btn btn-link btn-floating btn-lg text-dark m-1"
               href="#!"
               role="button"
               data-mdb-ripple-color="dark"
               ><i class="fab fa-github"></i
             ></a>
           </section>
           <!-- Section: Social media -->
         </div>
         <!-- Grid container -->

        <!-- Copyright -->
         <div class="text-center p-3 bg">
           © 2022 Copyright:
           <a href="https//facebook.com/mazenalimad">MR_DALTON</a>
         </div>
         <!-- Copyright -->
</footer>
    <script src="resources/js/ajax/AllOfFunction.js"></script>
</body>
</html>