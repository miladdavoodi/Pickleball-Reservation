<script setup>
import { ref } from "vue";
import { HeaderComponet } from "@/components";

import person1 from "@/assets/images/Ellipse-1.png";
import person2 from "@/assets/images/Ellipse-2.png";
import person3 from "@/assets/images/Ellipse-3.png";

const row = ref({
  id: 10001,
  title: "group 1",
  team: [
    { name: "Milad", avatar: person1 },
    { name: "ali", avatar: person2 },
    { name: "reza", avatar: person3 },
  ],
  limit: 4,
});
</script>

<template>
  <div class="relative">
    <div class="max-w-lg flex flex-col min-h-screen mx-auto bg-slate-100">
      <div>
        <header-componet />
      </div>
      <div class="flex-1 bg-slate-50 pt-10">
        <div class="flex flex-col gap-8">
          <div class="mx-4 flex flex-col gap-10">
            <div class="uppercase font-light mb-4 text-gray-400 text-2xl">
              Booking
            </div>
            <div class="w-24 p-1 h-28 relative mx-auto">
              <img class="absolute top-0" src="@/assets/images/env.svg" />
              <img
                class="w-10 border-4 rounded-full shadow-md border-white absolute -left-2 top-2"
                :src="person1"
              />
              <img
                class="w-10 border-4 rounded-full shadow-md border-white absolute -left-2 bottom-2"
                :src="person2"
              />
              <img
                class="w-10 border-4 rounded-full shadow-md border-white absolute -right-3 top-2"
                :src="person1"
              />
              <img
                class="w-10 border-4 rounded-full shadow-md border-white absolute -right-3 bottom-2"
                :src="person2"
              />
            </div>

            <div class="bg-white shadow-lg rounded-lg">
              <div class="bg-slate-100 rounded-t-lg p-4">
                <div
                  class="outline-none rounded-md flex cursor-pointer items-center justify-between gap-2"
                >
                  <div class="flex gap-2 items-center">
                    <div
                      class="w-8 h-8 border-2 relative border-white rounded-full bg-slate-200"
                    >
                      <div
                        class="w-full h-full bg-slate-300 rounded-full animate-ping delay-1000"
                      ></div>
                      <img
                        class="absolute top-0"
                        src="@/assets/images/add.svg"
                      />
                    </div>
                    <div class="flex gap-1">
                      <div
                        v-for="(person, index) in row.team"
                        :key="person.name"
                        :class="{ '-ml-3': index !== 0 }"
                        class="w-8 h-8 hover:shadow-lg border-2 border-white rounded-full bg-slate-200"
                      >
                        <img
                          :alt="person.name"
                          :title="person.name"
                          :src="person.avatar"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="uppercase font-semibold text-sm text-gray-600">
                    {{ row.title }}
                  </div>
                  <div class="flex items-center">
                    <div class="text-sm text-gray-400">
                      {{ row.team.length }} /
                    </div>
                    <div class="text-xl font-semibold">{{ row.limit }}</div>
                  </div>
                </div>
              </div>
              <div
                class="bg-white flex gap-3 items-center text-sm rounded-b-lg p-4"
              >
                <div class="text-green-600 font-semibold">TEAM :</div>
                <div
                  class="bg-gray-100 cursor-default text-xs py-1 px-3 text-gray-600 rounded-full"
                  v-for="(person, index) in row.team"
                  :key="index"
                >
                  {{ person.name }}
                </div>

                <div
                  class="bg-blue-500 shadow-md shadow-blue-300 hover:bg-blue-600 flex gap-1 cursor-pointer text-xs py-1 px-3 rounded-full"
                >
                  <img class="w-4" src="@/assets/images/add-icon.svg" />
                  <div class="text-white">Add You</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
