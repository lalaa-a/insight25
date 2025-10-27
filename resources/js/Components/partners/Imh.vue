<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-blue-900 bg-blue-50">
        <div>
            <img
                src="/images/logos/imh.webp"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-blue-900"
            >
                Official Psychology and Counseling Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-950">
                As the Official Psychology and Counseling Partner, the Institute
                of Mental Health is proud to support Insight 2024, fostering the
                mental well-being of the next generation of leaders. We are
                excited to contribute to this meaningful event and are confident
                that our collaboration will help create a positive and
                supportive environment for all participants. Here's to a
                successful and empowering Insight 2024!
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/quadrangle.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
