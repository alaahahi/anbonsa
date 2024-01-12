<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import DropMessage from '@/Components/DropMessage.vue';
import ContactArea from '@/Components/ContactArea.vue';
import Mapsec from '@/Components/Mapsec.vue';


import WebsiteRanking from '@/Components/WebsiteRanking.vue';

</script>
<template>
    <MainLayout>

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
        <ContactArea />
        <DropMessage />
        <Mapsec />
        <WebsiteRanking />
    </MainLayout>
</template>