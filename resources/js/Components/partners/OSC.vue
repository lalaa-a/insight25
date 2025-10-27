<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-indigo-200 bg-indigo-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/osc.webp"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2 class="text-2xl font-bold text-[#222D5E]">
                Gold Banner Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-900">
                As a Gold Banner Partner, the Overseas School of Colombo is
                honored to contribute to the event's success. We are dedicated
                to enriching the experience by showcasing excellence, fostering
                collaboration, and amplifying the event's reach through our
                strong commitment to education and global engagement.
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/osc.mp4"
                poster="/images/posters/osc.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
