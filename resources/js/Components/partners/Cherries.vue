<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-red-600 bg-red-50">
        <div>
            <img
                src="/images/logos/cherries.jpg"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-red-600"
            >
                Official Catering Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-red-950">
                As the Official Catering Partner, Cherries is delighted to
                support Insight 2024 by providing exceptional culinary
                experiences. We are excited to be part of this remarkable event
                and look forward to serving all participants with the finest
                flavors and quality. Here’s to a successful and flavorful
                Insight 2024!
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/quadrangle.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
