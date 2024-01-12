<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
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
    <Header ></Header>
        <slot ></slot>
    <FooterHome v-if="isHome"></FooterHome>
    <Footer v-else></Footer>

</template>
