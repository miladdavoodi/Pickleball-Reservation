<script setup>
import { ref, onMounted } from "vue";
import { HeaderComponet, GroupComponet } from "@/components";
import { useGroup } from "@/composables";

const { fetchGroupList, groupLoading } = useGroup();
const groupList = ref([]);

onMounted(async () => {
  const res = await fetchGroupList();
  groupList.value = res;
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
          <div class="mx-4 flex flex-col gap-2">
            <div
              class="text-center text-green-600 font-semibold py-20"
              v-if="groupLoading"
            >
              Loading ...
            </div>
            <group-componet
              v-else
              v-for="(group, key) in groupList"
              v-bind="group"
              :index="key"
              :key="key"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
