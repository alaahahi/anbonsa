

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
            <!-- Testimonial Area -->
            <div class="testimonial-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <span>Testimonial</span>
                    <h2>Our Clients Feedback</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-6">
                        <div class="testimonial-slider owl-theme">
                            <div class="testimonial-icon">
                                <i class='bx bxs-quote-alt-right'></i>
                            </div>
                                <swiper
                                ref="{swiperRef}"
                                :centeredSlides="true"
                                :centeredSlidesBounds="true"
                                :modules="[Autoplay]"
                                :navigation="false"
                                :slides-per-view="1"
                                :space-between="10"
                                :speed="800"
                                @swiper="setSwiperRef"
                                :autoplay="{
                                delay:2000,
                                disableOnInteraction: false,
                                }"
                                >
                                <swiper-slide   class="testimonial-item">
                                    <div class="testimonial-item-img">
                                        <img src="/assets/img/testimonial/t1.png" alt="Testimonial Images">
                                    </div>
                                    <h3>John Doe</h3>
                                    <p>
                                        Restaurants range from inexpensive and informal lunching or dining places 
                                        catering to people working nearby, with modest food served in simple settings at low prices.
                                     </p>
                                </swiper-slide>

                                <swiper-slide class="testimonial-item">
                                    <div class="testimonial-item-img">
                                        <img src="/assets/img/testimonial/t2.png" alt="Testimonial Images">
                                    </div>
                                    <h3>Knot Doe</h3>
                                    <p>
                                        Restaurants range from inexpensive and informal lunching or dining places 
                                        catering to people working nearby, with modest food served in simple settings at low prices.
                                     </p>
                                </swiper-slide>

                                <swiper-slide class="testimonial-item">
                                    <div class="testimonial-item-img">
                                        <img src="/assets/img/testimonial/t3.png" alt="Testimonial Images">
                                    </div>
                                    <h3>Evanaa</h3>
                                    <p>
                                        Restaurants range from inexpensive and informal lunching or dining places 
                                        catering to people working nearby, with modest food served in simple settings at low prices.
                                     </p>
                                </swiper-slide>
                            </swiper>
                            <div class="owl-nav cont">
                                <button type="button" role="presentation" class="owl-prev mx-2" @click="slidePrev">
                                    <i class="bx bx-left-arrow-alt"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next mx-2" @click="slideNext">
                                    <i class="bx bx-right-arrow-alt"></i>
                                </button>
                            </div>  
                        </div>
                    </div>

                    <div class="col-lg-5 col-xxl-6">
                        <div class="testimonial-img">
                            <img src="/assets/img/testimonial/1.png" alt="Testimonial Images">
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-left">
                <img src="/assets/img/testimonial/shape-left.png" alt="Images">
            </div>
            <div class="shape-right">
                <img src="/assets/img/testimonial/shape-right.png" alt="Images">
            </div>
        </div>
        <!-- Testimonial Area End -->
</template>