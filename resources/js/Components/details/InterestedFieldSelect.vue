<script setup lang="ts">
import { defineModel, defineProps } from "vue";
import Select from "primevue/select";

const props = defineProps({
    options: {
        type: Array,
        required: true,
    },
});

const modelValue = defineModel<string>("modelValue");
</script>

<template>
    <Select
        v-model="modelValue"
        :options="props.options"
        optionLabel="name"
        optionValue="value"
        placeholder="Interested field of study"
        class="w-full"
        :showClear="modelValue !== ''"
    />
</template>
