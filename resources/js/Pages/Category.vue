<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Category" />

    <AuthenticatedLayout>
        <div class="w-ful p-1 pt-2 mb-6">
            <div class="rexr-[27px] font-extrrbold">{{ $page.props.category_name }}</div>
            <div class="text-sm font-bold">
                Shop home entertainment, Tvs, home audio, headphones, cameras, accessories and more
            </div>
        </div>
    </AuthenticatedLayout>
</template>