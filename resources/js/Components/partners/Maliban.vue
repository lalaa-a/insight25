<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-red-600 bg-yellow-50 shadow-yellow-200">
        <div>
            <img
                src="/images/logos/maliban.png"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-yellow-600"
            >
                Refreshments Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-yellow-900">
                Maliban is excited to be the Refreshments Partner for Insight
                2024, supporting future leaders as they embark on their journey
                toward excellence. We’re proud to be part of this inspiring
                event and look forward to the positive impact it will have on
                all participants. Cheers to a successful Insight 2024!
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/maliban.mp4"
                poster="/images/posters/maliban.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
