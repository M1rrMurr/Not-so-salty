<script setup>
import { Link } from "@inertiajs/vue3";
import Tag from "./Tag.vue";
defineProps({ recipe: Object });
</script>
<template>
    <div class="bg-white flex">
        <img
            class="w-[400px] h-[400px] object-cover"
            :src="recipe.image"
            :alt="recipe.title"
        />
        <div class="pl-10 pt-10 mr-6 grow">
            <div class="flex">
                <h3
                    class="flex-1 font-semibold text-primary text-2xl italic capitalize"
                    v-text="recipe.title"
                />
                <Tag :title="recipe.diet_types[0].type" />
            </div>
            <div
                class="mb-20 text-xl font-medium text-secondary"
                v-text="recipe.intro"
            ></div>
            <Link
                class="group relative border inline-flex border-primary"
                :href="`recipes/${recipe.id}`"
            >
                <span
                    class="block px-5 py-2 bg-primary transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 text-white"
                    >Go to Recipe...</span
                >
            </Link>
        </div>
    </div>
</template>