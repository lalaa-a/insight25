<script setup lang="ts">
import Layout from "@/Layouts/Layout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import Galleria from "primevue/galleria";
import Video from "@/Components/Video.vue";
import Button from "primevue/button";
import Carousel from "primevue/carousel";

const props = defineProps<{
    fileCount: number;
}>();

console.log(props.fileCount);

const responsiveOptions = ref([
    {
        breakpoint: "1920px",
        numVisible: 7,
    },
    {
        breakpoint: "575px",
        numVisible: 3,
    },
]);

function getImages(parentSrc: string, numImages: number) {
    const images = [];
    for (let i = 1; i <= numImages; i++) {
        images.push({
            itemImageSrc: `${parentSrc}/img${i}.jpg`,
            thumbnailImageSrc: `${parentSrc}/thumbnails/img${i}.jpg`,
            alt: `Image ${i}`,
        });
    }
    return images;
}

const images = getImages("/images/last_year", props.fileCount);
</script>

<template>
    <Head title="Last Year" />

    <Layout>
        <Galleria
            :value="images"
            :responsiveOptions="responsiveOptions"
            :numVisible="5"
            :circular="false"
            :showItemNavigators="true"
            :show-thumbnails="true"
            :auto-play="true"
            :transitionInterval="4000"
            thumbnails-position="bottom"
            :pt="{
                thumbnailContent: {
                    class: '!p-0',
                },
            }"
        >
            <template #item="slotProps">
                <img
                    :src="slotProps.item.itemImageSrc"
                    :alt="slotProps.item.alt"
                    style="width: 100%; display: block"
                />
            </template>
            <template #thumbnail="slotProps">
                <img
                    :src="slotProps.item.thumbnailImageSrc"
                    :alt="slotProps.item.alt"
                    style="display: block"
                />
            </template>
        </Galleria>

        <div class="my-6 mt-12 lg:mt-24">
            <span class="mb-1 block text-3xl font-bold lg:text-6xl"
                >Summary of Insight 2023</span
            >
            <div class="mb-3 text-3xl font-bold text-primary lg:text-6xl">
                Watch the After Movie
            </div>
            <p class="">
                Insight 2023, a prestigious corporate day, was held on 22nd of
                November 2023, at the FGS Auditorium, University of Colombo,
                bringing together students, undergraduates, and corporate
                leaders to share knowledge, connect, and collaborate.
            </p>
            <!--            <a-->
            <!--                href="https://youtu.be/W9lfxhXwISQ?si=8X_AcWcPA5N5lmyJ"-->
            <!--                target="_blank"-->
            <!--            >-->
            <!--                <Button label="Watch on Youtube" class="mt-5" outlined />-->
            <!--            </a>-->
        </div>
        <Video
            src="/videos/2023_after_movie/video.mp4"
            poster="/videos/2023_after_movie/poster.jpg"
        />
    </Layout>
</template>

<style scoped>
.p-galleria-thumbnails-content {
    padding: 10px; /* Change this value to your desired padding */
}
</style>
