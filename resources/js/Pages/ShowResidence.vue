<template>
  <div class="relative overflow-hidden bg-white py-16">
    <div class="hidden lg:absolute lg:inset-y-0 lg:block lg:h-full lg:w-full lg:[overflow-anchor:none]">
      <div class="relative mx-auto h-full max-w-prose text-lg" aria-hidden="true">
        <svg class="absolute top-12 left-full translate-x-32 transform" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
        </svg>
        <svg class="absolute top-1/2 right-full -translate-y-1/2 -translate-x-32 transform" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
        </svg>
        <svg class="absolute bottom-12 left-full translate-x-32 transform" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
        </svg>
      </div>
    </div>

    <div class="relative px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-prose text-lg">
        <Link :href="route('index')" class="flex items-center mb-8">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
          </svg>
          <p class="text-base font-semibold leading-8 text-gray-800">Kembali</p>
        </Link>
        <h1>
          <span class="block text-lg font-semibold text-indigo-600">Perumahan</span>
          <p class="mt-2 block text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Perumahan {{residence.residence_name}}</p>
        </h1>
        <p class="mt-8 text-xl leading-8 text-gray-500">{{residence.description}}</p>
        <img class="mt-8 w-full rounded-lg" :src="residence.id == 1 ? newCity1Img : residence.id == 2 ? cityView1Img : residence.id == 3 ? deVilla1Img : residence.id == 4 ? tanjungBanjarArumIndah1Img : grandHill1Img" alt />
        <img class="mt-8 w-full rounded-lg" :src="residence.id == 1 ? newCity2Img : residence.id == 2 ? cityView2Img : residence.id == 3 ? deVilla2Img : residence.id == 4 ? tanjungBanjarArumIndah2Img : grandHill2Img" alt />
        <img class="mt-8 w-full rounded-lg" :src="residence.id == 1 ? newCity3Img : residence.id == 2 ? cityView3Img : residence.id == 3 ? deVilla3Img : residence.id == 4 ? tanjungBanjarArumIndah3Img : grandHill3Img" alt />
        <img class="mt-8 w-full rounded-lg" :src="residence.id == 1 ? newCity4Img : residence.id == 2 ? cityView4Img : residence.id == 3 ? deVilla4Img : residence.id == 4 ? tanjungBanjarArumIndah4Img : grandHill4Img" alt />
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

import newCity1Img from "@/Assets/images/new-city-1.jpg";
import newCity2Img from "@/Assets/images/new-city-2.jpg";
import newCity3Img from "@/Assets/images/new-city-3.jpg";
import newCity4Img from "@/Assets/images/new-city-4.jpg";

import cityView1Img from "@/Assets/images/city-view-1.jpg";
import cityView2Img from "@/Assets/images/city-view-2.jpg";
import cityView3Img from "@/Assets/images/city-view-3.jpg";
import cityView4Img from "@/Assets/images/city-view-4.jpg";

import deVilla1Img from "@/Assets/images/de-villa-1.jpg";
import deVilla2Img from "@/Assets/images/de-villa-2.jpg";
import deVilla3Img from "@/Assets/images/de-villa-3.jpg";
import deVilla4Img from "@/Assets/images/de-villa.jpg";

import tanjungBanjarArumIndah1Img from "@/Assets/images/tanjung-banjar-arum-indah-1.jpg";
import tanjungBanjarArumIndah2Img from "@/Assets/images/tanjung-banjar-arum-indah-2.jpg";
import tanjungBanjarArumIndah3Img from "@/Assets/images/tanjung-banjar-arum-indah-3.jpg";
import tanjungBanjarArumIndah4Img from "@/Assets/images/tanjung-banjar-arum-indah-4.jpg";

import grandHill1Img from "@/Assets/images/grand-hill-1.jpg";
import grandHill2Img from "@/Assets/images/grand-hill-2.jpg";
import grandHill3Img from "@/Assets/images/grand-hill-3.jpg";
import grandHill4Img from "@/Assets/images/grand-hill.jpg";

export default {
  components: {
    Link,
  },
  props: {
    residence: {
      type: Object,
      required: true,
    },
  },
  setup() {
    return {
      newCity1Img,
      newCity2Img,
      newCity3Img,
      newCity4Img,

      cityView1Img,
      cityView2Img,
      cityView3Img,
      cityView4Img,

      deVilla1Img,
      deVilla2Img,
      deVilla3Img,
      deVilla4Img,

      tanjungBanjarArumIndah1Img,
      tanjungBanjarArumIndah2Img,
      tanjungBanjarArumIndah3Img,
      tanjungBanjarArumIndah4Img,

      grandHill1Img,
      grandHill2Img,
      grandHill3Img,
      grandHill4Img,
    };
  },
};
</script>
