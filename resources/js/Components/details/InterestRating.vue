<!-- InterestRating.vue -->
<script setup lang="ts">
import { defineModel } from "vue";
import Rating from "primevue/rating";

const modelValue = defineModel<number>("modelValue");
</script>

<template>
    <span class="mb-2 text-gray-700">Rate your interest in Insight 2024</span>
    <Rating v-model="modelValue" />
</template>
