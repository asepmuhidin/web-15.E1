

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
      <img src="<?php echo base_url().'/assets/images/logo.png';?>" 
            width="40" height="40" alt="LOGO">  
      ADI-DASH
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?php echo anchor('home','Home',array('class'=>'nav-link'));?>
      </li>
      <li class="nav-item">
        <?php echo anchor('about','Tentang Kami',array('class'=>'nav-link'));?>
      </li>
    </ul>
    
  </div>
</nav>