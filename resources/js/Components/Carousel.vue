<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import { Navigation } from "swiper/modules";
import StoryCard from "./StoryCard.vue";
</script>

<template>
    <div class="relative">
        <Swiper
            :modules="[Navigation]"
            :navigation="{ prevEl: '.swiperPrev', nextEl: '.swiperNext' }"
        >
            <SwiperSlide><StoryCard>kolbi</StoryCard></SwiperSlide>
            <SwiperSlide><StoryCard>kolbi2</StoryCard></SwiperSlide>
            <SwiperSlide><StoryCard>kolbi3</StoryCard></SwiperSlide>
        </Swiper>

        <!-- Custom navigation buttons -->

        <button
            class="swiperPrev absolute z-10 h-full left-0 top-0 w-16 bg-black bg-opacity-20 text-primary font-medium p-2 text-lg hover:bg-opacity-30"
        >
            Prev
        </button>
        <button
            class="swiperNext absolute z-10 h-full right-0 top-0 w-16 bg-black bg-opacity-20 text-primary font-medium p-2 text-lg hover:bg-opacity-30"
        >
            Next
        </button>
    </div>
</template>
