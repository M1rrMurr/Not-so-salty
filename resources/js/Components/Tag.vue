<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    title: String,
});
</script>
<template>
    <Link
        href="#"
        class="border px-3 py-1 text-sm text-primary bg-white font-medium border-primary"
    >
        {{ title }}
    </Link>
</template>