<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-orange-300 bg-orange-50">
        <div>
            <img
                src="/images/logos/sanasa_life.svg"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-orange-600"
            >
                Official Insurance Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-950">
                As the official insurance partner, Sanasa Life is honored to
                sponsor Insight 2024, empowering the next generation of leaders
                as they strive for excellence. We’re thrilled to contribute to
                this impactful event and are confident in the positive change it
                will bring to all participants. Here's to a successful and
                inspiring Insight 2024!
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/sanasa.mp4"
                poster="/images/posters/sanasa.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
