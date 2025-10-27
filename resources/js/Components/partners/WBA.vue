<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-gray-900 bg-blue-50 shadow-blue-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/wba.webp"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2 class="text-2xl font-bold text-sky-600">
                Official Education Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-gray-700">
                As the Official Education Partner, Wisdom Business Academy is
                proud to provide unparalleled support, empowering the event with
                our expertise in education. We are committed to enhancing the
                reach and impact of the event by fostering knowledge, inspiring
                growth, and delivering exceptional educational resources.
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/wba.mp4"
                poster="/images/posters/wba.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
