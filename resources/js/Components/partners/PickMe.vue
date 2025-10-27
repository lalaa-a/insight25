<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-yellow-500 bg-yellow-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/pickme.svg"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-yellow-600"
            >
                Official Mobility Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-yellow-900">
                As the Official Mobility Partner of Insight 2024, PickMe is
                proud to drive innovation and connectivity throughout this
                landmark event. Our journey from a pioneering Sri Lankan startup
                to the country's leading mobility solutions provider aligns
                perfectly with Insight 2024's mission. We're excited to support
                the next generation of leaders while enhancing the event
                experience through our seamless transportation technology.
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/pickme.mp4"
                poster="/images/posters/pickme.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
