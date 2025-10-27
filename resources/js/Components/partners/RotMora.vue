<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-pink-500 bg-pink-50">
        <div>
            <img
                src="/images/logos/rot_mora.png"
                alt="Rotaract Moratuwa Logo"
                class="object- mx-auto mb-4 h-24 w-auto rounded-xl"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-pink-800"
            >
                Networking Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-pink-950">
                Rotaract at the University of Moratuwa is thrilled to sponsor
                Insight 2024 at the University of Colombo! We're proud to
                support this impactful event, empowering the next generation of
                leaders and visionaries. Insight 2024 is set to be a truly
                inspiring experience, and we’re excited to witness the positive
                changes it will bring. Here’s to a successful and unforgettable
                event for everyone involved!
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/quadrangle.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
