<script setup>
import { defineProps, ref, computed } from "vue";
import { useUser } from "@/composables";
const { me } = useUser();

const limit = ref(4);
const props = defineProps({
  id: Number,
  index: Number,
  title: String,
  users: Array,
});

const isFullPerson = computed(() => {
  return props.users.length === limit.value;
});

const existMe = computed(() => {
  if (!me.value) return;
  return props.users.find((row) => row.id === me.value?.id) ? true : false;
});
</script>

<template>
  <div>
    <div
      class="text-2xl cursor-default flex gap-4 items-center text-gray-500 font-light py-5"
      v-if="index === 0"
    >
      <div class="w-3 h-3 bg-green-500 rounded-full">
        <div class="w-3 h-3 bg-green-500 animate-ping rounded-full"></div>
      </div>
      <div>playing now</div>
    </div>
    <div
      class="text-xl cursor-default text-gray-500 font-light py-5"
      v-if="index === 1"
    >
      Reservation list
    </div>
    <router-link
      :to="`/book/${props.id}`"
      :class="{
        ' border-green-500 bg-green-50 shadow-md shadow-green-200': index === 0,
      }"
      class="bg-white border outline-none border-gray-200 hover:border-gray-300 rounded-md flex cursor-pointer hover:shadow-sm items-center justify-between gap-2 px-4 py-2"
    >
      <div class="flex gap-2 items-center">
        <div class="w-2 h-2 bg-red-500 rounded-full" v-if="isFullPerson"></div>
        <div
          v-if="!existMe"
          class="w-8 h-8 border-2 relative border-white rounded-full bg-slate-200"
        >
          <div
            class="w-full h-full bg-slate-300 rounded-full animate-ping delay-1000"
          ></div>
          <img class="absolute top-0" src="@/assets/images/add.svg" />
        </div>
        <div class="flex gap-1">
          <div
            v-for="(person, index) in props.users"
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

      <div v-if="props.users.length < limit" class="flex gap-1 items-center">
        <div
          :class="{
            ' text-red-500': isFullPerson,
            ' text-green-600': !isFullPerson,
          }"
          class="text-sm"
        >
          {{ props.users.length }} /
        </div>
        <div class="text-xl font-semibold">{{ limit }}</div>
      </div>
      <div
        class="text-xs font-bold border border-red-300 text-red-500 bg-red-100 p-1 rounded-md"
        v-else
      >
        FULL
      </div>
    </router-link>
  </div>
</template>
