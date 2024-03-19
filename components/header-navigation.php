<header id="site-header" class="header">
  <!-- <div class="top-bar d-md-block d-none">
    <div class="container">
      <div class="row align-items-center text-white">
        <div class="col-lg-8 col-md-12">
          <div class="topbar-link">
            <ul class="list-inline">
              <li class="list-inline-item text-white"><a href="mailto:info@vanmayitechnologies.com/" class="text-white"><i class="flaticon-email text-white"></i>info@bathalagroup.in</a>
              </li>
              <li class="list-inline-item text-white">
                <a href="tel:++91-9395595555" class="text-white"> <i class="flaticon-phone-call text-white"></i>+91-93955 95555</a>
              </li>
              <li class="list-inline-item text-white">
                <a href="#" class="text-white"> <i class="flaticon-alarm-clock text-white"></i>Mon-Sat 8am to 7pm</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 text-end d-lg-block d-none">
          <div class="social-icons social-hover top-social-list">
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/profile.php?id=61554009419784&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li><a href="https://wa.me/+919395595555"><i class="fa-brands fa-whatsapp text-white"></i>
                 </a>
              </li>
              <li><a href="https://x.com/BathalaGroup"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="https://www.linkedin.com/in/bathala-group-521b892a0/"><i class="fab fa-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.php">
              <img id="logo-img" class="img-fluid" src="images/bathala-logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <ul class="nav navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link <?php if ($page == 'index') {
                                                          echo 'active';
                                                        } ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown text-capitalize"> <a class="nav-link dropdown-toggle  <?php if ($page == 'cyberheights') {
                                                                                                      echo 'active';
                                                                                                    } ?>" href="#" data-bs-toggle="dropdown">Projects</a>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="cyberheights.php">Cyber Heights</a>
                    </li>
                  </ul> -->

                  <ul class="dropdown-menu">
                    <li><a href="ongoing-projects.php">Ongoing projects</a>
                    </li>
                    <li><a href="upcoming-projects.php">Upcoming Projects</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown text-capitalize"> <a class="nav-link dropdown-toggle <?php if ($page == 'events') {
                                                                                                    echo 'active';
                                                                                                  } ?>" href="#" data-bs-toggle="dropdown">Events & Gallery</a>
                  <ul class="dropdown-menu">
                    <li><a href="events.php">Events</a>
                    </li>
                    <li><a href="gallery.php">Gallery</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?php if ($page == 'careers') {
                                                          echo 'active';
                                                        } ?>" href="careers.php">Careers</a>
                </li>
                <li class="nav-item"><a class="nav-link <?php if ($page == 'contactus') {
                                                          echo 'active';
                                                        } ?>" href="contactus.php">Contact Us</a>
                </li>
                <li class="nav-item fs-3"><a class="nav-link <?php if ($page == 'contactus') {
                                                                echo 'active';
                                                              } ?>" href="https://www.facebook.com/profile.php?id=61554009419784&mibextid=ZbWKwL"><i class="fa-brands fa-facebook text-primary"></i></a>
                </li>

                <li class="nav-item fs-3"><a class="nav-link <?php if ($page == 'contactus') {
                                                                echo 'active';
                                                              } ?>" href="https://instagram.com/bathala_group?igshid=MTNiYzNiMzkwZA=="><span ><i class="fa-brands fa-instagram "style="color: #E1306C;"></i></span></a>
                </li>
                <li class="nav-item fs-3"><a class="nav-link <?php if ($page == 'contactus') {
                                                                echo 'active';
                                                              } ?>" href="https://wa.me/+919395595555 "><i class="fa-brands fa-whatsapp text-success"></i></a>
                </li>
                <li class="nav-item fs-3"><a class="nav-link <?php if ($page == 'contactus') {
                                                                echo 'active';
                                                              } ?>" href="https://x.com/BathalaGroup"><i class="fa-brands fa-twitter text-primary"></i></a>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>