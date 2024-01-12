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
                <div class="brand-slider">
                <swiper
				ref="{swiperRef}"
				:modules="[Autoplay]"
				:navigation="false"
				:slides-per-view="5"
				:space-between="10"
				:speed="800"
				@swiper="setSwiperRef"
                :autoplay="{
				delay:2000,
				disableOnInteraction: false,
				}"
                >
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/1.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/2.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/3.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/4.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/5.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/5.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/5.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                    <swiper-slide class="swiper-slide brand-item">
                        <a href="#">
                            <img src="/assets/img/brand/5.png" alt="Brand Images">
                        </a>
                    </swiper-slide>
                </swiper>
            </div>
            </div>
        </div>
        <!-- Brand Area End -->
</template>