import axios from "axios";

const instance = axios.create({
  baseURL: "/",
});

instance.interceptors.request.use(async (config) => {
  config.baseURL = process.env.VUE_APP_BASE_URL || "/";
  config.headers["Authorization"] = `Bearer ${
    localStorage?.access_token || ""
  }`;
  return config;
});

instance.interceptors.response.use(
  (response) => {
    return response;
  },
  async (error) => {
    if (
      (error.response.status === 401 ||
        error.response.status === 403 ||
        error.response.status === 405) &&
      window.location.pathname !== "/"
    ) {
      console.log("logout");
    } else {
      let err;
      try {
        err = Object.values(error.response.data.errors).join("<br>");
      } catch {
        err = error.response.data.message;
      }
      console.log("err", err);
    }
    return Promise.reject(error);
  }
);

export default instance;
