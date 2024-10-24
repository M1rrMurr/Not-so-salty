<script setup>
import { Link } from "@inertiajs/vue3";
import Tag from "./Tag.vue";
</script>
<template>
    <div class="flex bg-white rounded border-primary min-w-full space-x-2">
        <img
            class="w-80 h-80 object-cover rounded"
            src="https://picsum.photos/seed/picsum/200/300"
            alt="food"
        />

        <div class="flex flex-col pt-3 pl-3 pb-3">
            <div class="text-xl text-primary font-medium"><slot /></div>
            <p class="text-sm">
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a more-or-less
                normal distribution of letters, as opposed to using 'Content
                here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem
                Ipsum as their default model text, and a search for 'lorem
                ipsum' will uncover many web sites still in their infancy.
                Various versions have evolved over the years, sometimes by
                accident, sometimes on purpose (injected humour and the like).
            </p>
            <div class="mt-3 flex-1">
                <Link
                    class="py-2 px-5 text-muted_light bg-secondary hover:border border-primary hover:bg-white hover:text-primary transition-colors duration-200"
                    href="#"
                >
                    More...
                </Link>
            </div>
        </div>
    </div>
</template>