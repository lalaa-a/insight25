<script setup lang="ts">
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
import Button from "primevue/button";

function goBack() {
    window.history.back();
}
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 selection:bg-primary-500 selection:text-white sm:justify-center sm:pt-0 dark:bg-gray-900"
    >
        <div class="flex flex-col content-center items-center">
            <Link href="/">
                <ApplicationLogo class="h-16 fill-current text-gray-500" />
            </Link>
            <Button @click="goBack" label="Go back" link />
        </div>

        <div
            class="mt-2 w-full overflow-hidden bg-white px-2 pb-4 pt-8 shadow-md sm:max-w-md sm:rounded-lg lg:px-6 dark:bg-gray-800"
        >
            <slot />
        </div>
    </div>
</template>
