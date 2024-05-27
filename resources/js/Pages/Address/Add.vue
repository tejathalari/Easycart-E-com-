<template>
    <Head title="Address" />

    <AuthenticatedLayout>
        <div class="mt-8"></div>

        <div class="max-w-md mx-auto text-2xl font-extrabold text-center mb-6">
            <div>Add a new address</div>
        </div>

        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form class="space-y-6" @submit.prevent="submit">
                <div>
                    <label for="country" class="block text-sm font-bold text-gray-700">Country</label>
                    <select
                        v-model="form.country"
                        id="country"
                        name="country"
                        class="
                            w-full
                            border-gray-300
                            rounded-lg
                            shadow-sm
                            py-2
                            bg-gray-50
                            hover:bg-gray-100
                            cursor-pointer
                            focus:border-gray-400
                            focus:ring-gray-400
                        "
                    >
                        <option selected value="United States">United States</option>
                        <option value="United States">United States</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                    </select>
                </div>

                <div>
                    <InputLabel for="first-name" value="First name"/>
                    <TextInput v-model="form.first_name" id="first-name" type="text" class="mt-1 block w-full" required />
                </div>

                <div>
                    <InputLabel for="last-name" value="Last name"/>
                    <TextInput v-model="form.last_name" id="last-name" type="text" class="mt-1 block w-full" required />
                </div>

                <div>
                    <InputLabel for="address1" value="Address line 1"/>
                    <TextInput v-model="form.addr1" id="address1" type="text" class="mt-1 block w-full" required />
                </div>

                <div>
                    <InputLabel for="address2" value="Address line 2"/>
                    <TextInput v-model="form.addr2" id="address2" type="text" class="mt-1 block w-full" required />
                </div>

                <div class="flex gap-4">
                    <div class="w-full">
                        <InputLabel for="city" value="City"/>
                        <TextInput v-model="form.city" id="city" type="text" class="mt-1 block w-full" required />
                    </div>

                    <div class="w-full">
                        <InputLabel for="postcode" value="Postcode"/>
                        <TextInput v-model="form.postcode" id="postcode" type="text" class="mt-1 block w-full" required />
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <button class="text-white bg-gray-700 hover:bg-gray-400 px-4 py-2 font-bold text-sm rounded-lg shadow-md cursor-pointer">
                        Add address
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const { props } = usePage();


const form = useForm({
    country: 'United States',
    first_name: props.auth.user ? props.auth.user.first_name : '',
    last_name: props.auth.user ? props.auth.user.last_name : '',
    addr1: '',
    addr2: '',
    city: '',
    postcode: ''
});

const submit = () => {
    form.post(route('address_options.store'), {
        onFinish: () => route('address.index'),
    });
}


</script>
