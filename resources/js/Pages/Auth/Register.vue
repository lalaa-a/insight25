<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import PhoneInput from "@/Components/details/PhoneInput.vue";
import DescribesSelect from "@/Components/details/DescribesSelect.vue";
import InstituteInput from "@/Components/details/InstituteInput.vue";
import AiesecerSelect from "@/Components/details/AiesecerSelect.vue";
import ExpectationsInput from "@/Components/details/ExpectationsInput.vue";
import InterestedFieldSelect from "@/Components/details/InterestedFieldSelect.vue";
import JobPreferenceInput from "@/Components/details/JobPreferenceInput.vue";
import PrivacyPolicyAgreement from "@/Components/details/PrivacyPolicyAgreement.vue";
import InterestRating from "@/Components/details/InterestRating.vue";
import FileUpload, { FileUploadSelectEvent } from "primevue/fileupload";
import { ref, watch } from "vue";
import FileInput from "@/Components/details/FileInput.vue";
import CoordinatorSelect from "@/Components/details/CoordinatorSelect.vue";
import RadioButton from "primevue/radiobutton";

defineProps<{
    status?: string;
}>();

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    describes: "",
    institute: "",
    isAiesecer: null,
    expectations: "Not Specified",
    interest: 0,
    interestedField: "",
    jobPreference: "",
    agreePrivacyPolicy: false,
    whatsapp_number: null,
    coordinator: "",
    cv: null as File | null,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => {
            form.reset("password", "password_confirmation");
        },
        onError: () => {
            console.log(form.errors);
        },
    });
};

const describesOptions = [
    {
        name: "School student",
        value: "school_student",
        instituteType: "school",
        canBeAiesecer: false,
    },
    {
        name: "Undergraduate",
        value: "undergraduate",
        instituteType: "university",
        canBeAiesecer: true,
    },
    {
        name: "Fresh graduate",
        value: "fresh_graduate",
        instituteType: "university",
        canBeAiesecer: true,
    },
    {
        name: "School Leaver",
        value: "school-leaver",
        instituteType: "school",
        canBeAiesecer: false,
    },
];

function getInstituteType(describes: string) {
    return describesOptions.find((option) => option.value === describes)
        ?.instituteType;
}

function getCanAiesecer(describes: string) {
    return describesOptions.find((option) => option.value === describes)
        ?.canBeAiesecer;
}

// const fileInputRef = ref<HTMLInputElement | null>(null);
//
// const clearFileInput = () => {
//     if (fileInputRef.value) {
//         fileInputRef.value.value = "";
//     }
// };
//
// const handleFileInput = (event: Event) => {
//     const target = event.target as HTMLInputElement;
//     const file = target.files?.[0];
//     if (file) {
//         if (file.size > 1048576) {
//             // 1MB in bytes
//             form.errors.cv = "File size should not exceed 1MB.";
//             form.cv = null;
//             clearFileInput();
//             return;
//         }
//         form.cv = file;
//         console.log(file);
//     }
// };

const fields = [
    { name: "Finance", value: "finance" },
    { name: "Human resources", value: "hr" },
    { name: "Law", value: "law" },
    { name: "Technology", value: "tech" },
    { name: "Marketing", value: "marketing" },
    { name: "Engineering", value: "engineering" },
    { name: "Medicine", value: "medicine" },
    { name: "Science", value: "science" },
    { name: "Arts", value: "arts" },
    { name: "Other", value: "other" },
];

function handleFileError(errorMessage: string) {
    form.errors.cv = errorMessage;
    form.cv = null;
}

const handleFileSelected = (file: File) => {
    form.cv = file;
};

const coordinator = ref(false);

watch(coordinator, (newCoordinator, oldCoordinator) => {
    if (!newCoordinator) {
        form.coordinator = "";
    }
});

watch(
    () => form.describes,
    (newDescribes, oldDescribes) => {
        if (
            newDescribes == "school_student" ||
            newDescribes == "school-leaver"
        ) {
            form.isAiesecer = null;
        }
    },
);
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputText
                    v-model="form.name"
                    type="text"
                    class="w-full"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Name"
                />
                <InputError :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputText
                    v-model="form.email"
                    type="email"
                    class="w-full"
                    autocomplete="username"
                    required
                    placeholder="Email"
                />
                <InputError :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <PhoneInput v-model="form.whatsapp_number" />
                <InputError :message="form.errors.whatsapp_number" />
            </div>

            <div class="mt-4">
                <DescribesSelect
                    :options="describesOptions"
                    v-model="form.describes"
                />
                <InputError :message="form.errors.describes" />
            </div>

            <div class="mt-4" v-if="form.describes">
                <InstituteInput
                    v-model="form.institute"
                    :placeholder="`What is your ${getInstituteType(form.describes)}?`"
                />
                <InputError :message="form.errors.institute" />
            </div>

            <div class="mt-4" v-if="getCanAiesecer(form.describes)">
                <AiesecerSelect v-model="form.isAiesecer" />
                <InputError :message="form.errors.isAiesecer" />
            </div>

            <div class="mt-4 hidden">
                <ExpectationsInput v-model="form.expectations" />
                <InputError :message="form.errors.expectations" />
            </div>

            <div class="mt-4">
                <InterestedFieldSelect
                    v-model="form.interestedField"
                    :options="fields"
                />
                <InputError :message="form.errors.interestedField" />
            </div>

            <div class="mt-4">
                <JobPreferenceInput v-model="form.jobPreference" />
                <InputError :message="form.errors.jobPreference" />
            </div>

            <div class="mt-4">
                <div class="ml-3 text-gray-600">Do you have a coordinator?</div>
                <div class="ml-3 flex flex-wrap gap-4 text-sm">
                    <div class="flex items-center">
                        <RadioButton
                            v-model="coordinator"
                            inputId="ingredient1"
                            name="coordinator"
                            :value="true"
                        />
                        <label for="ingredient1" class="ml-2">Yes</label>
                    </div>
                    <div class="flex items-center">
                        <RadioButton
                            v-model="coordinator"
                            inputId="ingredient2"
                            name="coordinator"
                            :value="false"
                        />
                        <label for="ingredient2" class="ml-2">No</label>
                    </div>
                </div>
            </div>

            <div class="mt-4" v-if="coordinator">
                <CoordinatorSelect v-model="form.coordinator" />
                <InputError :message="form.errors.coordinator" />
            </div>

            <div class="mt-4 flex hidden flex-col">
                <label for="file-input" class="mb-1 ml-2 text-sm text-gray-700"
                    >Upload a CV <span class="text-xs">(optional)</span>
                </label>
                <FileInput
                    :form="form"
                    @fileError="handleFileError"
                    @fileSelected="handleFileSelected"
                />
                <InputError :message="form.errors.cv" />
            </div>

            <div class="mt-4 px-2">
                <InterestRating v-model="form.interest" />
                <InputError :message="form.errors.interest" />
            </div>

            <div class="mt-4 px-2">
                <PrivacyPolicyAgreement v-model="form.agreePrivacyPolicy" />
                <InputError :message="form.errors.agreePrivacyPolicy" />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <Link :href="route('login')">
                    <Button text> Already registered?</Button>
                </Link>

                <Button type="submit" class="ms-4" :disabled="form.processing">
                    Register
                </Button>
            </div>
        </form>
    </GuestLayout>
</template>
