<script setup lang="ts">
import { defineModel } from "vue";
import InputMask from "primevue/inputmask";

const modelValue = defineModel<string | null>("modelValue");
</script>

<template>
    <InputMask
        v-model="modelValue"
        mask="(999) 999-9999"
        placeholder="Whatsapp number"
        fluid
    />
</template>
