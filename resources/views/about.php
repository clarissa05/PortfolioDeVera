<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
}
.about-wrapper{
    height: 100vh;
}
.about-left{
    background: #f26a8d;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
.about-left-content > div{
    background: #f49cbb;
    padding: 4rem 4rem 2.5rem 5rem;
    text-align: center;
}
.about-left-content{
    box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
    -webkit-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
    -moz-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
}
.shadow{
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    position: relative;
    cursor: pointer;
}
.shadow::after{
    content: "";
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    left: 50%;
    transform: translateX(-50%);
    bottom: -20px;
    height: 7px;
    width: 50px;
    filter: blur(3px);
    -webkit-filter: blur(3px);
    opacity: 0;
    transition: all 0.6s ease;
}
.shadow:hover .about-img{
    transform: translateY(-10px);
}
.shadow:hover::after{
    opacity: 1;
}
.about-left-content h2{
    font-size: 2rem;
    margin: 2.2rem 0 0.6rem 0;
    line-height: 1.2;
    padding-bottom: 1rem;
    border-bottom: 2px solid #edffec;
}
.about-left-content h3{
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 5px;
    margin-top: 1.2rem;
}
.icons{
    background: #fff;
    display: flex;
    justify-content: center;
    padding: 0.8rem 0;
}
.icons li{
    list-style-type: none;
    background: #f36a8d;
    color: #fff;
    width: 40px;
    height: 40px;
    margin: 0 0.5rem;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
}
.icons li:hover{
    background: #edffec;
    color: #000;
}
.about-right{
    background: #fff;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 5rem;
    text-align: center;
}
.about-right h1{
    font-size: 7rem;
    text-transform: uppercase;
}
.about-right h1 span{
    color: #dd2d4a;
}
.about-right h2{
    font-weight: 600;
}
.about-btns{
    display: flex;
    margin: 2rem 0;
}
.btn{
    border: none;
    font-size: 0.9rem;
    text-transform: uppercase;
    border: 2px solid #000;
    border-radius: 20px;
    padding: 0.55rem 0;
    width: 130px;
    font-weight: 600;
    background: transparent;
    margin: 0 0.5rem;
    cursor: pointer;
}
.btn.btn-pink{
    background: #dd2d4a;
    color: #fff;
    border-color: #dd2d4a;
    transition: all 0.5s ease-in-out;
}
.btn.btn-pink:hover{
    background: transparent;
    border-color: #dd2d4a;
    color: #000;
}
.btn.btn-white{
    transition: all 0.5s ease-in-out;
}
.btn.btn-white:hover{
    background: #dd2d4a;
    border-color: #dd2d4a;
    color: #fff;
}
.about-para p{
    font-weight: 300;
    padding: 0.5rem;
    opacity: 0.8;
}

@media screen and (min-width: 992px){
    .about-wrapper{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .about-left{
        position: relative;
    }
    .about-left-content{
        position: absolute;
        right: -50px;
    }
}

  </style>
  <body>
    
    <div class = "about-wrapper">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
              </div>
            </div>

            <h2>Clarissa<br>De Vera</h2>
            <h3>IT Student</h3>
          </div>

          <ul class = "icons">
            <li><i class = "fab fa-facebook-f"></i></li>
          </ul>
        </div>
      </div>

      <div class = "about-right">
        <h1>hi<span>!</span></h1>
        <h2>Here's who I am & what I do</h2>
        <div class = "about-btns">
          <button type = "button" class = "btn btn-pink">FUTURE</button>
          <button type = "button" class = "btn btn-white">PROGRAMMER</button>
        </div>

        <div class = "about-para">
          <p>I am Clarissa Corpuz De Vera. I'm 21 Years old taking up Bachelor of Science in Information Technology at Urdaneta City University. At first, I think taking IT as my course was difficult but day by day, I get to know more about it by watching video tutorials and visiting stack overflow. </p>
          <p>I want to be a designer. I have a big dream and I'm hoping to get there soon..</p>
            <a href="/home">Home</a></li>
        </div>
      </div>
    </div>
  </body>
</html>