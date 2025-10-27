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

interface User {
    number: number;
    name: string;
    email: string;
    whatsapp_number: string;
    describes: string;
    institute: string;
    isAiesecer: string;
    expectations: string;
    interestedField: string;
    jobPreference: string;
    interest: number;
    cv: string;
    coordinator: string;
}

interface CountMap {
    [key: string]: number;
}

const props = defineProps<{
    users: {
        name: string;
        email: string;
        id: number;
        detail: {
            whatsapp_number: string;
            describes: string;
            institute: string;
            isAiesecer: boolean;
            expectations: string;
            interestedField: string;
            jobPreference: string;
            interest: number;
            cv: string;
            coordinator: string;
        };
    }[];
}>();
console.log(props.users[0]);

// Cleaning the data

const users: User[] = props.users.map((user, index) => {
    return {
        id: user.id,
        number: index + 1,
        name: user.name,
        email: user.email,
        whatsapp_number: user.detail.whatsapp_number,
        describes: user.detail.describes,
        institute: user.detail.institute,
        isAiesecer: user.detail.isAiesecer ? "Yes" : "No",
        expectations: user.detail.expectations,
        interestedField: user.detail.interestedField,
        jobPreference: user.detail.jobPreference,
        interest: user.detail.interest,
        cv: user.detail.cv,
        coordinator: user.detail.coordinator,
    };
});

const columns = [
    { field: "number", header: "No." },
    { field: "name", header: "Name" },
    { field: "email", header: "Email" },
    { field: "whatsapp_number", header: "WhatsApp Number" },
    { field: "describes", header: "What describes you the best?" },
    { field: "institute", header: "Institute" },
    { field: "isAiesecer", header: "Are you an AIESECer?" },
    { field: "expectations", header: "What are your expectations?" },
    { field: "interestedField", header: "Interested Field" },
    { field: "jobPreference", header: "Job Preference" },
    { field: "interest", header: "Rate your interest" },
    { field: "cv", header: "CV" },
    { field: "coordinator", header: "Coordinator" },
];

// Prepare data for the bar chart
const chartData = ref({
    labels: users.map((user) => user.name),
    datasets: [
        {
            label: "Interest",
            backgroundColor: "#42A5F5",
            data: users.map((user) => user.interest),
        },
    ],
});

const chartOptions = ref({
    responsive: true,
    plugins: {
        legend: {
            position: "top",
        },
        title: {
            display: true,
            text: "User Interest Analytics",
        },
    },
});

// Prepare data for the pie chart (AIESECers vs Non-AIESECers)
const aiesecersCount = users.filter((user) => user.isAiesecer === "Yes").length;
const nonAiesecersCount = users.length - aiesecersCount;

const pieChartData = ref({
    labels: ["AIESECers", "Non-AIESECers"],
    datasets: [
        {
            data: [aiesecersCount, nonAiesecersCount],
            backgroundColor: ["#42A5F5", "#FFA726"],
        },
    ],
});

const pieChartOptions = ref({
    responsive: true,
    plugins: {
        legend: {
            position: "top",
        },
        title: {
            display: true,
            text: "AIESECers vs Non-AIESECers",
        },
    },
});

// Prepare data for the pie chart (What describes you the best?)
const descriptionCounts: CountMap = users.reduce(
    (acc: CountMap, user: User) => {
        acc[user.describes] = (acc[user.describes] || 0) + 1;
        return acc;
    },
    {},
);

const describesPieChartData = ref({
    labels: Object.keys(descriptionCounts),
    datasets: [
        {
            data: Object.values(descriptionCounts),
            backgroundColor: [
                "#42A5F5",
                "#66BB6A",
                "#FFA726",
                "#FF7043",
                "#AB47BC",
            ],
        },
    ],
});

const describesPieChartOptions = ref({
    responsive: true,
    plugins: {
        legend: {
            position: "top",
        },
        title: {
            display: true,
            text: "What Describes You the Best?",
        },
    },
});

// Prepare data for the pie chart (Interested Field)
const interestedFieldCounts: CountMap = users.reduce(
    (acc: CountMap, user: User) => {
        acc[user.interestedField] = (acc[user.interestedField] || 0) + 1;
        return acc;
    },
    {},
);

const interestedFieldPieChartData = ref({
    labels: Object.keys(interestedFieldCounts),
    datasets: [
        {
            data: Object.values(interestedFieldCounts),
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

const interestedFieldPieChartOptions = ref({
    responsive: true,
    plugins: {
        legend: {
            position: "top",
        },
        title: {
            display: true,
            text: "Interested Fields",
        },
    },
});

// Prepare data for the pie chart (Coordinator)
const coordinatorCounts: CountMap = users.reduce(
    (acc: CountMap, user: User) => {
        acc[user.coordinator] = (acc[user.coordinator] || 0) + 1;
        return acc;
    },
    {},
);

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

    <Tabs value="0">
        <TabList>
            <Tab value="0">Table</Tab>
            <Tab value="1">Charts</Tab>
        </TabList>
        <TabPanels>
            <TabPanel value="0">
                <DataTable :value="users" tableStyle="min-width: 50rem">
                    <Column
                        v-for="col of columns"
                        :key="col.field"
                        :field="col.field"
                        :header="col.header"
                    >
                        <template #body="slotProps">
                            <a
                                v-if="
                                    slotProps.field == 'cv' && slotProps.data.cv
                                "
                                target="_blank"
                                :href="route('cvs.show', slotProps.data.id)"
                            >
                                <Button size="small">Download</Button>
                            </a>
                            <span v-else>
                                {{ slotProps.data[slotProps.field] }}
                            </span>
                        </template>
                    </Column>
                </DataTable>
            </TabPanel>
            <TabPanel value="1">
                <div class="grid grid-cols-1 lg:grid-cols-3">
                    <!--        <Chart type="bar" :data="chartData" :options="chartOptions" />-->
                    <Chart
                        type="pie"
                        :data="pieChartData"
                        :options="pieChartOptions"
                    />
                    <Chart
                        type="pie"
                        :data="describesPieChartData"
                        :options="describesPieChartOptions"
                    />
                    <Chart
                        type="pie"
                        :data="interestedFieldPieChartData"
                        :options="interestedFieldPieChartOptions"
                    />
                    <Chart
                        type="pie"
                        :data="coordinatorPieChartData"
                        :options="coordinatorPieChartOptions"
                    />
                </div>
            </TabPanel>
        </TabPanels>
    </Tabs>
</template>
