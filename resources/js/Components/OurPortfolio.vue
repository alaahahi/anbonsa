
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';
import { Autoplay } from "swiper/modules";

import "swiper/css";
let swiperRef = null;

const setSwiperRef = (swiper) => {
swiperRef = swiper;
};
const slideNext = () => {
swiperRef.slideNext();
};

const slidePrev = () => {
swiperRef.slidePrev();
};


</script>
<template>
         <!-- Portfolio Area -->
		 <section class="portfolio-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our Portfolio</span>
                    <h2>We Have Done Business with Thousand of Comapnies</h2>
                    <p>
                        It is a long established fact that a reader will be distracted 
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="pt-45">
                <swiper
                    class="portfolio-slider "
                    ref="{swiperRef}"
                    :modules="[Autoplay]"
                    :navigation="false"
                    :slides-per-view="3"
                    :space-between="10"
                    :speed="800"
                    @swiper="setSwiperRef"
                    :autoplay="{
                    delay:2000,
                    disableOnInteraction: false,
                    }"
                    >
                    <swiper-slide class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.html">
                                <img src="/assets/img/portfolio/1.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Marketing</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.html"><h3>Social Marketing</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.html">
                                <img src="/assets/img/portfolio/2.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Research</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.html"><h3>Data Analysis</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.html">
                                <img src="/assets/img/portfolio/3.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Optimizing</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.html"><h3>SEO Optimization</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.html">
                                <img src="/assets/img/portfolio/5.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Development</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.html"><h3>App Development</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </swiper-slide>
                    <div class="owl-nav cont">
                        <button type="button" role="presentation" class="owl-prev mx-2" @click="slidePrev">
                            <i class="bx bx-left-arrow-alt"></i>
                        </button>
                        <button type="button" role="presentation" class="owl-next mx-2" @click="slideNext">
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>                
                </swiper>
                </div>
            </div>
        </section>
        <!-- Portfolio Area End -->
</template>
<style>
.swiper-wrapper {
z-index: 0 !important;
}
</style>
