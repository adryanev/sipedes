<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 6/2/2018
 * Time: 2:28 PM
 */
/* @var $this yii\web\View
 * @var $desa common\models\Desa
 * @var $penilaianDesa common\models\PenilaianDesa
 * @var $penilaianWilayah common\models\PenilaianWilayahDesa
 * @var $penilaianPemerintahan common\models\PenilaianPemerintahanDesa
 * @var $penilaianKemasyarakatan common\models\PenilaianMasyarakatDesa
 * @var $a1 common\models\PenilaianDesaA1
 * @var $a2 common\models\PenilaianDesaA2
 * @var $a3 common\models\PenilaianDesaA3
 * @var $a4 common\models\PenilaianDesaA4
 * @var $a5 common\models\PenilaianDesaA5
 * @var $b1 common\models\PenilaianDesaB1
 * @var $b2 common\models\PenilaianDesaB2
 * @var $b3 common\models\PenilaianDesaB3
 * @var $b4 common\models\PenilaianDesaB4
 * @var $b5 common\models\PenilaianDesaB5
 * @var $c1 common\models\PenilaianDesaC1
 * @var $c2 common\models\PenilaianDesaC2
 * @var $c3 common\models\PenilaianDesaC3
 * @var $c4 common\models\PenilaianDesaC4
 * @var $c5 common\models\PenilaianDesaC5
 * @var $c6 common\models\PenilaianDesaC6
 * @var $c7 common\models\PenilaianDesaC7
 * @var $c8 common\models\PenilaianDesaC8
 * @var $c9 common\models\PenilaianDesaC9
 */

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian Desa <?= $desa->nama_desa?></h4>

                    <p>Tahun&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $penilaianDesa->tahun_penilaian?></p>
                    <p>Nama Tim Penilai&emsp;: <?= $penilaianDesa->getPenilai()->one()->nama?></p>
                    <p>Desa&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $desa->nama_desa ?></p>
                    <p>Kecamatan&emsp;&emsp;&emsp;&emsp;: <?= $desa->getKecamatan()->one()->nama_kecamatan ?></p>
                    <p>Kabupaten/Kota&emsp;&emsp;: <?= $desa->getKecamatan()->one()->getKabupaten()->one()->nama_kabupaten ?></p>
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
                    <td colspan="5">I. Identitas Desa</td>

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
                    <td colspan="3">Tahun <?= $penilaianDesa->tahun_penilaian?></td>
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
                    <td>e. Jejaring Kerjasama dengan pihak ketiga dalam  pemasaran produk inovasi.</td>
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
                    <td>g.   Adanya Kepemimpinan dan Visi Bersama dalam mengembangkan dan mengelola potensi Desa dan Kelurahan.</td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $a3->sub_total_desa_a3?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $a4->sub_total_desa_a4?></td>
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
                <tr>
                    <td>e. Mengurangi jumlah kepemilikan Tanah Desa/Tanah Kas Desa (Khusus Diisi Oleh Desa).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $a5->_5 ?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $a5->sub_total_desa_a5?></td>
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
                    <td colspan="5" class="text-uppercase">I. PEMERINTAHAN DESA</td>
                </tr>
                <tr>
                    <td rowspan="68">1</td>
                    <td rowspan="68">Musyawarah Desa</td>
                    <td>a. Pelaksanaan Musyawarah Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_1?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr><td colspan="3">b. Peserta Musyawarah Desa:</td>
                </tr>
                <tr>
                    <td>- Keterwakilan unsur masyarakat.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_2?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Keterwakilan unsur Pemerintah Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_3?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Keterwakilan Badan Permusyawarahan Desa.</td>
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
                    <td>- Waktu pelaksanaan Musyawarah Perencanaan Pembangunan Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_5?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Setelah bulan Juni tahun berjalan.</td>
                </tr>
                </tr>
                <tr>
                    <td>Sampai dengan bulan Juni tahun berjalan.</td>
                </tr>

                <tr>
                    <td colspan="3">c. Materi yang dibahas di Musyawarah Desa apa saja:
                    </td>
                </tr>
                <tr>
                    <td>- Penataan Desa</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_6?></td>
                    <td rowspan="3">&nbsp;</td></tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Perencanaan Pembangunan Desa.</td>
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
                    <td>- Peraturan Desa tentang RPJMDesa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_8?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Peraturan Desa tentang RKPDesa.</td>
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
                    <td>- Peraturan Desa tentang APBDesa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_10?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr><td colspan="3">- Kerjasama Desa:</td></tr>
                <tr>
                    <td>1) Kerjasama antar Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_11?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>2) Kerjasama dengan pihak ketiga.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_12?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr><td colspan="3">- Pembentukan BUMDesa:</td></tr>
                <tr>
                    <td>1)	Peraturan Desa tentang Pembentukan BUMDesa.</td>
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
                    <td>2) Penyertaan modal BUMDesa.</td>
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
                    <td>3) AD/ART.</td>
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
                    <td>4) Rapat pertanggungjawaban.</td>
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
                    <td>5) Aturan terkait dengan kepailitan.</td>
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
                    <td>6) Struktur organisasi BUMDesa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_18?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr><td colspan="3">- Aset Desa:</td></tr>

                <tr>
                    <td>1) Inventarisasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_19 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>2) Penambahan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_20 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>3) Pelepasan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?=$b1->_21 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="28">2</td>
                    <td rowspan="28">Badan Permusyawaratan Desa (BPD)</td>
                    <td colspan="4">Sarana dan Prasarana.</td>

                </tr>
                <tr>
                    <td>- Ruang kerja.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_22 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Operasional dan tunjangan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_23 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Buku data keputusan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_24 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Buku data anggota.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_25 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Buku data kegiatan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_26 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Buku sekretariat. </td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_27 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Mesin ketik/komputer.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_28 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Printer.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_29 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Peraturan Tata Tertib BPDes.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_30 ?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td rowspan="89">3</td>
                    <td rowspan="89">Pemerintah Desa</td>
                    <td>a. Gedung Kantor.</td>
                    <td rowspan="5" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_31?></td>
                    <td rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Ada, Di rumah pribadi</td>
                </tr>
                <tr>
                    <td>Ada, Sewa</td>
                </tr>
                <tr>
                    <td>Ada, Milik desa semipermanen</td>
                </tr>
                <tr>
                    <td>Ada, Milik desa permanen</td>
                </tr>
                <tr>
                    <td>b. Gedung Pertemuan/Balai Desa.</td>
                    <td rowspan="5" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_32?></td>
                    <td rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Ada, Di rumah pribadi</td>
                </tr>
                <tr>
                    <td>Ada, Sewa</td>
                </tr>
                <tr>
                    <td>Ada, Milik desa semipermanen</td>
                </tr>
                <tr>
                    <td>Ada, Milik desa permanen</td>
                </tr>

                <tr>
                    <td colspan="4">c. Perangkat Desa</td>
                </tr>
                <tr>
                    <td>- Jumlah Kepala Urusan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_33?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>2 Kaur</td>
                </tr>
                <tr>
                    <td>3 Kaur</td>
                </tr>
                <tr>
                    <td>- Jumlah Kepala Seksi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_34?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>2 Kepala Seksi</td>
                </tr>
                <tr>
                    <td>3 Kepala Seksi</td>
                </tr>

                <tr>
                    <td>- Tingkat pendidikan Kaur dan Kasi.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_35?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>SLTA/sederajat (kurang atau sama dengan 50%)</td>
                </tr>
                <tr>
                    <td>SLTA ke atas (di atas 50%)</td>
                </tr>
                <tr>
                    <td>d. Struktur Organisasi Tata Kerja (SOTK).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_36?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td colspan="3">e. Pengaturan Kewenangan</td>
                </tr>
                <tr>
                    <td>- Perdes kewenangan lokal asal usul.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_37?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Perdes kewenangan lokal skala Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_38?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Perdes kewenangan yang ditugaskan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_39?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>- Apakah batas desa sudah ditetapkan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_40?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Belum dengan ordinat</td>
                </tr>
                <tr>
                    <td>Sudah dengan ordinat</td>
                </tr>

                <tr>
                    <td>- Luas Wilayah.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_41?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Belum ditentukan</td>
                </tr>
                <tr>
                    <td>Sudah ditentukan</td>
                </tr>
                <tr>
                    <td>- Perdes kewenangan lokal skala Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_42?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Siltan Kades dan Perangkat (Nilai besarnya).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_43?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Di bawah upah minimum kabupaten</td>
                </tr>
                <tr>
                    <td>Di atas upah minimum kabupaten</td>
                </tr>
                <tr>
                    <td>- Berapa perdes yang ditebitkan dalam 1 tahun.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_44?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>1-3</td>
                </tr>
                <tr>
                    <td>Lebih dari atau sama dengan 4</td>
                </tr>
                <tr>
                    <td>- Berapa Peraturan bersama Kepala Desa yang diterbitkan dalam 1 tahun.</td>
                    <td rowspan="4" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_45?></td>
                    <td rowspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2-3</td>
                </tr>
                <tr>
                    <td>Lebih dari 3</td>
                </tr>
                <tr>
                    <td>- Pernah tidaknya menjadi juara lomba desa tingkatannya.</td>
                    <td rowspan="6" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_46?></td>
                    <td rowspan="6">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Pernah</td>
                </tr>
                <tr>
                    <td>Pernah. Tingkat Kecamatan</td>
                </tr>
                <tr>
                    <td>Pernah, Tingkat Kabupaten/Kota</td>
                </tr>
                <tr>
                    <td>Pernah, Tingkat Provinsi</td>
                </tr>
                <tr><td>Penah, Tingkat Regional/Nasional</td></tr>

                <tr>
                    <td>- Pernah tidaknya menjadi Lab Site Kementrian / Lembaga (K/L).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_47?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Pernah</td>
                </tr>
                <tr>
                    <td>Pernah</td>
                </tr>
                <tr>
                    <td colspan="3">- Berapa kali dalam setahun Desa menerima Bimbingan Teknis dari:</td>
                </tr>

                <tr>
                    <td>1) Pemerintahan Pusat.</td>
                    <td rowspan="5" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_48?></td>
                    <td rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Pernah</td>
                </tr>
                <tr>
                    <td>Pernah 1 kali</td>
                </tr>
                <tr><td>Pernah 2-4</td></tr>
                <tr><td>Pernah lebih dari 4 Kali</td></tr>

                <tr>
                    <td>2) Pemerintahan Provinsi.</td>
                    <td rowspan="5" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_49?></td>
                    <td rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Pernah</td>
                </tr>
                <tr>
                    <td>Pernah 1 kali</td>
                </tr>
                <tr><td>Pernah 2-4</td></tr>
                <tr><td>Pernah lebih dari 4 Kali</td></tr>

                <tr>
                    <td>3) Pemerintahan Kabupaten/Kota.</td>
                    <td rowspan="5" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_50?></td>
                    <td rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Pernah</td>
                </tr>
                <tr>
                    <td>Pernah 1 kali</td>
                </tr>
                <tr><td>Pernah 2-4</td></tr>
                <tr><td>Pernah lebih dari 4 Kali</td></tr>

                <tr>
                    <td>f. Jaringan Listrik.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_51?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td>g. Sumber Daya Listrik (PLN).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_52?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Stabil</td>
                </tr>
                <tr>
                    <td>Stabil</td>
                </tr>

                <tr>
                    <td>h. Sumber Daya Listrik (Non-PLN).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_53?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Stabil</td>
                </tr>
                <tr>
                    <td>Stabil</td>
                </tr>

                <tr>
                    <td>i. Perpustakaan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_54?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="12">4</td>
                    <td rowspan="12">Administrasi Desa</td>
                    <td>a. Administrasi Umum.</td>
                    <td rowspan="12" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_55?></td>
                    <td rowspan="12">&nbsp;</td>
                </tr>
                <tr>
                    <td>b. Administrasi Kependudukan</td>
                </tr>
                <tr>
                    <td>c. Administrasi Keuangan</td>
                </tr>
                <tr>
                    <td>d. Administrasi Pembangunan</td>
                </tr>
                <tr>
                    <td>e. Administrasi BPDes</td>
                </tr>
                <tr>
                    <td>f. Administrasi Lainnya</td>
                </tr>

                <tr>
                    <td>Ada 1</td>
                </tr>
                <tr>
                    <td>Ada 2</td>
                </tr>
                <tr>
                    <td>Ada 3</td>
                </tr>
                <tr>
                    <td>Ada 4</td>
                </tr>
                <tr>
                    <td>Ada 5</td>
                </tr>
                <tr>
                    <td>Lengkap</td>
                </tr>

                <tr>
                    <td rowspan="37">5</td>
                    <td rowspan="37">Keuangan Desa</td>
                    <td>a. Rasio Jumlah Pendapatan Asli Desa (PADes) terhadap Dana Desa(DD).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_56?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>50% ke bawah</td>
                </tr>
                <tr>
                    <td>Di atas 50%</td>
                </tr>
                <tr>
                <td>b. Laporan Dana Desa (DD).</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_57?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                <td>c. Alokasi Dana Desa (DD).</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_58?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                <td>d. Hibah / sumbangan pihak ketiga..</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_59?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                <td>e. Bantuan Keuangan dari Kabupaten/Kota.</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_60?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                <td>f. Bantuan Keuangan dari Kabupaten/Kota.</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_61?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                <td>g. Lain-lain pendapatan Desa yang Sah.</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_62?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                <td>h. Rasio Penghasilan Tetap Aparatur Desa Terhadap Belanja Pembangunan.</td>
                <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_63?></td>
                <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>30% ke atas</td>
                </tr>
                <tr>
                    <td>Kurang dari 30%</td>
                </tr>
                <tr>
                    <td colspan="3">i. SiLPA.</td>
                </tr>
                <tr>
                    <td>- SiLPA total</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_64?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Sama Dengan atau Di atas 30%</td>
                </tr>
                <tr>
                    <td>Kurang dari 30%</td>
                </tr>
                <tr>
                    <td>- SiLPA Dana Desa</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_65?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Sama Dengan atau Di atas 30%</td>
                </tr>
                <tr>
                    <td>Kurang dari 30%</td>
                </tr>

                <tr>
                    <td>j. Hasil kekayaan Desa yang dipisahkan.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_66?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>k. Penyertaan modal Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_67?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>

                <tr>
                    <td rowspan="16">6</td>
                    <td rowspan="16">Akuntabilitas, Pembinaan, dan Pengawasan</td>
                    <td colspan="3">a. Laporan Kades kepada Pemerintahan atasan.</td>

                </tr>
                <tr>
                    <td>- Laporan penyaluran dan realisasi penggunaan Dana Desa.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_68?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Laporan pertanggungjawaban APBDes.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_69?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>- Bentuk laporan pertanggungjawaban berupa Perdes.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_70?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td>Ya</td>
                </tr>

                <tr>
                    <td>b. Penyampaian laporan keterangan pertanggungjawaban kepada BPD.</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_71?></td>
                    <td rowspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Tidak Ada</td>
                </tr>
                <tr>
                    <td>Ada</td>
                </tr>
                <tr>
                    <td>b. Penyampaian informasi kepada masyarakat (terkait materi secara umum).</td>
                    <td rowspan="3" class="font-600 text-center" style="font-size: xx-large"><?= $b1->_72?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b1->sub_total_desa_b1?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b2->sub_total_desa_b2?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b3->sub_total_desa_b3?></td>
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
                    <td>b. Website Desa.</td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b4->sub_total_desa_b4?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $b5->sub_total_desa_b5?></td>
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
                    <td rowspan="3">Swadaya Masyarakat Untuk Pembangunan Sarana Prasarana Desa 2 Tahun Terakhir.</td>
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
                    <td rowspan="3">Swakelola Masyarakat Untuk Pembangunan Sarana Prasarana Desa 2 Tahun Terakhir.</td>
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
                    <td rowspan="3">Gotong Royong Penduduk Desa 2 Tahun Terakhir.</td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c1->sub_total_desa_c1?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c2->sub_total_desa_c2?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c3->sub_total_desa_c3?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c4->sub_total_desa_c4?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c5->sub_total_desa_c5?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c6->sub_total_desa_c6?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c7->sub_total_desa_c7?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c8->sub_total_desa_c8?></td>
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
                    <td class="font-600 text-center" style="font-size: xx-large"><?= $c9->sub_total_desa_c9?></td>
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
            <h4 class="header-title m-t-0 m-b-30">Kesimpulan Penilaian Desa <?= $desa->nama_desa?></h4>

            <p>Jumlah Totak Seluruh Bidang : <?= $penilaianDesa->totalNilai()?></p>
            <p>Tingkat Perkembangan Desa : <?= $penilaianDesa->getPerkembangan()?> </p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
