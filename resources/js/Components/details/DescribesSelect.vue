<!-- DescribesSelect.vue -->
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
        optionLabel="name"
        optionValue="value"
        :options="props.options"
        :showClear="modelValue !== ''"
        placeholder="What describes you the best?"
        class="w-full"
    />
</template>
