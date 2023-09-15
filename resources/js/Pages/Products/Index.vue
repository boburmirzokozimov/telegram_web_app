<script setup>

import Paginator from "@/Components/Paginator.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {createToaster} from "@meforma/vue-toaster";
import {router} from "@inertiajs/vue3";

const toaster = createToaster({ /* options */});
const tg = window.Telegram.WebApp

defineProps({
    products: Object
})
const handleAddButton = (product_id) => {
    router.post('/basket', {
        product_id: product_id,
        client_id: tg.initDataUnsafe?.user?.id
    }, {
        onSuccess: () => toaster.success('Successfully added')
    })
}
</script>

<template>
    <div class="grid grid-cols-1 gap-y-5">
        <div v-for="product in products.data" class="relative">
            <div class="tg-theme-text-color  btn_add ">
                <PrimaryButton
                    style="transform: translateX(-100%)"
                    @click="()=>handleAddButton(product.id)">
                    <i class="fa fa-plus"></i>
                </PrimaryButton>
            </div>
            <div>
                <div class="relative">
                    <img :alt="product.name" :src="product.photo" class="h-full rounded">
                </div>
                <div class="flex justify-between">
                    <div class="tg-theme-text-color" v-text="product.name"></div>
                    <div class="tg-theme-text-color" v-text="`${product.price}$`"></div>
                </div>
            </div>
        </div>
    </div>
    <Paginator :products="products"/>
</template>

<style lang="scss" scoped>
.btn_add {
    @apply absolute right-0 z-10;
    transform: translateX(100%);
}
</style>
