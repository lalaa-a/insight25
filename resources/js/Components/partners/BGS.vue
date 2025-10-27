<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-red-600 bg-red-50 shadow-red-200">
        <div>
            <img
                src="/images/logos/bgs.png"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-blue-900"
            >
                Printed Media Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-red-900">
                BGS is honored to be the Printed Media Partner for Insight 2024,
                championing future leaders as they strive for excellence. We’re
                proud to support this inspiring event and look forward to the
                positive impact it will bring to all participants. Here’s to a
                successful Insight 2024!
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video-->
        <!--                src="/videos/partners/cipm.mp4"-->
        <!--                poster="/images/posters/cipm.jpg"-->
        <!--            ></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
