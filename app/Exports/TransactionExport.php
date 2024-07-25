<?php

namespace App\Exports;

use App\Models\TransactionTypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class TransactionExport implements
    FromCollection,
    ShouldAutoSize,
    WithHeadings,
    WithEvents
{

    public function __construct(){
        $this->userId = Auth::id();
        // die(var_dump($this->userId));
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $transaction = TransactionTypes::where('customer_id', $this->userId)->pluck('transaction_id', 'transaction_type');
        return $transaction;
    }
    public function headings(): array
    {
        return [
            'Client Id',
            'Sender Id',
            'Transaction Amount',
            'Previous Balance',
            'Final Balance',
            'Transaction Type',
            'Transaction Date',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:G1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
            }
        ];
    }
}
