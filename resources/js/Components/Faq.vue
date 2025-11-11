<script setup lang="ts">
import Accordion from "primevue/accordion";
import AccordionPanel from "primevue/accordionpanel";
import AccordionHeader from "primevue/accordionheader";
import AccordionContent from "primevue/accordioncontent";
import { ref } from "vue";

const faqs = ref([
    {
        title: "What is INSIGHT?",
        content:
            "INSIGHT is the largest corporate event organized by AIESEC in University of Colombo.Test test",
        value: "0",
    },
    {
        title: "When will INSIGHT take place?",
        content: "INSIGHT will take place in 28th November of 2025.",
        value: "1",
    },
    {
        title: "Who can participate in INSIGHT?",
        content:
            "Undergraduates, fresh graduates, school students and school leavers are welcome to participate.",
        value: "2",
    },
    {
        title: "How can I register for INSIGHT?",
        content: "You can register for INSIGHT through our official website.",
        value: "3",
    },
    {
        title: "What are the benefits of attending INSIGHT?",
        content:
            "Participants will gain valuable insights, network with industry professionals, and prepare for a successful career in the corporate world.",
        value: "4",
    },
    {
        title: "Where is Insight 2024 held?",
        content:
            "Insight 2024 will be held at the University of Colombo. Specific venue details will be provided closer to the event date.",
        value: "5",
    },
    {
        title: "Is there a fee to attend Insight 2024?",
        content: "No, attending Insight 2024 is completely free of charge.",
        value: "6",
    },
]);
</script>

<template>
    <h1 class="mb-4 mt-8 text-center text-2xl font-bold text-primary">
        Frequently Asked Questions
    </h1>
    <div class="rounded-lg bg-gray-100 shadow-md lg:px-4 lg:py-5">
        <Accordion value="0">
            <AccordionPanel
                v-for="tab in faqs"
                :key="tab.title"
                :value="tab.value"
            >
                <AccordionHeader>
                    {{ tab.title }}
                </AccordionHeader>
                <AccordionContent>
                    <p class="m-0">{{ tab.content }}</p>
                </AccordionContent>
            </AccordionPanel>
        </Accordion>
    </div>
</template>
