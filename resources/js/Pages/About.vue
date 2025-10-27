<script setup lang="ts">
import { ref, onMounted, Ref } from "vue";
import Video from "@/Components/Video.vue";
import Layout from "@/Layouts/Layout.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Head, Link } from "@inertiajs/vue3";

const benefits = ref([
    {
        icon: "pi pi-briefcase",
        title: "Practical exposure",
        description: "Practical exposure to the corporate sector.",
    },
    {
        icon: "pi pi-star",
        title: "Interact with companies",
        description: "Ability to interact with companies and speakers.",
    },
    {
        icon: "pi pi-lightbulb",
        title: "Insightful sessions",
        description: "Ability to learn from insightful sessions.",
    },
    {
        icon: "pi pi-user",
        title: "Career stalls",
        description:
            "Gain the chance to experience career stalls and walk in consultations.",
    },
    {
        icon: "pi pi-users",
        title: "Networking",
        description: "Connect with peers from across the country.",
    },
    {
        icon: "pi pi-id-card",
        title: "Resume building",
        description: "Build relationships with potential employers.",
    },
]);
</script>

<template>
    <Head title="About" />
    <Layout>
        <div id="about" class="flex flex-col items-center px-3 py-5">
            <div class="mb-5">
                <ApplicationLogo class="h-16 w-auto" />
            </div>
            <p class="mx-auto max-w-3xl text-center">
                INSIGHT is the premier corporate event organized by AIESEC in
                University of Colombo for the 8th consecutive year. Our mission
                is to equip undergraduates, fresh graduates and school leavers
                with a comprehensive understanding of the corporate sector as
                they prepare to enter the professional world.
            </p>
        </div>

        <div class="mb-6">
            <Video
                src="/videos/what_is_insight.mp4"
                poster="/images/whatis_insight_poster.jpg"
            />
        </div>

        <div class="bg-gray-50 px-4 py-8 text-center lg:px-8">
            <div class="mb-3 font-bold">
                <span class="text-3xl text-gray-900">One Event, </span>
                <span class="text-3xl text-primary-600">Many Benefits</span>
            </div>
            <div class="mb-6 text-gray-700">
                Delegates would gain a number of benefits from joining INSIGHT
                2024,
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div
                    v-for="(benefit, index) in benefits"
                    :key="index"
                    class="col-span-1 mb-4 px-5"
                >
                    <div
                        class="mb-3 inline-block rounded-lg bg-white px-5 py-4 shadow-md"
                    >
                        <div class="hidden lg:block">
                            <i
                                :class="benefit.icon + ' text-primary-500'"
                                style="font-size: 3rem"
                            ></i>
                        </div>
                        <div class="block lg:hidden">
                            <i
                                :class="benefit.icon + ' text-primary-500'"
                                style="font-size: 2rem"
                            ></i>
                        </div>
                    </div>
                    <div class="mb-3 text-xl font-medium text-gray-900">
                        {{ benefit.title }}
                    </div>
                    <span class="text-gray-700">{{ benefit.description }}</span>
                </div>
            </div>
        </div>
    </Layout>
</template>
