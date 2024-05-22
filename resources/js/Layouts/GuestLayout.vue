<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <Link href="/">
                <img width="70" height="80" src="/images/logo/Easycart.png" >
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>

        <div v-if="$page.url === '/login'" class="w-[400px]">
            <div class="text-center text-sm text-gray-600 font-bold py-4">New to Easycart?</div>
            <div class="flex items-center justify-center w-full border border-gray-500 bg-gray-900 text-sm font-extrbold p-2 hover:bg-gray-300">
                <Link class="text-white" :href="route('register')">
                Create your Easycart account
                </Link>
            </div>
        </div>
    </div>
</template>
