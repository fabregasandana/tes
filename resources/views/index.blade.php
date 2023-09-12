<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>899SLOT</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section class="landing-page">
        <nav class="navbar">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">Home</li>
                    <li class="nav-item">Journal</li>
                    <li class="nav-item">Breath</li>
                    <li class="nav-item">Insight</li>
                </ul>
                {{-- <h2 class="name">EUNOIA</h2> --}}
                {{-- <button type="submit" class="btn"><a href="#">Get Help</a></button> --}}
            </div>
        </nav>
        <div class="judul">
                <h1 class="m">Mental</h1>
                <div class="sub">
                    <h1 class="h">Health</h1>
                    <h1 class="w">Wealth</h1>
                </div>
                <h1 class="i">is</h1>
        </div>
        <div class="cover">
        <img src="{{ URL::asset('/img/women.png') }}" alt="">
        </div>
    </section>

    <section class="mood">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#F9D4F4"/>
                    <stop offset="100%" stop-color="#C5EEE2"/>
                </linearGradient>
            </defs>
            <path fill="url(#gradient)" fill-opacity="1" d="M0,128L80,133.3C160,139,320,149,
            480,138.7C640,128,800,96,960,80C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,
            0L0,0Z"></path>
        </svg>
        <div class="contain">
            <h1>How's ur Mood Today?</h1>
            <div class="wrapper">
                <div class="section">
                    <ul class="emojis">
                        <li class="slide-emoji"><img src="{{ URL::asset('/img/happy.png') }}" alt=""></li>
                        <li><img src="{{ URL::asset('/img/good.png') }}" alt=""></li>
                        <li><img src="{{ URL::asset('/img/bad.png') }}" alt=""></li>
                        <li><img src="{{ URL::asset('/img/happy.png') }}" alt=""></li>
                        <li><img src="{{ URL::asset('/img/good.png') }}" alt=""></li>
                    </ul>
                </div>
                <div class="slider">
                    <div class="thumb"><span></span></div>
                    <div class="progress-bar"></div>
                    <input type="range" min="0" value="0" max="100">
                </div>
            </div>
        </div>
    </section>
    
    <script>
        const body = document.querySelector("body");
    const emoji = document.querySelector(".slide-emoji");
    const input = document.querySelector("input");
    const bar = document.querySelector(".progress-bar");
    const thumb = document.querySelector(".thumb");
    input.oninput = ()=>{
      let sliderValue = input.value;
      thumb.style.left = sliderValue + '%';
      bar.style.width = sliderValue + '%';
      if(sliderValue < 20){
        emoji.style.marginLeft = "0px";
        body.classList.add("like");
        body.classList.remove("confuse");
        body.classList.remove("angry");
      }
      if(sliderValue >= 20){
        emoji.style.marginLeft = "-140px";
        body.classList.add("confuse");
        body.classList.remove("angry");
        body.classList.remove("like");
      }
      if(sliderValue >= 40){
        emoji.style.marginLeft = "-280px";
      }
      if(sliderValue >= 60){
        emoji.style.marginLeft = "-420px";
        body.classList.add("angry");
        body.classList.remove("confuse");
        body.classList.remove("like");
      }
      if(sliderValue >= 80){
        emoji.style.marginLeft = "-560px";
      }
    }
    </script>
</body>
</html>