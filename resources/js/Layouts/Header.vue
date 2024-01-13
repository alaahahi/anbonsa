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


onMounted(() => {
    loading.value=true;
    setTimeout(() => {
    // Code to be executed after the timeout
    loading.value=false;
  }, 1000);
});
const i18n = useI18n();
let language =ref(i18n.locale.value);

const switchLocale = async (locale) => {
    loading.value=true;

      try {
        localStorage.setItem('lang', locale);
        const response = await axios.get(`/lang/${locale}`);
		language.value = locale; 
		i18n.locale.value = locale;
		  window.location.reload();
  
      } catch (error) {
        console.error('An error occurred:', error);
      }
	};


</script>

<template>
       <div class="preloader" v-if="loading">
            <div class="preloader-wave"></div>
        </div>  
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav mean-container">
                <div class="mean-bar">
                    <a @click="openNav" class="meanmenu-reveal" :class="{'meanclose':openNav}" style="right: 0px; left: auto; text-align: center; text-indent: 0px; font-size: 18px;">
                        <span v-if="openNav"><span><span></span></span></span>
                        <b v-else @click="closeNav">x</b>
                    </a><nav class="mean-nav">
                            <ul class="navbar-nav m-auto"  v-if="navActive">
                                <li class="nav-item">
                                    <a href="/" class="nav-link ">
                                        Home 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/portfolio" class="nav-link">
                                        Portfolio 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/services" class="nav-link">
                                        Services 
                                        <i class="bx bxs-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu" v-if="navActive">
                                        <li class="nav-item">
                                            <a href="/service-details" class="nav-link">
                                                Service Details 
                                            </a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li class="nav-item">
                                    <a href="/faq" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/blog" class="nav-link">
                                        Blog 
                                        <i class="bx bxs-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu" v-if="navActive">
                                        <li class="nav-item">
                                            <a href="blog-details" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li class="nav-item mean-last">
                                    <a href="/contact" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="menu-btn">
                                <a href="#" class="seo-btn">SEO Score</a>
                            </div>
                        </nav></div>                
                <Link href="/" class="logo">
                    <img src="/assets/img/logo.png" class="logo-one" alt="Logo">
                </Link>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav " :class="{'top-nav':!route().current('/')}">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <Link class="navbar-brand" href="/">
                            <img src="/assets/img/logo.png" alt="Logo">
                        </Link>
                        <Link class="navbar-brand-sticky" href="/">
                            <img src="/assets/img/sticky-logo.png" alt="Logo">
                        </Link>

                        <div class=" navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <Link href="/" class="nav-link" :class="{'active':route().current('/')}">
                                        {{$t('home')}} 
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/about" class="nav-link" :class="{'active':route().current('about')}">
                                        About
                                        
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/portfolio" class="nav-link" :class="{'active':route().current('portfolio')}">
                                        Portfolio 
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/services" class="nav-link" :class="{'active':route().current('services')}">
                                        Services 
                                        <i class='bx bxs-chevron-right'></i>
                                    </Link>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link href="/service-details" class="nav-link" :class="{'active':route().current('service-details')}">
                                                Service Details 
                                            </Link>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <Link href="/faq" class="nav-link" :class="{'active':route().current('faq')}">
                                        FAQ
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/blog" class="nav-link"  :class="{'active':route().current('blog')}">
                                        Blog 
                                        <i class='bx bxs-chevron-right'></i>
                                    </Link>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link href="/blog-details/1" class="nav-link">
                                                Blog Details 
                                            </Link>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <Link href="/contact" class="nav-link"  :class="{'active':route().current('contact')}">
                                        Contact
                                    </Link>
                                </li>
                            </ul>

                            <div class="menu-btn">
                                <Link href="#" class="seo-btn mx-2">SEO Score</Link>
                                <button   @click="switchLocale('ar')" class="seo-btn" v-if="language=='en'" style="position: relative;top: -16px;">AR</button>
                                <button   @click="switchLocale('en')" class="seo-btn" v-if="language=='ar'" style="position: relative;top: -16px;">EN</button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->


		
</template>
