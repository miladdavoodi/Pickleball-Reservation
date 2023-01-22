<script setup>
import { ref } from "vue";
import { HeaderComponet, GroupComponet } from "@/components";

import person1 from "@/assets/images/Ellipse-1.png";
import person2 from "@/assets/images/Ellipse-2.png";
import person3 from "@/assets/images/Ellipse-3.png";
import person4 from "@/assets/images/Ellipse-4.png";

const groupList = ref([
  {
    id: 10001,
    title: "group 1",
    team: [
      { name: "Milad", avatar: person1 },
      { name: "ali", avatar: person2 },
      { name: "reza", avatar: person3 },
    ],
    limit: 4,
  },
  {
    id: 10002,
    title: "group 2",
    team: [
      { name: "Milad", avatar: person4 },
      { name: "ali", avatar: person1 },
      { name: "reza", avatar: person2 },
      { name: "javad", avatar: person3 },
    ],
    limit: 4,
  },
  {
    id: 10003,
    title: "group 3",
    team: [
      { name: "Milad", avatar: person2 },
      { name: "ali", avatar: person4 },
      { name: "reza", avatar: person3 },
      { name: "ahad", avatar: person1 },
    ],
    limit: 4,
  },
]);
</script>

<template>
  <div class="relative">
    <div class="max-w-lg flex flex-col min-h-screen mx-auto bg-slate-100">
      <div>
        <header-componet />
      </div>
      <div class="flex-1 bg-slate-50 pt-10">
        <div class="flex flex-col gap-8">
          <div class="mx-4 flex flex-col gap-2">
            <div class="uppercase font-light mb-4 text-gray-400 text-2xl">
              explore
            </div>
            <group-componet
              v-for="(group, key) in groupList"
              v-bind="group"
              :key="key"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
