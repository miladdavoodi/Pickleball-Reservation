import { ref } from "vue";
import { api } from "@/services";

const loading = ref(false);
const me = ref("");

export default function useUser() {
  const fetchMe = async () => {
    loading.value = true;
    const response = await api.get("auth/me");
    me.value = response.data.data;
    loading.value = false;
  };

  const fetchUserList = async () => {
    const response = await api.get("user/showall");
    return response.data;
  };

  return {
    loading,
    me,
    fetchMe,
    fetchUserList,
  };
}
