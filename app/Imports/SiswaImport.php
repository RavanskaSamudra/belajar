<?php

namespace App\Imports;

use App\Models\Siswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SiswaImport implements ToCollection
{
    public function model(array $row)
    {
        return new Siswa([
            'nama' => $row[1],
            'nis' => $row[2],
            'alamat' => $row[3],
        ]);
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection) {}
}
