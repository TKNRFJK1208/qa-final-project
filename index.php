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
    <!-- <img src="images/hbg.png"> -->
    <div class="bnr-content">
      <h1>The readable content of a page when looking at its layout.</h1>
    </div>
  </div>
</section>
<section id="about">
  <div class="about container">
    <div class="col-left">
      <div class="about-img">
        <img src="images/pf.jpg" class="pf-img" alt="profile image">
      </div>
    </div>
    <div class="col-right">
      <h2 class="section-title">About <span>Me</span></h2>
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
          <img src="" alt="">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="" alt="">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="" alt="">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="" alt="">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="" alt="">
        </a>
        <div class="project-info">
          <h4>Projet Title</h4>
          <p>Sub Title</p>
        </div>
      </div>
      <div class="project-item">
        <a href="" title="project image">
          <img src="" alt="">
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
        <li>HTML5 & CSS3</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>WordPress</li>
        <li>GitHub</li>
      </ul>
    </div>
  </div>
</section>
<section id="client">
  <div class="client container">
    <h2 class="section-title">Client</h2>
    <div class="all-client-box">
      <div class="client-box">
        <img src="" alt="">
        <div class="client-message"></div>
      </div>
      <div class="client-box">
        <img src="" alt="">
        <div class="client-message"></div>
      </div>
      <div class="client-box">
        <img src="" alt="">
        <div class="client-message"></div>
      </div>
    </div>
  </div>
</section>
<section id="contact">
  <div class="contact container">
    <h2 class="section-title">Contact</h2>
    <p>Please fill out the form, we will contact you to discuss the details or schedule a meeting.</p>
    <form>
      <div class="contact-info">
        <p>Name</p>
        <input type="text" cols="40" name="fullname" value="">
      </div>
      <div class="contact-info">
        <p>EMAIL</p>
        <input type="email" cols="40" name="email" value="">
      </div>
      <div class="contact-info">
        <p>MESSAGE</p>
        <textarea cols="40" rows="8" name="message"></textarea>
        <input  type="submit" name="confirm" value="submit" class="cta"/>
      </div>
    </form>
  </div>
</section>
<?php include './partials/footer.php' ?>