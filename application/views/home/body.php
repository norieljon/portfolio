<?php $this->load->view('utilities/navbar') ?>

<div class="row d-flex flex-wrap justify-content-center align-content-center ml-0 mr-0 p-0 h-100" id="home">
    <div class="container pt-5 mt-5 row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            <img src="<?= base_url() ?>public/img/picture-1.jpg" alt="logo" class="rounded-circle home-picture">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 p-3 mt-md-3 mt-sm-3">
            <h1 class="font-weight-bold text-dark-blue">Hi, I'm Noriel Jon.</h1>
            <p class="font-weight-light text">A passionate web developer who is continuously expanding his knowledge in web development.</p>
        </div>
    </div>
</div>

<div class="row d-flex flex-wrap justify-content-center align-content-center ml-0 mr-0 p-0 h-100 mt-5" id="about">
    <div class="container pt-5 mt-5 mb-5">
        <div class="row">
            <h1 class="font-weight-bold col-12 text-dark-blue">Who is Noriel Jon</h1>
            <div class="col-12 d-flex">
                <p class="font-weight-light text text-justify">My name is Noriel Jon. I am a web developer.<br>I studied and attained my Bachelor's degree in Computer Science at Saint Louis University in Baguio city. I am a developer during the day, and during my vacant time, I love to learn new stuff, play, record and create vexel art.</p>
            </div>
        </div>

        <div class="container mt-4 mb-5 row d-flex justify-content-center">
            <img src="<?= base_url() ?>public/img/picture-2.1.jpg" class="about-picture" id="about-picture">
            <img src="<?= base_url() ?>public/img/picture-2.2.jpg" class="about-picture" id="about-picture" style="display: none;">
        </div>
    </div>
</div>

<div class="row d-flex flex-wrap justify-content-center align-content-center ml-0 mr-0 p-0 h-75 mt-5" id="contact">
    <div class="container pt-5 mt-5 mb-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-wrap justify-content-center align-content-center mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                <div>
                    <button type="button" class="btn resume-button"><a href="https://drive.google.com/file/d/10OHAXj5xv-VbY3yMNCmThhSpK-CmKYbg/view?usp=sharing" target="_blank">Resume</a></button>
                </div>                
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 p-3 mt-md-3 mt-sm-3">
                <h1 class="font-weight-bold text-dark-blue">Contact</h1>
                <ul class="list-unstyled contact">
                    <li class="mt-2 mb-2"><i class="fa fa-envelope fa-2x pr-3 text-dark-blue" aria-hidden="true"></i> <a href="mailto:norieljon.navarro.1998@gmail.com">norieljon.navarro.1998@gmail.com</a></li>                   
                   <li class="mt-2 mb-2"><i class="fa fa-linkedin-square fa-2x pr-3 text-dark-blue" aria-hidden="true"></i> <a href="https://www.linkedin.com/in/navarronorieljon" target="_blank">ON LINKEDIN</a></li>
                   <li class="mt-2 mb-2"><i class="fa fa-facebook-official fa-2x pr-3 text-dark-blue" aria-hidden="true"></i><a href="https://www.facebook.com/Navarro.NorielJonP" target="_blank">ON FACEBOOK</a></li>
                </ul>            
            </div>
        </div>
    </div>
</div>

<div class="w-100 pt-4 pb-4" style="background-color:#001b48;color:#FFFFFF">
    <div class="d-flex justify-content-center">
    <span class="align-middle">© 2021 Noriel Jon. All rights reserved.</span>
    </div>    
</div>


<button id="back-to-top" class="hidden"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button>