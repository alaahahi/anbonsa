<script setup>
import {ref} from "vue";

function toggleAnswer(question) {
  question.isOpen = !question.isOpen;

}

// Example usage:
const questions = ref([{
  id: 1,
  isOpen: true,
  title:  'Lorem ipsum dolor sit amet.' ,
  body: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
},
{
  id: 2,
  isOpen: false,
  title:  'Lorem ipsum dolor sit amet.' ,
  body: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
},
{
  id: 3,
  isOpen: false,
  title:  'Lorem ipsum dolor sit amet.' ,
  body: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
}]);
</script>
<template>
 <!-- Faq Area -->
 <div class="faq-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-7">
                        <div class="faq-img">
                            <img src="/assets/img/faq/1.png" alt="fAQ Images">
                        </div>
                    </div>

                    <div class="col-lg-6 col-xxl-5">
                        <div class="faq-content">
                            <span>Why Choose Us</span>
                            <h2>We Are Top Ranked & Dedicated SEO Company</h2>
                            <p>
                                As opposed to using Content here, content here, 
                                making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem 
                                Ipsum as their default model text.
                            </p>
                        </div>

                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item"     v-for="question in questions" :key="question.id" @click="toggleAnswer(question)">
                                    <a class="accordion-title" :class="{ 'active': question.isOpen }">
                                        <i class='bx bx-chevron-down'></i>
                                       {{question.title}}
                                    </a>
    
                                    <div class="accordion-content"  :class="{ 'show': question.isOpen }">
                                        <p> 
                                            {{question.body}}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Area End -->
</template>