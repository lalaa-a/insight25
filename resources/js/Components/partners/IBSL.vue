<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-yellow-600 bg-yellow-50">
        <div>
            <img
                src="/images/logos/ibsl.svg"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-sky-800"
            >
                Official Banking Expertise Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-blue-950">
                We are proud to sponsor INSIGHT 2024, dedicated to empowering
                young leaders and bridging the gap between academia and the
                corporate world. At the Institute of Bankers of Sri Lanka, we
                are committed to fostering excellence in education and
                professional development in the financial sector. INSIGHT 2024
                is a remarkable platform for undergraduates and school leavers
                to gain the skills, insights, and connections necessary to
                thrive in their careers. We look forward to supporting these
                talented individuals as they take steps toward a successful
                future.
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/tgvs.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
