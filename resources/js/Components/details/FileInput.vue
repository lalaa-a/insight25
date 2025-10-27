<script setup lang="ts">
import { ref, defineProps, defineEmits } from "vue";
import InputError from "@/Components/InputError.vue";
import { InertiaForm } from "@inertiajs/vue3";
import ProgressBar from "primevue/progressbar";

defineProps<{
    form: InertiaForm<any>;
}>();

const emit = defineEmits(["file-error", "file-selected"]);

const fileInputRef = ref<HTMLInputElement | null>(null);

const clearFileInput = () => {
    if (fileInputRef.value) {
        fileInputRef.value.value = "";
    }
};

const handleFileInput = (event: Event) => {
    const target = event.target as HTMLInputElement;
    const file = target.files?.[0];
    if (file) {
        if (file.size > 4 * 1024 * 1024) {
            // 1MB in bytes
            emit("file-error", "File size should not exceed 4MB.");
            clearFileInput();
            return;
        }
        emit("file-selected", file);
        // props.form.cv = file;
        console.log(file);
    }
};
</script>

<template>
    <input
        ref="fileInputRef"
        type="file"
        name="file-input"
        @change="handleFileInput"
        accept=".pdf"
        class="block w-full overflow-hidden rounded-lg border border-gray-300 text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50"
    />

    <div class="mt-1" v-if="form.processing">
        <ProgressBar mode="indeterminate" style="height: 6px" />
    </div>
</template>
