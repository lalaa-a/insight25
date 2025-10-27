<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-red-400 bg-red-50 shadow-red-200">
        <div>
            <img
                src="/images/logos/cocacola.svg"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-red-600"
            >
                Official Beverages Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-red-900">
                Coca-Cola is excited to sponsor Insight 2024, supporting future
                leaders in their journey toward excellence. We're proud to be
                part of this inspiring event and look forward to the positive
                impact it will have on all participants. Cheers to a successful
                Insight 2024!
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/coca_cola.mp4"
                poster="/images/posters/cc.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
