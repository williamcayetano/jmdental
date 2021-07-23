    <?php $this->load->view('includes/header_default_view'); ?>
    
    <div class="video-background">
      <div class="video-wrap">
        <div class="video">
          <h2>GREAT SMILES</h2>
          <h3>BEGIN WITH US</h3>
          <p>General & cosmetic dentistry. New patients always welcome!</p>
          <a href="<?php echo base_url('contact'); ?>"><button class="button-primary appointment-button d-lg-none">Make An Appointment</button></a>
          <p class="chevron d-none d-lg-block">Learn More</p>
          <svg
            width="3em"
            height="3em"
            viewBox="0 0 16 16"
            class="bi bi-chevron-down"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
            />
          </svg>
          <video id="bgvid" autoplay loop muted playsinline>
            <source src="images/jmd-optimized.mp4" type="video/mp4" />
          </video>
        </div>
      </div>
    </div>

    <div class="container-flex blue-row-container">
      <div class="row">
        <div class="d-none d-lg-block col-lg-4 billboard-bottom">
          <span style="font-size: 2em; color: white">
            <i class="fas fa-tooth mid-icon"></i>
          </span>
          <h3>WE DO IT ALL</h3>
          <p>
            We offer a wide range of dental procedures, including general and
            cosmetic work.
          </p>
        </div>
        <div class="d-none d-lg-block col-lg-4 billboard-bottom bluer">
          <span style="font-size: 2em; color: white">
            <i class="fas fa-map-marker-alt mid-icon"></i>
          </span>
          <h3>ACCEPTED INSURANCE</h3>
          <p>
            We are committed to making our services as accessible and affordable
            as possible.
          </p>
        </div>
        <div class="d-none d-lg-block col-lg-4 billboard-bottom bluest">
          <span style="font-size: 2em; color: white">
            <i class="fas fa-globe-americas mid-icon"></i>
          </span>
          <h3>TWO LOCATIONS</h3>
          <p>We have offices in Maryland Heights and Gerald, MO.</p>
        </div>
      </div>
    </div>

    <div class="container convenient-container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="default-header">
            Making it <strong>convenient</strong> to visit the dentist.
          </h2>
          <p>
            Martin Dental & Associates is dedicated to making sure that their
            dental services are accessible, yet high-quality.<br /><br />
            With two locations, one in Maryland Heights and the other in Gerald,
            MO, Martin Dental & Associates is the leading choice of St. Louis
            residents for general dentistry, surgical dentistry, cosmetic
            dentistry, and total health dentistry services.
          </p>
          <a href="<?php echo base_url('contact'); ?>"><button class="button-primary convenient-button">Learn More</button></a>
        </div>
        <div class="col-lg-6">
          <img src="images/child-at-dentist.jpg" />
        </div>
      </div>
    </div>

    <div class="container-flex services-container d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="default-header service-header">
              Our <strong>Services</strong>
            </h2>
          </div>
          <div class="col-lg-6 service-title">
            <a href="<?php echo base_url('services'); ?>"><button class="button-primary">
              VIEW GENERAL DENTISTRY SERVICES
              <svg
                width="1.5em"
                height="1.5em"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right icon-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg>
            </button></a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <a href="<?php echo base_url('cleanings'); ?>"><button class="button-primary services-button">Cleanings</button>
            <img src="images/Customized-Dental-Cleanings.jpg" class="service-box" />
            </a>
          </div>
          <div class="col-lg-4">
            <a href="<?php echo base_url('sealants'); ?>"><button class="button-primary services-button">Sealants</button>
            <img src="images/Dental-Sealants-in-St.-Louis.jpg" class="service-box" />
            </a>
          </div>
          <div class="col-lg-4">
            <a href="<?php echo base_url('fillings'); ?>"><button class="button-primary services-button">Fillings</button>
            <img src="images/Tooth-Colored-Fillings-in-St.-Louis-1.jpg" class="service-box" />
            </a>
          </div>
        </div>
        <div class="row services-row">
          <div class="col-lg-4">
            <a href="<?php echo base_url('dentures'); ?>"><button class="button-primary services-button">Dentures</button>
            <img src="images/Dentures-in-St.-Louis.jpg" class="service-box" />
            </a>
          </div>
          <div class="col-lg-4">
            <a href="<?php echo base_url('crowns'); ?>"><button class="button-primary services-button">Crowns</button>
            <img src="images/Crowns-in-St.-Louis.jpg" class="service-box" />
            </a>
          </div>
          <div class="col-lg-4">
            <a href="<?php echo base_url('bridges'); ?>"><button class="button-primary services-button">Bridges</button>
            <img src="images/Porcelain-Bridges-in-St.-Louis.jpg" class="service-box" />
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-flex services-container d-lg-none">
        <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="default-header service-header">
              Our <strong>Services</strong>
            </h2>
          </div>
        </div>
            <div class="col-lg-12 services-div">
                <a href="<?php echo base_url('cleanings'); ?>"><img src="images/icons/cleanings.png" height="40px" />
                <span class="services-text">Cleanings</span>
                <svg
                width="2.5rem"
                height="2.5rem"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right service-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg></a>
            </div>
            <div class="col-lg-12 services-div">
                <a href="<?php echo base_url('sealants'); ?>"><img src="images/icons/sealants.png" height="40px" />
                <span class="services-text">Sealants</span>
                <svg
                width="2.5rem"
                height="2.5rem"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right service-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg></a>
            </div>
            <div class="col-lg-12 services-div">
                <a href="<?php echo base_url('fillings'); ?>"><img src="images/icons/fillings.png" height="40px" />
                <span class="services-text">Fillings</span>
                <svg
                width="2.5rem"
                height="2.5rem"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right service-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg></a>
            </div>
            <div class="col-lg-12 services-div">
                <a href="<?php echo base_url('dentures'); ?>"><img src="images/icons/dentures.png" height="40px" />
                <span class="services-text">Dentures</span>
                <svg
                width="2.5rem"
                height="2.5rem"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right service-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg></a>
            </div>
            <div class="col-lg-12 services-div">
                <a href="<?php echo base_url('crowns'); ?>"><img src="images/icons/crowns.png" height="40px" />
                <span class="services-text">Crowns</span>
                <svg
                width="2.5rem"
                height="2.5rem"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right service-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg></a>
            </div>
            <div class="col-lg-12 services-div">
                <a href="<?php echo base_url('bridges'); ?>"><img src="images/icons/bridges.png" height="40px" />
                <span class="services-text">Bridges</span>
                <svg
                width="2.5rem"
                height="2.5rem"
                viewBox="0 0 16 16"
                class="bi bi-chevron-right service-chevron-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                />
              </svg></a>
            </div>
        </div>
    </div>

    <div class="container-flex smile-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 smile-container-left">
            <h2 class="default-header smile-header">
              Smile <strong>Transformation</strong>
            </h2>
            <h3>NUMBER ONE - TEETH WHITENING</h3>
            <p>
              In-office teeth-whitening treatments and at-home whitening kits
              can remove all traces of discoloration
            </p>
            <h3>NUMBER TWO - TOOTH-COLORED FILLINGS</h3>
            <p>Tooth-colored fillings offer a seamless look and feel</p>
            <h3>NUMBER THREE - CUSTOMIZED DENTAL CLEANINGS</h3>
            <p>
              Instantly perfect the appearance of your smile with a customized
              dental cleaning to remove caked-on buildup
            </p>
            <a href="<?php echo base_url('testimonials'); ?>"><button class="button-reverse button-primary convenient-button">
              VIEW TESTIMONIALS
            </button></a>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-8">
            <img
              src="images/teeth-whitening-large-after.jpg"
              class="smile-img"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="container-flex">
      <div class="row">
        <div class="col-lg-6">
          <img src="images/john-martin-team.jpg" class="team-photo" />
          <img src="images/logo.svg" class="logo d-none d-lg-block" />
        </div>
        <div class="col-lg-6 meet-dentist">
          <h2 class="default-header">Meet the <strong>Dentist</strong></h2>
          <p>
            Dr. Martin is a native of the St. Louis area. As a child he attended
            Rossman School and St. Louis Country Day School. He attended
            Lutheran Medical School for Nursing and became an R.N. After that,
            he worked as an RN in the ER while attending the University of North
            Carolina-Wilmington, where he earned his Bachelor's Degree in Marine
            Biology in 1986. Dr. Martin attended the University of Kansas City,
            where he earned his D.D.S. degree in dentistry in 1990. He founded
            his practice in St. Louis shortly thereafter.
            <br /><br />
            Dr. Martin is currently the dentist on staff at Ranken Jordan
            Pediatric Hospital, providing free dental services for the children
            they serve. Dr. Martin and his wife, Martha, have a son, Alex. They
            also share their home with three cats; Max, Charlie and Lucy.
            <br /><br />
            Dr. Martin's hobbies include playing ice hockey, snow skiing,
            photography, SCUBA diving and boating.
          </p>
          <a href="<?php echo base_url('contact'); ?>"><button class="button-primary">MAKE AN APPOINTMENT</button></a>
        </div>
      </div>
    </div>

    <div class="container-flex clients-say">
      <h2 class="default-header form-header">What <strong>Clients Say</strong></h2>
      <p>
        I have been a patient of Dr. Martin since 2002 and they have always been
        great. I can't say anything bad about them.
      </p>
      <p>Timothy</p>
      <a href="<?php echo base_url('testimonials'); ?>"><button class="button-primary">VIEW ALL REVIEWS</button></a>
    </div>
    
    <?php $this->load->view('includes/footer_default_view'); ?>
