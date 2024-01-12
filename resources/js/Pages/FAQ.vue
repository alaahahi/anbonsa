<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import FaqArea from '@/Components/FaqArea.vue';
import ContactSection from '@/Components/ContactSection.vue';
import WebsiteRanking from '@/Components/WebsiteRanking.vue';



import {ref} from "vue";

function toggleAnswer(question) {
  question.isOpen = !question.isOpen;

}

// Example usage:
const questions = ref([{
  id: 1,
  isOpen: false,
  question:  'Lorem ipsum dolor sit amet.' ,
  answer: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
},
{
  id: 2,
  isOpen: false,
  question:  'Lorem ipsum dolor sit amet.' ,
  answer: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
},
{
  id: 3,
  isOpen: false,
  question:  'Lorem ipsum dolor sit amet.' ,
  answer: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
}]);
</script>
<template>
    <MainLayout>
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg4">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>FAQ</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- Inner Banner End -->
    <FaqArea />
    <ContactSection />
    <WebsiteRanking />
    </MainLayout>
</template>