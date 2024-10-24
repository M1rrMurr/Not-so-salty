<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <Link
        class="text-md font font-semibold text-primary italic capitalize hover:underline decoration-2"
        href="#"
        ><slot
    /></Link>
</template>