<script setup lang="ts">
import Button from "primevue/button";
import Dialog from "primevue/dialog";
import { ref } from "vue";

const visible = ref(false);

const handleClickOutside = () => {
    if (visible.value) {
        visible.value = false;
    }
};
</script>

<template>
    The online session will be conducted by a professional focusing on AI
    (Artificial Intelligence) and its prominence in the corporate world.

    <div>
        <Button
            v-click-outside="handleClickOutside"
            class="mt-2 flex items-center space-x-4 lg:mt-4"
            @click="visible = true"
            severity="secondary"
        >
            <img
                class="pos h-16 w-16 rounded-lg object-cover object-[100%_10%]"
                src="/images/people/tm.jpg"
                alt="Treasurex Melchoir"
            />
            <div class="flex-1 text-left">
                <h2 class="text-sm font-semibold text-gray-800 lg:text-xl">
                    Treasurex Melchoir
                </h2>
                <p class="text-xs text-gray-600 lg:text-sm">
                    Online Session Speaker
                </p>
            </div>
        </Button>
        <Dialog
            v-model:visible="visible"
            modal
            header="Treasurex Melchoir"
            :style="{ width: '50vw' }"
            :breakpoints="{ '1199px': '75vw', '575px': '90vw' }"
        >
            <div>
                <a
                    href="https://lk.linkedin.com/in/treasurex-melchior-9586479"
                    target="_blank"
                >
                    <Button
                        class="mb-4"
                        severity="secondary"
                        icon="pi pi-linkedin"
                        href="https://lk.linkedin.com/in/treasurex-melchior-9586479"
                    />
                </a>

                <img
                    class="object-fit h-48 rounded-lg lg:float-right lg:h-96"
                    src="/images/people/tm.jpg"
                    alt="Treasurex Melchoir"
                />
                <p class="mt-2 text-gray-600">
                    An expert in the field of AI (Artificial Intelligence) with
                    over 25 years of experience in managerial and general
                    management roles within local and multinational
                    organizations.
                </p>
                <p class="mt-2 text-gray-600">
                    He is the Managing Director / Business Consultant &
                    Corporate Trainer at the T K Corporate Training Private Ltd.
                    He is an AI Integration Coach, AI Agents Developer, and AI
                    Augmented Process Optimization Resultant, facilitating
                    faster, smarter, and better results.
                </p>
                <p class="mt-2 text-gray-600">
                    He did his MBA at the University of Wales, is a chartered
                    member - CIPM, and has a Six Sigma Black Belt. He offers
                    strategic insights and tailored training solutions that
                    foster operational excellence and organizational growth.
                </p>
                <p class="mt-2 text-gray-600">
                    He believes in the power of education, training, and
                    storytelling and follows a blended approach in wisdom,
                    creativity, empathy, and innovation, inspiring growth and
                    transformation across business and education.
                </p>
                <p class="mt-2 text-gray-600">
                    He is an expert in Corporate Training & Teaching, Business
                    Process Reengineering, and has experience as a general
                    manager at Courtaulds (Mar 2007 - Aug 2010), as a Resultant
                    – Business Process improvement at Brandix, and more.
                </p>
                <p class="mt-2 text-gray-600">
                    At Insight 2024, he will be conducting an online session
                    delivering insights on the AI skills one should pursue in
                    the corporate world, the prominence/position of AI in the
                    corporate world, and AI integration and literacy in careers.
                    Join the online session with Treasurex Melchior and step
                    into the new corporate world.
                </p>
            </div>
        </Dialog>
    </div>
</template>
