<script setup>
import PortfolioArea from '@/Components/PortfolioArea.vue';
import WebsiteRanking from '@/Components/WebsiteRanking.vue';
import MainLayout from '@/Layouts/MainLayout.vue';

</script>
<template>
    <MainLayout>
          <!-- Inner Banner -->
          <div class="inner-banner inner-bg7">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Portfolio</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <PortfolioArea />
        <WebsiteRanking />
    </MainLayout>
</template>