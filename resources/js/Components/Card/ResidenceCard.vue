<template>
  <div>
    <div class="relative">
      <div class="relative h-60 w-full overflow-hidden rounded-xl sm:rounded-2xl">
        <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?cs=srgb&dl=pexels-binyamin-mellish-186077.jpg&fm=jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center" />
      </div>
      <div class="relative mt-4">
        <h3 class="text-base font-medium text-gray-900">Perumahan Puri Nirwana Gajayana</h3>
        <div class="mt-1 text-sm text-gray-500 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
          </svg>
          Lihat Lokasi
        </div>
      </div>
      <div class="absolute inset-x-0 top-0 flex h-60 items-end justify-end overflow-hidden rounded-xl sm:rounded-2xl p-4">
        <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
        <div class="relative text-lg font-semibold text-white flex">
          <svg v-for="index in 5" :key="index" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
          </svg>
        </div>
      </div>
    </div>
    <div class="mt-4 flex space-x-2" v-if="isRecommended">
      <a href="#" class="relative shadow-lg flex items-center justify-center rounded-xl border border-transparent bg-yellow-400 py-3 px-3 text-sm font-medium text-white hover:bg-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
          <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#" class="w-full relative shadow-lg flex items-center justify-center rounded-xl border border-transparent bg-blue-500 py-3 px-8 text-sm font-medium text-white hover:bg-blue-600">Lihat Detail</a>
    </div>
	<div class="mt-4 w-full" v-else>
      <a href="#" class="relative shadow-lg w-full flex items-center justify-center rounded-xl border border-transparent bg-yellow-400 py-3 px-3 text-sm font-medium text-white hover:bg-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
          <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
        </svg>
		<span>Beri Penilaian</span>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isRecommended: {
      type: Boolean,
      default: true,
    },
  },
};
</script>