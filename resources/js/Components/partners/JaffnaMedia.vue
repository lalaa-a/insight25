<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-sky-400 bg-sky-50 shadow-sky-200">
        <div>
            <img
                src="/images/logos/jaffna_media.jpeg"
                alt="Printed Media Partner Logo"
                class="mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-sky-600"
            >
                Official Telecommunication Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-gray-700">
                We are proud to be a Telecommunication Partner, providing
                extensive coverage and support to ensure seamless connectivity
                and communication for our valued customers. Our commitment to
                excellence drives us to deliver innovative solutions and
                unparalleled service in the telecommunications industry.
            </p>
        </div>
        <div>
            <Video
                poster="/images/posters/jaffna_media_poster.jpg"
                src="/videos/partners/jaffna_media.mp4"
            ></Video>
        </div>
    </PartnerCard>
</template>
