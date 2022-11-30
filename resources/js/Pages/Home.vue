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
              <img src="@/Assets/images/logo.svg" alt class="h-8" />
            </div>
            <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12 ml-10">
              <Link v-for="item in navigation" :key="item.name" :href="item.href" class="font-semibold text-gray-900 hover:text-blue-600">{{ item.name }}</Link>
            </div>
          </div>
          <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end space-x-3">
            <Link :href="route('login')" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Masuk</Link>
            <Link :href="route('register')" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm bg-blue-500">Daftar</Link>
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
                <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                  <img src="@/Assets/images/logo.svg" alt class="h-6" />
                </div>
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
                  <Link v-for="item in navigation" :key="item.name" :href="item.href" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">{{ item.name }}</Link>
                </div>
                <div class="py-6 flex space-x-3">
                  <Link :href="route('login')" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Masuk</Link>
                  <Link :href="route('register')" class="inline-block rounded-lg px-4 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm bg-blue-500">Daftar</Link>
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
              <p class="mt-4 sm:mt-6 text-sm sm:text-lg sm:leading-8 text-gray-600 text-center">Kamu yang bingung mencari perumahan yang tepat untuk kamu dan keluarga kamu? Web Sistem Rekomendasi Perumahan akan membantu memberikan rekomendasi perumahan kepada kamu dalam pemilihan perumahan di Malang Raya</p>
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

  <!-- content -->
  <main id="content">
    <div class="isolate">
      <div class="mx-auto max-w-6xl py-5 px-4 sm:py-10 sm:px-6 lg:px-8">
        
        <!-- hasil rekomendasi -->
        <div>
          <h2 class="text-3xl font-bold text-gray-900">Rekomendasi Perumahan untuk kamu</h2>
          <div v-if="sortDescrecommendations" class="mt-8 grid grid-cols-1 gap-y-10 sm:grid-cols-2 sm:gap-x-4 lg:grid-cols-3 xl:gap-x-8">
            <div v-for="(recommendation, index) in sortDescrecommendations" :key="recommendation.id">
              <div v-if="index < 3">
                <div class="relative">
                  <div class="relative h-60 w-full overflow-hidden rounded-xl sm:rounded-2xl">
                    <img :src="recommendation.residence.id == 1 ? newCityMalangImg : recommendation.residence.id == 2 ? cityViewImg : recommendation.residence.id == 3 ? deVillaImg : recommendation.residence.id == 4 ? tanjungBanjarArumIndahImg : grandHillImg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center" />
                  </div>
                  <div class="relative mt-4">
                    <h3 class="text-base font-medium text-gray-900">Perumahan {{ recommendation.residence.residence_name }}</h3>
                    <a :href="recommendation.residence.location" target="_blank" class="mt-1 text-sm text-blue-500 flex items-center hover:underline">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                      </svg>
                      Lihat Lokasi
                    </a>
                  </div>
                  <div class="absolute inset-x-0 top-0 flex h-60 items-end justify-end overflow-hidden rounded-xl sm:rounded-2xl p-4">
                    <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                    <!-- <div class="relative text-lg font-semibold text-white flex">
                      <svg v-for="index in 5" :key="index" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                      </svg>
                    </div> -->
                  </div>
                </div>
                <div class="mt-4 flex space-x-2">
                  <Link :href="route('residence.show', recommendation.residence.id)" class="w-full relative shadow-lg flex items-center justify-center rounded-xl border border-transparent bg-blue-500 py-3 px-8 text-sm font-medium text-white hover:bg-blue-600">Lihat Detail</Link>
                </div>
              </div>
            </div>
          </div>
          <div v-else class="mt-8">
            <div class="rounded-md bg-blue-50 p-4">
              <div class="flex">
                <div class="flex-shrink-0">
                  <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 10.5a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0zM8.25 9.75A.75.75 0 019 9h.253a1.75 1.75 0 011.709 2.13l-.46 2.066a.25.25 0 00.245.304H11a.75.75 0 010 1.5h-.253a1.75 1.75 0 01-1.709-2.13l.46-2.066a.25.25 0 00-.245-.304H9a.75.75 0 01-.75-.75zM10 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="ml-3 flex-1 md:flex md:justify-between">
                  <p class="text-sm text-blue-700">Jika kamu ingin mendapatkan rekomendasi, silahkan login dan buat penilaian pada perumahan minimal 1 penilaian.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- daftar perumahan -->
        <div class="mt-24">
          <h2 class="text-3xl font-bold text-gray-900">Daftar Perumahan</h2>
          <div class="mt-8 grid grid-cols-1 gap-y-10 sm:grid-cols-2 sm:gap-x-4 lg:grid-cols-3 xl:gap-x-8">
            <div v-for="residence in residences" :key="residence.id">
              <div class="relative">
                <div class="relative h-60 w-full overflow-hidden rounded-xl sm:rounded-2xl">
                  <img :src="residence.id == 1 ? newCityMalangImg : residence.id == 2 ? cityViewImg : residence.id == 3 ? deVillaImg : residence.id == 4 ? tanjungBanjarArumIndahImg : grandHillImg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center" />
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
                  <!-- <div class="relative text-lg font-semibold text-white flex">
                    <svg v-for="index in 5" :key="index" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                  </div> -->
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Aksesibilitas ke Jalan Utama</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Aksesibilitas ke jalan utama yaitu kemudahan menuju jalan besar yang menjadi pangkal dari jalan yang lain.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Aksesibilitas ke Sekolah</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Aksesibilitas ke sekolah yaitu kemudahan menuju bangunan atau lembaga untuk belajar dan mengajar serta tempat menerima dan memberi pelajaran (menurut tingkatannya)</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Aksesibilitas ke Rumah Sakit</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Aksesibilitas ke rumah sakit yaitu kemudahan menuju tempat yang menyediakan dan memberikan pelayanan kesehatan yang meliputi berbagai masalah kesehatan.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Aksesibilitas ke Pusat Perbelanjaan</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Aksesibilitas ke pusat perbelanjaan yaitu kemudahan menuju tempat terbuka dekat dengan gedung-gedung di kota yang memiliki tempat untuk berjalan dan berbelanja.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Lebar Jalan</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Lebar jalan dimaksud adalah lebar jalan tanpa menghitung bahu jalan.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Kelebihan Tanah</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Kelebihan tanah dimaksud adalah jumlah yang dibayarkan konsumen kepada developer terhadap kelebihan tanah tersebut.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Fasilitas Umum</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Fasilitas umum dimaksud adalah fasilitas yang disediakan untuk kepentingan umum.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Harga</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Harga dimaksud adalah harga asli tanpa biaya pajak dan notaris.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Jaringan Listrik</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Jaringan listrik dimaksud adalah tersedianya jaringan listrik dan seberapa sering listrik padam</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Keamanan</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Keamanan dimaksud adalah seberapa sering terjadi kehilangan barang.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Kenyamanan</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Kenyamanan dimaksud adalah seberapa berisik, sejuk dan bersih keadaan lingkungan perumahan.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Luas Tanah</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Luas tanah dimaksud adalah apakah luas tanah sesuai dengan harga yang diberikan.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Tipe Rumah</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Tipe rumah dimaksud adalah tipe yang ada apakah sesuai dengan harga yang berikan.</p>
                    <div class="flex space-x-2 mt-3">
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
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Bukan Daerah Banjir</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Bukan daerah banjir dimaksud adalah seberapa sering perumahan tersebut terkena bencana banjir.</p>
                    <div class="flex space-x-2 mt-3">
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

                  <RadioGroup v-model="formRating.ratings.overall" class="mt-2 border p-4 rounded-xl">
                    <span class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Penilaian Keseluruhan</span>
                    <p class="text-xs sm:text-sm leading-6 text-gray-500">Nilai keseluruhan kamu dari semua kriteria diatas pada perumahan {{formRating.residence.residence_name}}.</p>
                    <div class="flex space-x-2 mt-3">
                      <RadioGroupOption as="div" v-for="option in ratingConsts" :key="option.value" :value="option" v-slot="{ checked }">
                        <div :class="[
                              checked || option.value < formRating.ratings.overall.value ? 'bg-white text-yellow-400' : 'bg-white text-gray-300', 'flex items-center justify-center text-sm sm:text-base font-medium uppercase'
                            ]">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                          </div>
                        </div>
                      </RadioGroupOption>
                      <span class="text-sm sm:text-base font-medium leading-6 text-gray-900">({{ formRating.ratings.overall.value }}) {{ formRating.ratings.overall.isShow ? formRating.ratings.overall.description : '' }}</span>
                    </div>
                  </RadioGroup>
                </div>
                <div class="mt-6 flex justify-end">
                  <button @click="submitRating" type="button" class="inline-flex items-center rounded-lg border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Dapatkan Rekomendasi</button>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>

    <!-- modal alert login -->
    <TransitionRoot as="template" :show="openModalAlertLogin">
      <Dialog as="div" class="relative z-10" @close="openModalAlertLogin = false">
        <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
        </TransitionChild>

        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
              <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                <div>
                  <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-5">
                    <DialogTitle as="h3" class="text-lg font-medium leading-6 text-gray-900">Mohon maaf kamu tidak bisa memberi penilaian karena belum login.</DialogTitle>
                  </div>
                </div>
                <div class="mt-5 sm:mt-6">
                  <Link :href="route('login')" class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">
                    Login Sekarang
                  </Link>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
  </main>

  <!-- footer -->
  <footer class="bg-white">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
      <div class="flex justify-center space-x-6 md:order-2">
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Facebook</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Instagram</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill-rule="evenodd"
              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
              clip-rule="evenodd"
            />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Twitter</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">GitHub</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd"
            />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Dribbble</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill-rule="evenodd"
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </div>
      <div class="mt-8 md:order-1 md:mt-0">
        <p class="text-center text-base text-gray-400">&copy; 2022 Muhammad Farid. All rights reserved.</p>
      </div>
    </div>
  </footer>
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

