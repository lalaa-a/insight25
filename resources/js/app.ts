import "./bootstrap";
import "../css/app.css";

import "primeicons/primeicons.css";

import { createApp, h, DefineComponent } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

import PrimeVue from "primevue/config";
import Aura from "@primevue/themes/aura";
import { definePreset } from "@primevue/themes";
function generateColorShades(baseColor: string) {
    const shades = [50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950];
    const colorShades: { [key: number]: string } = {};

    shades.forEach((shade) => {
        colorShades[shade] = `{${baseColor}.${shade}}`;
    });

    return colorShades;
}
const MyPreset = definePreset(Aura, {
    semantic: {
        primary: generateColorShades("pink"),
    },
});

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue"),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)

            .use(PrimeVue, {
                theme: {
                    preset: MyPreset,
                    options: {
                        darkModeSelector: ".my-app-dark",
                    },
                },
            })

            .directive("click-outside", {
                beforeMount: (el, binding) => {
                    el.clickOutsideEvent = (event: any) => {
                        // here I check that click was outside the el and his children
                        if (
                            !(el == event.target || el.contains(event.target))
                        ) {
                            // and if it did, call method provided in attribute value
                            binding.value();
                        }
                    };
                    document.addEventListener("click", el.clickOutsideEvent);
                },
                unmounted: (el) => {
                    document.removeEventListener("click", el.clickOutsideEvent);
                },
            })

            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
