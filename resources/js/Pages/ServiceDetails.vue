<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import MoreServices from '@/Components/MoreServices.vue';
import CounterArea from '@/Components/CounterArea.vue';
import TestimonialArea from '@/Components/TestimonialArea.vue';
import WebsiteRanking from '@/Components/WebsiteRanking.vue';


</script>
<template>
    <MainLayout>
  <!-- Inner Banner -->
  <div class="inner-banner inner-bg2 mb-5">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Service Details</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
  <!-- Inner Banner End -->

  <MoreServices />
  <CounterArea />
  <TestimonialArea />
  <WebsiteRanking />

  
  
  

  </MainLayout>
</template>
