<script setup>
import IngredientType from "../Components/IngredientType.vue";
import Ingredient from "../Components/Ingredient.vue";
import AppLayout from "../Layouts/AppLayout.vue";
const props = defineProps({
    recipe: Object,
});
const ingredientTypes = props.recipe.ingredients.reduce(
    (acc, curr) => (acc.includes(curr.type) ? acc : [...acc, curr.type]),
    []
);
</script>
<template>
    <AppLayout>
        <div class="flex flex-col items-center">
            <h1 class="text-primary text-3xl font-bold">
                {{ recipe.title }}
            </h1>

            <div
                class="bg-white mt-10 flex justify-center items-center py-1 px-3 gap-1"
            >
                <div class="text-primary" v-text="recipe.diet_types[0].type" />
                <img
                    class="h-11"
                    :src="`/svg/${recipe.diet_types[0].type}.svg`"
                />
            </div>

            <div class="flex gap-3 mt-10">
                <IngredientType
                    v-for="(ingredient, index) in ingredientTypes"
                    :key="index"
                    :ingredient="ingredient"
                />
            </div>
            <div
                class="border-0 border-b border-secondary mt-10 mb-10 min-w-full"
            />
            <div class="flex mt-10 items-center gap-3">
                <div
                    class="text-3xl text-primary italic font-medium"
                    v-text="recipe.intro"
                />
                <img class="" :src="recipe.image" />
            </div>

            <div
                class="border-0 border-b border-secondary mt-10 mb-10 min-w-full"
            />
            <div class="min-w-full">
                <h2 class="text-3xl text-primary font-medium mb-10">
                    Ingredients:
                </h2>
                <ul class="text-primary font-medium text-md">
                    <li
                        v-for="ingredient in recipe.ingredients"
                        :key="ingredient.id"
                    >
                        <Ingredient :ingredient="ingredient" />
                    </li>
                </ul>

                <div
                    class="border-0 border-b border-secondary mt-10 mb-10 min-w-full"
                />
            </div>
            <h2 class="text-primary text-3xl font-medium">Instructions</h2>
            <div v-text="recipe.instruction" />
        </div>
    </AppLayout>
</template>