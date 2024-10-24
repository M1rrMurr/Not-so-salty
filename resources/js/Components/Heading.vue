<script setup>
import NavLink from "../Components/NavLink.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div
        class="flex justify-between bg-muted border border-b items-center px-3"
    >
        <div>
            <Link class="p-1 flex items-center" href="/">
                <img class="w-10" src="/public/svg/logo.svg" />
                <div class="text-xl font-bold text-primary">Not So Salty</div>
            </Link>
        </div>
        <nav class="flex space-x-3">
            <NavLink href="#">kolbi</NavLink>
            <NavLink href="#">kolbi</NavLink>
            <NavLink href="#">kolbi</NavLink>
        </nav>
        <div class="flex space-x-2">
            <NavLink>Log Out</NavLink>
            <div class="border-primary border-l-2" />
            <NavLink>Your Profile</NavLink>
        </div>
    </div>
</template>