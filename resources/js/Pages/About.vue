<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import AboutArea from '@/Components/AboutArea.vue';
import PricingTable from '@/Components/PricingTable.vue';
import CounterArea from '@/Components/CounterArea.vue';
import TestimonialArea from '@/Components/TestimonialAreaHome.vue';
import WebsiteRanking from '@/Components/WebsiteRanking.vue';


</script>
<template>
	<MainLayout>
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>About Us</h3>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->


  <AboutArea />
  <PricingTable />
  <CounterArea />
  <TestimonialArea />
  <WebsiteRanking />
	</MainLayout>
</template>