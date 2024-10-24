<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    link: Object,
});
</script>
<template>
    <component
        :is="link.url ? Link : 'span'"
        class="text-primary font-sm p-3"
        :class="{ 'font-bold text-lg': link.active }"
        :href="link.url"
    >
        <span v-html="link.label"></span
    ></component>
</template> 