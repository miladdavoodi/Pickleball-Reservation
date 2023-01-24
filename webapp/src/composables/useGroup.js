import { ref } from "vue";
import { api } from "@/services";

const groupLoading = ref(false);

export default function useGroup() {
  const fetchGroupList = async () => {
    groupLoading.value = true;
    const response = await api.get("group/showall");
    groupLoading.value = false;
    return response.data.data;
  };

  const assign = async (data) => {
    groupLoading.value = true;
    const response = await api.post("group/assign", data);
    groupLoading.value = false;
    return response.data.data;
  };

  const unassign = async (data) => {
    groupLoading.value = true;
    const response = await api.post("group/unassign", data);
    groupLoading.value = false;
    return response.data.data;
  };

  return {
    groupLoading,
    assign,
    unassign,
    fetchGroupList,
  };
}
