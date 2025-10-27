<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-blue-200 bg-blue-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/ceylon_today.svg"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
            <img
                src="/images/logos/mawbima.svg"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-sky-600"
            >
                Official Printed Media Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-gray-700">
                As a Printed Media Partner, we take great pride in offering
                comprehensive coverage and unwavering support, amplifying the
                event's reach and impact through our innovative digital
                platforms
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/ceylon_today.mp4"
                poster="/images/posters/ceylon.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
