<script setup lang="ts">
import { ref, onMounted, Ref, shallowRef } from "vue";
import Video from "@/Components/Video.vue";
import Layout from "@/Layouts/Layout.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Head, Link } from "@inertiajs/vue3";
import Timeline from "primevue/timeline";
import Card from "primevue/card";
import Button from "primevue/button";
import Keynote from "@/Components/timeline/Keynote.vue";
import OnlineSession from "@/Components/timeline/OnlineSession.vue";
import PanelDiscussion from "@/Components/timeline/PanelDiscussion.vue";
import InfluencerSession from "@/Components/timeline/InfluencerSession.vue";

const events = shallowRef([
    {
        status: "Online Session",
        // date: "28rd November 2025",
        icon: "pi pi-video",
        color: "#9C27B0",
        // image: "game-controller.jpg",
        description: OnlineSession,
    },
    {
        status: "Keynote speech",
        date: "On event day",
        icon: "pi pi-key",
        color: "#673AB7",
        description: Keynote,
    },
    {
        status: "Panel discussion",
        date: "On event day",
        icon: "pi pi-users",
        color: "#FF9800",
        description: PanelDiscussion,
    },
    {
        status: "Influencer session",
        date: "On event day",
        icon: "pi pi-youtube",
        color: "#607D8B",
        description: InfluencerSession,
    },
]);
</script>

<template>
    <Head title="Timeline" />
    <Layout>
        <div class="mt-6">
            <Timeline
                :value="events"
                align="left"
                class="customized-timeline"
                :pt="{
                    eventOpposite: {
                        class: 'hidden lg:flex',
                    },
                    event: {
                        class: 'lg:even:flex-row-reverse',
                    },
                    // eventContent: {
                    //     class: 'lg:!text-left',
                    // },
                }"
            >
                <template #marker="slotProps">
                    <span
                        class="z-10 flex h-8 w-8 items-center justify-center rounded-full text-white shadow-sm"
                        :style="{ backgroundColor: slotProps.item.color }"
                    >
                        <i :class="slotProps.item.icon"></i>
                    </span>
                </template>
                <template #content="slotProps">
                    <Card class="mt-4">
                        <template #title>
                            {{ slotProps.item.status }}
                        </template>
                        <template #subtitle>
                            {{ slotProps.item.date }}
                        </template>
                        <template #content>
                            <img
                                v-if="slotProps.item.image"
                                :src="`https://primefaces.org/cdn/primevue/images/product/${slotProps.item.image}`"
                                :alt="slotProps.item.name"
                                width="200"
                                class="shadow-sm"
                            />
                            <p>
                                <component :is="slotProps.item.description" />
                            </p>
                            <!--                            <Button label="Read more" text></Button>-->
                        </template>
                    </Card>
                </template>
            </Timeline>
        </div>
    </Layout>
</template>
