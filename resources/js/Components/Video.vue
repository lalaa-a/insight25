<script setup lang="ts">
const props = withDefaults(
    defineProps<{
        src: string;
        poster?: string;
        rounded?: boolean;
        startTime?: number;
    }>(),
    {
        rounded: true,
        startTime: 0.1,
    },
);
</script>

<template>
    <div
        class="overflow-hidden shadow"
        :class="{ 'rounded-xl': props.rounded }"
    >
        <video
            preload="metadata"
            v-if="props.poster"
            controls
            loop
            class="object-fit"
            :src="props.src"
            :poster="props.poster"
        ></video>
        <video
            v-else
            controls
            loop
            class="object-fit"
            :src="`${props.src}#t=${props.startTime}`"
            preload="metadata"
        ></video>
    </div>
</template>
