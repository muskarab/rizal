<template>
  <!-- hero -->
  <div class="isolate bg-white">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity="0.3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
        <defs>
          <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC" />
            <stop offset="1" stop-color="#FF80B5" />
          </linearGradient>
        </defs>
      </svg>
    </div>
    <div class="px-6 pt-6 lg:px-8">
      <div class="max-w-6xl mx-auto">
        <nav class="flex h-9 items-center justify-between" aria-label="Global">
          <div class="flex items-center">
            <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
              <h1 class="font-extrabold text-gray-900 text-xl">
                RESI
                <span class="text-blue-600">COM</span>
              </h1>
            </div>
            <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12 ml-10">
              <a v-for="item in navigation" :key="item.name" :href="item.href" class="font-semibold text-gray-900 hover:text-blue-600">{{ item.name }}</a>
            </div>
          </div>
          <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end space-x-3">
            <a href="#" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Masuk</a>
            <a href="#" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm bg-blue-500">Daftar</a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = true">
              <span class="sr-only">Open main menu</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
        </nav>
        <Dialog as="div" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
          <DialogPanel focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
            <div class="flex h-9 items-center justify-between">
              <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                <h1 class="font-extrabold text-gray-900 text-xl">
                  RESI
                  <span class="text-blue-600">COM</span>
                </h1>
              </div>
              <div class="flex">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = false">
                  <span class="sr-only">Close menu</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a v-for="item in navigation" :key="item.name" :href="item.href" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">{{ item.name }}</a>
                </div>
                <div class="py-6 flex space-x-3">
                  <a href="#" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Masuk</a>
                  <a href="#" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm bg-blue-500">Daftar</a>
                </div>
              </div>
            </div>
          </DialogPanel>
        </Dialog>
      </div>
    </div>
    <main>
      <div class="relative px-6 lg:px-8">
        <div class="mx-auto max-w-3xl py-20 sm:py-28">
          <div>
            <div class="mb-4 sm:mb-6 flex justify-center">
              <div class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 font-semibold bg-blue-300 text-blue-700">LET'S GO</div>
            </div>
            <div>
              <h1 class="text-3xl font-bold sm:leading-[70px] text-center sm:text-6xl">Sistem Rekomendasi Perumahan Malang Raya</h1>
              <p class="mt-4 sm:mt-6 text-sm sm:text-lg sm:leading-8 text-gray-600 text-center">Anda yang bingung mencari perumahan yang tepat untuk anda dan keluarga anda? Web Sistem Rekomendasi Perumahan akan membantu memberikan rekomendasi perumahan kepada anda dalam pemilihan perumahan di Malang Raya</p>
              <div class="mt-8 flex gap-x-4 sm:justify-center">
                <a href="#content" class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                  Dapatkan Rekomendasi
                  <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
              <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity="0.3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                  <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#9089FC" />
                    <stop offset="1" stop-color="#FF80B5" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <main id="content">
    <div class="isolate">
      <div class="mx-auto max-w-6xl py-5 px-4 sm:py-10 sm:px-6 lg:px-8">
        <!-- <div>
          <h2 class="text-3xl font-bold text-gray-900">Rekomendasi</h2>

          <div class="mt-8 grid grid-cols-1 gap-y-10 sm:grid-cols-2 sm:gap-x-4 lg:grid-cols-3 xl:gap-x-8">
            <div v-for="index in 5" :key="index">
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
              <div class="mt-4 flex space-x-2">
                <a href="#" class="relative shadow-lg flex items-center justify-center rounded-xl border border-transparent bg-yellow-400 py-3 px-3 text-sm font-medium text-white hover:bg-yellow-500">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="w-full relative shadow-lg flex items-center justify-center rounded-xl border border-transparent bg-blue-500 py-3 px-8 text-sm font-medium text-white hover:bg-blue-600">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>-->

        <div>
          <div class="mt-8 grid grid-cols-1 gap-y-10 sm:grid-cols-2 sm:gap-x-4 lg:grid-cols-3 xl:gap-x-8">
            <div v-for="residence in residences" :key="residence.id">
              <div class="relative">
                <div class="relative h-60 w-full overflow-hidden rounded-xl sm:rounded-2xl">
                  <img :src="residence.image" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center" />
                </div>
                <div class="relative mt-4">
                  <h3 class="text-base font-medium text-gray-900">Perumahan {{residence.residence_name}}</h3>
                  <a :href="residence.location" target="_blank" class="mt-1 text-sm text-blue-500 flex items-center hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                      <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    Lihat Lokasi
                  </a>
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
              <div class="mt-4 w-full">
                <button @click="handleOpenModalRating(residence)" type="button" class="relative shadow-lg w-full flex items-center justify-center rounded-xl border border-transparent bg-yellow-400 py-3 px-3 text-sm font-medium text-white hover:bg-yellow-500">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                  </svg>
                  <span>Beri Penilaian</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->
    <TransitionRoot as="template" :show="open">
      <Dialog as="div" class="relative z-10" @close="handleCloseModalRating">
        <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
        </TransitionChild>

        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
              <DialogPanel class="relative transform overflow-hidden rounded-2xl bg-white px-9 py-10 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">
                <div>
                  <div class="mb-8 text-left">
                    <span class="text-sm leading-6 text-gray-400">Penilaian</span>
                    <DialogTitle as="h3" class="text-2xl font-bold leading-6 text-gray-900">Perumahan {{formRating.residence.residence_name}}</DialogTitle>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-2">
                  <RadioGroup v-model="formRating.ratings.aksesibilitas_jalan_utama" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.aksesibilitas_jalan_utama.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.aksesibilitas_jalan_utama.value }}) {{ formRating.ratings.aksesibilitas_jalan_utama.isShow ? formRating.ratings.aksesibilitas_jalan_utama.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.aksesibilitas_sekolah" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.aksesibilitas_sekolah.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.aksesibilitas_sekolah.value }}) {{ formRating.ratings.aksesibilitas_sekolah.isShow ? formRating.ratings.aksesibilitas_sekolah.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.aksesibilitas_rumah_sakit" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.aksesibilitas_rumah_sakit.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.aksesibilitas_rumah_sakit.value }}) {{ formRating.ratings.aksesibilitas_rumah_sakit.isShow ? formRating.ratings.aksesibilitas_rumah_sakit.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.aksesibilitas_pusat_perbelanjaan" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.aksesibilitas_pusat_perbelanjaan.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.aksesibilitas_pusat_perbelanjaan.value }}) {{ formRating.ratings.aksesibilitas_pusat_perbelanjaan.isShow ? formRating.ratings.aksesibilitas_pusat_perbelanjaan.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.lebar_jalan" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.lebar_jalan.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.lebar_jalan.value }}) {{ formRating.ratings.lebar_jalan.isShow ? formRating.ratings.lebar_jalan.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.kelebihan_tanah" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.kelebihan_tanah.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.kelebihan_tanah.value }}) {{ formRating.ratings.kelebihan_tanah.isShow ? formRating.ratings.kelebihan_tanah.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.fasilitas_umum" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.fasilitas_umum.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.fasilitas_umum.value }}) {{ formRating.ratings.fasilitas_umum.isShow ? formRating.ratings.fasilitas_umum.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.harga" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.harga.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.harga.value }}) {{ formRating.ratings.harga.isShow ? formRating.ratings.harga.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.jaringan_listrik" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.jaringan_listrik.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.jaringan_listrik.value }}) {{ formRating.ratings.jaringan_listrik.isShow ? formRating.ratings.jaringan_listrik.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.keamanan" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.keamanan.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.keamanan.value }}) {{ formRating.ratings.keamanan.isShow ? formRating.ratings.keamanan.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.kenyamanan" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.kenyamanan.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.kenyamanan.value }}) {{ formRating.ratings.kenyamanan.isShow ? formRating.ratings.kenyamanan.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.luas_tanah" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.luas_tanah.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.luas_tanah.value }}) {{ formRating.ratings.luas_tanah.isShow ? formRating.ratings.luas_tanah.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.tipe_rumah" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.tipe_rumah.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.tipe_rumah.value }}) {{ formRating.ratings.tipe_rumah.isShow ? formRating.ratings.tipe_rumah.description : '' }}</span>
                    </div>
                  </RadioGroup>

                  <RadioGroup v-model="formRating.ratings.bukan_daerah_banjir" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <div class="flex space-x-2 mt-2">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.bukan_daerah_banjir.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.bukan_daerah_banjir.value }}) {{ formRating.ratings.bukan_daerah_banjir.isShow ? formRating.ratings.bukan_daerah_banjir.description : '' }}</span>
                    </div>
                  </RadioGroup>
                </div>
                <div class="mt-6 flex justify-end">
                  <button type="button" class="inline-flex items-center rounded-lg border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Dapatkan Rekomendasi
                  </button>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
  </main>
