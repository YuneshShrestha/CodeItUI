<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
    <style>
        /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */
        /* body{
            font-size: 62.5%;
        } */
        .hero{
            width: 100%;
            height: 80vh;
            background: linear-gradient(180deg, rgba(0,0,0,0.6755077030812324) 32%, rgba(0,0,0,0.938813025210084) 67%, rgba(0,0,0,1) 73%), url(https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .hero_top_navbar
        {
            width: 100%;
           height: 10%;
        }
        .hero_navbar{
            width: 100%;
            height: 15%;
        }
        .hero_welcome{
            width: 100%;
            height: 70%;
            display: flex;
            align-items: center;
           
        }
        .hero_welcome .container *{
            color: white;
        }
        /* Curvy start */
        .custom-shape-divider-bottom-1638807869 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1638807869 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 83px;
        }

        .custom-shape-divider-bottom-1638807869 .shape-fill {
            fill: #0E0D0DF0;
        }
        /* curvy end */
    </style>
  </head>
  <body>
    <div class="hero">
        @yield('top_navbar')
        @yield('navbar')
        @yield('welcome')
       
    </div>
    <div class="d-lg-block d-none custom-shape-divider-top-1638807536">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>