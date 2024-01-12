<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import HeaderHome from "@/Layouts/HeaderHome.vue";
import FooterHome from "@/Layouts/FooterHome.vue";
import Header from "@/Layouts/Header.vue";
import Footer from "@/Layouts/Footer.vue";

defineProps({
    isHome: {
        type: Boolean,
        default: false,
    },})


</script>

<template>
    <HeaderHome v-if="isHome"></HeaderHome>
    <Header v-else></Header>
        <slot ></slot>
    <FooterHome v-if="isHome"></FooterHome>
    <Footer v-else></Footer>

</template>
