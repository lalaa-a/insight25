<script setup lang="ts">
defineProps<{
    message?: string;
}>();
</script>

<template>
    <div v-show="message">
        <small class="text-red-600 dark:text-red-400">
            {{ message }}
        </small>
    </div>
</template>
