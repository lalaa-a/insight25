<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import { defineProps, ref } from "vue";
import Chart from "primevue/chart";

import Tabs from "primevue/tabs";
import TabList from "primevue/tablist";
import Tab from "primevue/tab";
import TabPanels from "primevue/tabpanels";
import TabPanel from "primevue/tabpanel";
import Button from "primevue/button";

const props = defineProps<{
    users: {
        name: string;
        detail: {
            coordinator: string;
        };
    }[];
}>();

const columns = ref([
    { field: "name", header: "Name" },
    { field: "detail.coordinator", header: "Coordinator" },
]);

const coordinatorCounts = props.users.reduce<any>((acc, user) => {
    const coordinator = user.detail?.coordinator;
    if (coordinator) {
        acc[coordinator] = (acc[coordinator] || 0) + 1;
    }
    return acc;
}, {});

const coordinatorPieChartData = ref({
    labels: Object.keys(coordinatorCounts),
    datasets: [
        {
            data: Object.values(coordinatorCounts),
            backgroundColor: [
                "#42A5F5",
                "#66BB6A",
                "#FFA726",
                "#FF7043",
                "#AB47BC",
                "#26C6DA",
                "#D4E157",
            ],
        },
    ],
});

const coordinatorPieChartOptions = ref({
    responsive: true,
    plugins: {
        legend: {
            position: "top",
        },
        title: {
            display: true,
            text: "Coordinators",
        },
    },
});
</script>

<template>
    <Head title="Registrations" />

    <div class="flex justify-center">
        <Chart
            class="w-[30rem]"
            type="pie"
            :data="coordinatorPieChartData"
            :options="coordinatorPieChartOptions"
        />
    </div>

    <DataTable :value="users" tableStyle="min-width: 50rem">
        <Column
            v-for="col of columns"
            :key="col.field"
            :field="col.field"
            :header="col.header"
        >
        </Column>
    </DataTable>
</template>
