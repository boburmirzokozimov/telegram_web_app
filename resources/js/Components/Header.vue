<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>
<template>
    <ul class="flex justify-between">
        <li class="">
            <NavLink as="button" class="px-2 py-4 flex justify-between " href="/">
                <div :class="$page.component.startsWith('Home') ? 'tg-text-color' : 'tg-theme-hint-color'">
                    Home
                </div>
            </NavLink>
        </li>
        <li>
            <NavLink as="button" class="px-2 py-4 flex justify-between" href="/products">
                <div :class="$page.component.startsWith('Products') ? 'text-white' : 'tg-theme-hint-color'">
                    Products
                </div>
            </NavLink>
        </li>
        <li>
            <NavLink as="button" class="px-2 py-4 flex justify-between" href="/basket">
                <div :class="$page.component.startsWith('Basket') ? 'text-white' : 'tg-theme-hint-color'">
                    Basket
                </div>
            </NavLink>
        </li>
    </ul>
</template>

<style lang="scss" scoped>
.tg-bg-color {
    background: var(--tg-theme-button-color);
}

.tg-text-color {
    color: var(--tg-theme-button-text-color);
}
</style>
