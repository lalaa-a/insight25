<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
import Button from "primevue/button";
</script>

<template>
    <PartnerCard class="border-green-950 bg-green-50 shadow-red-200">
        <div>
            <img
                src="/images/logos/scs.jpeg"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto rounded-xl"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-green-800"
            >
                Education Consulting Partner
            </h2>
        </div>
        <div class="my-3">
            <a
                href="https://www.facebook.com/share/v/dffw6m25Mr7KTUnX/"
                target="_blank"
                class="transition-all duration-300 hover:text-green-800"
            >
                <div class="hidden sm:block">
                    <i class="pi pi-facebook" style="font-size: 1.5rem"></i>
                </div>
                <div class="block sm:hidden">
                    <i class="pi pi-facebook" style="font-size: 1.2rem"></i>
                </div>
            </a>
        </div>
        <div>
            <p class="printed-media-partner-description mb-4 text-green-900">
                Sage Consulting Services is thrilled to be the Education
                Consulting Partner for Insight 2024, empowering future leaders
                on their path to excellence. We’re proud to be part of this
                inspiring event and look forward to the positive impact it will
                have on all participants. Here’s to a successful Insight 2024!
            </p>
        </div>
        <div>
            <Video
                src="/videos/partners/scs.mp4"
                poster="/images/posters/scs.jpg"
            ></Video>
        </div>
    </PartnerCard>
</template>
