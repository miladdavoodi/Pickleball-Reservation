<template>
  <div
    class="backdrop-blur-sm backdrop-filter fixed bg-opacity-60 left-0 right-0 top-0 bottom-0 bg-slate-300 z-20"
  >
    <div
      class="bg-white p-5 flex flex-col gap-4 rounded-lg backdrop-blur-sm backdrop-filter bg-opacity-90 max-w-md mx-auto shadow-2xl mt-16"
    >
      <div class="text-2xl font-bold uppercase">confirmation</div>
      <div class="text-sm text-gray-500">
        Do you want to be on the waiting list in group 4?
      </div>
      <div class="flex gap-4">
        <div
          class="w-1/5 cursor-pointer text-center p-3 bg-slate-200 text-sm font-semibold"
        >
          NO
        </div>
        <div
          class="w-4/5 cursor-pointer text-center p-3 bg-slate-600 hover:bg-slate-700 text-white text-sm font-semibold"
        >
          YES
        </div>
      </div>
    </div>
  </div>
</template>
