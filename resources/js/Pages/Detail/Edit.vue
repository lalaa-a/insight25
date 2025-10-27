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
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, watch } from "vue";
import FileInput from "@/Components/details/FileInput.vue";
import Card from "primevue/card";

import Divider from "primevue/divider";
import CoordinatorSelect from "@/Components/details/CoordinatorSelect.vue";

const props = defineProps<{
    detail: {
        name: string;
        email: string;
        describes: string;
        institute: string;
        isAiesecer: boolean | null;
        expectations: string;
        interest: number;
        interestedField: string;
        jobPreference: string;
        whatsapp_number: string | null;
        cv: string | null;
        coordinator: string | null;
    };
    status: string | null;
}>();

const { detail } = props;

const showCvDownload = ref(!!detail.cv);

const form = useForm({
    name: detail.name || "",
    email: detail.email || "",
    password: "",
    password_confirmation: "",
    describes: detail.describes || "",
    institute: detail.institute || "",
    isAiesecer: !!detail.isAiesecer,
    expectations: detail.expectations || "",
    interest: detail.interest || 0,
    interestedField: detail.interestedField || "",
    jobPreference: detail.jobPreference || "",
    agreePrivacyPolicy: false,
    whatsapp_number: detail.whatsapp_number || null,
    coordinator: detail.coordinator || "",
    cv: null as File | null,
});

