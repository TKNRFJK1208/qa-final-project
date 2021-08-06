<?php include './partials/message.php' ?>
<?php include './partials/head.php' ?>
<header id="header">
  <div class="header container">
    <div class="nav-bar">
      <div class="brand">
        <a href="index.php"><img class="logo" src="images/logo.png" alt="LOGO"></a>
      </div>
      <div class="nav-list">
        <div class="hamburger"><div class="bar"></div></div>
        <nav>
          <ul>
            <li><a href="#about" title="about">About</a></li>
            <li><a href="#project" title="project">Project</a></li>
            <li><a href="#expertise" title="expertise">Expertise</a></li>
            <li><a href="#client" title="client">Client</a></li>
            <li><a href="#contact" title="contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<section id="bnr">
  <div class="bnr container">
    <div class="bnr-content">
      <h1>The readable content of a page when looking at its layout.</h1>
    </div>
  </div>
</section>
<section id="about">
  <div class="about container">
    <div class="col-left">
      <div class="about-img">
        <img src="images/about.jpeg" class="pf-img" alt="profile image">
      </div>
    </div>
    <div class="col-right">
      <h2 class="section-title">About <span>Us</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quod harum omnis aliquam totam. Ea ut, blanditiis quod repellat sit alias totam architecto esse similique. Velit error magni eius labore.</p>
    </div>
  </div>
</section>
<section id="project">
  <div class="project container">
    <h2 class="section-title">Featured <span>Projects</span></h2>
    <div class="project-box">
      <div class="project-item">
        <a href="" title="project image">
          <img src="images/img1.jpg" alt="project1">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="images/img2.jpg" alt="project2">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="images/img3.jpg" alt="project3">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="images/img4.jpg" alt="project4">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="images/img5.jpg" alt="project5">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="images/img6.jpg" alt="project6">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="expertise">
  <div class="expertise container">
    <h2 class="section-title">Expertise</h2>
    <p>Our core competencies and capabilities.</p>
    <div class="skill-list">
      <ul>
        <li>Web Design</li>
        <li>UX / UI</li>
        <li>Modern App Framework</li>
        <li>WordPress & SEO</li>
        <li>Market Analyics</li>
        <li>Graphic Design</li>
      </ul>
    </div>
  </div>
</section>
<section id="client">
  <div class="client container">
    <h2 class="section-title">Client</h2>
    <div class="all-client-box">
      <div class="client-box">
        <img src="images/c1.jpeg" alt="client1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="client-message"></div>
      </div>
      <div class="client-box">
        <img src="images/c2.jpeg" alt="client2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="client-message"></div>
      </div>
      <div class="client-box">
        <img src="images/c3.jpeg" alt="client3">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="client-message"></div>
      </div>
    </div>
  </div>
</section>
<section id="contact">
    <?php if( $mode == 'input' ){ ?>
        <div class="container contact-form">
          <h2 class="section-title">Contact Us</h2>
            <form action="./index.php#contact" method="post">
                <?php
                    if( $errmessage ){
                        echo '<div class="error-message">';
                        echo implode('<br><p>', $errmessage );
                        echo '</p></div>';
                    }
                ?>
                <div class="contact-info">
                    <p>NAME</p>
                    <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>"><br>
                </div>
                <div class="contact-info">
                    <p>EMAIL</p> 
                    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>"><br>
                </div>
                <div class="contact-info">
                    <p>MESSAGE</p><br>
                    <textarea cols="40" rows="8" name="message"><?php echo $_SESSION['message'] ?></textarea><br>
                    <input type="submit" name="confirm" value="check" class="cta"/>
                </div>
            </form>
        </div>
    <?php } else if( $mode == 'confirm' ){ ?>
        <div class="container contact-form">
            <form action="./index.php#contact" method="post">
                <div class="contact-info">
                    <p>[NAME]</p>
                    <p><?php echo $_SESSION['fullname'] ?></p>
                </div>
                <div class="contact-info">
                    <p>[EMAIL]</p> 
                    <p><?php echo $_SESSION['email'] ?></p>
                </div>
                <div class="contact-info">
                    <p>[MESSAGE]</p><br>
                    <p><?php echo nl2br($_SESSION['message']) ?></p>
                    <div class="buttons">
                        <input type="submit" name="back" value="back" class="back"/>
                        <input type="submit" name="send" value="send" class="send"/>
                    </div>
                </div>
            </form>
        </div>
    <?php } else { ?>
        <div class="contact-form">
            <p>Sent you message. Thank you!</p><br>
            <a href="../index.php">
                <button class="home" >home</button>
            </a>
        </div>
    <?php } ?>
</section>
<?php include './partials/footer.php' ?>