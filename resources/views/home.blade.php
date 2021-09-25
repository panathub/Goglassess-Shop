@extends('layouts.auth')

@section('content')
<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b> <img src="/assets/uploadfile/HOME/LOGO.png" alt="Me" class="w3-image w3-padding-32" width="90" height="90"><br>GO<br>GLASSES</b></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <!--a class="w3-bar-item w3-button" href="{{ route('login') }}">{{ __('LOGIN') }}</a-->
             @guest
                            @if (Route::has('login'))
                                    <a class="w3-bar-item w3-button" href="{{ route('login') }}">{{ __('LOGIN') }}</a>   
                            @endif
                            
                            @if (Route::has('register'))
                                    <a class="w3-bar-item w3-button" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                            @endif
                        @else
                            
                        <a class="w3-bar-item w3-button" href="{{ route('register') }}">
                                    HELLO  {{ Auth::user()->firstname }} 
                                </a>

                                
                                    <a class="w3-bar-item w3-button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOG OUT') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                               
                         
                        @endguest

























  <!--a class="w3-bar-item w3-button" href="{{ route('register') }}">{{ __('REGISTER') }}</a-->
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT ME</a> 

</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">GOGLASSES</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-row">
    <div class="w3-third">
      <img src="/assets/uploadfile/HOME/h1.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="/assets/uploadfile/HOME/p1.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="/assets/uploadfile/HOME/f1.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-third">
      <img src="/assets/uploadfile/HOME/h3.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
      <img src="/assets/uploadfile/HOME/p2.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="/assets/uploadfile/HOME/f2.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-third">
      <img src="/assets/uploadfile/HOME/h4.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      <img src="/assets/uploadfile/HOME/p3.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="/assets/uploadfile/HOME/f3.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">
    </div>
  </div>


  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b>About Me</b></h4>
    <img src="/assets/uploadfile/HOME/c2.jpg" alt="Me" class="w3-image w3-padding-32" width="650" height="250">
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>GOGLESSES</h4>
      <p>ร้านแว่นของเราถูกออกแบบและผลิตมาอย่างพิถีพิถันตั้งแต่รูปทรง สีสัน และวัสดุ โดยคำนึงถึงความลงตัวของสไตล์และการใช้งานได้จริงเป็นสำคัญ ในส่วนของเลนส์ เราเลือกใช้เลนส์คุณภาพสูงสั่งผลิตโดยตรงจากโรงงานที่มีความเชี่ยวชาญและเชื่อถือได้ เพราะเราเชื่อว่าแว่นตาที่ดีนอกจากสวยงามทนทานแล้ว ยังต้องถนอมสายตาของผู้ใช้งานได้อย่างดีที่สุด กรอบและเลนส์ของเราจะถูกประกอบขึ้นจากโรงงาน และจัดส่งถึงมือคุณที่บ้านโดยตรง ทำให้เราสามารถมอบสินค้าที่ดีมีคุณภาพในราคาที่เหมาะสมและคุ้มค่าโดยไม่ผ่านคนกลาง
      </p>
      <p>mail: Yoneya.ohm1221@gmail.com</p>
      <p>tel: 0820000000</p>
      
  
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>


</body>
</html>

@endsection
