<script setup lang="ts">
import { defineModel } from "vue";
import InputText from "primevue/inputtext";

const modelValue = defineModel<string>("modelValue");
</script>

<template>
    <InputText
        class="w-full"
        v-model="modelValue"
        type="text"
        placeholder="What are your expectations from insight?"
    />
</template>
