<script setup lang="ts">
import { ref, onMounted, onUnmounted } from "vue";

type TimeLeftKeys = "days" | "hours" | "minutes" | "seconds";

interface TimeLeftInterface extends Record<TimeLeftKeys, number> {}

const startTime = new Date("2025-11-28T09:00:00");
const endTime = new Date("2025-11-28T14:00:00");

const beautifulStartTime = new Date(startTime).toLocaleString("en-US", {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
    hour: "numeric",
});
const beautifulEndTime = new Date(endTime).toLocaleString("en-US", {
    hour: "numeric",
});

function calculateTimeLeft(): TimeLeftInterface {
    const difference = +startTime - +new Date();
    let timeLeft = {
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0,
    };

    if (true) {
        timeLeft = {
            days: Math.floor(difference / (1000 * 60 * 60 * 24)),
            hours: Math.floor((difference / (1000 * 60 * 60)) % 24),
            minutes: Math.floor((difference / 1000 / 60) % 60),
            seconds: Math.floor((difference / 1000) % 60),
        };
    }

    return timeLeft;
}

const timeLeft = ref<TimeLeftInterface>(calculateTimeLeft());

onMounted(() => {
    const timerId = setInterval(() => {
        timeLeft.value = calculateTimeLeft();
    }, 1000);

    onUnmounted(() => {
        clearInterval(timerId);
    });
});
</script>

<template>
    <div class="rounded-xl border bg-white shadow-sm">
        <div class="border-b text-center text-sm text-primary lg:text-xl">
            {{ beautifulStartTime }} to {{ beautifulEndTime }}
        </div>
        <div class="flex items-center justify-center gap-0.5 py-2 lg:gap-4">
            <div
                v-for="interval in Object.keys(timeLeft) as TimeLeftKeys[]"
                :key="interval"
                class="text-4xl font-bold lg:text-6xl"
            >
                {{ timeLeft[interval].toString().padStart(2, "0") }}
                <span class="-ml-2 text-xs lg:-ml-4 lg:text-base">
                    {{ interval }}
                </span>
            </div>
        </div>
    </div>
</template>
