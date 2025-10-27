<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-stone-500 bg-stone-50">
        <div>
            <img
                src="/images/logos/dw.jpeg"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto rounded-xl"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-stone-800"
            >
                Social Media Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-stone-950">
                I'm thrilled to sponsor Insight 2024 and support the incredible
                journey of the next generation of leaders. Being part of this
                transformative event means a lot to me, and I'm excited to see
                the positive impact it will have on everyone involved. Here’s to
                an inspiring and successful Insight 2024—let's make it
                unforgettable!
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/quadrangle.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
