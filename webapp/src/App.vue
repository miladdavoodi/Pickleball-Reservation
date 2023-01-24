<script setup>
import { onMounted } from "vue";
import { ConfirmComponet } from "@/components";
import { useUser } from "@/composables";
const { fetchMe, loading } = useUser();

onMounted(async () => {
  await fetchMe();
});
</script>

<template>
  <div v-if="!loading">
    <confirm-componet v-if="1 === 3" />
    <router-view />
  </div>
</template>
