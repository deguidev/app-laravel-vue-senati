<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const contador = ref(0);

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
];

function incrementar() {
    contador.value++;
}

function decrementar() {
    contador.value--;
}
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex flex-col items-center justify-center">
            <p class="text-9xl text-amber-600">Contador</p>
            <div>
                <small class="text-orange-700">Diego Lipa</small>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center gap-4">
            <p class="text-6xl font-bold">{{ contador }}</p>
            <div class="flex flex-wrap gap-4">
                <button
                    class="rounded-2xl bg-blue-600 px-8 py-3 text-white"
                    @click="incrementar"
                    type="button"
                >
                    +
                </button>
                <button
                    class="rounded-2xl bg-blue-600 px-8 py-3 text-white"
                    @click="decrementar"
                    type="button"
                >
                    -
                </button>
            </div>
        </div>
    </AppLayout>
</template>
