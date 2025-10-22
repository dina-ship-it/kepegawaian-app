<?php

namespace App\Exports;

use App\Models\Pengabdian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class PengabdianExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        return Pengabdian::select('nama_kegiatan', 'jenis_kegiatan', 'tanggal_mulai', 'lokasi', 'deskripsi')->get();
    }

    public function headings(): array
    {
        return [
            'Nama Kegiatan',
            'Jenis Kegiatan',
            'Tanggal Mulai',
            'Lokasi',
            'Deskripsi',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        // 🎨 Header style
        $sheet->getStyle('A1:E1')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'],
                'size' => 12,
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'color' => ['rgb' => '2563EB'], // Biru elegan
            ],
            'alignment' => [
                'horizontal' => 'center',
                'vertical' => 'center',
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_MEDIUM,
                    'color' => ['rgb' => '1E40AF'], // Biru lebih tua di pinggir header
                ],
            ],
        ]);

        // 📊 Border untuk seluruh tabel
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")
              ->getBorders()
              ->getAllBorders()
              ->setBorderStyle(Border::BORDER_THIN)
              ->getColor()->setRGB('999999');

        // 🧭 Auto width semua kolom
        foreach (range('A', $highestColumn) as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // 🧷 Tinggi baris header
        $sheet->getRowDimension(1)->setRowHeight(25);

        return [];
    }
}
