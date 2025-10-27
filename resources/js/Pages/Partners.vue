<script setup lang="ts">
import Layout from "@/Layouts/Layout.vue";
import { Head } from "@inertiajs/vue3";
import { ref, shallowRef, computed } from "vue";
import CeylonToday from "@/Components/partners/CeylonToday.vue";
import Quadrangle from "@/Components/partners/Quadrangle.vue";
import JaffnaMedia from "@/Components/partners/JaffnaMedia.vue";
import CocaCola from "@/Components/partners/CocaCola.vue";
import TechnoMedia from "@/Components/partners/TechnoMedia.vue";
import SanasaLife from "@/Components/partners/SanasaLife.vue";
import Imh from "@/Components/partners/Imh.vue";
import Cherries from "@/Components/partners/Cherries.vue";
import { shuffle } from "@/helpers/utils";
import Mmgroup from "@/Components/partners/Mmgroup.vue";
import Kuas from "@/Components/partners/Kuas.vue";
import InternationalScholar from "@/Components/partners/InternationalScholar.vue";
import TGVS from "@/Components/partners/TGVS.vue";
import IBSL from "@/Components/partners/IBSL.vue";
import FirstStepLearn from "@/Components/partners/FirstStepLearn.vue";
import WBA from "@/Components/partners/WBA.vue";
import OSC from "@/Components/partners/OSC.vue";
import DW from "@/Components/partners/DW.vue";
import RotMora from "@/Components/partners/RotMora.vue";
import RotUCSC from "@/Components/partners/RotUCSC.vue";
import SmartEDU from "@/Components/partners/SmartEDU.vue";
import PickMe from "@/Components/partners/PickMe.vue";
import GoodPR from "@/Components/partners/GoodPR.vue";
import CIPM from "@/Components/partners/CIPM.vue";
import Maliban from "@/Components/partners/Maliban.vue";
import SCS from "@/Components/partners/SCS.vue";
import BGS from "@/Components/partners/BGS.vue";

// Array of components
const partners = shallowRef([
    InternationalScholar,
    SanasaLife,
    TGVS,
    Imh,
    Kuas,
    CocaCola,
    IBSL,
    FirstStepLearn,
    WBA,
    OSC,
    SmartEDU,
    PickMe,
    CIPM,
    Maliban,
    SCS,
    BGS,
]);

const shuffledPartners = shallowRef([
    CeylonToday,
    Quadrangle,
    JaffnaMedia,
    TechnoMedia,
    Cherries,
    Mmgroup,
    DW,
    RotMora,
    RotUCSC,
    GoodPR,
]);
shuffledPartners.value = shuffle(shuffledPartners.value);

const allPartners = shallowRef([...partners.value, ...shuffledPartners.value]);

const oddPartners = computed(() =>
    allPartners.value.filter((_, index) => index % 2 !== 0),
);
const evenPartners = computed(() =>
    allPartners.value.filter((_, index) => index % 2 === 0),
);
</script>

<template>
    <Head title="Partners" />
    <Layout>
        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
            <component
                class="block lg:hidden"
                :is="partner"
                v-for="(partner, index) in allPartners"
                :key="index"
            />

            <div class="hidden flex-col gap-2 lg:flex">
                <component
                    :is="partner"
                    v-for="(partner, index) in evenPartners"
                    :key="index"
                />
            </div>
            <div class="hidden flex-col gap-2 lg:flex">
                <component
                    :is="partner"
                    v-for="(partner, index) in oddPartners"
                    :key="index"
                />
            </div>
        </div>
    </Layout>
</template>
