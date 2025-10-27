<script setup lang="ts">
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
import TrustedBy from "@/Components/TrustedBy.vue";
import Menubar from "primevue/menubar";
import Button from "primevue/button";
import Video from "@/Components/Video.vue";
import Countdown from "@/Components/Countdown.vue";
import { ref } from "vue";

const items = ref([
    {
        label: "Home",
        icon: "pi pi-home",
        route: "/",
    },
    {
        label: "Feed",
        icon: "pi pi-rss",
        route: "/feed",
    },
    {
        label: "About",
        icon: "pi pi-star",
        route: "/about",
    },
    {
        label: "Timeline",
        icon: "pi pi-calendar",
        route: "/timeline",
    },
    {
        label: "Last Year",
        icon: "pi pi-calendar",
        route: "/last-year",
    },
    {
        label: "Partners",
        icon: "pi pi-users",
        route: "/partners",
    },
]);
</script>

<template>
    <div class="bg-gray-50 text-gray-700 dark:bg-black dark:text-white/50">
        <div
            class="relative min-h-screen selection:bg-primary-500 selection:text-white"
        >
            <div class="relative mx-auto max-w-6xl px-4">
                <header class="mt-4">
                    <Menubar :model="items">
                        <template #start>
                            <div class="hidden lg:block">
                                <ApplicationLogo class="mr-6 h-8 w-auto" />
                            </div>
                        </template>
                        <template #item="{ item, props, hasSubmenu }">
                            <Link v-if="item.route" :href="item.route">
                                <Button
                                    text
                                    :severity="
                                        $page.url === item.route
                                            ? ''
                                            : 'secondary'
                                    "
                                    >{{ item.label }}
                                </Button>
                            </Link>
                        </template>
                        <!--                        <template #end>-->
                        <!--                            &lt;!&ndash;                            <ApplicationLogo class="h-7 w-auto" />&ndash;&gt;-->

                        <!--                            <div class="-col-end-1 flex flex-1 justify-end">-->
                        <!--                                <Link-->
                        <!--                                    v-if="$page.props.auth.user"-->
                        <!--                                    :href="route('dashboard')"-->
                        <!--                                >-->
                        <!--                                    <Button>Dashboard</Button>-->
                        <!--                                </Link>-->

                        <!--                                <div v-else class="flex gap-2">-->
                        <!--                                    <Link :href="route('login')">-->
                        <!--                                        <Button-->
                        <!--                                            size="small"-->
                        <!--                                            severity="secondary"-->
                        <!--                                            >Log in-->
                        <!--                                        </Button>-->
                        <!--                                    </Link>-->

                        <!--                                    <Link :href="route('register')">-->
                        <!--                                        <Button size="small">Register</Button>-->
                        <!--                                    </Link>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </template>-->
                    </Menubar>
                </header>

                <main class="mt-2">
                    <slot />
                </main>

                <footer class="py-16 text-sm text-black dark:text-white/70">
                    <!--                    Insight 2024-->
                </footer>
            </div>
        </div>
    </div>
</template>
