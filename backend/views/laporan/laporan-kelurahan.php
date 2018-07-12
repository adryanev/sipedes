<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 6/2/2018
 * Time: 2:28 PM
 */
/* @var $this yii\web\View
 * @var $kelurahan common\models\Kelurahan
 * @var $penilaianKelurahan common\models\PenilaianKelurahan
 * @var $penilaianWilayah common\models\PenilaianWilayahKelurahan
 * @var $penilaianPemerintahan common\models\PenilaianPemerintahanKelurahan
 * @var $penilaianKemasyarakatan common\models\PenilaianMasyarakatKelurahan
 * @var $a1 common\models\PenilaianKelurahanA1
 * @var $a2 common\models\PenilaianKelurahanA2
 * @var $a3 common\models\PenilaianKelurahanA3
 * @var $a4 common\models\PenilaianKelurahanA4
 * @var $a5 common\models\PenilaianKelurahanA5
 * @var $b1 common\models\PenilaianKelurahanB1
 * @var $b2 common\models\PenilaianKelurahanB2
 * @var $b3 common\models\PenilaianKelurahanB3
 * @var $b4 common\models\PenilaianKelurahanB4
 * @var $b5 common\models\PenilaianKelurahanB5
 * @var $c1 common\models\PenilaianKelurahanC1
 * @var $c2 common\models\PenilaianKelurahanC2
 * @var $c3 common\models\PenilaianKelurahanC3
 * @var $c4 common\models\PenilaianKelurahanC4
 * @var $c5 common\models\PenilaianKelurahanC5
 * @var $c6 common\models\PenilaianKelurahanC6
 * @var $c7 common\models\PenilaianKelurahanC7
 * @var $c8 common\models\PenilaianKelurahanC8
 * @var $c9 common\models\PenilaianKelurahanC9
 */

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian Kelurahan <?= $kelurahan->nama_kelurahan?></h4>

            <p>Tahun&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $penilaianKelurahan->tahun_penilaian?></p>
            <p>Nama Tim Penilai&emsp;: <?= $penilaianKelurahan->getPenilai()->one()->nama?></p>
            <p>Desa&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $kelurahan->nama_kelurahan ?></p>
            <p>Kecamatan&emsp;&emsp;&emsp;&emsp;: <?= $kelurahan->getKecamatan()->one()->nama_kecamatan ?></p>
            <p>Kabupaten/Kota&emsp;&emsp;: <?= $kelurahan->getKecamatan()->one()->getKabupaten()->one()->nama_kabupaten ?></p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Bidang Kewilayahan</h4>

            <table class="table table-bordered table-hover table-responsive table-box">
                <thead>
                <tr style="background-color: lightblue">
                    <th>NO</th>
                    <th>Identitas/Kondisi</th>
                    <th>&nbsp;</th>
                    <th colspan="3">Keterangan</th>
                </tr>
                <tr style="background-color: lightblue">
                    <th>1</th>
                    <th>2</th>
                    <th>&nbsp;</th>
                    <th colspan="3">3</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td colspan="5">I. Identitas Kelurahan</td>

                </tr>
                <tr>
                    <td>1</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a1->nama)?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kode</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a1->kode)?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Topologi</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a1->topologi)?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Orbitasi Wilayah ke Kabupaten/Kota</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a1->orbitasi)?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Kondisi Wilayah</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a1->kondisi_1)?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a1->kondisi_2)?></td>
                </tr>
                <tr>
                    <td colspan="5">II. Batas</td>

                </tr>
                <tr>
                    <td>1</td>
                    <td>Batas Desa</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a2->batas)?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Penetapan Batas Dengan Ordinat</td>
                    <td>:</td>
                    <td colspan="3"><?= \yii\helpers\HtmlPurifier::process($a2->penetapan_batas)?></td>
                </tr>
                <tr>
                    <td rowspan="5">3</td>
                    <td>Komposisi Umur</td>
                    <td>&nbsp;</td>
                    <td colspan="3">Tahun <?= $penilaianKelurahan->tahun_penilaian?></td>
                </tr>
                <tr>
                    <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 15 Tahun</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->umur_kurang_15?></td>
                </tr>
                <tr>
                    <td>Lebih dari 15 tahun sampa dengan 56 Tahun</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->umur_lebih_15_kurang_56?></td>
                </tr>
                <tr>
                    <td>Lebih dari 56 tahun</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->umur_lebih_56 ?></td>
                </tr>
                <tr>
                    <td rowspan="5">4</td>
                    <td colspan="4">Jumlah penduduk menurut gender (Banyak Orang)</td>

                </tr>
                <tr>
                    <td>Jumlah penduduk total</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->jumlah_penduduk_total ?></td>
                </tr>
                <tr>
                    <td>Jumlah penduduk laki-laki</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->jumlah_penduduk_laki ?></td>
                </tr>
                <tr>
                    <td>Jumlah penduduk perempuan</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->jumlah_penduduk_pr ?></td>
                </tr>
                <tr>
                    <td>Jumlah kepala keluarga</td>
                    <td>:</td>
                    <td colspan="3"><?= $a2->jumlah_kk ?></td>
                </tr>

                </tbody>

            </table>
            <table class="table table-bordered table-hover table-responsive table-box">
                <thead>
                <tr style="background-color: lightblue">
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Sub Indikator</th>
                    <th>Poin</th>
                    <th>Keterangan</th>
                </tr>
                <tr style="background-color: lightblue">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td colspan="5">III. Inovasi</td>
                </tr>
                <tr>
                    <td rowspan="15">1</td>
                    <td rowspan="15">Embrio Aktifitas Inovasi</td>
                    <td>a. Adanya Produk Unggulan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_1?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Adanya peran pemerintah dalam mengelola produk unggulan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_2?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Adanya keuntungan finansial untuk dari aktivitas ekonomi produktif.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_3?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d.Adanya keuntungan sosial dari aktivitas ekonomi produktif.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_4?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Adanya kegiatan kreatif yang membutuhkan teknologi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_5?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="6">2</td>
                    <td rowspan="6">Kelembagaan Inovasi</td>
                    <td>a. Adanya pelembagaan aktivitas inovasi masyarakat (mis. UMKM, koperasi, cluster).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_6?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Adanya peta rencana (roadmap inovasi) secara berkelanjutan dalam mengembangkan produk unggulan desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_7?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="15">3</td>
                    <td rowspan="15">Jejaring Informasi</td>
                    <td>a. Interkoneksitas yang terbangun dalam pengelolaan produk inovasi masyarakat (mis. adanya divisi kerjasama dalam manajemen UMKM/BUMDes).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_8?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kesepahaman dan kerjasama dengan pemerintahan sekitar dalam pengelolaan potensi khususnya produk unggulan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_9?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Dukungan pemerintahan supra (mis. kecamatan, kabupaten, provinsi, atau pusat) bagi pengembangan produk unggulan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_10?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Jaringan pengembangan (mis. dukungan dunia pendidikan dan keterampilan) untuk peningkatan kualitas produk unggulan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_11?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Jejaring Kerjasama dengan pihak ketiga dalam pemasaran produk inovasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_12?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="15">4</td>
                    <td rowspan="15">Budaya Informasi Masyarakat</td>
                    <td>a. Teknologi tepat guna yang ditemukan masyarakat 2 tahun terakhir.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_13?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>b. Pemanfaatan teknologi tepat guna.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_14?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Lembaga penyedia teknologi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_15?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Aktivitas masyarakat dalam pengembangan produk.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_16?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Upaya pelestarian pengembangan produk.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_17?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="6">5</td>
                    <td rowspan="6">Keterpaduan Perencanaan Inovasi</td>
                    <td>a. Adanya integrasi antara peta rencana (roadmap) inovasi dengan perencanaan pembangunan tahunan dan lima tahunan (Mis. Rencana Pembangunan Jangka Pendek dan Menengah).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_18?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>b. Adanya sinergi pengembangan inovasi dengan kerangka Sistem Inovasi Daerah (SIDa).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_19 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="12">6</td>
                    <td rowspan="12">Kepekaan Masyarakat</td>
                    <td>a. Penemuan inovasi yang ramah lingkungan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_20 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>b. Kemampuan penyesuaian produk inovasi terhadap dinamika tuntutan konsumen/pasar.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?=$a3->_21 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Adanya rencana pengembangan produk inovasi di dalam maupun di luar desa dan kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?=$a3->_22 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Adanya sinergi berbagai lembaga dalam pembangunan inovatif (Heksagonal)</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?=$a3->_23 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="21">7</td>
                    <td rowspan="21">Faktor-faktor Kunci dalam Pengelolaan Potensi secara Inovatif</td>
                    <td>a. Spesialisasi Produk Unggulan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_24 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>b. Dukungan Penelitian dan Pengembangan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_25 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Pengembangan Sumber Daya Manusia ataupun dari Sumber Daya Alam.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_26 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Ketersediaan dan Akses Bahan Baku dari dalam desa dan kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_27 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Ketersediaan Sumberdaya Modal dari pemerintah Desa dan Kelurahan atau pihak ke tiga.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_28 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>f. Pelatihan Kewirausahaan </td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_29 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>g. Adanya Kepemimpinan dan Visi Bersama dalam mengembangkan dan mengelola potensi Desa dan Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a3->_30 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah A3</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $a3->sub_total_kelurahan_a3?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="5">IV. Tanggap dan Siaga Bencana</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Perencanaan Kontingensi</td>
                    <td>Adanya musyawarah perencanaan identifikasi bencana</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_1?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="6">2</td>
                    <td rowspan="6">Peta Resiko Bencana</td>
                    <td>a. Ketersediaan peta bencana beserta rambu-rambunya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Sosialisasi mengenai peta bencana pada masyarakat dalam waktu 2 tahun terakhir ini.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="15">3</td>
                    <td rowspan="15">Sistem Peringatan Dini Terpusat pada Masyarakat</td>
                    <td>a. Pengetahuan dan simulasi dalam menghadapi Risiko 2 tahun terakhir.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Sistem Pemantauan yang dikembangkan pemerintah Desa dan Kelurahan dalam menghadapi bencana.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Layanan TIM penanganan bencana yang di bentuk Desa dan Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Penyebarluasan dan Komunikasi tanggap bencana.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_7 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Alat deteksi dini bencana.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_8 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="9">4</td>
                    <td rowspan="9">Infrastruktur Evakuasi</td>
                    <td>a. Tempat Evakuasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_9 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Jalur Evakuasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_10 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Sarana Evakuasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a4->_11 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah A4</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $a4->sub_total_kelurahan_a4?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="5">V. Pengaturan Investasi</td>
                </tr>
                <tr>
                    <td rowspan="15">1</td>
                    <td rowspan="15">Investasi yang masuk ke Desa dan Kelurahan</td>
                    <td>a. Investasi yang masik ke Desa dan Kelurahan dalam 2 tahun terakhir.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a5->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Apakah melibatkan BPD dan Pemerintah Desa dan Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a5->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Menyebabkan terjadinya pembebanan pada Desa dan Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a5->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Menyebabkan terjadinya alih fungsi lahan pertanian .</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a5->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah A5</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $a5->sub_total_kelurahan_a5?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr  style="background-color: cornflowerblue">
                    <td colspan="3" style="color: white"> Total Penilaian Kewilayahan</td>
                    <td class="font-600 text-center" style="font-size: xx-large; color: #ffffff;"><?= $penilaianWilayah->sub_total_wilayah?></td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Bidang Pemerintahan</h4>
            <table class="table table-bordered table-hover table-responsive table-box">
                <thead>
                <tr style="background-color: lightblue">
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Sub Indikator</th>
                    <th>Poin</th>
                    <th>Keterangan</th>
                </tr>
                <tr style="background-color: lightblue">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td rowspan="89">1</td>
                    <td rowspan="89">Sarana Prasarana</td>
                    <td>a. Gedung Kantor.</td>
                    <td rowspan="5" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_1?></td>
                    <td rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Ada, Di rumah pribadi</td>
                </tr>
                <tr>
                    <td>Ada, Sewa</td>
                </tr>
                <tr>
                    <td>Ada, Milik Pemda semipermanen</td>
                </tr>
                <tr>
                    <td>Ada, Milik Pemda permanen</td>
                </tr>
                <tr>
                    <td>b. Gedung Pertemuan.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_2?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada, Milik Pemda semipermanen</td>
                </tr>
                <tr>
                    <td>Ada, Milik Pemda permanen</td>
                </tr>

                <tr>
                    <td colspan="4">c. Perangkat Kelurahan</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_3?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>50% Bukan PNS</td>
                </tr>
                <tr>
                    <td>Di atas 50% PNS</td>
                </tr>

                <tr>
                    <td>d. Mesin Tik/Komputer.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_4?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>e. Kendaraan Dinas Lurah.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_5?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Stabil</td>
                </tr>
                <tr>
                    <td>Stabil</td>
                </tr>

                <tr>
                    <td>f. Struktur Organisasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_6?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Stabil</td>
                </tr>
                <tr>
                    <td>Stabil</td>
                </tr>

                <tr>
                    <td>g. Jaringan Listrik.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_7?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>h. Sumber Daya Listrik (PLN).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_8?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>i. Sumber Daya Listrik (NON-PLN).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_9?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>j. Perpustakaan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_10?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="4">2</td>
                    <td rowspan="4">Akuntabilitas</td>
                    <td>Kotak Pengaduan Masyarakat.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_11?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada, tapi tidak dimanfaatkan</td>
                </tr>
                <tr>
                    <td>Ada dan dimanfaatkan.</td>
                </tr>
                <tr>
                    <td rowspan="37">4</td>
                    <td rowspan="37">Administrasi</td>
                    <td>a. Laporan Kinerja Tahunan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_12?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Laporan Tahunan Lurah.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_13?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Papan Informasi Pelayanan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_14?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Loket Pelayanan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_15?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Buku Registrasi Pelayanan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_16?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>f. Buku Profil Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_17?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>g. Buku Administrasi Umum.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_18?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>h. Buku Administrasi Kependudukan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_19?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>i. Buku Administrasi Keuangan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_20?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>j. Buku Administrasi Pembangunan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_21?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>l. Kartu Uraian Tugas.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_22?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>m. Peta Wilayah Kewilayahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_23?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>n. Peta Batas Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_24?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah B1</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b1->sub_total_kelurahan_b1?></td>
                    <td>&nbsp;</td>
                </tr>

                <!-- =================================================================  Selesai B1-->
                <tr>
                    <td colspan="5">II. Kinerja</td>
                </tr>
                <tr>
                    <td rowspan="30">1</td>
                    <td rowspan="30">Kinerja</td>
                    <td colspan="3">a. Strategi dalam pemberdayaan masyarakat.</td>
                </tr>

                <tr>
                    <td>- Perencanaan Pembangunan Partisipatif Masyarakat (P3MD).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Peningkatan kapasistas kelompok masyarakat 2 tahun terakhir.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Fasilitasi dalam pemasaran produk unggulan dari masyarakat</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kebijakan dalam pemberdayaan masyarakat, ada tidaknya regulasi dalam pemberdayaan masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td colspan="3">c. Pembinaan Masyarakat</td>
                </tr>
                <tr>
                    <td>- Melakukan forum-forum kebersamaan seperti gotong royong 2 tahun terkahir</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_5  ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Reward bagi perangkat dan kelompok masyarakat</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td colspan="3">d. Budaya Kerja</td>
                </tr>
                <tr>
                    <td>- Apakah telah mendata kehadiran pegawai secara rutin.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_7 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td>Ya</td>
                </tr>
                <tr>
                    <td>- Apakah telah memiliki standar jam pelayanan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_8 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td>Ya</td>
                </tr>
                <tr>
                    <td>- Apakah sudah memiliki Standar Operasional Prosedur (SOP) Pelayanan Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b2->_9 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td>Ya</td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah B2</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b2->sub_total_kelurahan_b2?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="5">III. INISIATIF DAN KREATIVITAS DALAM PEMBERDAYAAN MASYARAKAT</td>
                </tr>
                <tr>
                    <td rowspan="18">1</td>
                    <td rowspan="18">Inisiatif dan Kreatifitas</td>
                    <td>a. Visi dan misi pemberdayaan masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b3->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kebijakan dalam rangka pemberdayaan masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b3->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Eksistensi institusi pemberdayaan masyarakat dan aparatur.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b3->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Alokasi anggaran untuk program pemberdayaan masyarakat dan aparatur desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b3->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Kebijakan pemerintah desa dalam pengentasan kemiskinan di pedesaan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b3->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>f. Alokasi anggaran untuk program pengentasan kemiskinan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b3->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah B3</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b3->sub_total_kelurahan_b3?></td>
                    <td>&nbsp;</td>
                </tr>
                <!-- ===============================PENILAIAN B4===================================== -->
                <tr>
                    <td colspan="5">IV. BERBASIS TEKNOLOGI INFORMASI/E-GOVERNMENT</td>
                </tr>
                <tr>
                    <td rowspan="6">1</td>
                    <td rowspan="6">Ketersediaan sistem teknologi informasi berbasis internet</td>
                    <td>a. Jaringan Internet.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Website Kelurahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="6">2</td>
                    <td rowspan="6">Perangkat Komputer</td>
                    <td>a. Software Dengan Spesifikasi Minimal  Untuk Operasi Jaringan Internet.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Hardware Dengan Spesifikasi Minimal  Untuk Operasi Jaringan Internet .</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="31">3</td>
                    <td rowspan="31">Administrasi</td>
                    <td colspan="3">a. Administrasi Berbasis Teknologi Informasi.</td>
                </tr>
                <tr>
                    <td>- Administrasi Umum.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Administrasi Kependudukan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Administrasi Keuangan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_7 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Administrasi BPD.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_8 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Administrasi Pembangunan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_9 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Administrasi Lainnya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_10 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Perangkat yang mengelola Teknologi Informasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_11 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Tersedia tokoh pemuda teknopreneur di tingkat RT/RW.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_12 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Perpustakaan Online.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_13 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e.Internet Gratis/Hotspot.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b4->_14 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah B3</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b4->sub_total_kelurahan_b4?></td>
                    <td>&nbsp;</td>
                </tr>
                <!-- ================== PENILAIAN B5 ================= -->
                <tr>
                    <td colspan="5">V. PELESTARIAN ADAT DAN BUDAYA</td>
                </tr>
                <tr>
                    <td rowspan="15">1</td>
                    <td rowspan="15">Pelestarian Adat dan Budaya</td>
                    <td>a. Pembinaan Partisipasi Masyarakat dalam Pelestarian Adat dan Budaya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b5->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Keterlibatan Kelembagaan Adat dalam Pelestarian Adat dan Budaya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b5->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Pembinaan Seni Budaya Setempat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b5->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Kebijakan Menjaga Kelestarian.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b5->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Alokasi Anggaran Pelestarian.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b5->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah B5</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b5->sub_total_kelurahan_b5?></td>
                    <td>&nbsp;</td>
                </tr>

                <tr  style="background-color: cornflowerblue">
                    <td colspan="3" style="color: white"> Total Penilaian Pemerintahan</td>
                    <td class="font-600 text-center" style="font-size: xx-large; color: #ffffff;"><?= $penilaianPemerintahan->sub_total_pemerintahan?></td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Bidang Kemasyarakatan</h4>
            <table class="table table-bordered table-hover table-responsive table-box">
                <thead>
                <tr style="background-color: lightblue">
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Sub Indikator</th>
                    <th>Poin</th>
                    <th>Keterangan</th>
                </tr>
                <tr style="background-color: lightblue">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td colspan="5" class="text-uppercase">I. PARTISIPASI MASYARAKAT</td>
                </tr>
                <tr>
                    <td rowspan="6">1</td>
                    <td rowspan="6">Musyawarah Dusun</td>
                    <td>a. Partisipasi Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c1->_1?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Rasio Laki-Laki dan Perempuan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c1->_2?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Seimbang</td>
                </tr>
                <tr>
                    <td>Seimbang</td>
                </tr>

                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Swadaya Masyarakat Untuk Pembangunan Sarana Prasarana Kelurahan 2 Tahun Terakhir.</td>
                    <td>Partisipasi Pendanaan Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c1->_3?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">3</td>
                    <td rowspan="3">Swakelola Masyarakat Untuk Pembangunan Sarana Prasarana Kelurahan 2 Tahun Terakhir.</td>
                    <td>Partisipasi Pengelolaan Pembangunan oleh Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c1->_4?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada Tim Pengelola Kegiatan</td>
                </tr>
                <tr>
                    <td>Ada Tim Pengelola Kegiatan</td>
                </tr>
                <tr>
                    <td rowspan="3">4</td>
                    <td rowspan="3">Gotong Royong Penduduk Kelurahan 2 Tahun Terakhir.</td>
                    <td>Aktifitas Gotong Royong Penduduk.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c1->_5?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada </td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C1</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c1->sub_total_kelurahan_c1?></td>
                    <td>&nbsp;</td>
                </tr>

                <!-- ================= PENILAIAN C2 ============================-->
                <tr>
                    <td colspan="5">II. LEMBAGA KEMASYARAKATAN</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Organisasi Pemuda</td>
                    <td>Aktifitas Organisasi Pemuda.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Organisasi Profesi (Petani, Pedagang, Nelayan, Buruh, Paguyuban, dll)</td>
                    <td>Aktifitas Organisasi Profesi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">3</td>
                    <td rowspan="3">Organisasi Olah Raga</td>
                    <td>Aktifitas Organisasi Olah Raga.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">4</td>
                    <td rowspan="3">LPM atau Sebutan Lain</td>
                    <td>Aktifitas LPM.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">5</td>
                    <td rowspan="3">Kelompok Gotong Royong</td>
                    <td>Aktifitas Organisasi Olah Raga.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">6</td>
                    <td rowspan="3">Karang Taruna</td>
                    <td>Aktifitas Karang Taruna.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">7</td>
                    <td rowspan="3">Lembaga Adat, Budaya dan Kesenian </td>
                    <td>Aktifitas Lembaga Adat, Budaya dan Kesenian.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_7 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">8</td>
                    <td rowspan="3">Kelompok Usaha</td>
                    <td>Aktifitas Kelompok Usaha.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_8?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">9</td>
                    <td rowspan="3">Koperasi </td>
                    <td>Memiliki Koperasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_9 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">10</td>
                    <td rowspan="3">Organisasi Perempuan</td>
                    <td>Aktifitas Organisasi Perempuan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c2->_10 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>



                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C2</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c2->sub_total_kelurahan_c2?></td>
                    <td>&nbsp;</td>
                </tr>

                <!-- ===========================PENILAIAN DESA C3============================== -->
                <tr>
                    <td colspan="5">III. PEMBERDAYAAN KESEJAHTERAAN KELUARGA (PKK)</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Lembaga PKK</td>
                    <td>Keberadaan PKK.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c3->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Program PKK</td>
                    <td>Realisasi 10 Program PKK.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c3->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="6">3</td>
                    <td rowspan="6">Organisasi PKK</td>
                    <td>Kelengkapan Kelompok Kerja.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c3->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Lengkap</td>
                </tr>
                <tr>
                    <td>Lengkap</td>
                </tr>
                <tr>
                    <td>Kelengkapan Kelompok Kerja Dasawisma.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c3->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Lengkap</td>
                </tr>
                <tr>
                    <td>Lengkap</td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C3</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c3->sub_total_kelurahan_c3?></td>
                    <td>&nbsp;</td>
                </tr>
                <!-- ===============================PENILAIAN B4===================================== -->
                <tr>
                    <td colspan="5">IV. KEAMANAN DAN KETERTIBAN</td>
                </tr>
                <tr>
                    <td rowspan="15">1</td>
                    <td rowspan="15">Pengamanan Lingkungan dan Manusia</td>
                    <td>a. Kerja sama pelestarian Lingkungan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kerja sama pemantauan limbah perusahaan yang ada di desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Kerja sama pendaur ulangan limbah.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>d. Petugas keamanan lingkungan (Linmas).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>e. Pos kamling (Keamanan Lingkungan).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="12">2</td>
                    <td rowspan="12">Konflik SARA</td>
                    <td>a. Konflik antar kelompok.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Konflik antar suku.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_7 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>c. Konflik berbau agama/kepercayaan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_8 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>b. Konflik antar RAS.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_9 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">3</td>
                    <td rowspan="3">Perkelahian</td>
                    <td>Kasus perkelahian yang menimbulkan korban dalam 2 tahun terkahir.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_10 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="6">4</td>
                    <td rowspan="6">Pencurian dan Perampokan</td>
                    <td>a. Kasus pencurian/perampokan biasa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_11 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kasus pencurian/perampokan dengan kekerasan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_12 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">5</td>
                    <td rowspan="3">Perjudian</td>
                    <td>Jumlah kasus perjudian dengan berbagai modus.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_13 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="6">6</td>
                    <td rowspan="6">Narkoba</td>
                    <td>a. Jumlah kasus narkoba dengan pelaku pemerintah desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_14 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Anggota masyarakat yang terkena narkoba.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_15 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">7</td>
                    <td rowspan="3">Prostitusi</td>
                    <td>Jumlah kasus prostitusi dengan berbagai modus.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_16 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="9">8</td>
                    <td rowspan="9">Pembunuhan</td>
                    <td>a. Jumlah kasus pembunuhan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_17 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Jumlah kasus pembunuhan yang korbannya penduduk desa setempat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_18 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Jumlah kasus pembunuhan yang pelakunya penduduk desa setempat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_19 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">9</td>
                    <td rowspan="3">Kekerasan Seksual</td>
                    <td>Jumlah korban perkosaan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_20 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="6">10</td>
                    <td rowspan="6">Kekerasan dalam Keluarga</td>
                    <td>a. Kekerasan terhadap anak.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_21 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kekerasan terhadap anggota keluarga lainnya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_22 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="3">11</td>
                    <td rowspan="3">Penculikan</td>
                    <td>Jumlah kasus penculikan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_23 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">12</td>
                    <td rowspan="3">HIV/AIDS</td>
                    <td>Kasus HIV/AIDS.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c4->_24 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C4</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c4->sub_total_kelurahan_c4?></td>
                    <td>&nbsp;</td>
                </tr>
                <!-- ================== PENILAIAN C5 ================= -->
                <tr>
                    <td colspan="5">V. PENDIDIKAN</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Buta Huruf</td>
                    <td>Penduduk yang tidak bisa baca tulis.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="6">2</td>
                    <td rowspan="6">Putus Sekolah</td>
                    <td>a. Jumlah penduduk tidak tamat SD/sederajat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>
                <tr>
                    <td>b. Jumlah penduduk tidak tamat SLTP/sederajat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>
                <tr>
                    <td rowspan="12">3</td>
                    <td rowspan="12">Tamat Sekolah</td>
                    <td>a. Jumlah penduduk tamat SLTA/sederajat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>
                <tr>
                    <td>b. Jumlah penduduk tamat D3/Sarjana Muda.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>
                <tr>
                    <td>c. Jumlah penduduk tamat Sarjana/S1.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>
                <tr>
                    <td>b. Jumlah penduduk tamat Pasca Sarjana.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c5->_7?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C5</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c5->sub_total_kelurahan_c5?></td>
                    <td>&nbsp;</td>
                </tr>

                <!-- ================== PENILAIAN C6 ================= -->
                <tr>
                    <td colspan="5">VI. Kesehatan</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Kematian</td>
                    <td>Jumlah kematian bayi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Penurunan kurang dari 10% dari tahun sebelumnya</td>
                </tr>
                <tr>
                    <td>Penurunan Diatas 10% dari tahun sebelumnya</td>
                </tr>
                <tr>
                    <td rowspan="6">2</td>
                    <td rowspan="6">Gizi dan Kematian Balita</td>
                    <td>a. Jumlah balita gizi buruk.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Penurunan kurang dari 10% dari tahun sebelumnya</td>
                </tr>
                <tr>
                    <td>Penurunan Diatas 10% dari tahun sebelumnya</td>
                </tr>
                <tr>
                    <td>b. Jumlah balita meninggal.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Kurang dari 1%</td>
                </tr>
                <tr>
                    <td>Lebih dari 1%</td>
                </tr>

                <tr>
                    <td rowspan="6">3</td>
                    <td rowspan="6">Posyandu</td>
                    <td>a. Keberadaan posyandu.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Kelembagaan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Pratama</td>
                </tr>
                <tr>
                    <td>Di atas Pratama</td>
                </tr>

                <tr>
                    <td rowspan="23">4</td>
                    <td rowspan="23">Kepemilikan Jamban Dalam Rumah Tangga</td>
                    <td>a. Jumlah RT Pengguna Sumber Air Lainnya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_6 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Total RT Mempunyai Jamban/WC sendiri.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_7 ?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Menurun</td>
                </tr>
                <tr>
                    <td>Tetap</td>
                </tr>
                <tr>
                    <td>Meningkat</td>
                </tr>
                <tr>
                    <td>c. Total RT yang tidak Mempunyai Jamban/WC sendiri.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_8 ?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Menurun</td>
                </tr>
                <tr>
                    <td>Tetap</td>
                </tr>
                <tr>
                    <td>Meningkat</td>
                </tr>
                <tr>
                    <td>d. Total RT Pengguna MCK Umum.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_9 ?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Menurun</td>
                </tr>
                <tr>
                    <td>Tetap</td>
                </tr>
                <tr>
                    <td>Meningkat</td>
                </tr>
                <tr>
                    <td>e. Total RT Pengguna MCK di Sungai/Kali.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_10 ?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Menurun</td>
                </tr>
                <tr>
                    <td>Tetap</td>
                </tr>
                <tr>
                    <td>Meningkat</td>
                </tr>
                <tr>
                    <td>f. Total RT yang Tidak Mendapat Air Bersih.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_11 ?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>Menurun</td>
                </tr>
                <tr>
                    <td>Tetap</td>
                </tr>
                <tr>
                    <td>Meningkat</td>
                </tr>

                <tr>
                    <td rowspan="9">5</td>
                    <td rowspan="9">Fasilitas Kesehatan Lingkungan</td>
                    <td>a. Puskesmas/Balai Pengobatan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_12 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Bidan/Mantri/Dokter.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_13 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>c. Jamban Keluarga/MCK.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c6->_14 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C6</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c6->sub_total_kelurahan_c6?></td>
                    <td>&nbsp;</td>
                </tr>

                <!-- ================== PENILAIAN C7 ================= -->
                <tr>
                    <td colspan="5">VII. EKONOMI</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Pengangguran</td>
                    <td>Penduduk yang tidak bisa baca tulis.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c7->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Mata Pencarian/Sumber Pendapatan</td>
                    <td>Pertanian.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c7->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Industri</td>
                </tr>
                <tr>
                    <td>Jasa</td>
                </tr>
                <tr>
                    <td rowspan="9">3</td>
                    <td rowspan="9">Kelembagaan Ekonomi</td>
                    <td>a. Pasar Tradisional.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c7->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Toko/Kios.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c7->_4 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>c. Pangkalan Ojek, Becak, Delman, dan Sejenisnya.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c7->_5 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C7</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c7->sub_total_kelurahan_c7?></td>
                    <td>&nbsp;</td>
                </tr>
                <!-- ================== PENILAIAN C8 ================= -->
                <tr>
                    <td colspan="5">VIII. PENANGGULANGAN KEMISKINAN</td>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Data Masyarakat Miskin</td>
                    <td>Data Masyarakat Miskin.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c8->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Program Penanggulangan Kemiskinan</td>
                    <td>Program Penanggulangan Kemiskinan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c8->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C8</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c8->sub_total_kelurahan_c8?></td>
                    <td>&nbsp;</td>
                </tr>
                <!-- ================== PENILAIAN C9 ================= -->
                <tr>
                    <td colspan="5">IX. PENINGKATAN KAPASITAS MASYARAKAT</td>
                </tr>
                <tr>
                    <td rowspan="6">1</td>
                    <td rowspan="6">Analisis Kebutuhan</td>
                    <td>a. Penyusunan Analisis Kebutuhan Peningkatan Kapasitas Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c9->_1 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Banyaknya Kegiatan Dalam Peningkatan Kapasitas Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c9->_2 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>1-3</td>
                </tr>
                <tr>
                    <td>Lebih dari 3</td>
                </tr>
                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Pelaksanaan Program</td>
                    <td>Jumlah Jenis Program Peningkatan Kapasitas Masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $c9->_3 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>1-3</td>
                </tr>
                <tr>
                    <td>Lebih dari 3</td>
                </tr>

                <tr  style="background-color: lightblue">
                    <td colspan="3"> Jumlah C9</td>
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c9->sub_total_kelurahan_c9?></td>
                    <td>&nbsp;</td>
                </tr>
                <tr  style="background-color: cornflowerblue">
                    <td colspan="3" style="color: white"> Total Penilaian Pemerintahan</td>
                    <td class="font-600 text-center" style="font-size: xx-large; color: #ffffff;"><?= $penilaianKemasyarakatan->sub_total_masyarakat?></td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Kesimpulan Penilaian Kelurahan <?= $kelurahan->nama_kelurahan?></h4>

            <p>Jumlah Totak Seluruh Bidang : <?= $penilaianKelurahan->totalNilai()?></p>
            <p>Tingkat Perkembangan Kelurahan : <?= $penilaianKelurahan->getPerkembangan()?> </p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
