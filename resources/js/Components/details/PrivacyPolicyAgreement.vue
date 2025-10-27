<!-- PrivacyPolicyAgreement.vue -->
<script setup lang="ts">
import { defineModel } from "vue";
import RadioButton from "primevue/radiobutton";

const modelValue = defineModel<boolean>("modelValue");
</script>

<template>
    <span class="text-gray-700">
        I have read and agree to AIESEC Sri Lanka's
        <a
            href="https://aiesec.lk/privacy-policy"
            target="_blank"
            class="text-blue-500 underline"
        >
            Privacy Policy
        </a>
        and I may be contacted by AIESEC representatives for further processing.
    </span>
    <div class="mt-2 flex gap-4">
        <div class="flex items-center">
            <RadioButton
                v-model="modelValue"
                inputId="yes"
                name="privacyPolicy"
                :value="true"
            />
            <label for="yes" class="ml-2">Yes</label>
        </div>
        <div class="flex items-center">
            <RadioButton
                v-model="modelValue"
                inputId="no"
                name="privacyPolicy"
                :value="false"
            />
            <label for="no" class="ml-2">No</label>
        </div>
    </div>
</template>
