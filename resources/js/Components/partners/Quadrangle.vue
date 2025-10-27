<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard
        class="border-b-green-500 border-l-yellow-500 border-r-blue-500 border-t-red-500 bg-white"
    >
        <div>
            <img
                src="/images/logos/quadrangle.webp"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-sky-600"
            >
                Official Digital Media Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-gray-700">
                As a distinguished Digital Media Partner, we are honored to lend
                our expertise, offering comprehensive coverage and steadfast
                support. Our bespoke digital solutions are meticulously crafted
                to showcase every facet of this extraordinary event, ensuring
                its message resonates far and wide
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/quadrangle.mp4"
                poster="/images/posters/quad.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
