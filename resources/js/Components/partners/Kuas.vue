<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-green-600 bg-green-50 shadow-green-200">
        <div class="mx-auto mb-4 flex">
            <img
                src="/images/logos/kuas.svg"
                alt="Printed Media Partner Logo"
                class="h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-green-600"
            >
                Official Overseas Education Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-green-900">
                As the Official Overseas Education Partner, we are excited to
                introduce KUAS, where global talent is nurtured, and future
                leaders emerge. Whether in engineering, environmental sciences,
                or global business, our programs will support your ambitions.
                With courses in English, Japanese language training, and
                practical experience, you’ll be equipped to excel in today's
                fast-changing world.
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/kuas.mp4"
                poster="/images/posters/kuas.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
