<script setup>
import {Head} from "@inertiajs/vue3";
import {createToaster} from "@meforma/vue-toaster";
import Header from "@/Components/Header.vue";

const toaster = createToaster({ /* options */});

</script>

<template>
    <Head>
        <title>My app</title>
        <meta content="Information"
              head-key="description"
              type="description"
        >
    </Head>

    <section class="tg-bg-color">
        <nav class="w-5/6 mx-auto">
            <Header/>
        </nav>
    </section>
    <section class="w-4/6 mx-auto mt-2">
        <slot/>
    </section>

</template>

<style lang="scss">
.header-left {
    @apply flex items-center relative;
    transition: 1s ease all;
}

.tg-bg-color {
    background: var(--tg-theme-button-color);
}

.popup {
    transform: translateY(85%);
    @apply absolute py-4 px-2 bg-white shadow rounded-xl;
    transition: 6s ease all;
    width: 200px;
}
</style>
