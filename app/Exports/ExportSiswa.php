<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportSiswa implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Siswa::select('id', 'nama', 'nis', 'alamat')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama', 'nis', 'Alamat'];
    }
}
