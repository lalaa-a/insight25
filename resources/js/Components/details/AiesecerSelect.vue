<script setup lang="ts">
import { defineModel } from "vue";
import Select from "primevue/select";

const modelValue = defineModel<boolean | null>("modelValue");
</script>

<template>
    <Select
        v-model="modelValue"
        :options="[
            { name: 'Yes', value: true },
            { name: 'No', value: false },
        ]"
        optionLabel="name"
        optionValue="value"
        placeholder="Are you an AIESECer?"
        class="w-full"
        :showClear="modelValue !== null"
    />
</template>
