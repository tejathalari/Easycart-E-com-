<template>
    <Head title="Address" />

    <AuthenticatedLayout>
        <div class="mt-8"></div>

        <div class="w-[500px] mx-auto text-2xl font-extrabold">
            <div>Add a new address</div>

            <form>
                <div class="text-[15px] -mb-1.5 font-extrabold">Country</div>
                <select
                    class="
                        w-full
                        border-gray-300
                        rounded-lg
                        shadow-md
                        py-1
                        bg-gray-200
                        hover:bg-gray-300
                        cursor-pointer
                        focus:border-gray-400
                        focus:ring-gray-400
                    "
                    name="country"
                >
                    <option selected value="United Kindom">United Kindom</option>
                    <option value="United States">United States</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                </select>

                <div class="mt-4">
                    <InputLabel class="-mb-1.5" value="First name"/>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { toRefs } from 'vue';
import PlusIcon from 'vue-material-design-icons/Plus.vue';
import EditIcon from 'vue-material-design-icons/Pencil.vue';
import InputLabel from '@/Components/InputLabel.vue';

</script>