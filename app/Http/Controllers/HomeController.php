<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $residences = Residence::get();

        $userId = Auth::user()->id;
        $getUnRatings = Rating::whereUserId($userId)->get();
        $getURatings = Rating::with('user')->where('user_id', '!=', $userId)->get()->groupBy('user_id');

        // variable aksesibilitas_jalan_utama
        $averageAksesibilitasJalanUmumUn = 0;
        $averageAksesibilitasJalanUmumU = 0;
        $sigmaAksesibilitasJalanUmum = 0;
        $sigmaAksesibilitasJalanUmumUn = 0;
        $sigmaAksesibilitasJalanUmumU = 0;
        $similarityAksesibilitasJalanUmum = 0;

        // variable aksesibilitas_sekolah
        $averageAksesibilitasSekolahUn = 0;
        $averageAksesibilitasSekolahU = 0;
        $sigmaAksesibilitasSekolah = 0;
        $sigmaAksesibilitasSekolahUn = 0;
        $sigmaAksesibilitasSekolahU = 0;
        $similarityAksesibilitasSekolah= 0;

        // variable aksesibilitas_rumah_sakit
        $averageAksesibilitasRumahSakitUn = 0;
        $averageAksesibilitasRumahSakitU = 0;
        $sigmaAksesibilitasRumahSakit = 0;
        $sigmaAksesibilitasRumahSakitUn = 0;
        $sigmaAksesibilitasRumahSakitU = 0;
        $similarityAksesibilitasRumahSakit= 0;

        // variable aksesibilitas_pusat_perbelanjaan
        $averageAksesibilitasPusatPerbelanjaanUn = 0;
        $averageAksesibilitasPusatPerbelanjaanU = 0;
        $sigmaAksesibilitasPusatPerbelanjaan = 0;
        $sigmaAksesibilitasPusatPerbelanjaanUn = 0;
        $sigmaAksesibilitasPusatPerbelanjaanU = 0;
        $similarityAksesibilitasPusatPerbelanjaan= 0;

        // variable lebar_jalan
        $averageLebarJalanUn = 0;
        $averageLebarJalanU = 0;
        $sigmaLebarJalan = 0;
        $sigmaLebarJalanUn = 0;
        $sigmaLebarJalanU = 0;
        $similarityLebarJalan= 0;

        // variable kelebihan_tanah
        $averageKelebihanTanahUn = 0;
        $averageKelebihanTanahU = 0;
        $sigmaKelebihanTanah = 0;
        $sigmaKelebihanTanahUn = 0;
        $sigmaKelebihanTanahU = 0;
        $similarityKelebihanTanah= 0;

        // variable fasilitas_umum
        $averageFasilitasUmumUn = 0;
        $averageFasilitasUmumU = 0;
        $sigmaFasilitasUmum = 0;
        $sigmaFasilitasUmumUn = 0;
        $sigmaFasilitasUmumU = 0;
        $similarityFasilitasUmum= 0;

        // variable harga
        $averageHargaUn = 0;
        $averageHargaU = 0;
        $sigmaHarga = 0;
        $sigmaHargaUn = 0;
        $sigmaHargaU = 0;
        $similarityHarga= 0;

        // variable jaringan_listrik
        $averageJaringanListrikUn = 0;
        $averageJaringanListrikU = 0;
        $sigmaJaringanListrik = 0;
        $sigmaJaringanListrikUn = 0;
        $sigmaJaringanListrikU = 0;
        $similarityJaringanListrik= 0;

        // variable keamanan
        $averageKeamananUn = 0;
        $averageKeamananU = 0;
        $sigmaKeamanan = 0;
        $sigmaKeamananUn = 0;
        $sigmaKeamananU = 0;
        $similarityKeamanan= 0;

        foreach ($getURatings as $getURating) {
            foreach ($getUnRatings as $key => $getUnRating) {
                // aksesibilitas_jalan_utama
                $averageAksesibilitasJalanUmumUn += $getUnRating->aksesibilitas_jalan_utama;
                $averageAksesibilitasJalanUmumU += $getURating[$key]['aksesibilitas_jalan_utama'];

                // aksesibilitas_sekolah
                $averageAksesibilitasSekolahUn += $getUnRating->aksesibilitas_sekolah;
                $averageAksesibilitasSekolahU += $getURating[$key]['aksesibilitas_sekolah'];

                // aksesibilitas_rumah_sakit
                $averageAksesibilitasRumahSakitUn += $getUnRating->aksesibilitas_rumah_sakit;
                $averageAksesibilitasRumahSakitU += $getURating[$key]['aksesibilitas_rumah_sakit'];

                // aksesibilitas_pusat_perbelanjaan
                $averageAksesibilitasPusatPerbelanjaanUn += $getUnRating->aksesibilitas_pusat_perbelanjaan;
                $averageAksesibilitasPusatPerbelanjaanU += $getURating[$key]['aksesibilitas_pusat_perbelanjaan'];
                
                // lebar_jalan
                $averageLebarJalanUn += $getUnRating->lebar_jalan;
                $averageLebarJalanU += $getURating[$key]['lebar_jalan'];

                // kelebihan_tanah
                $averageKelebihanTanahUn += $getUnRating->kelebihan_tanah;
                $averageKelebihanTanahU += $getURating[$key]['kelebihan_tanah'];

                // fasilitas_umum
                $averageFasilitasUmumUn += $getUnRating->fasilitas_umum;
                $averageFasilitasUmumU += $getURating[$key]['fasilitas_umum'];

                // harga
                $averageHargaUn += $getUnRating->harga;
                $averageHargaU += $getURating[$key]['harga'];

                // jaringan_listrik
                $averageJaringanListrikUn += $getUnRating->jaringan_listrik;
                $averageJaringanListrikU += $getURating[$key]['jaringan_listrik'];

                // keamanan
                $averageKeamananUn += $getUnRating->keamanan;
                $averageKeamananU += $getURating[$key]['keamanan'];
            }
            foreach ($getUnRatings as $key => $getUnRating) {
                // sigma 3 bagian aksesibilitas_jalan_utama
                $sigmaAksesibilitasJalanUmum += (($getUnRating->aksesibilitas_jalan_utama-($averageAksesibilitasJalanUmumUn/5))*($getURating[$key]['aksesibilitas_jalan_utama']-($averageAksesibilitasJalanUmumU/5)));
                $sigmaAksesibilitasJalanUmumUn += pow(($getUnRating->aksesibilitas_jalan_utama-($averageAksesibilitasJalanUmumUn/5)), 2);
                $sigmaAksesibilitasJalanUmumU += pow(($getURating[$key]['aksesibilitas_jalan_utama']-($averageAksesibilitasJalanUmumU/5)), 2);

                // sigma 3 bagian aksesibilitas_sekolah
                $sigmaAksesibilitasSekolah += (($getUnRating->aksesibilitas_sekolah-($averageAksesibilitasSekolahUn/5))*($getURating[$key]['aksesibilitas_sekolah']-($averageAksesibilitasSekolahU/5)));
                $sigmaAksesibilitasSekolahUn += pow(($getUnRating->aksesibilitas_sekolah-($averageAksesibilitasSekolahUn/5)), 2);
                $sigmaAksesibilitasSekolahU += pow(($getURating[$key]['aksesibilitas_sekolah']-($averageAksesibilitasSekolahU/5)), 2);
                
                // sigma 3 bagian aksesibilitas_rumah_sakit
                $sigmaAksesibilitasRumahSakit += (($getUnRating->aksesibilitas_rumah_sakit-($averageAksesibilitasRumahSakitUn/5))*($getURating[$key]['aksesibilitas_rumah_sakit']-($averageAksesibilitasRumahSakitU/5)));
                $sigmaAksesibilitasRumahSakitUn += pow(($getUnRating->aksesibilitas_rumah_sakit-($averageAksesibilitasRumahSakitUn/5)), 2);
                $sigmaAksesibilitasRumahSakitU += pow(($getURating[$key]['aksesibilitas_rumah_sakit']-($averageAksesibilitasRumahSakitU/5)), 2);
                
                // sigma 3 bagian aksesibilitas_pusat_perbelanjaan
                $sigmaAksesibilitasPusatPerbelanjaan += (($getUnRating->aksesibilitas_pusat_perbelanjaan-($averageAksesibilitasPusatPerbelanjaanUn/5))*($getURating[$key]['aksesibilitas_pusat_perbelanjaan']-($averageAksesibilitasPusatPerbelanjaanU/5)));
                $sigmaAksesibilitasPusatPerbelanjaanUn += pow(($getUnRating->aksesibilitas_pusat_perbelanjaan-($averageAksesibilitasPusatPerbelanjaanUn/5)), 2);
                $sigmaAksesibilitasPusatPerbelanjaanU += pow(($getURating[$key]['aksesibilitas_pusat_perbelanjaan']-($averageAksesibilitasPusatPerbelanjaanU/5)), 2);

                // sigma 3 bagian lebar_jalan
                $sigmaLebarJalan += (($getUnRating->lebar_jalan-($averageLebarJalanUn/5))*($getURating[$key]['lebar_jalan']-($averageLebarJalanU/5)));
                $sigmaLebarJalanUn += pow(($getUnRating->lebar_jalan-($averageLebarJalanUn/5)), 2);
                $sigmaLebarJalanU += pow(($getURating[$key]['lebar_jalan']-($averageLebarJalanU/5)), 2);

                // sigma 3 bagian kelebihan_tanah
                $sigmaKelebihanTanah += (($getUnRating->kelebihan_tanah-($averageKelebihanTanahUn/5))*($getURating[$key]['kelebihan_tanah']-($averageKelebihanTanahU/5)));
                $sigmaKelebihanTanahUn += pow(($getUnRating->kelebihan_tanah-($averageKelebihanTanahUn/5)), 2);
                $sigmaKelebihanTanahU += pow(($getURating[$key]['kelebihan_tanah']-($averageKelebihanTanahU/5)), 2);

                // sigma 3 bagian fasilitas_umum
                $sigmaFasilitasUmum += (($getUnRating->fasilitas_umum-($averageFasilitasUmumUn/5))*($getURating[$key]['fasilitas_umum']-($averageFasilitasUmumU/5)));
                $sigmaFasilitasUmumUn += pow(($getUnRating->fasilitas_umum-($averageFasilitasUmumUn/5)), 2);
                $sigmaFasilitasUmumU += pow(($getURating[$key]['fasilitas_umum']-($averageFasilitasUmumU/5)), 2);

                // sigma 3 bagian harga
                $sigmaHarga += (($getUnRating->harga-($averageHargaUn/5))*($getURating[$key]['harga']-($averageHargaU/5)));
                $sigmaHargaUn += pow(($getUnRating->harga-($averageHargaUn/5)), 2);
                $sigmaHargaU += pow(($getURating[$key]['harga']-($averageHargaU/5)), 2);

                // sigma 3 bagian jaringan_listrik
                $sigmaJaringanListrik += (($getUnRating->jaringan_listrik-($averageJaringanListrikUn/5))*($getURating[$key]['jaringan_listrik']-($averageJaringanListrikU/5)));
                $sigmaJaringanListrikUn += pow(($getUnRating->jaringan_listrik-($averageJaringanListrikUn/5)), 2);
                $sigmaJaringanListrikU += pow(($getURating[$key]['jaringan_listrik']-($averageJaringanListrikU/5)), 2);

                // sigma 3 bagian keamanan
                $sigmaKeamanan += (($getUnRating->keamanan-($averageKeamananUn/5))*($getURating[$key]['keamanan']-($averageKeamananU/5)));
                $sigmaKeamananUn += pow(($getUnRating->keamanan-($averageKeamananUn/5)), 2);
                $sigmaKeamananU += pow(($getURating[$key]['keamanan']-($averageKeamananU/5)), 2);
                
            }
            // similarity aksesibilitas_jalan_utama
            $similarityAksesibilitasJalanUmum = $sigmaAksesibilitasJalanUmum/((sqrt($sigmaAksesibilitasJalanUmumUn))*(sqrt($sigmaAksesibilitasJalanUmumU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityAksesibilitasJalanUmum . '<br>';
            
            // similarity aksesibilitas_sekolah
            $similarityAksesibilitasSekolah = $sigmaAksesibilitasSekolah/((sqrt($sigmaAksesibilitasSekolahUn))*(sqrt($sigmaAksesibilitasSekolahU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityAksesibilitasSekolah . '<br>';

            // similarity aksesibilitas_rumah_sakit
            $similarityAksesibilitasRumahSakit = $sigmaAksesibilitasRumahSakit/((sqrt($sigmaAksesibilitasRumahSakitUn))*(sqrt($sigmaAksesibilitasRumahSakitU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityAksesibilitasRumahSakit . '<br>';

            // similarity aksesibilitas_pusat_perbelanjaan
            $similarityAksesibilitasPusatPerbelanjaan = $sigmaAksesibilitasPusatPerbelanjaan/((sqrt($sigmaAksesibilitasPusatPerbelanjaanUn))*(sqrt($sigmaAksesibilitasPusatPerbelanjaanU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityAksesibilitasPusatPerbelanjaan . '<br>';

            // similarity lebar_jalan
            $similarityLebarJalan = $sigmaLebarJalan/((sqrt($sigmaLebarJalanUn))*(sqrt($sigmaLebarJalanU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityLebarJalan . '<br>';

            // similarity kelebihan_tanah
            $similarityKelebihanTanah = $sigmaKelebihanTanah/((sqrt($sigmaKelebihanTanahUn))*(sqrt($sigmaKelebihanTanahU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityKelebihanTanah . '<br>';

            // similarity fasilitas_umum
            $similarityFasilitasUmum = $sigmaFasilitasUmum/((sqrt($sigmaFasilitasUmumUn))*(sqrt($sigmaFasilitasUmumU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityFasilitasUmum . '<br>';

            // similarity harga
            $similarityHarga = $sigmaHarga/((sqrt($sigmaHargaUn))*(sqrt($sigmaHargaU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityHarga . '<br>';

            // similarity jaringan_listrik
            $similarityJaringanListrik = $sigmaJaringanListrik/((sqrt($sigmaJaringanListrikUn))*(sqrt($sigmaJaringanListrikU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityJaringanListrik . '<br>';

            // similarity keamanan
            $similarityKeamanan = $sigmaKeamanan/((sqrt($sigmaKeamananUn))*(sqrt($sigmaKeamananU)));
            echo 'ID ' . $getURating[0]['user_id'] .' = '. $similarityKeamanan . '<br>';

            // reset aksesibilitas_jalan_utama
            $averageAksesibilitasJalanUmumUn = 0;
            $averageAksesibilitasJalanUmumU = 0;
            $sigmaAksesibilitasJalanUmum = 0;
            $sigmaAksesibilitasJalanUmumUn = 0;
            $sigmaAksesibilitasJalanUmumU = 0;
            
            // reset aksesibilitas_sekolah
            $averageAksesibilitasSekolahUn = 0;
            $averageAksesibilitasSekolahU = 0;
            $sigmaAksesibilitasSekolah = 0;
            $sigmaAksesibilitasSekolahUn = 0;
            $sigmaAksesibilitasSekolahU = 0;

            // reset aksesibilitas_rumah_sakit
            $averageAksesibilitasRumahSakitUn = 0;
            $averageAksesibilitasRumahSakitU = 0;
            $sigmaAksesibilitasRumahSakit = 0;
            $sigmaAksesibilitasRumahSakitUn = 0;
            $sigmaAksesibilitasRumahSakitU = 0;

            // reset aksesibilitas_pusat_perbelanjaan
            $averageAksesibilitasPusatPerbelanjaanUn = 0;
            $averageAksesibilitasPusatPerbelanjaanU = 0;
            $sigmaAksesibilitasPusatPerbelanjaan = 0;
            $sigmaAksesibilitasPusatPerbelanjaanUn = 0;
            $sigmaAksesibilitasPusatPerbelanjaanU = 0;

            // reset lebar_jalan
            $averageLebarJalanUn = 0;
            $averageLebarJalanU = 0;
            $sigmaLebarJalan = 0;
            $sigmaLebarJalanUn = 0;
            $sigmaLebarJalanU = 0;

            // reset kelebihan_tanah
            $averageKelebihanTanahUn = 0;
            $averageKelebihanTanahU = 0;
            $sigmaKelebihanTanah = 0;
            $sigmaKelebihanTanahUn = 0;
            $sigmaKelebihanTanahU = 0;

            // reset fasilitas_umum
            $averageFasilitasUmumUn = 0;
            $averageFasilitasUmumU = 0;
            $sigmaFasilitasUmum = 0;
            $sigmaFasilitasUmumUn = 0;
            $sigmaFasilitasUmumU = 0;

            // reset harga
            $averageHargaUn = 0;
            $averageHargaU = 0;
            $sigmaHarga = 0;
            $sigmaHargaUn = 0;
            $sigmaHargaU = 0;

            // reset jaringan_listrik
            $averageJaringanListrikUn = 0;
            $averageJaringanListrikU = 0;
            $sigmaJaringanListrik = 0;
            $sigmaJaringanListrikUn = 0;
            $sigmaJaringanListrikU = 0;

            // reset keamanan
            $averageKeamananUn = 0;
            $averageKeamananU = 0;
            $sigmaKeamanan = 0;
            $sigmaKeamananUn = 0;
            $sigmaKeamananU = 0;
            echo '<br>';
        }
        // return Inertia::render('Home', [
        //     'residences' => $residences,
        // ]);
    }
}
