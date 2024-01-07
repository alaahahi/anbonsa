<script setup>
import { ref } from "vue";
import { useI18n } from "vue-i18n";
import { Link } from '@inertiajs/inertia-vue3';
import ResponsiveNav from '@/Components/ResponsiveNav.vue';
import DarkModeToggle from '@/Components/DarkToggle.vue';
import axios from 'axios';
import {  onMounted, onBeforeUnmount } from "vue";

const navActive = ref(false);

const openNav = () => {
  navActive.value = true;
};

const closeNav = () => {
  navActive.value = false;
};



const i18n = useI18n();
let language =ref(i18n.locale.value);


const switchLocale = async (locale) => {
      try {
        const response = await axios.get(`/lang/${locale}`);
		language.value = locale; 
		i18n.locale.value = locale;
          localStorage.setItem('lang', locale);
		  window.location.reload();
  
      } catch (error) {
        console.error('An error occurred:', error);
      }
	};


</script>

<template>
         <!-- Start Preloader -->
		 <div class="preloader">
            <div class="preloader-wave"></div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" class="logo-one" alt="Logo">
                    <img src="assets/img/sticky-logo.png" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <a class="navbar-brand-sticky" href="index.html">
                            <img src="assets/img/sticky-logo.png" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home 
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">
                                                Home One 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-two.html" class="nav-link">
                                                Home Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-three.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages 
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="members.html" class="nav-link">
                                                Members
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="portfolio.html" class="nav-link">
                                                Portfolio
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">
                                                Pricing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">
                                                404 Page
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a href="sign-in.html" class="nav-link">
                                                Sign In
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-up.html" class="nav-link">
                                                Sign Up
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="recover-password.html" class="nav-link">Recover Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-condition.html" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Level 1
                                                <i class="bx bx-chevron-right"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Level 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Level 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        Level 2
                                                        <i class="bx bx-chevron-right"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">Level 3</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">Level 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services 
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">
                                                Services 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link">
                                                Service Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonial.html" class="nav-link">
                                        Testimonial
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog 
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="menu-btn">
                                <a href="#" class="seo-btn">SEO Score</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

		
</template>
