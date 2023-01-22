<script setup>
import { HeaderComponet } from "@/components";
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
            <div
              class="bg-white border border-gray-200 rounded-md flex cursor-pointer hover:shadow-sm items-center justify-between gap-2 px-4 py-2"
            >
              <div class="flex gap-2 items-center">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                <div class="flex gap-1">
                  <div
                    class="w-8 h-8 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                </div>
                <div class="uppercase font-semibold text-sm">Group 1</div>
              </div>

              <div class="flex items-center">
                <div class="text-sm text-gray-400">2/</div>
                <div class="text-xl font-semibold">4</div>
              </div>
            </div>
            <div
              class="bg-white border border-gray-200 rounded-md flex cursor-pointer hover:shadow-sm items-center justify-between gap-2 px-4 py-2"
            >
              <div class="flex gap-2 items-center">
                <div
                  class="w-8 h-8 border-2 relative border-white rounded-full bg-slate-200"
                >
                  <div
                    class="w-full h-full bg-slate-300 rounded-full animate-ping delay-1000"
                  ></div>
                  <img class="absolute top-0" src="@/assets/images/add.svg" />
                </div>
                <div class="flex gap-1">
                  <div
                    class="w-8 h-8 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                </div>
                <div class="uppercase font-semibold text-sm">Group 2</div>
              </div>

              <div class="flex items-center">
                <div class="text-sm text-gray-400">2/</div>
                <div class="text-xl font-semibold">4</div>
              </div>
            </div>
            <div
              class="bg-white rounded-md border border-gray-200 flex cursor-pointer hover:shadow-sm items-center justify-between gap-2 px-4 py-2"
            >
              <div class="flex gap-2 items-center">
                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                <div class="flex gap-1">
                  <div
                    class="w-8 h-8 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                  <div
                    class="w-8 h-8 -ml-4 border-2 border-white rounded-full bg-slate-200"
                  >
                    <img src="@/assets/images/person.png" />
                  </div>
                </div>
                <div class="uppercase font-semibold text-sm">Group 3</div>
              </div>

              <div class="flex items-center">
                <div class="text-sm text-gray-400">2/</div>
                <div class="text-xl font-semibold">4</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
