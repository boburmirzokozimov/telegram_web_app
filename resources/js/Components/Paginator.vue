<script setup>
import {router} from "@inertiajs/vue3";

const props = defineProps({
    products: Object
})
const handlePrevButton = () => {
    router.visit(props.products.prev_page_url, {
        preserveScroll: true
    })
}
const handleNextButton = () => {
    router.visit(props.products.next_page_url, {
        preserveScroll: true
    })
}
</script>

<template>
    <div class="flex justify-between mt-5 mb-5">
        <button
            :class="products.prev_page_url ? 'tg-theme-bg-color' : 'bg-gray-500'"
            :disabled="!products.prev_page_url"
            class=" text-gray-50 px-1 rounded"
            @click="handlePrevButton"
        >
            Previous Page
        </button>
        <div>
            {{ products.current_page }} out of {{ products.last_page }}
        </div>
        <button
            :class="products.next_page_url ? 'tg-theme-bg-color' : 'bg-gray-500'"
            :disabled="!products.next_page_url" class="tg-theme-bg-color text-gray-50 px-1 rounded"
            @click="handleNextButton"
        >
            Next Page
        </button>
    </div>
</template>

<style lang="scss" scoped>

</style>
