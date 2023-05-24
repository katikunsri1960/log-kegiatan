<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgramStudi as Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = [
            ['id_prodi' => '6343967c-d7e3-447c-86a4-37c5c166ad7a','fakultas_id' => 3, 'kode_prodi' => '11006','nama_program_studi' => 'Sains Biomedis', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => 'c4bbd3bb-3b4b-4aa3-bc50-136842747c67','fakultas_id' => 3, 'kode_prodi' => '11106','nama_program_studi' => 'Biomedik', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '7c569912-fa48-4b93-8c16-1fc78969c337','fakultas_id' => 3, 'kode_prodi' => '11201','nama_program_studi' => 'Pendidikan Dokter', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'bb06fc41-9e48-443e-aa02-df83da6bb467','fakultas_id' => 3, 'kode_prodi' => '11701','nama_program_studi' => 'Ilmu Penyakit Mata', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '95290672-5f13-4776-9c0e-9c84ff0611ed','fakultas_id' => 3, 'kode_prodi' => '11702','nama_program_studi' => 'Ilmu Penyakit Dalam', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => 'b3dce9a8-25b8-4f27-96cc-2abe5e0d9fa9','fakultas_id' => 3, 'kode_prodi' => '11703','nama_program_studi' => 'Ilmu Penyakit Syaraf', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => 'e2f2ac47-8844-456b-b525-482db9da0abf','fakultas_id' => 3, 'kode_prodi' => '11704','nama_program_studi' => 'Ilmu Penyakit Kulit Dan Kelamin', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '9965f1cf-563f-4671-9dca-4874e8c5d075','fakultas_id' => 3, 'kode_prodi' => '11705','nama_program_studi' => 'Ilmu Penyakit THT', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '947760c7-8b9b-40d2-af81-cdd141fddadb','fakultas_id' => 3, 'kode_prodi' => '11706','nama_program_studi' => 'Anestesiologi Dan Reanimasi', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => 'a77fda16-ec5a-4d73-b076-51bac9b88ae4','fakultas_id' => 3, 'kode_prodi' => '11707','nama_program_studi' => 'Ilmu Bedah', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '73cd2292-67e9-43cb-a83f-9ecc5412365a','fakultas_id' => 3, 'kode_prodi' => '11708','nama_program_studi' => 'Ilmu Kebidanan Dan Penyakit Kandungan', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '132e62cc-dfdc-437d-9df3-e5317f80a6ff','fakultas_id' => 3, 'kode_prodi' => '11711','nama_program_studi' => 'Ilmu Kesehatan Anak', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '67c6cb06-f882-48c2-8a8f-33ab9457d1a6','fakultas_id' => 3, 'kode_prodi' => '11718','nama_program_studi' => 'Ilmu Patologi Anatomi', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => 'fd61ecb4-d6b0-4135-b7e2-7e23665c3e0d','fakultas_id' => 3, 'kode_prodi' => '11728','nama_program_studi' => 'Ortopedi dan Traumatologi', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '90c23123-fb1e-48ee-9bdc-f923e799cd2a','fakultas_id' => 3, 'kode_prodi' => '11735','nama_program_studi' => 'Bedah Toraks, Kardiak, dan Vaskular', 'nama_jenjang_pendidikan' => 'Sp-1',],
            ['id_prodi' => '40693f4c-5177-4bd3-b3df-7321320583a6','fakultas_id' => 3, 'kode_prodi' => '11802','nama_program_studi' => 'Ilmu Penyakit Dalam', 'nama_jenjang_pendidikan' => 'Sp-2',],
            ['id_prodi' => '98223413-b27d-4afe-a2b8-d0d80173506e','fakultas_id' => 3, 'kode_prodi' => '11901','nama_program_studi' => 'Profesi Dokter', 'nama_jenjang_pendidikan' => 'Profesi',],
            ['id_prodi' => 'efd6f97f-d7fc-42c1-bea0-2e5837e569d6','fakultas_id' => 3, 'kode_prodi' => '12201','nama_program_studi' => 'Kedokteran Gigi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'be779246-fe70-4e66-8fa2-8929d97779a2','fakultas_id' => 3, 'kode_prodi' => '12901','nama_program_studi' => 'Profesi Dokter Gigi', 'nama_jenjang_pendidikan' => 'Profesi',],
            ['id_prodi' => 'e1ea335b-fe3f-4fc2-af88-3051a6319040','fakultas_id' => 7, 'kode_prodi' => '13101','nama_program_studi' => 'Ilmu Kesehatan Masyarakat', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '64ccceb7-01ab-4cc8-89dc-0ad62bd8c3f4','fakultas_id' => 7, 'kode_prodi' => '13201','nama_program_studi' => 'Kesehatan Masyarakat', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '57469554-a7ba-4390-8e93-6a31b7950ae3','fakultas_id' => 7, 'kode_prodi' => '13211','nama_program_studi' => 'Gizi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'e3632235-463b-46b5-9655-0d15306c2dcb','fakultas_id' => 7, 'kode_prodi' => '13251','nama_program_studi' => 'Kesehatan Lingkungan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '857cd112-bb6c-4ea9-9fe7-6782290c61e0','fakultas_id' => 3, 'kode_prodi' => '14201','nama_program_studi' => 'Ilmu Keperawatan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '91360393-8632-4240-bed0-bfc707406efa','fakultas_id' => 3, 'kode_prodi' => '14901','nama_program_studi' => 'Profesi Ners', 'nama_jenjang_pendidikan' => 'Profesi',],
            ['id_prodi' => 'ce967ed4-af20-4283-894a-25fbde511b97','fakultas_id' => 5, 'kode_prodi' => '20201','nama_program_studi' => 'Teknik Elektro', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '1cd691d4-0773-40bf-b857-c79e073be783','fakultas_id' => 5, 'kode_prodi' => '21001','nama_program_studi' => 'Ilmu Teknik', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => '9736f30a-3992-42c6-b005-3c10e91afd14','fakultas_id' => 5, 'kode_prodi' => '21101','nama_program_studi' => 'Teknik Mesin', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'f371d293-c602-4b1b-afc5-222081477091','fakultas_id' => 5, 'kode_prodi' => '21201','nama_program_studi' => 'Teknik Mesin', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '05eb6093-52ca-4f28-8088-82398983d456','fakultas_id' => 5, 'kode_prodi' => '22101','nama_program_studi' => 'Teknik Sipil', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '851e4469-1483-4158-8b7f-65cd62233ef6','fakultas_id' => 5, 'kode_prodi' => '22201','nama_program_studi' => 'Teknik Sipil', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '88a3482b-3cc8-4beb-9d48-c3da2f1501bd','fakultas_id' => 5, 'kode_prodi' => '23201','nama_program_studi' => 'Teknik Arsitektur', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'b68efc34-c0f0-4334-9970-e02d769e3f49','fakultas_id' => 5, 'kode_prodi' => '23902','nama_program_studi' => 'Program Profesi Insinyur', 'nama_jenjang_pendidikan' => 'Profesi',],
            ['id_prodi' => 'a3b6a695-75fd-4247-aec3-d9ebdabb671b','fakultas_id' => 5, 'kode_prodi' => '24101','nama_program_studi' => 'Teknik Kimia', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '1bde2344-501e-493a-92e1-bee0890481a0','fakultas_id' => 5, 'kode_prodi' => '24201','nama_program_studi' => 'Teknik Kimia', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'd992b771-f5e5-4950-9041-152af0c67339','fakultas_id' => 10, 'kode_prodi' => '26106','nama_program_studi' => 'Teknologi Industri Pertanian', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '6995b0ac-8b3b-4561-9453-87d4b49fc51d','fakultas_id' => 1, 'kode_prodi' => '28101','nama_program_studi' => 'Ilmu Material', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '5f93f7d9-eb85-46c1-9714-e00db90938e3','fakultas_id' => 5, 'kode_prodi' => '31101','nama_program_studi' => 'Teknik Pertambangan', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'fa919a76-6f88-46e8-ae56-26bf61f70338','fakultas_id' => 5, 'kode_prodi' => '31201','nama_program_studi' => 'Teknik Pertambangan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '25ca5240-19b3-49aa-a55a-1a59b76c2b63','fakultas_id' => 5, 'kode_prodi' => '34201','nama_program_studi' => 'Teknik Geologi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '97a106e6-818d-43f9-8873-16b86d2bc7bb','fakultas_id' => 10, 'kode_prodi' => '41201','nama_program_studi' => 'Teknik Pertanian', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'e136ff06-7eac-486d-987a-6eaf00ada885','fakultas_id' => 10, 'kode_prodi' => '41231','nama_program_studi' => 'Teknologi Hasil Pertanian', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '845702ca-79f5-4822-b191-29f22e79c5f4','fakultas_id' => 8, 'kode_prodi' => '44001','nama_program_studi' => 'Ilmu Matematika Dan Ilmu Pengetahuan Alam', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => 'd2dc6528-ceb3-439a-abad-afaf21ec26fe','fakultas_id' => 8, 'kode_prodi' => '44201','nama_program_studi' => 'Matematika', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '6862a2c2-0357-4f0d-9f47-51cced2cc817','fakultas_id' => 8, 'kode_prodi' => '45102','nama_program_studi' => 'Fisika', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '4a623e2b-9e25-45a6-ba19-5d390ac7425b','fakultas_id' => 8, 'kode_prodi' => '45201','nama_program_studi' => 'Fisika', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'c09eed95-426d-4c1f-ae40-7d1bf3f9344d','fakultas_id' => 8, 'kode_prodi' => '46101','nama_program_studi' => 'Biologi', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'f650ca52-af68-4484-8d31-ca31261d598b','fakultas_id' => 8, 'kode_prodi' => '46201','nama_program_studi' => 'Biologi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'cc2619a2-8496-476a-9747-ad7fba0126b9','fakultas_id' => 8, 'kode_prodi' => '47102','nama_program_studi' => 'Kimia', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'eb1dc517-8411-4cce-a119-ca62055fe3b7','fakultas_id' => 8, 'kode_prodi' => '47201','nama_program_studi' => 'Kimia', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '7bb05154-c149-463b-a2fd-fc60fbc4f503','fakultas_id' => 8, 'kode_prodi' => '48201','nama_program_studi' => 'Farmasi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '58d500c4-92c1-4254-be20-331853f71480','fakultas_id' => 10, 'kode_prodi' => '54001','nama_program_studi' => 'Ilmu Pertanian', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => '29fce0d4-b21b-4c8b-8f73-ead22be4fd4f','fakultas_id' => 10, 'kode_prodi' => '54101','nama_program_studi' => 'Agribisnis', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '529deff0-fa0b-45ed-a407-f55d021dd0ef','fakultas_id' => 10, 'kode_prodi' => '54104','nama_program_studi' => 'Ilmu Tanaman', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '314e63d9-7b3e-4fb8-91ce-bc50d49476f5','fakultas_id' => 10, 'kode_prodi' => '54201','nama_program_studi' => 'Agribisnis', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'f4daecce-0a4d-4ba3-a7b0-4bbfacfe6c9c','fakultas_id' => 10, 'kode_prodi' => '54204','nama_program_studi' => 'Agronomi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'a575e707-2afd-4d2d-b872-4f329b9d34f5','fakultas_id' => 10, 'kode_prodi' => '54211','nama_program_studi' => 'Agroekoteknologi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '3e7a39dc-04d2-4388-a6a0-a8d99196f000','fakultas_id' => 10, 'kode_prodi' => '54231','nama_program_studi' => 'Peternakan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'd8fc7d99-9d8a-4484-b946-3d1e7680314b','fakultas_id' => 10, 'kode_prodi' => '54241','nama_program_studi' => 'Ilmu Kelautan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '8cf15154-6bbd-47e7-8200-c7a3f9d37a0b','fakultas_id' => 10, 'kode_prodi' => '54243','nama_program_studi' => 'Budidaya Perairan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'f7d525fa-ba3d-42b2-9983-7b82e9353d7a','fakultas_id' => 10, 'kode_prodi' => '54244','nama_program_studi' => 'Teknologi Hasil Perikanan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '7c16e556-84d0-4e91-b0ef-75cf2f2776c6','fakultas_id' => 10, 'kode_prodi' => '54294','nama_program_studi' => 'Ilmu Tanah', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '7ef163fc-efa7-45c4-b8c9-80233654cde7','fakultas_id' => 10, 'kode_prodi' => '54295','nama_program_studi' => 'Proteksi Tanaman', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '0bfbc20c-86dc-4b69-b098-31788d5e9a04','fakultas_id' => 2, 'kode_prodi' => '55101','nama_program_studi' => 'Teknik Informatika', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '5c1370e1-dfd1-4137-af50-a24025696602','fakultas_id' => 2, 'kode_prodi' => '55101','nama_program_studi' => 'Ilmu Komputer', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'c9091879-6fd9-4691-bea8-283186c27ad1','fakultas_id' => 2, 'kode_prodi' => '55201','nama_program_studi' => 'Teknik Informatika', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '8bfd181c-798d-4078-a474-f6e801c14d41','fakultas_id' => 2, 'kode_prodi' => '56201','nama_program_studi' => 'Sistem Komputer', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '47743d2b-4e04-4115-80f8-a1b8dd1d4584','fakultas_id' => 2, 'kode_prodi' => '56401','nama_program_studi' => 'Teknik Komputer', 'nama_jenjang_pendidikan' => 'D3',],
            ['id_prodi' => '68008580-255a-4e4d-b0ef-40605bc2bedd','fakultas_id' => 2, 'kode_prodi' => '57201','nama_program_studi' => 'Sistem Informasi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'b9530db8-86c3-41fa-a23e-bba70596f5ff','fakultas_id' => 2, 'kode_prodi' => '57401','nama_program_studi' => 'Manajemen Informatika', 'nama_jenjang_pendidikan' => 'D3',],
            ['id_prodi' => '279fe949-3c1e-4ba6-98c9-17f486ca8883','fakultas_id' => 2, 'kode_prodi' => '57402','nama_program_studi' => 'Komputerisasi Akuntansi', 'nama_jenjang_pendidikan' => 'D3',],
            ['id_prodi' => 'c41d6e01-459d-4789-badc-c26717c4828c','fakultas_id' => 6, 'kode_prodi' => '60001','nama_program_studi' => 'Ilmu Ekonomi', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => '5df0cd27-07b5-488f-801d-c08b21b33ed1','fakultas_id' => 6, 'kode_prodi' => '60101','nama_program_studi' => 'Ilmu Ekonomi', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '9141fef1-e483-4cf1-ab1c-436507ec79f2','fakultas_id' => 6, 'kode_prodi' => '60201','nama_program_studi' => 'Ekonomi Pembangunan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '2282d1e5-9e12-4c79-a33f-5579763f7f94','fakultas_id' => 6, 'kode_prodi' => '61001','nama_program_studi' => 'Ilmu Manajemen', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => '6090ff04-6c12-47e5-836f-3b27d6aefd6d','fakultas_id' => 6, 'kode_prodi' => '61101','nama_program_studi' => 'Manajemen', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'aae16080-e0e9-4e19-8af9-18e93d5c4047','fakultas_id' => 6, 'kode_prodi' => '61102','nama_program_studi' => 'Ilmu Manajemen', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'ee87d53e-8dea-48ae-8310-11d3504220e3','fakultas_id' => 6, 'kode_prodi' => '61201','nama_program_studi' => 'Manajemen', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'c99559ea-c795-477a-9f77-d4ce398499a2','fakultas_id' => 6, 'kode_prodi' => '62201','nama_program_studi' => 'Akuntansi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '55af75a9-876c-4589-a80a-9faa419614bf','fakultas_id' => 6, 'kode_prodi' => '62401','nama_program_studi' => 'Akuntansi', 'nama_jenjang_pendidikan' => 'D3',],
            ['id_prodi' => 'c9f5b196-dd7e-4788-a6e8-724046a1c344','fakultas_id' => 6, 'kode_prodi' => '62901','nama_program_studi' => 'Profesi Akuntan', 'nama_jenjang_pendidikan' => 'Profesi',],
            ['id_prodi' => '1158a8f5-44c7-40a1-9f95-744680485286','fakultas_id' => 4, 'kode_prodi' => '63002','nama_program_studi' => 'Administrasi Publik', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => '74476eb0-7173-41bc-b6f4-a6fedec7abfb','fakultas_id' => 4, 'kode_prodi' => '63101','nama_program_studi' => 'Administrasi Publik', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'b2166a55-f878-4eec-9044-26bdc857ca53','fakultas_id' => 4, 'kode_prodi' => '63201','nama_program_studi' => 'Ilmu Administrasi Negara', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '9e800fce-bd75-41fd-be96-fdaf1f77a792','fakultas_id' => 4, 'kode_prodi' => '63203','nama_program_studi' => 'Administrasi Publik', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '98da3402-7f1b-43ff-aa94-2641b014e804','fakultas_id' => 6, 'kode_prodi' => '63412','nama_program_studi' => 'Kesekretariatan', 'nama_jenjang_pendidikan' => 'D3',],
            ['id_prodi' => '14463b14-a07a-45ee-a1fc-9d0b64a49ec2','fakultas_id' => 4, 'kode_prodi' => '69101','nama_program_studi' => 'Sosiologi', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '77e824cb-2142-425e-a85a-322633173319','fakultas_id' => 4, 'kode_prodi' => '69201','nama_program_studi' => 'Sosiologi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '63436d60-3629-47b8-b393-f36a7b5c5cd0','fakultas_id' => 4, 'kode_prodi' => '70201','nama_program_studi' => 'Ilmu Komunikasi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'a8d4f70f-406c-43f6-95ee-15f8ad836db3','fakultas_id' => 3, 'kode_prodi' => '73201','nama_program_studi' => 'Psikologi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '8f0eea14-5dbc-40ea-a5ce-47b78de8a184','fakultas_id' => 11, 'kode_prodi' => '74001','nama_program_studi' => 'Ilmu Hukum', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => 'f4f7b843-a9ec-413e-ae33-9fe601e6d2b4','fakultas_id' => 11, 'kode_prodi' => '74101','nama_program_studi' => 'Ilmu Hukum', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '76c29e2e-b39d-4e87-b6e7-087154ea7054','fakultas_id' => 11, 'kode_prodi' => '74102','nama_program_studi' => 'Kenotariatan', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '7a9f8811-50e4-41f3-8cf0-ade1c22a9d68','fakultas_id' => 11, 'kode_prodi' => '74201','nama_program_studi' => 'Ilmu Hukum', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '5d5da936-e321-49d0-bf81-2a129ab7665f','fakultas_id' => 9, 'kode_prodi' => '83203','nama_program_studi' => 'Pendidikan Teknik Mesin', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'aabb694e-d7ad-4d3f-8db5-618ea60c0015','fakultas_id' => 9, 'kode_prodi' => '84002','nama_program_studi' => 'Pendidikan Matematika', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => '99ad4fc5-a08c-4a67-82ed-7843460d290e','fakultas_id' => 9, 'kode_prodi' => '84102','nama_program_studi' => 'Pendidikan Matematika', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '89808389-dd89-41b9-8169-884b4e5b7188','fakultas_id' => 9, 'kode_prodi' => '84103','nama_program_studi' => 'Pendidikan Fisika', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '78f127ef-0d90-4b1f-a794-f8a821ca476c','fakultas_id' => 4, 'kode_prodi' => '84201','nama_program_studi' => 'Ilmu Hubungan Internasional', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'd6f315de-b934-4dfd-a5bc-49ca457a6674','fakultas_id' => 9, 'kode_prodi' => '84202','nama_program_studi' => 'Pendidikan Matematika', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '578323d9-ec30-41ad-bedd-8ac5204a3144','fakultas_id' => 9, 'kode_prodi' => '84203','nama_program_studi' => 'Pendidikan Fisika', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '23eded88-d2fe-41ed-a039-a59c7d58a3bb','fakultas_id' => 9, 'kode_prodi' => '84204','nama_program_studi' => 'Pendidikan Kimia', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '4d72edf0-b1ea-4960-a928-9d31763e380c','fakultas_id' => 9, 'kode_prodi' => '84205','nama_program_studi' => 'Pendidikan Biologi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '1b27dfc7-64d7-4a75-b0e1-9e059d2e1f36','fakultas_id' => 9, 'kode_prodi' => '85101','nama_program_studi' => 'Pendidikan Olah Raga', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => 'c4802782-e00f-4b19-a464-09fdbf4538aa','fakultas_id' => 9, 'kode_prodi' => '85201','nama_program_studi' => 'Pendidikan Jasmani, Kesehatan Dan Rekreasi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '1d007a87-3c2a-489a-8530-51f21f34a6e5','fakultas_id' => 9, 'kode_prodi' => '86103','nama_program_studi' => 'Teknologi Pendidikan', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '6664214b-8565-4b33-adee-5449b3e28520','fakultas_id' => 9, 'kode_prodi' => '86201','nama_program_studi' => 'Bimbingan Dan Konseling', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'eea5ce39-ce9f-4d42-99fd-fe2dda03647f','fakultas_id' => 9, 'kode_prodi' => '86202','nama_program_studi' => 'Pendidikan Anak Usia Dini', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '01fc0290-2992-4159-a3c3-21af8bf580fe','fakultas_id' => 9, 'kode_prodi' => '86205','nama_program_studi' => 'Pendidikan Masyarakat', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'ba2621a6-52f1-4579-b6ab-6d3c0c42e028','fakultas_id' => 9, 'kode_prodi' => '86205','nama_program_studi' => 'Pendidikan Luar Sekolah', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'f9e38022-9943-4d11-a5dd-c86902428356','fakultas_id' => 9, 'kode_prodi' => '86206','nama_program_studi' => 'Pendidikan Guru Sekolah Dasar', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '3b70c651-58bb-4730-bc94-8a610a358162','fakultas_id' => 9, 'kode_prodi' => '86207','nama_program_studi' => 'Pendidikan Guru Pendidikan Anak Usia Dini', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '17eaa285-8f42-4cd5-890f-aa85f0182d85','fakultas_id' => 9, 'kode_prodi' => '86209','nama_program_studi' => 'PJJ Pendidikan Guru Sekolah Dasar', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'ab88c952-7132-4b1d-8d05-2380d8a40899','fakultas_id' => 9, 'kode_prodi' => '86904','nama_program_studi' => 'Pendidikan Profesi Guru', 'nama_jenjang_pendidikan' => 'Profesi',],
            ['id_prodi' => '1024b687-cdc1-4f5e-a79a-20e60cb6b63b','fakultas_id' => 9, 'kode_prodi' => '87201','nama_program_studi' => 'Pendidikan Sejarah', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '438c7612-d1e2-4e48-940c-0d2bb76cbc3c','fakultas_id' => 9, 'kode_prodi' => '87203','nama_program_studi' => 'Pendidikan Ekonomi', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'ede4014d-cd37-4bea-96e1-51e8536c6180','fakultas_id' => 9, 'kode_prodi' => '87205','nama_program_studi' => 'Pendidikan Pancasila Dan Kewarganegaraan', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '898361bf-ded5-43e4-b458-69e4ea371f59','fakultas_id' => 9, 'kode_prodi' => '88111','nama_program_studi' => 'Pendidikan Bahasa', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '32145166-da75-43b6-a4fa-1e4b77c007f9','fakultas_id' => 9, 'kode_prodi' => '88201','nama_program_studi' => 'Pendidikan Bahasa Dan Sastra Indonesia', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => '3f95b922-31ea-4442-93fc-480385968f84','fakultas_id' => 9, 'kode_prodi' => '88203','nama_program_studi' => 'Pendidikan Bahasa Inggris', 'nama_jenjang_pendidikan' => 'S1',],
            ['id_prodi' => 'd06d7dd8-595e-40ce-9175-29680ce0bc21','fakultas_id' => 1, 'kode_prodi' => '95029','nama_program_studi' => 'Ilmu Lingkungan', 'nama_jenjang_pendidikan' => 'S3',],
            ['id_prodi' => 'd1558c83-f092-42bd-bcd0-ee07d01bc342','fakultas_id' => 1, 'kode_prodi' => '95102','nama_program_studi' => 'Kependudukan', 'nama_jenjang_pendidikan' => 'S2',],
            ['id_prodi' => '11b33597-a128-4e87-b415-5d200e195236','fakultas_id' => 1, 'kode_prodi' => '95129','nama_program_studi' => 'Pengelolaan Lingkungan', 'nama_jenjang_pendidikan' => 'S2',],
        ];

        foreach ($prodi as $key => $value) {
            Prodi::create($value);
        }
    }
}