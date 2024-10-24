<template>
    <div class="bg-white flex space-x-3">
        <img
            class="w-28 h-28 rounded object-cover"
            src="https://picsum.photos/seed/{{Math.ceil(Math.random()*10000)}}/200/300"
            alt="food"
        />
        <div class="text-sm text-primary font-medium">Food Title</div>
    </div>
</template>