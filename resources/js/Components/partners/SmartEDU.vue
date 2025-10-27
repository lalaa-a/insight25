<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-indigo-500 bg-indigo-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/smart_edu.webp"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-indigo-600"
            >
                Official Learning Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-indigo-900">
                SmartEDU is honored to serve as the Official Learning Partner of
                Insight 2024. As a champion of educational excellence, we are
                committed to nurturing tomorrow's leaders through this
                groundbreaking event. Our partnership reflects our dedication to
                fostering innovation and growth in the educational landscape.
                Together with Insight 2024, we aim to unlock new possibilities
                for learners and create lasting impact. We extend our best
                wishes to all participants as they embark on this journey of
                discovery and achievement.
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video-->
        <!--                src="/videos/partners/ceylon_today.mp4"-->
        <!--                poster="/images/posters/ceylon.jpg"-->
        <!--            ></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