import newCityMalangImg from "@/Assets/images/new-city-malang.jpg";
import cityViewImg from "@/Assets/images/city-view.jpg";
import deVillaImg from "@/Assets/images/de-villa.jpg";
import tanjungBanjarArumIndahImg from "@/Assets/images/tanjung-banjar-arum-indah.jpg";
import grandHillImg from "@/Assets/images/grand-hill.jpg";
import { Inertia } from '@inertiajs/inertia';
import { Link, usePage } from '@inertiajs/inertia-vue3';

const navigation = [
  { name: "Tentang", href: "#" },
  { name: "Kontak", href: route('contact') },
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
    Link,
  },
  props: {
    recommendations: {
      type: Object,
      required: true,
    },
    residences: {
      type: Object,
      required: true,
    },
  },
  setup(props) {
    const sortDescrecommendations = ref(null);
    if (props.recommendations) {
      var toArray = Object.values(props.recommendations);
      sortDescrecommendations.value = [...toArray].sort(
        (a, b) => b.overall - a.overall
      );
    }

    const mobileMenuOpen = ref(false);
    const open = ref(false);
    const openModalAlertLogin = ref(false);

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
        overall: defaultOption,
      },
    });

    const handleOpenModalRating = (residence) => {
      if (!usePage().props.value.auth.user) {
        openModalAlertLogin.value = true;
      } else {
        formRating.residence = residence;
        open.value = true;
      }
    };

    const resetRating = () => {
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
      formRating.ratings.overall = defaultOption;
    }

    const handleCloseModalRating = () => {
      resetRating();
      open.value = false;
    };

    const submitRating = () => {
      Inertia.post(route('rating.store'), formRating);
      open.value = false;
      resetRating();
    }

    return {
      navigation,
      mobileMenuOpen,
      open,
      handleOpenModalRating,
      handleCloseModalRating,
      ratingConsts,
      rate,
      formRating,
      newCityMalangImg,
      cityViewImg,
      deVillaImg,
      tanjungBanjarArumIndahImg,
      grandHillImg,
      sortDescrecommendations,
      submitRating,
      openModalAlertLogin,
    };
  },
};
</script>
