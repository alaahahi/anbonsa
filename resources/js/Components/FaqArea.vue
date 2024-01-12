<script setup>
import {ref} from "vue";

function toggleAnswer(question) {
  question.isOpen = !question.isOpen;

}

// Example usage:
const questions = ref([{
  id: 1,
  isOpen: false,
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
},
{
  id: 4,
  isOpen: false,
  title:  'Lorem ipsum dolor sit amet.' ,
  body: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
}
]);
const questions1 = ref([{
  id: 1,
  isOpen: false,
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
},
{
  id: 4,
  isOpen: false,
  title:  'Lorem ipsum dolor sit amet.' ,
  body: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.' 
}
]);
</script>
<template>
	         <!-- Faq Area  -->
			 <div class="faq-area-bg pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>FAQ</span>
                    <h2>Frequently Asked Questions</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row align-items-center pt-45">
                    <div class="col-lg-6">
                        <div class="faq-accordion faq-accordion-width">
                            <ul class="accordion">
                                <li class="accordion-item"  v-for="question in questions" :key="question.id" @click="toggleAnswer(question)">
                                    <a class="accordion-title" :class="{ 'active': question.isOpen }">
                                        <i class='bx bx-chevron-down'></i>
                                            {{question.title}}
                                    </a>
    
                                    <div class="accordion-content"   :class="{ 'show': question.isOpen }">
                                        <p> 
                                            {{question.body}}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-accordion faq-accordion-width">
                            <ul class="accordion">
                                <li class="accordion-item"  v-for="question in questions1" :key="question.id" @click="toggleAnswer(question)">
                                    <a class="accordion-title" :class="{ 'active': question.isOpen }">
                                        <i class='bx bx-chevron-down'></i>
                                            {{question.title}}
                                    </a>
    
                                    <div class="accordion-content"   :class="{ 'show': question.isOpen }">
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
