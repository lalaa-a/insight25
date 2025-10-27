<!-- InstituteInput.vue -->
<script setup lang="ts">
import { defineModel, defineProps } from "vue";
import InputText from "primevue/inputtext";

const props = defineProps({
    placeholder: {
        type: String,
        required: true,
    },
});

const modelValue = defineModel<string>("modelValue");
</script>

<template>
    <InputText
        class="w-full"
        v-model="modelValue"
        type="text"
        :placeholder="props.placeholder"
    />
</template>
