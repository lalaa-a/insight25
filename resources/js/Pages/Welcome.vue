<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import Button from "primevue/button";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Galleria from "primevue/galleria";
import { ref, onMounted, onUnmounted } from "vue";
import Menubar from "primevue/menubar";
import Countdown from "@/Components/Countdown.vue";
import Video from "@/Components/Video.vue";
import TrustedBy from "@/Components/TrustedBy.vue";
import Layout from "@/Layouts/Layout.vue";
import Faq from "@/Components/Faq.vue";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
    phpVersion: string;
}>();

const videoSrc = ref("/videos/reveal_light.mp4");

function updateVideoSrc() {
    if (window.innerWidth >= 1024) {
        videoSrc.value = "/videos/reveal_light.mp4";
    } else {
        videoSrc.value = "/videos/reveal_light_480.mp4";
    }
}

onMounted(() => {
    updateVideoSrc();
    window.addEventListener("resize", updateVideoSrc);
});

onUnmounted(() => {
    window.removeEventListener("resize", updateVideoSrc);
});
</script>

<template>
    <Head title="Welcome" />
    <Layout>

        <div class="text-center text-2xl lg:text-5xl">
            <div class="my-5 flex justify-center">
                <ApplicationLogo class="h-16 w-auto" />
            </div>
            <span class="mb-10"> Insight25 We Are Live Now</span> <br>
            <!--            <span>opening </span>-->
            <a href="https://click.aiesec.lk/cc/insight-25-registrations" class="register-link text-primary mt-10">Register Here</a>
        </div>
        
        <div
            class="mt-2 text-center text-xs leading-tight lg:mx-24 lg:mt-4 lg:text-base"
        >
            Insight 2025 is the largest corporate day organized by AIESEC in
            University of Colombo for the ninth consecutive year. It aims to
            help undergraduates and school leavers step into the world of
            corporate excellence and unrivaled networking.
        </div>

        <div
            class="my-2 flex items-center justify-center gap-2 sm:my-2 sm:gap-4"
        >
            <a
                href="https://web.facebook.com/events/1594313497782217"
                target="_blank"
                class="transition-all duration-300 hover:text-primary-500"
            >
                <div class="hidden sm:block">
                    <i class="pi pi-facebook" style="font-size: 1.5rem"></i>
                </div>
                <div class="block sm:hidden">
                    <i class="pi pi-facebook" style="font-size: 1.2rem"></i>
                </div>
            </a>
            <a
                href="https://tiktok.com/@insight.oc"
                target="_blank"
                class="transition-all duration-300 hover:text-primary-500"
            >
                <div class="hidden sm:block">
                    <i class="pi pi-tiktok" style="font-size: 1.5rem"></i>
                </div>
                <div class="block sm:hidden">
                    <i class="pi pi-tiktok" style="font-size: 1.2rem"></i>
                </div>
            </a>
        </div>

        <div class="mb-2 sm:mb-4">
            <Countdown />
        </div>
        <Video
            :rounded="false"
            :src="videoSrc"
            poster="/images/reveal_light_poster.jpg"
        />

        <TrustedBy />

        <Faq />
    </Layout>
</template>

<style scoped>

.register-link {
    position: relative;
    text-decoration: none;
}

.register-link::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 0;
    height: 3px;
    background-color: currentColor;
    transition: width 0.3s ease;
}

.register-link:hover::after {
    width: 100%;
}
</style>
