<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            "name" => $row['name'],
            "email" => $row['email'],
            "telepon" => $row['telepon'],
            "username" => $row['username'],
            "password" => Hash::make($row['password']),
            "tgl_lahir" => $row['tgl_lahir'],
            "gender" => $row['gender'],
            "tgl_join" => $row['tgl_join'],
            "status_nikah" => $row['status_nikah'],
            "alamat" => $row['alamat'],
            "cuti_dadakan" => $row['cuti_dadakan'],
            "cuti_bersama" => $row['cuti_bersama'],
            "cuti_menikah" => $row['cuti_menikah'],
            "cuti_diluar_tanggungan" => $row['cuti_diluar_tanggungan'],
            "cuti_khusus" => $row['cuti_khusus'],
            "cuti_melahirkan" => $row['cuti_melahirkan'],
            "izin_telat" => $row['izin_telat'],
            "izin_pulang_cepat" => $row['izin_pulang_cepat'],
            "is_admin" => $row['is_admin'],
            "jabatan_id" => $row['jabatan_id'],
            "lokasi_id" => $row['lokasi_id'],
        ]);
    }
}
