<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-rose-500 bg-rose-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/goodpr.webp"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-rose-600"
            >
                Official Networking Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-rose-900">
                As the Official Digital Media Partner of Insight 2024, GoodPR is
                delighted to showcase and amplify the voices of tomorrow's
                leaders throughout this premier event. We are committed to
                delivering compelling digital coverage that captures the spirit
                and impact of this transformative gathering. Through our
                expertise in digital storytelling, we look forward to sharing
                the inspiring moments and achievements of Insight 2024 across
                all platforms.
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video-->
        <!--                src="/videos/partners/pickme.mp4"-->
        <!--                poster="/images/posters/pickme.jpg"-->
        <!--            ></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
