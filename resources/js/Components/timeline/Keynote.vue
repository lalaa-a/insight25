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
                src="/images/people/ff.jpg"
                alt="Fahad Farook"
            />
            <div class="flex-1 text-left">
                <h2 class="text-sm font-semibold text-gray-800 lg:text-xl">
                    Fahad Farook
                </h2>
                <p class="text-xs text-gray-600 lg:text-sm">Keynote Speaker</p>
            </div>
        </Button>
        <Dialog
            v-model:visible="visible"
            modal
            header="Fahad Farook"
            :style="{ width: '50vw' }"
            :breakpoints="{ '1199px': '75vw', '575px': '90vw' }"
        >
            <div>
                <a href="https://www.linkedin.com/in/ffarook/" target="_blank">
                    <Button
                        class="mb-4"
                        severity="secondary"
                        icon="pi pi-linkedin"
                        href="https://lk.linkedin.com/in/treasurex-melchior-9586479"
                    />
                </a>

                <img
                    class="object-fit h-48 rounded-lg lg:float-right lg:h-96"
                    src="/images/people/ff.jpg"
                    alt="Treasurex Melchoir"
                />
                <p class="mt-2 text-gray-600">
                    Fahad Farook is a transformative coach, corporate trainer,
                    event host and public speaking expert with over a decade of
                    experience who has accumulated a set of skills that are an
                    interesting mix of insights you won't always find in a
                    formal knowledge sharing forum.
                </p>
                <p class="mt-2 text-gray-600">
                    His purpose is to change the perspective of every single
                    person he interacts with, in order to help them see
                    alternative aspects to themselves or the world. Thus, he
                    strives to constantly combine wisdom with energy.
                </p>
                <p class="mt-2 text-gray-600">
                    At Insight, he will be our keynote speaker who will be
                    sharing his ideas on how to start your corporate journey
                    from scratch where you will be able to get invaluable
                    insights on how to become a professional in the corporate
                    field.
                </p>
            </div>
        </Dialog>
    </div>
</template>
