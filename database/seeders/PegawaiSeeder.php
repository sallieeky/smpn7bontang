<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // guru
        $nama = [
            'Abdul Rozak',
            'AGUSTINA MILENDA',
            'Anik Suwarti',
            'Christiana Estu Nugroho',
            'Evelin Rosalina Siahaan',
            'Gigih Yonandherika Asriningtyas',
            'Hasmani',
            'Hendita Dyah Ratnady',
            'Lamria Silaban',
            'Lery Abner Panggalo',
            'Miranda S.',
            'Misri Arwinda',
            'Nopi Supiati',
            'Norhayati',
            'Nur Aini',
            'Rakhman Halim',
            'Ririn Ayati',
            'Rustika Novita Sari',
            'Semuel Pasarrangan',
            'Siti Niswatin',
            'Sulastri',
            'Susilo Wahyu Widyastuti',
            'Syaharuddin',
            'Vini Viodita',
            'Wiwin Puji Lestari'
        ];
        $nip = [
            197910022009031001,
            '-',
            196912051995122005,
            198209242008032002,
            198405302009032006,
            198006042009032003,
            196606132007012010,
            198503212009032008,
            198009022009032004,
            198008252009031003,
            '-',
            199305302019032027,
            197611262009032003,
            197804242008032001,
            198308152009032005,
            197607082010011007,
            197610022006042018,
            198411302008032003,
            197408262008011015,
            197904212011012006,
            198203092008032002,
            197901152009032003,
            '-',
            199209182019032016,
            198408252009032008,
        ];
        $posisi = [
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
            'guru',
        ];
        $jabatan = [
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru BK',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru Mapel',
            'Guru BK',
        ];

        for ($i = 0; $i < count($nama); $i++) {
            Pegawai::create([
                'nama' => $nama[$i],
                'nip' => $nip[$i],
                'posisi' => $posisi[$i],
                'jabatan' => $jabatan[$i],
            ]);
        }


        // tendik
        $nama_tendik = [
            'Asropa',
            'Karyana',
            'Minarsih',
            'Muhiddin P',
            'Supriono',
            'Widyaningsih',
        ];

        $nip_tendik = [
            197911282010012001,
            '-',
            '-',
            197004122005021002,
            '-',
            '-',
        ];

        $posisi_tendik = [
            'tendik',
            'tendik',
            'tendik',
            'tendik',
            'tendik',
            'tendik',
        ];

        $jabatan_tendik = [
            'Tenaga Administrasi Sekolah',
            'Tenaga Administrasi Sekolah',
            'Tenaga Perpustakaan',
            'Kepala Sekolah',
            'Tenaga Administrasi Sekolah',
            'Tenaga Administrasi Sekolah',
        ];

        for ($i = 0; $i < count($nama_tendik); $i++) {
            Pegawai::create([
                'nama' => $nama_tendik[$i],
                'nip' => $nip_tendik[$i],
                'posisi' => $posisi_tendik[$i],
                'jabatan' => $jabatan_tendik[$i],
            ]);
        }
    }
}
