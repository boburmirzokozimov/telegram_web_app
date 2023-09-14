<script setup>
import {Head} from "@inertiajs/vue3";
import {createToaster} from "@meforma/vue-toaster";

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

    <div class="">
        <slot/>
    </div>

</template>

<style lang="scss">
.header-left {
    @apply flex items-center relative;
    transition: 1s ease all;
}

.popup {
    transform: translateY(85%);
    @apply absolute py-4 px-2 bg-white shadow rounded-xl;
    transition: 6s ease all;
    width: 200px;
}
</style>
