<script setup>
import { ref, onUnmounted } from 'vue';
import { useI18n } from "vue-i18n";
import { Link } from '@inertiajs/inertia-vue3';

import axios from 'axios';
import {  onMounted, onBeforeUnmount } from "vue";

const navActive = ref(false);

const openNav = () => {
  navActive.value = true;
};

const closeNav = () => {
  navActive.value = false;
};
const loading = ref(true);

const handlePageChange = (event) => {
  loading.value=false
  loading.value = event.detail.component === 'loading';
};

document.addEventListener('inertia:visit', handlePageChange);

onUnmounted(() => {
  loading.value=false
  document.removeEventListener('inertia:visit', handlePageChange);
});

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
		 <!-- <div class="preloader" v-if="loading">
            <div class="preloader-wave"></div>
        </div> -->
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <Link href="/" class="logo">
                    <img src="assets/img/logo.png" class="logo-one" alt="Logo">
                    <img src="assets/img/sticky-logo.png" class="logo-two" alt="Logo">
                </Link>
            </div>

            <!-- Menu For Desktop Device  collapse -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <Link href="/" class="navbar-brand" >
                            <img src="assets/img/logo.png" alt="Logo">
                        </link>
                        <Link href="/" class="navbar-brand-sticky" >
                            <img src="assets/img/sticky-logo.png" alt="Logo">
                        </Link>

                        <div class=" navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <Link href="/" class="nav-link active">
                                        Home 
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="about" class="nav-link">
                                        About
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link  href="#" class="nav-link">
                                        Pages 
                                        <i class='bx bxs-chevron-right'></i>
                                    </Link>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link  href="members" class="nav-link">
                                                Members
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="portfolio" class="nav-link">
                                                Portfolio
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="pricing" class="nav-link">
                                                Pricing
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="404" class="nav-link">
                                                404 Page
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="faq" class="nav-link">
                                                FAQ
                                            </Link>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <Link  href="sign-in" class="nav-link">
                                                Sign In
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="sign-up" class="nav-link">
                                                Sign Up
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="recover-password" class="nav-link">Recover Password</Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="terms-condition" class="nav-link">
                                                Terms & Conditions
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="privacy-policy" class="nav-link">
                                                Privacy Policy
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="#" class="nav-link">
                                                Level 1
                                                <i class="bx bx-chevron-right"></i>
                                            </Link>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <Link  href="#" class="nav-link">Level 2</Link>
                                                </li>
                                                <li class="nav-item">
                                                    <Link  href="#" class="nav-link">Level 2</Link>
                                                </li>
                                                <li class="nav-item">
                                                    <Link  href="#" class="nav-link">
                                                        Level 2
                                                        <i class="bx bx-chevron-right"></i>
                                                    </Link>
                                                    <ul class="dropdown-menu">
                                                        <li class="nav-item">
                                                            <Link  href="#" class="nav-link">Level 3</Link>
                                                        </li>
                                                        <li class="nav-item">
                                                            <Link  href="#" class="nav-link">Level 3</Link>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <Link  href="#" class="nav-link">
                                        Services 
                                        <i class='bx bxs-chevron-right'></i>
                                    </Link>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link  href="services" class="nav-link">
                                                Services 
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="service-details" class="nav-link">
                                                Service Details 
                                            </Link>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <Link  href="testimonial" class="nav-link">
                                        Testimonial
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link  href="#" class="nav-link">
                                        Blog 
                                        <i class='bx bxs-chevron-right'></i>
                                    </Link>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link  href="blog" class="nav-link">
                                                Blog
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link  href="blog-details" class="nav-link">
                                                Blog Details 
                                            </Link>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <Link  href="contact" class="nav-link">
                                        Contact
                                    </Link>
                                </li>
                            </ul>

                            <div class="menu-btn">
                                <Link  href="#" class="seo-btn">SEO Score</Link>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

		
</template>