</template>

<script>
import { ref, reactive } from "vue";
import {
  Dialog,
  DialogPanel,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
  RadioGroup,
  RadioGroupLabel,
  RadioGroupOption,
} from "@headlessui/vue";

const navigation = [
  { name: "Tentang", href: "#" },
  { name: "Kontak", href: "#" },
];

const ratingConsts = [
  { value: 1, description: "Sangat Tidak Baik", isShow: true },
  { value: 2, description: "Tidak Baik", isShow: true },
  { value: 3, description: "Cukup Baik", isShow: true },
  { value: 4, description: "Baik", isShow: true },
  { value: 5, description: "Sangat Baik", isShow: true },
];

export default {
  components: {
    Dialog,
    DialogPanel,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    RadioGroup,
    RadioGroupLabel,
    RadioGroupOption,
  },
  props: {
    residences: {
      type: Object,
      required: true,
    },
  },
  setup() {
    const mobileMenuOpen = ref(false);
    const open = ref(false);

    const defaultOption = {
      value: 0,
      description: "Tidak Tahu",
      isShow: false,
    };
    const rate = ref(defaultOption);
    const formRating = reactive({
      residence: null,
      ratings: {
        aksesibilitas_jalan_utama: defaultOption,
        aksesibilitas_sekolah: defaultOption,
        aksesibilitas_rumah_sakit: defaultOption,
        aksesibilitas_pusat_perbelanjaan: defaultOption,
        lebar_jalan: defaultOption,
        kelebihan_tanah: defaultOption,
        fasilitas_umum: defaultOption,
        harga: defaultOption,
        jaringan_listrik: defaultOption,
        keamanan: defaultOption,
        kenyamanan: defaultOption,
        luas_tanah: defaultOption,
        tipe_rumah: defaultOption,
        bukan_daerah_banjir: defaultOption,
      },
    });

    const handleOpenModalRating = (residence) => {
      formRating.residence = residence;
      open.value = true;
    };

    const handleCloseModalRating = () => {
      formRating.ratings.aksesibilitas_jalan_utama = defaultOption;
      formRating.ratings.aksesibilitas_sekolah = defaultOption;
      formRating.ratings.aksesibilitas_rumah_sakit = defaultOption;
      formRating.ratings.aksesibilitas_pusat_perbelanjaan = defaultOption;
      formRating.ratings.lebar_jalan = defaultOption;
      formRating.ratings.kelebihan_tanah = defaultOption;
      formRating.ratings.fasilitas_umum = defaultOption;
      formRating.ratings.harga = defaultOption;
      formRating.ratings.jaringan_listrik = defaultOption;
      formRating.ratings.keamanan = defaultOption;
      formRating.ratings.kenyamanan = defaultOption;
      formRating.ratings.luas_tanah = defaultOption;
      formRating.ratings.tipe_rumah = defaultOption;
      formRating.ratings.bukan_daerah_banjir = defaultOption;
      open.value = false;
    };

    return {
      navigation,
      mobileMenuOpen,
      open,
      handleOpenModalRating,
      handleCloseModalRating,
      ratingConsts,
      rate,
      formRating,
    };
  },
};
</script>