const submit = () => {
    form.post(route("details.update"), {
        onSuccess: () => {
            if (form.cv) {
                showCvDownload.value = true;
            }
            // showCvDownload.value = true;
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

watch(
    () => form.describes,
    (newDescribes) => {
        if (
            newDescribes === "school_student" ||
            newDescribes === "school-leaver"
        ) {
            form.isAiesecer = false;
        }
    },
);

function handleFileError(errorMessage: string) {
    form.errors.cv = errorMessage;
    form.cv = null;
}

const handleFileSelected = (file: File) => {
    form.cv = file;
    form.errors.cv = undefined;
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Details
            </h2>
        </template>

        <div class="px-1 py-2 lg:py-12">
            <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
                <div
                    v-if="status"
                    class="mb-4 text-sm font-medium text-green-600"
                >
                    {{ status }}
                </div>

                <a href="#whatsapp_link">
                    <Button
                        size="small"
                        class="w-full"
                        :pt="{
                            root: {
                                class: '!bg-green-600 !border-green-600 !hover:text-700 !hover:text-700',
                            },
                        }"
                    >
                        <i class="pi pi-whatsapp"></i>
                        Join Whatsapp Group Below
                    </Button>
                </a>

                <form @submit.prevent="submit">
                    <div class="mt-4">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >Whatsapp Number
                        </span>
                        <PhoneInput v-model="form.whatsapp_number" />
                        <InputError :message="form.errors.whatsapp_number" />
                    </div>

                    <div class="mt-4">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >What describes you best?
                        </span>
                        <DescribesSelect
                            :options="describesOptions"
                            v-model="form.describes"
                        />
                        <InputError :message="form.errors.describes" />
                    </div>

                    <div class="mt-4" v-if="form.describes">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >{{
                                `What is your ${getInstituteType(form.describes)}?`
                            }}
                        </span>
                        <InstituteInput
                            v-model="form.institute"
                            :placeholder="`What is your ${getInstituteType(form.describes)}?`"
                        />
                        <InputError :message="form.errors.institute" />
                    </div>

                    <div class="mt-4" v-if="getCanAiesecer(form.describes)">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >Are you an AIESECer?
                        </span>
                        <AiesecerSelect v-model="form.isAiesecer" />
                        <InputError :message="form.errors.isAiesecer" />
                    </div>

                    <div class="mt-4">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >What are your expectations?
                        </span>
                        <ExpectationsInput v-model="form.expectations" />
                        <InputError :message="form.errors.expectations" />
                    </div>

                    <div class="mt-4">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >What field are you interested in?
                        </span>
                        <InterestedFieldSelect
                            v-model="form.interestedField"
                            :options="fields"
                        />
                        <InputError :message="form.errors.interestedField" />
                    </div>

                    <div class="mt-4">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >What is your job preference?
                        </span>
                        <JobPreferenceInput v-model="form.jobPreference" />
                        <InputError :message="form.errors.jobPreference" />
                    </div>

                    <div class="mt-4">
                        <span class="mb-1 ml-2 text-sm text-gray-700"
                            >Who is your coordinator?
                        </span>
                        <CoordinatorSelect v-model="form.coordinator" />
                        <InputError :message="form.errors.jobPreference" />
                    </div>

                    <div class="mt-4 flex flex-col">
                        <label
                            for="file-input"
                            class="mb-1 ml-2 text-sm text-gray-700"
                            >Upload a CV</label
                        >
                        <FileInput
                            :form="form"
                            @fileError="handleFileError"
                            @fileSelected="handleFileSelected"
                        />
                        <InputError :message="form.errors.cv" />
                    </div>

                    <div v-if="showCvDownload" class="mt-4">
                        <a target="_blank" :href="route('cv.show')">
                            <Button size="small">Download Your CV</Button>
                        </a>
                    </div>

                    <div class="mt-4 px-2">
                        <InterestRating v-model="form.interest" />
                        <InputError :message="form.errors.interest" />
                    </div>

                    <!--            <div class="mt-4">-->
                    <!--                <InputLabel for="password" value="Password" />-->

                    <!--                <TextInput-->
                    <!--                    id="password"-->
                    <!--                    type="password"-->
                    <!--                    class="mt-1 block w-full"-->
                    <!--                    v-model="form.password"-->
                    <!--                    required-->
                    <!--                    autocomplete="new-password"-->
                    <!--                />-->

                    <!--                <InputError class="mt-2" :message="form.errors.password" />-->
                    <!--            </div>-->

                    <!--            <div class="mt-4">-->
                    <!--                <InputLabel for="password_confirmation" value="Confirm Password" />-->

                    <!--                <TextInput-->
                    <!--                    id="password_confirmation"-->
                    <!--                    type="password"-->
                    <!--                    class="mt-1 block w-full"-->
                    <!--                    v-model="form.password_confirmation"-->
                    <!--                    required-->
                    <!--                    autocomplete="new-password"-->
                    <!--                />-->

                    <!--                <InputError class="mt-2" :message="form.errors.password_confirmation" />-->
                    <!--            </div>-->

                    <div class="mt-4 flex justify-end">
                        <Button
                            type="submit"
                            class="ms-4"
                            :disabled="form.processing"
                        >
                            Update
                        </Button>
                    </div>
                </form>

                <div class="py-8">
                    <Divider />
                </div>

                <div class="flex flex-col items-center">
                    <img
                        class="h-48 w-48 rounded-xl shadow"
                        src="/images/whatsapp_qr.jpg"
                        alt=""
                    />

                    <div class="surface-section px-4 py-8 md:px-6 lg:px-8">
                        <div class="text-700 text-center">
                            <div class="mb-3 font-bold text-green-600">
                                <i class="pi pi-whatsapp"></i>&nbsp;POWERED BY
                                WHATSAPP
                            </div>
                            <div
                                class="text-900 mb-3 text-2xl font-bold lg:text-5xl"
                            >
                                Join Our Whatsapp Group
                            </div>
                            <div class="text-700 mb-5">
                                Join our whatsapp group to get the latest
                                updates
                            </div>
                            <a
                                href="https://chat.whatsapp.com/CdEEy55UYrG6tNKG4RtNXW"
                            >
                                <Button
                                    id="whatsapp_link"
                                    label="Join Now"
                                    icon="pi pi-whatsapp"
                                    class="p-button-raised p-button-rounded white-space-nowrap px-5 py-3 font-bold"
                                    :pt="{
                                        root: {
                                            class: '!bg-green-600 !border-green-600 !hover:text-700 !hover:text-700 !outline-green-600',
                                        },
                                    }"
                                ></Button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
