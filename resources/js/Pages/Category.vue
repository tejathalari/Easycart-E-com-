<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import ProductComponent from '@/Components/ProductComponent.vue'
</script>

<template>
    <Head title="Category" />

    <AuthenticatedLayout>
        <div class="w-full p-1 pt-2 mb-6">
            <div class="text-[27px] font-extrabold">{{ $page.props.Category_name.name }}</div>
            <div class="text-sm font-bold">
                Shop home entertainment, Tvs, home audio, headphones, cameras, accessories, and more
            </div>
        </div>

        <div class="border border-gray-300 rounded-lg text-sm py-3.5 px-10 mb-4">
            1-{{ $page.props.Category_by_id.length }} of over {{ $page.props.Category_by_id.length }} results for {{ $page.props.Category_name.name }}
        </div>

        <div class="grid grid-cols-4 gap-1">
            <div v-for="product in $page.props.Category_by_id" :key="product" class="m-1">
                <ProductComponent :product="product" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
