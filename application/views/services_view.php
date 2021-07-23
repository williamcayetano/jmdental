	<?php $this->load->view('includes/header_default_view'); ?>
	
    <div class="container-flex">
        <div class="billboard">
          <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chevron-left chevron-left-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
        <h3>John Martin Dental & Associates</h3>
        <h2>GENERAL DENTISTRY SERVICES</h2>
      </div>
    </div>

    <div class="container convenient-container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="default-header">
            General <strong>Dentistry Services</strong>
          </h2>
          <p>
            At Martin Dental & Associates, our team provides general dentistry services to prevent dental problems and treat those that could arise without preventative care. Dr. Martin utilizes advanced dental equipment and techniques to provide the highest quality general dentistry services in St. Louis.
            <br /><br />
            For more information on the general dentistry services that Martin Dental & Associates offers, feel free to check out the links below or contact Martin Dental & Associates today.
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
              General Dentistry <strong>Services</strong>
            </h2>
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
              General Dentistry <strong>Services</strong>
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
    
    <?php $this->load->view('includes/footer_default_view'); ?>
