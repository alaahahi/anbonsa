<script setup>
import {ref, onMounted} from "vue";
import "intersection-observer"; // for cross-browser support
import MainLayout from '@/Layouts/MainLayout.vue';
import MainBanner from '@/Components/MainBanner.vue';
import BannerSlider from '@/Components/BannerSlider.vue';
import AboutArea from '@/Components/AboutArea.vue';
import PricingTable from '@/Components/PricingTable.vue';
import ExpertMembers from '@/Components/ExpertMembers.vue';
import CounterArea from '@/Components/CounterArea.vue';
import TestimonialArea from '@/Components/TestimonialAreaHome.vue';
import HomeLatestPost from '@/Components/HomeLatestPost.vue';


import OurPortfolio from '@/Components/OurPortfolio.vue';
import OurService from '@/Components/OurService.vue';

import WebsiteRanking from '@/Components/WebsiteRanking.vue';
import WhyChooseUs from '@/Components/WhyChooseUs.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Vue3AutoCounter from 'vue3-autocounter';

import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import { useForm } from '@inertiajs/vue3'

const openForm = ref(0);

// Toggle the value of openForm
const toggleOpenForm = () => {
  openForm.value = openForm.value === 1 ? 0 : 1;
}

defineProps({
    meta: String,
    slider: Object,
    contact_us: Object,
    abouts: Object,
    services: Object,
    clients: Object,
    types_members: Object,
    members: Object,
    types_project: Object,
    projects: Object,
    questions: Object,
    projects_count: Object,
    clients_count: Object,
    locale: {
        type: String,
    },
})

const modules = [Autoplay];

// Import Swiper styles
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

const showContent = ref(true);

// const questions = ref([
//   {
//     id: 1,
//     text: "Question 1",
//     answer: "It is a long established fact that a reader will be distracted...",
//     isOpen: false,
//   },
//   {
//     id: 2,
//     text: "Question 2",
//     answer: "It is a long established fact that a reader will be distracted...",
//     isOpen: false,
//   },
//   // Add more questions and answers
// ]);

const toggleAnswer = (question) => {
  question.isOpen = !question.isOpen;
};



const form = useForm({
  from: '',
  email: '',
  phone: '',
  message: '',
})

function submit() {
  openForm.value =0
  form.post('/message')

}


</script>



<template>
  <MainLayout :isHome="true">
    <MainBanner />
    <BannerSlider />
    <AboutArea />
    <OurService />
    <WhyChooseUs />
    <OurPortfolio />
    <WebsiteRanking />
    <PricingTable />
    <ExpertMembers />
    <CounterArea />
    <TestimonialArea />
    <HomeLatestPost />

  </MainLayout>
</template>