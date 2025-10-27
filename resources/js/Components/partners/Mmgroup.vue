<script setup lang="ts">
import Video from "@/Components/Video.vue";
import PartnerCard from "@/Components/partners/PartnerCard.vue";
</script>

<template>
    <PartnerCard class="border-green-900 bg-green-50">
        <div>
            <img
                src="/images/logos/mm_group.png"
                alt="Printed Media Partner Logo"
                class="object- mx-auto mb-4 h-24 w-auto"
            />
        </div>
        <div>
            <h2
                class="printed-media-partner-title text-2xl font-bold text-green-900"
            >
                Premium Refreshment Partner
            </h2>
        </div>
        <div>
            <p class="printed-media-partner-description my-4 text-green-950">
                MM Group, established in 2003, specializes in supplying
                high-quality vegetables, fruits, and other food items. Our
                expanding and diversified supply chain, built on trusted
                partnerships with local farmers and suppliers, ensures fresh,
                sustainable produce delivered daily to meet the evolving needs
                of our customers.
            </p>
        </div>
        <!--        <div>-->
        <!--            <Video src="/videos/partners/quadrangle.mp4"></Video>-->
        <!--        </div>-->
    </PartnerCard>
</template>
