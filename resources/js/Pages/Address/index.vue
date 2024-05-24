<template>
    <Head title="Address" />

    <AuthenticatedLayout>
        <div class="mt-12"></div>

        <div class="max-w-[1000px] mx-auto text-3xl mb-10 font-bold text-gray-800">
            Your Addresses
        </div>

        <div class="max-w-[1000px] mx-auto flex gap-6 h-[270px]">
            <div class="border border-dotted border-gray-400 rounded-md w-1/3 flex items-center justify-center bg-gray-50 hover:bg-gray-100 transition duration-300">
                <Link v-if="show" href="/" class="flex flex-col items-center justify-center text-gray-600 hover:text-gray-800">
                    <div class="text-center">
                        <div class="flex justify-center mb-2">
                            <PlusIcon :size="50" />
                        </div>
                        <div class="font-bold text-2xl">Add Address</div>
                    </div>
                </Link>

                <div v-else class="text-center">
                    <div class="font-bold text-2xl">Address is added</div>
                </div>
            </div>

            <div class="relative border border-dotted border-gray-400 w-1/3 rounded-md shadow-md bg-white">
                <div class="flex items-center justify-center p-3 text-xs text-gray-600 font-extrabold border-b border-b-gray-400 bg-gray-100">
                    Default
                </div>
                <div class="text-sm font-extrabold px-4 pt-4 text-gray-800">
                    FIRSTNAME LASTNAME
                </div>
                <div class="text-sm px-4 text-gray-700">
                    <div>ADDR1</div>
                    <div>ADDR2</div>
                    <div>CITY</div>
                    <div>POSTCODE</div>
                    <div>COUNTRY</div>
                </div>
                <div class="px-4 absolute bottom-0 pb-4">
                    <Link href="/" class="inline-block px-4 py-2 text-teal-700 text-sm font-extrabold rounded-md border border-teal-700 hover:bg-teal-700 hover:text-white transition duration-300">
                        Remove
                    </Link>
                </div>
                <div class="absolute bottom-3 right-3 text-blue-500 hover:text-blue-700 cursor-pointer">
                    <EditIcon :size="20" /> Edit
                </div>
            </div>

            <!-- <div class="relative border border-dotted border-gray-400 w-1/3 rounded-md shadow-md bg-white">
                <div class="flex items-center justify-center p-3 text-xs text-gray-600 font-extrabold border-b border-b-gray-400 bg-gray-100">
                    Office
                </div>
                <div class="text-sm font-extrabold px-4 pt-4 text-gray-800">
                    FIRSTNAME LASTNAME
                </div>
                <div class="text-sm px-4 text-gray-700">
                    <div>ADDR1</div>
                    <div>ADDR2</div>
                    <div>CITY</div>
                    <div>POSTCODE</div>
                    <div>COUNTRY</div>
                </div>
                <div class="absolute bottom-3 right-3 text-blue-500 hover:text-blue-700 cursor-pointer">
                    <EditIcon :size="20" /> Edit
                </div>
            </div> -->
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { toRefs } from 'vue';
import PlusIcon from 'vue-material-design-icons/Plus.vue';
import EditIcon from 'vue-material-design-icons/Pencil.vue';

let show = true;

const props = defineProps({ product: Object });
const { product } = toRefs(props);
</script>

<style scoped>
.border-dotted {
    border-style: dotted;
}
</style>
