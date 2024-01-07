<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';

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
      <!-- Service Area -->
	  <section class="service-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our Service</span>
                    <h2>We Provide Fastest & Unique Business Growing Service</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/1.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>SEO Optimization</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/2.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Social Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/3.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Content Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/4.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Analytical Analysis</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/5.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>App Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.html">
                                <img src="assets/img/service-icon/6.png" alt="Images">
                            </a>
                            <a href="service-details.html">
                                <h3>Web Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area End -->
</template>
