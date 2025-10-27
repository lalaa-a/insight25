<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-blue-950 bg-amber-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/first_step_learn.webp"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-amber-500"
            >
                Official Competency Development Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-950">
                As the Official Competency Development Partner of Insight 2024,
                we are thrilled to introduce First Step Learn—where skills meet
                opportunity, and future leaders rise. Our NCFE-accredited
                diplomas in Adult Care, Health & Social Care, Child Care,
                English, Management, and more seamlessly blend practical
                learning with career-ready expertise. Backed by global
                recognition and a focus on real-world training, we equip
                learners with the tools to thrive in a fast-evolving world.
                Together with Insight 2024, we are not just developing skills—we
                are shaping futures and unlocking limitless potential.
            </p>
        </div>
        <div>
            <img
                src="/images/ads/first_step_learn.jpeg"
                alt=""
                class="rounded-xl shadow"
            />
            <!--            <Video-->
            <!--                src="/videos/partners/ceylon_today.mp4"-->
            <!--                poster="/images/posters/ceylon.jpg"-->
            <!--            ></Video>-->
        </div>
    </PartnerCard>
</template>
