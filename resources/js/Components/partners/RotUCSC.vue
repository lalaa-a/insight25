<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-stone-900 bg-stone-50">
        <div>
            <img
                src="/images/logos/rot_ucsc.png"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto rounded-xl"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-stone-800"
            >
                Networking Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-stone-950">
                Rotaract at the University of Colombo School of Computing is
                excited to sponsor Insight 2024! We're proud to support this
                transformative event, dedicated to empowering the next
                generation of innovators and leaders. Insight 2024 promises to
                be an inspiring experience, and we can’t wait to see the
                positive impact it will have on all participants. Here’s to a
                successful and memorable event for everyone involved!
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/quadrangle.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
