<template>
    <div class="min-w-[1150px] bg-gray-100 h-full">
        <div class="flex items-center bg-gray-900 h-[60px] py-2 min-w-[1150px] w-full">
            <div class="flex">
                <Link class="text-white h-[50px] p-3 pt-3 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor pointer">
                    Easycart
                </Link>
            </div>

            <div class="text-white h-[50px] p-3 pt-3 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor pointer">
                <div class="flex items-center justify-center">
                    <MapMarkerOutlineIcon class="pt-2 -ml-1" fillcolor="#f5f5f5" />
                    
                    <div>
                        <div class="text-[13px] text-gray-300 font-extrabold">
                            <div>Delivery to sai</div>
                        </div>
                        <div class="text-[15px] text-white -mt-1.5 font-extrabold">
                            <div>Brooklyn Melissa Dr</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex grow items-center h-[45px] px-1">
                <div class="flex items-center justify-center bg-gray-100 border-r border-r-gray-300 font-extrabold text-[11px] w-[60px] h-[40px] rounded-l-md cursor-pointer">
                    <div class="pt-[3px]">
                        All
                    </div>
                    <MenuDownIcon fillcolor="#5E5E5E" :size="20" class="-mr-2" />
                </div>
                <input class="block w-full border-none border-transparent focus:border-transparent focus:ring-0 placeholder-gray-400" type="text" placeholder="Search for products...">
                    <div class="cursor-pointer bg-gray-300 p-[5px] px-2 rounded-r-md">
                        <MagnifyIcon :size="30" />
                    </div>
            </div>

            <div class="flex">
                <div class="h-[50px] p-3 pt-3 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor pointer">
                    <div class="flex items-center justify-center mt-2.5 px-1">
                        <img src="https://via.placeholder.com/35x20" alt="">
                        <div class="text-[15px] text-white -mt-2 -mr-0.5 font-extrabold">EN</div>
                        <MenuDownIcon fill="#c2c2c2" :size="20" class="text-white -mr-4 -mt-1.5 pr-1" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import MapMarkerOutlineIcon from 'vue-material-design-icons/MapMarkerOutline.vue';
import MenuDownIcon from 'vue-material-design-icons/Menudown.vue';
import MagnifyIcon from 'vue-material-design-icons/Magnify.vue';

const showingNavigationDropdown = ref(false);
</script>