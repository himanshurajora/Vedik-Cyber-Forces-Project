<?php
if(isset($_SESSION['username']))
{
 echo '<!-- nav type 1 -->
<!-- <nav class="navbar navbar-expand-sm bg-light">
        
      <a class="nav-link btn-primary" href="#" class="" >मुख्य पृष्ठ</a>
      <a class="nav-link" style=""href="explore">खोजे</a>
      <a class="nav-link" href="about" style=""  >हमारे बारे में </a>
      <a class="nav-link" href="gyan" style=""  > ज्ञान </a>
      <a class="nav-link" href="createpost" style=""  >Create a post</a>
    <a herf="#" class="nav-link disabled" style="">Vedik Cyber Forces</a>
</nav> -->
<style>

</style>
    <!-- navbar type 2 -->
    <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top" style="">
  <a class="navbar-brand" href="https://hackedserver.blogspot.com"><img src="/images/vcf.png" height="40px" style="border-radius:15px" alt="VCF"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
            <div class="dropdown bg-light">
              <a class="nav-link dropdown-toggle" type="link" id="dropdownmenu" data-toggle="dropdown">Explore 
              <span class="caret"></span></a>
              <ul class="dropdown-menu" style="border:0px;" aria-lable-by="dropdownmenu">
              <li><a href="/members" class="droplink">Members</a></li>
                <hr style="margin:0px">
                <li><a href="/explore" class="droplink">Posts</a></li>
                <hr style="margin:0px">
                <li><a href="/projects" class="droplink">Projects</a></li>
                <hr style="margin:0px">
                <li><a href="/artgallary" class="droplink">Art Gallery</a></li>
                <hr style="margin:0px">
                <li><a href="/upload" class="droplink">Upload A Project</a></li>
                <hr style="margin:0px">
                <li><p class="droplink">More Comming Soon...</p></li>
              </ul>
            </div>
          </li> 
     <!-- <li class="nav-item">
        <a class="nav-link disabled"  href="/gyan">Knowledge (Disabled)</a>
      </li>  -->
      <li class="nav-item">
            <div class="dropdown bg-light">
              <a class="nav-link dropdown-toggle" type="link" id="dropdownmenu" data-toggle="dropdown">About 
              <span class="caret"></span></a>
              <ul class="dropdown-menu" style="border:0px;" aria-lable-by="dropdownmenu">
                <li><a href="/about" class="droplink">About Us</a></li>
              </ul>
            </div>
          </li> 
      <li class="nav-item">
      <a class="nav-link" href="/chat/">Chatting room</a>
    </li>    
      <li class="nav-item">
        <a class="nav-link" id="loginlink" href="/login">Account</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Vedik Cyber Forces</a>
      </li>   
      
    </ul>
  </div>  
</nav>';
}
else{
    echo '<!-- nav type 1 -->
<!-- <nav class="navbar navbar-expand-sm bg-light">
        
      <a class="nav-link btn-primary" href="#" class="" >मुख्य पृष्ठ</a>
      <a class="nav-link" style=""href="explore">खोजे</a>
      <a class="nav-link" href="about" style=""  >हमारे बारे में </a>
      <a class="nav-link" href="gyan" style=""  > ज्ञान </a>
      <a class="nav-link" href="createpost" style=""  >Create a post</a>
    <a herf="#" class="nav-link disabled" style="">Vedik Cyber Forces</a>
</nav> -->
<style>

</style>
    <!-- navbar type 2 -->
    <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top" style="">
  <a class="navbar-brand" href="https://hackedserver.blogspot.com"><img src="/images/vcf.png" height="40px" style="border-radius:15px" alt="VCF"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
            <div class="dropdown bg-light">
              <a class="nav-link dropdown-toggle" type="link" id="dropdownmenu" data-toggle="dropdown">Explore 
              <span class="caret"></span></a>
              <ul class="dropdown-menu" style="border:0px;" aria-lable-by="dropdownmenu">
              <li><a href="/members" class="droplink">Members</a></li>
                <hr style="margin:0px">
                <li><a href="/explore" class="droplink">Posts</a></li>
                <hr style="margin:0px">
                <li><a href="/projects" class="droplink">Projects</a></li>
                <hr style="margin:0px">
                <li><a href="/artgallary" class="droplink">Art Gallery</a></li>
                <hr style="margin:0px">
                <li><a href="/upload" class="droplink">Upload A Project</a></li>
                <hr style="margin:0px">
                <li><p class="droplink">More Comming Soon...</p></li>
              </ul>
            </div>
          </li> 
     <!-- <li class="nav-item">
        <a class="nav-link disabled"  href="/gyan">Knowledge (Disabled)</a>
      </li>  -->
      <li class="nav-item">
            <div class="dropdown bg-light">
              <a class="nav-link dropdown-toggle" type="link" id="dropdownmenu" data-toggle="dropdown">About 
              <span class="caret"></span></a>
              <ul class="dropdown-menu" style="border:0px;" aria-lable-by="dropdownmenu">
                <li><a href="/about" class="droplink">About Us</a></li>
              </ul>
            </div>
          </li> 
      <li class="nav-item">
      <a class="nav-link" href="/chat/">Chatting room</a>
    </li>    
      <li class="nav-item">
        <a class="nav-link" id="loginlink" href="/login">Login</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Vedik Cyber Forces</a>
      </li>   
      
    </ul>
  </div>  
</nav>';
}
?>