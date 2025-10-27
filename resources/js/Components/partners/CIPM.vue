<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-red-400 bg-red-50 shadow-red-200">
        <div>
            <img
                src="/images/logos/cipm.png"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-red-600"
            >
                Professional Education Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-red-900">
                CIPM is thrilled to partner with Insight 2024, empowering
                tomorrow's leaders as they pursue excellence in their fields.
                We're honored to be part of this inspiring event and are excited
                about the positive impact it will have on every participant's
                journey. Here's to a successful and impactful Insight 2024!
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/cipm.mp4"
                poster="/images/posters/cipm.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
