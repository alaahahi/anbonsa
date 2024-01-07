<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
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
       <!-- Brand Area -->
	   <div class="brand-area brand-bg ptb-100">
            <div class="container">
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/1.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/2.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/3.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/4.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/5.png" alt="Brand Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
</template>