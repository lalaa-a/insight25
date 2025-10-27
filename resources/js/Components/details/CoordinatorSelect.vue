<!-- DescribesSelect.vue -->
<script setup lang="ts">
import { defineModel, defineProps } from "vue";
import Select from "primevue/select";

const names = [
    { name: "Dulana", value: "dulana" },
    { name: "Fazaal", value: "fazaal" },
    { name: "Nandun", value: "nandun" },
    { name: "Himan", value: "himan" },
    { name: "Dahami", value: "dahami" },
    { name: "Anuradha", value: "anuradha" },
    { name: "Dhanushika", value: "dhanushika" },
    { name: "Aazil", value: "aazil" },
    { name: "Rashmi", value: "rashmi" },
    { name: "Zahra", value: "zahra" },
    { name: "Fathima", value: "fathima" },
    { name: "Thavishi", value: "thavishi" },
    { name: "Thinushca", value: "thinushca" },
    { name: "Thanuri", value: "thanuri" },
    { name: "Kithuni", value: "kithuni" },
    { name: "Sithum", value: "sithum" },
    { name: "Isiwara", value: "isiwara" },
    { name: "Thiviyan", value: "thiviyan" },
    { name: "Sachini", value: "sachini" },
    { name: "Dinushi", value: "dinushi" },
    { name: "Rislin", value: "rislin" },
    { name: "Tharushi", value: "tharushi" },
    { name: "Ferozi Mohamed", value: "ferozi_mohamed" },
    { name: "Krishan Basnayaka", value: "krishan_basnayaka" },
    { name: "Ruwanthika Sandali", value: "ruwanthika_sandali" },
    { name: "Kenuka Karunakaran", value: "kenuka_karunakaran" },
    { name: "Surendhar", value: "surendhar" },
];

const modelValue = defineModel<string>("modelValue");
</script>

<template>
    <Select
        v-model="modelValue"
        optionLabel="name"
        optionValue="value"
        :options="names"
        :showClear="modelValue !== ''"
        placeholder="Who is your coordinator?"
        class="w-full"
    />
</template>
