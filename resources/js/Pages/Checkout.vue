<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { toRefs, computed } from 'vue'

import { useCartStore } from '@/store/cart'
import { storeToRefs } from 'pinia';
const cartStore = useCartStore()
const { cart } =storeToRefs(cartStore)

const removeFromCart = (id) => {
    cartStore.removeProductFromCart(id)
}

const total = computed(() => {
    let total = 0;
    cart.value.forEach(c => {
        total += Number(c.price);  // Ensure price is treated as a number
    });
    console.log("Total before formatting:", total);
    return total > 0 ? total.toFixed(2) : '0.00';
});


const totalWithoutDot = () => {
    return Number(String(total.value).replace('.', ''));
};
</script>

<template>
    <Head title="Checkout" />

    <AuthenticatedLayout>
        <div class="p-4 mt-2 max-w-[1250px] mx-auto text-3xl font-extrabold">Checkout</div>

        <div class="flex max-w-[1250px] mx-auto pt-4">

            <div class="w-8/12">
                <div class="flex items-stretch border  border-gray-300 w-[calc(100%-100px)] pb-4 pl-4 mb-6">
                    <div class="text-gray-900 font-extrabold text-xl mr-12">
                        Shipping Address:
                    </div>
                    <div class="px-4 font-semibold">
                        <div>{{ $page.props.auth.user.first_name }} {{ $page.props.auth.user.last_name }}</div>
                        <div>{{ $page.props.auth.address.addr1 }}</div>
                        <div>{{ $page.props.auth.address.addr2 }}</div>
                        <div>{{ $page.props.auth.address.city }}</div>
                        <div>{{ $page.props.auth.address.postcode }}</div>
                        <div>{{ $page.props.auth.address.country }}</div>
                    </div>
                </div>
            </div>

            <div class="w-4/12 border border-gray-400 rounded-md py-4 px-2">
                <form>
                    <div id="card-element"></div>

                    <div class="flex justify-between text-xl text-red-700 font-extrabold border-y border-y-gray-300 my-3 p-2">
                        <div>Order total:</div>
                        <!-- <div v-if="order">USD: {{ order.total_decimal }}</div> -->
                    </div>
                    <button id="submit" class="bg-gray-600 hover:bg-gray-500 rounded-md text-sm font-extrabold p-2 text-white">
                        <!-- <div v-if="isProcessing" id="button-text">Processing...</div>
                        <div v-else id="button-text">Place your order in USD</div> -->
                        <div id="button-text">Place your order in USD</div>
                    </button>

                    <p id="card-error" role="alert" class="text-red-700 text-center font-semibold"></p>

                </form>
            </div>
        </div>

        <div class="w-[1200px] mx-auto text-xl font-bold pb-2 underline">Items</div>
        <div class="w-[1200px] mx-auto">
            <div class="flex items-center py-1">
                PROD DETAILS HERE
            </div>
        </div>
    </AuthenticatedLayout>
</template>
