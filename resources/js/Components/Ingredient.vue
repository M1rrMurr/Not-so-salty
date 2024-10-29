<script setup>
defineProps({ ingredient: Object });
</script>
<template>
    <div class="space-x-2">
        <span class="font-bold" v-text="ingredient.pivot.count" />
        <span
            class="text-sm font-medium"
            v-text="ingredient.pivot.measurement"
        />
        <span class="text-black" v-text="ingredient.name" />
    </div>
</template>