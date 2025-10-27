<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-yellow-600 bg-yellow-50">
        <div>
            <img
                src="/images/logos/tgvs.webp"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-sky-800"
            >
                Official Visa and Ticketing Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-950">
                The Global Visa Centre is proud to sponsor Insight 2024, helping
                to shape the next generation of leaders as they strive for
                excellence. We’re excited to be part of this transformative
                event and look forward to seeing the positive outcomes for all
                involved. Wishing everyone a successful and inspiring Insight
                2024!
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/tgvs.mp4"
                poster="/images/posters/tgvs.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
