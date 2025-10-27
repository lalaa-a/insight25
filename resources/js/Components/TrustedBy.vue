<script setup lang="ts">
import { ref, computed } from "vue";
import { shuffle } from "@/helpers/utils";

// Array of logos
const logos = ref([
    {
        src: "/images/logos/quadrangle.webp",
        alt: "Quadrangle",
        class: "h-12",
    },
    {
        src: "/images/logos/cocacola.svg",
        alt: "Coca Cola",
        class: "h-12",
    },
    {
        src: "/images/logos/ceylon_today.svg",
        alt: "Ceylon Today",
        class: "h-12",
    },
    {
        src: "/images/logos/jaffna_media.jpeg",
        alt: "Jaffna Media",
        class: "h-12",
    },
    {
        src: "/images/logos/techno_media.png",
        alt: "Techno Media",
        class: "h-12",
    },
    {
        src: "/images/logos/sanasa_life.svg",
        alt: "Sanasa Life",
        class: "h-14",
    },
    {
        src: "/images/logos/cherries.jpg",
        alt: "Cherries",
        class: "h-12",
    },
    {
        src: "/images/logos/imh.webp",
        alt: "Institute of Mental Health",
        class: "h-10",
    },
    {
        src: "/images/logos/mm_group.png",
        alt: "MM Group",
        class: "h-14",
    },
    {
        src: "/images/logos/kuas.svg",
        alt: "KUAS",
        class: "h-12",
    },
    {
        src: "/images/logos/international_scholar.webp",
        alt: "International Scholar",
        class: "h-14",
    },
    {
        src: "/images/logos/tgvs.webp",
        alt: "TGVS",
        class: "h-12",
    },
    {
        src: "/images/logos/ibsl.svg",
        alt: "IBSL",
        class: "h-12",
    },
    {
        src: "/images/logos/first_step_learn.webp",
        alt: "First Step Learn",
        class: "h-14",
    },
    {
        src: "/images/logos/wba.webp",
        alt: "First Step Learn",
        class: "h-8",
    },
    {
        src: "/images/logos/osc.webp",
        alt: "First Step Learn",
        class: "h-14",
    },
    {
        src: "/images/logos/dw.jpeg",
        alt: "Danadie Walagampaya",
        class: "h-12 rounded-xl",
    },

    {
        src: "/images/logos/rot_ucsc.png",
        alt: "Rotaract UCSC",
        class: "h-9",
    },
    {
        src: "/images/logos/rot_mora.png",
        alt: "Rotaract Moratuwa",
        class: "h-9",
    },
    {
        src: "/images/logos/goodpr.webp",
        alt: "GoodPR",
        class: "h-12",
    },
    {
        src: "/images/logos/pickme.svg",
        alt: "PickMe",
        class: "h-6",
    },
    {
        src: "/images/logos/smart_edu.webp",
        alt: "SmartEDU",
        class: "h-12",
    },
    {
        src: "/images/logos/scs.jpeg",
        alt: "SCS",
        class: "h-12 rounded-md",
    },
    {
        src: "/images/logos/bgs.png",
        alt: "BGS",
        class: "h-12",
    },
    {
        src: "/images/logos/cipm.png",
        alt: "CIPM",
        class: "h-12",
    },
    {
        src: "/images/logos/maliban.png",
        alt: "Maliban",
        class: "h-16",
    },
]);

// Shuffle the logos
logos.value = shuffle(logos.value);
</script>

<template>
    <div class="my-16 flex justify-center">
        <div>
            <div class="text-center font-bold">Sponsored by</div>
            <div
                class="mt-2 flex max-w-4xl flex-wrap items-center justify-center gap-4"
            >
                <div v-for="(logo, index) in logos" :key="index">
                    <img :class="logo.class" :src="logo.src" :alt="logo.alt" />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
