<?php

namespace App\Exports;

use App\Models\Penelitian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenelitianExport implements FromCollection, WithHeadings
{
    /**
     * Ambil data dari tabel penelitian
     */
    public function collection()
    {
        return Penelitian::select('id', 'judul', 'bidang', 'tanggal_mulai', 'tanggal_selesai', 'status')->get();
    }

    /**
     * Buat header (judul kolom) untuk file Excel
     */
    public function headings(): array
    {
        return [
            'ID',
            'Judul',
            'Bidang',
            'Tanggal Mulai',
            'Tanggal Selesai',
            'Status'
        ];
    }
}
