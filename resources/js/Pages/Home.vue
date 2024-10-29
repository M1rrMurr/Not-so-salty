<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import PaginationLink from "../Components/PaginationLink.vue";
import Carousel from "../Components/Carousel.vue";
import RecipeCardMini from "../Components/RecipeCardMini.vue";

import RecipeCard from "../Components/RecipeCard.vue";

const props = defineProps({
    recipes: Object,
});
</script>
<template>
    <AppLayout>
        <form @submit.prevent>
            <div class="flex flex-col">
                <input
                    class="w-full px-5 py-3 rounded-xl border-2 border-primary focus:outline-none"
                    placeholder="Recipes..."
                />
                <div class="self-end -translate-x-6 -translate-y-10">
                    <button class="mt-1 text-primary font-medium flex">
                        <img class="h-6" src="/public/svg/search.svg" />
                        Search
                    </button>
                </div>
            </div>
        </form>
        <main class="mt-10 space-y-24">
            <section class="flex flex-col">
                <div class="flex flex-wrap gap-3">
                    <!-- tags -->
                </div>
            </section>
            <section>
                <h2 class="text-3xl text-primary font-medium italic">
                    Stories
                </h2>
                <Carousel class="mt-6"></Carousel>
            </section>
            <section>
                <h2 class="text-3xl text-primary font-medium italic">
                    Featured Recipes
                </h2>
                <div class="flex gap-3 mt-6">
                    <RecipeCardMini />
                    <RecipeCardMini />
                    <RecipeCardMini />
                </div>
            </section>
            <section class="space-y-5">
                <h2 class="text-3xl text-primary font-medium italic">
                    Recent Recipes
                </h2>

                <RecipeCard
                    v-for="recipe in recipes.data"
                    :key="recipe.id"
                    :recipe="recipe"
                />
                <!-- pagination -->
                <div>
                    <PaginationLink
                        v-for="link in recipes.links"
                        :key="link.label"
                        :link="link"
                    />
                </div>
            </section>
        </main>
    </AppLayout>
</template>
