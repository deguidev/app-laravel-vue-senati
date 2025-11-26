<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const categorias = ref([]);
const miNombre = ref("");

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Categoria',
        href: dashboard().url,
    },
];

const listarCategoria = async() => {
    try{
        const repuesta = await axios.get('/categorias-data');
        console.log(repuesta);
        if(repuesta.data.success){
            categorias.value = repuesta.data.data;
            miNombre.value = repuesta.data.nombre;
        }

    }catch(error:any){
    }
}

onMounted(listarCategoria);

</script>
 

<template>
    <Head title="Categoria" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex flex-col items-center justify-center">
            <div class="mt-4">
                <p class="text-amber-600 text-2xl">Gestión Categoria 😊</p>
                <small>{{ miNombre }}</small>
            </div>
            <div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
                        <thead class="ltr:text-left rtl:text-right">
                        <tr class="*:font-medium *:text-gray-900 dark:*:text-white">
                            <th class="px-3 py-2 whitespace-nowrap">Nombre</th>
                            <th class="px-3 py-2 whitespace-nowrap">Descripción</th>
                            <th class="px-3 py-2 whitespace-nowrap">Estado</th>
                            <th class="px-3 py-2 whitespace-nowrap">Opciones</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 *:even:bg-gray-50 dark:divide-gray-700 dark:*:even:bg-gray-800">
                            <tr v-for="item in categorias" :key="item.id" class="*:text-gray-900 *:first:font-medium dark:*:text-white">
                                <td class="px-3 py-2 whitespace-nowrap">{{ item.nombre_categoria }}</td>
                                <td class="px-3 py-2 whitespace-nowrap">{{ item.descripcion }}</td>
                                <td class="px-3 py-2 whitespace-nowrap">{{ item.estado }}</td>
                                <td class="px-3 py-2 whitespace-nowrap"> 
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
            </div>

        </div>
    </AppLayout>
</template>