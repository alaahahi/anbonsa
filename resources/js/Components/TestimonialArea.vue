
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
                 <!-- Client Area -->
        <div class="client-area ptb-100 pb-70">
            <div class="container-fluid p-0">
                <div class="section-title text-center">
                    <span>Testimonial</span>
                    <h2>Our Clients Feedback</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                    <swiper
                    class="client-slider  owl-theme pb-5 mx-5"
                    ref="{swiperRef}"
                    :modules="[Autoplay]"
                    :navigation="false"
                    :slides-per-view="3"
                    :space-between="30"
                    :speed="800"
                    @swiper="setSwiperRef"
                    :autoplay="{
                    delay:2000,
                    disableOnInteraction: false,
                    }"
                    >
                    <swiper-slide class="client-item">
                        <div class="client-item-img">
                            <img src="/assets/img/testimonial/t1.png" alt="Testimonial Images">
                        </div>
                        <h3>John Doe</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </swiper-slide>

                    <swiper-slide class="client-item">
                        <div class="client-item-img">
                            <img src="/assets/img/testimonial/t4.png" alt="Testimonial Images">
                        </div>
                        <h3>Knot Doe</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </swiper-slide>

                    <swiper-slide class="client-item">
                        <div class="client-item-img">
                            <img src="/assets/img/testimonial/t5.png" alt="Testimonial Images">
                        </div>
                        <h3>John Smith</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
                    </swiper-slide>
                    <swiper-slide class="client-item">
                        <div class="client-item-img">
                            <img src="/assets/img/testimonial/t3.png" alt="Testimonial Images">
                        </div>
                        <h3>Evanaa</h3>
                        <p>
                            Restaurants range from inexpensive and informal lunching or dining places 
                            catering to people working nearby, with modest food served in simple settings at low prices.
                        </p>
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
        <!-- Client Area End -->
</template>