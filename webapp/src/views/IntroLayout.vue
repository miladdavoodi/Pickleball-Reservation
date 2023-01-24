<template>
  <div class="relative">
    <div class="max-w-lg flex flex-col min-h-screen mx-auto bg-slate-100">
      <div class="flex-1"></div>
      <div class="flex-1 text-center">
        <img class="inline-block" src="@/assets/images/tennis-court.svg" />
        <div class="text-left w-52 mx-auto my-8">
          <div class="font-semibold text-2xl">Pickleball Clubs</div>
          <div class="text-sm text-gray-500">Reservation Platform</div>
        </div>
        <div class="p-10">
          <RouterLink
            to="/explore"
            class="bg-green-600 hover:bg-green-700 cursor-pointer flex p-4 text-sm items-center rounded-md"
          >
            <div class="w-full text-white font-semibold">START NOW</div>
            <img src="@/assets/images/arrow-right.svg" />
          </RouterLink>
        </div>
      </div>
    </div>
  </div>
</template>
