<script setup>
import { useUser } from "@/composables";
const { me } = useUser();
</script>

<template>
  <div class="p-4 flex justify-between items-center">
    <div>
      <div class="text-xl font-bold">Pickleball Clubs</div>
      <div class="text-gray-400">reservation</div>
    </div>

    <div class="flex gap-2">
      <div>
        <img class="w-8" :src="me?.avatar" />
      </div>
      <div class="flex flex-col uppercase gap-1 text-xs">
        <div class="text-gray-400">WELCOME</div>
        <div class="font-bold">{{ me?.username }}</div>
      </div>
    </div>
  </div>
</template>
