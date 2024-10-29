<script setup>
defineProps({ ingredient: String });
</script>
<template>
    <div
        class="flex items-center gap-2 bg-white border border-primary py-1 px-3 rounded text-primary"
    >
        <img class="h-11" :src="`/svg/${ingredient}.svg`" />
        <div v-text="ingredient" />
    </div>
</template>