import { createRouter, createWebHistory } from "vue-router";
import HomeView from "@/views/IntroLayout.vue";
import ExploreLayout from "@/views/ExploreLayout.vue";
import BookLayout from "@/views/BookLayout.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/explore",
    name: "Explore",
    component: ExploreLayout,
  },
  {
    path: "/book/:id",
    name: "Book",
    component: BookLayout,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
