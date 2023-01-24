<script setup>
import { ref, onMounted, computed } from "vue";
import { useRoute } from "vue-router";

import { HeaderComponet } from "@/components";
import { useGroup, useUser } from "@/composables";

const { groupLoading, fetchGroupList, assign, unassign } = useGroup();
const { me } = useUser();
const route = useRoute();

const groupData = ref([]);
const limit = ref(4);
const personPosition = [
  "-left-2 top-2",
  "-left-2 bottom-2",
  "-right-3 top-2",
  "-right-3 bottom-2",
];

const groupRow = computed(() => {
  return groupData.value?.find((row) => row.id === parseInt(route.params.id));
});

const assignMe = async () => {
  await assign({
    user_id: parseInt(me.value?.id),
    group_id: parseInt(route.params.id),
  });
  groupData.value = await fetchGroupList();
};

const unassignMe = async () => {
  await unassign({
    user_id: parseInt(me.value?.id),
    group_id: parseInt(route.params.id),
  });
  groupData.value = await fetchGroupList();
};

const existMe = computed(() => {
  if (!me.value) return;
  return groupRow.value?.users.find((row) => row.id === me.value?.id)
    ? true
    : false;
});

onMounted(async () => {
  groupData.value = await fetchGroupList();
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
                v-for="(person, index) in groupRow?.users"
                :key="index"
                :class="personPosition[index]"
                class="w-10 border-4 rounded-full shadow-md border-white absolute"
                :src="person.avatar"
              />
            </div>

            <div class="bg-white shadow-lg rounded-lg">
              <div class="bg-slate-100 rounded-t-lg p-4">
                <div
                  class="outline-none rounded-md flex cursor-pointer items-center justify-between gap-2"
                >
                  <div class="flex gap-2 items-center">
                    <div
                      v-if="!existMe"
                      class="w-8 h-8 border-2 relative border-white rounded-full bg-slate-200"
                      @click="assignMe()"
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
                        v-for="(person, index) in groupRow?.users"
                        :key="person.name"
                        :class="{ '-ml-3': index !== 0 }"
                        class="w-8 h-8 hover:shadow-lg border-2 border-white rounded-full bg-slate-200"
                      >
                        <img
                          :alt="person.username"
                          :title="person.username"
                          :src="person.avatar"
                          class="rounded-full"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="uppercase font-semibold text-sm text-gray-600">
                    {{ groupRow?.title }}
                  </div>
                  <div class="flex items-center">
                    <div class="text-sm text-gray-400">
                      {{ groupRow?.users.length }} /
                    </div>
                    <div class="text-xl font-semibold">{{ limit }}</div>
                  </div>
                </div>
              </div>
              <div
                class="bg-white flex flex-wrap gap-3 items-center text-sm rounded-b-lg p-4"
              >
                <div class="text-green-600 font-semibold">TEAM :</div>
                <div
                  class="bg-gray-100 cursor-default text-xs py-1 px-3 text-gray-600 rounded-full"
                  v-for="(person, index) in groupRow?.users"
                  :key="index"
                >
                  {{ person?.username }}
                </div>

                <div
                  v-if="!existMe"
                  class="bg-blue-500 shadow-md shadow-blue-300 hover:bg-blue-600 flex gap-1 cursor-pointer text-xs py-1 px-3 rounded-full"
                >
                  <img class="w-4" src="@/assets/images/add-icon.svg" />
                  <div class="text-white" @click="assignMe()">
                    <div v-if="groupLoading">Loading ...</div>
                    <div v-else>Add You</div>
                  </div>
                </div>
                <div
                  v-else
                  class="bg-red-500 shadow-md shadow-red-300 hover:bg-red-600 flex gap-1 cursor-pointer text-xs py-1 px-3 rounded-full"
                >
                  <div class="text-white" @click="unassignMe()">
                    <div v-if="groupLoading">Loading ...</div>
                    <div v-else>Unassign</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
