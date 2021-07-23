<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>" />
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script type="text/javascript">
      window.addEventListener("scroll", function () {
        var elementTarget = document.getElementById("navbar-spy");
        if (
          window.scrollY >
          elementTarget.offsetTop + elementTarget.offsetHeight
        ) {
          if (elementTarget.classList) {
            elementTarget.classList.remove("bg-transparent");
            elementTarget.classList.remove("navbar-dark");
            w3.addStyle(".nav-link", "color", "black");
            w3.addStyle(".tooth-icon", "color", "black");
            elementTarget.classList.add("navbar-light");
            elementTarget.classList.add("bg-white");
          }
        } else {
          if (elementTarget.classList) {
            elementTarget.classList.remove("bg-white");
            elementTarget.classList.remove("navbar-light");
            w3.addStyle(".nav-link", "color", "white");
            w3.addStyle(".tooth-icon", "color", "white");
            elementTarget.classList.add("navbar-dark");
            elementTarget.classList.add("bg-transparent");
          }
        }
      });
    </script>
    <title>Home - Martin Dental & Associates</title>
    <link rel="icon" href="images/logo.png">
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg bg-transparent navbar-dark fixed-top"
      id="navbar-spy"
    >
      <div class="container">
        <a class="navbar-brand" href="#"
          ><span style="font-size: 2em; color: white">
            <i class="fas fa-tooth tooth-icon"></i> </span
        ></a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#mainNav"
        >
          <span class="navbar-toggler-icon justify-content-end"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
          <div class="navbar-nav">
            <a href="<?php echo base_url('/'); ?>" class="nav-item nav-link active">HOME</a>
            <a href="<?php echo base_url('team'); ?>" class="nav-item nav-link active">OUR TEAM</a>
            <a href="<?php echo base_url('services'); ?>" class="nav-item nav-link active">SERVICES</a>
            <a href="<?php echo base_url('faqs'); ?>" class="nav-item nav-link active">FAQS</a>
            <a href="<?php echo base_url('testimonials'); ?>" class="nav-item nav-link active">TESTIMONIALS</a>
            <a href="<?php echo base_url('contact'); ?>" class="nav-item nav-link active">CONTACT</a>
            <a href="<?php echo base_url('/'); ?>" class="nav-item nav-link active">|</a>
            <a href="#" class="nav-item nav-link nav-location active d-none d-lg-block">Maryland Heights, MO<span style="font-weight: 700; display: block"
                >(314) 739-1222</span></a>
            <a href="#" class="nav-item nav-link nav-location active d-none d-lg-block">Gerald, MO<span style="font-weight: 700; display: block"
                >(573) 764-2425</span></a>
          </div>
        </div>
      </div>
    </nav>
