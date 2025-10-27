<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-blue-500 bg-blue-50 shadow-blue-50">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/international_scholar.webp"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-blue-500"
            >
                Official Bronze Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-900">
                Your experiences decide how successful you are, and as the
                Official Bronze Partner, we proudly support this event, which
                offers valuable experiences that shape future leaders. Together,
                we are fostering an environment where personal and professional
                growth can thrive, empowering individuals to reach new heights.
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/international_scholar.mp4"
                poster="/images/posters/is.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
