<script setup>
import { defineProps, computed } from "vue";

const props = defineProps({
  id: Number,
  title: String,
  limit: Number,
  team: Array,
});

const isFullPerson = computed(() => {
  return props.team.length === props.limit;
});
</script>

<template>
  <router-link
    :to="`/book/${props.id}`"
    class="bg-white border outline-none border-gray-200 hover:border-gray-300 rounded-md flex cursor-pointer hover:shadow-sm items-center justify-between gap-2 px-4 py-2"
  >
    <div class="flex gap-2 items-center">
      <div class="w-2 h-2 bg-red-500 rounded-full" v-if="isFullPerson"></div>
      <div
        v-else
        class="w-8 h-8 border-2 relative border-white rounded-full bg-slate-200"
      >
        <div
          class="w-full h-full bg-slate-300 rounded-full animate-ping delay-1000"
        ></div>
        <img class="absolute top-0" src="@/assets/images/add.svg" />
      </div>
      <div class="flex gap-1">
        <div
          v-for="(person, index) in props.team"
          :key="person.name"
          :class="{ '-ml-3': index !== 0 }"
          class="w-8 h-8 hover:shadow-lg border-2 border-white rounded-full bg-slate-200"
        >
          <img :alt="person.name" :title="person.name" :src="person.avatar" />
        </div>
      </div>
    </div>
    <div class="uppercase font-semibold text-sm text-gray-400">
      {{ props.title }}
    </div>

    <div class="flex gap-1 items-center">
      <div
        :class="{
          ' text-red-500': isFullPerson,
          ' text-green-600': !isFullPerson,
        }"
        class="text-sm"
      >
        {{ props.team.length }} /
      </div>
      <div class="text-xl font-semibold">{{ props.limit }}</div>
    </div>
  </router-link>
</template>
