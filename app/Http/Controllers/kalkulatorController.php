<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPenilaian;
use Illuminate\Support\Facades\Auth;

class kalkulatorController extends Controller
{
    public function show()
    {
        $records = HasilPenilaian::where('user_id', auth()->id())
            ->orderBy('tanggal_tes', 'asc')
            ->get()
            ->map(function ($item) {
                $detail = json_decode($item->keterangan, true);

                return [
                    'tanggal'      => $item->tanggal_tes,
                    'lari12menit'  => $detail['lari12menit'] ?? 0,
                    'pushUp'       => $detail['pushUp']['nilai'] ?? 0,
                    'sitUp'        => $detail['sitUp'] ?? 0,
                    'pullUp'       => $detail['pullUp']['nilai'] ?? 0,
                ];
            });

        return view('kalkulator', [
            'records'     => $records,
            'scoreResult' => session('scoreResult'),
            'success'     => session('success'),
        ]);
    }

    public function hitung(Request $request)
    {
        $data = $request->validate([
            'tanggal'      => ['required', 'date'],
            'gender'       => ['required', 'in:laki-laki,perempuan'],
            'lari12menit'  => ['required', 'numeric'],
            'pushUp'       => ['required', 'integer'],
            'sitUp'        => ['required', 'integer'],
            'pullUp'       => ['required', 'integer'],
            'shuttleRun'   => ['required', 'numeric'],
        ]);

        $gender = $data['gender'];

        // ================== FUNGSI HITUNG ==================

        $hitungNilaiLari12Menit = function (float $jarak, string $gender): float {
            if ($gender === 'laki-laki') {
                if ($jarak >= 3444) return 100;
                if ($jarak >= 3200) return 90;
                if ($jarak >= 3000) return 80;
                if ($jarak >= 2800) return 70;
                if ($jarak >= 2600) return 60;
                if ($jarak >= 2400) return 50;
                if ($jarak >= 2200) return 40;
                return max(0, ($jarak / 2200) * 40);
            } else {
                if ($jarak >= 3095) return 100;
                if ($jarak >= 2800) return 90;
                if ($jarak >= 2600) return 80;
                if ($jarak >= 2400) return 70;
                if ($jarak >= 2200) return 60;
                if ($jarak >= 2000) return 50;
                if ($jarak >= 1800) return 40;
                return max(0, ($jarak / 1800) * 40);
            }
        };

        $hitungNilaiPushUp = function (int $jumlah, string $gender): array {
            if ($gender === 'laki-laki') {
                if ($jumlah >= 50) return ['nilai' => 100, 'kategori' => 'Sangat Baik'];
                if ($jumlah >= 40) return ['nilai' => 85, 'kategori' => 'Baik'];
                if ($jumlah >= 30) return ['nilai' => 70, 'kategori' => 'Cukup'];
                if ($jumlah >= 20) return ['nilai' => 55, 'kategori' => 'Kurang'];
                return ['nilai' => max(0, $jumlah * 2), 'kategori' => 'Rendah'];
            } else {
                if ($jumlah >= 30) return ['nilai' => 100, 'kategori' => 'Sangat Baik'];
                if ($jumlah >= 20) return ['nilai' => 85, 'kategori' => 'Baik'];
                if ($jumlah >= 10) return ['nilai' => 60, 'kategori' => 'Cukup'];
                return ['nilai' => max(0, $jumlah * 5), 'kategori' => 'Rendah'];
            }
        };

        $hitungNilaiSitUp = function (int $jumlah, string $gender): float {
            if ($gender === 'laki-laki') {
                if ($jumlah >= 45) return 100;
                if ($jumlah >= 40) return 90;
                if ($jumlah >= 35) return 80;
                if ($jumlah >= 30) return 70;
                if ($jumlah >= 25) return 60;
                if ($jumlah >= 20) return 50;
                return max(0, $jumlah * 2.5);
            } else {
                if ($jumlah >= 43) return 100;
                if ($jumlah >= 38) return 90;
                if ($jumlah >= 33) return 80;
                if ($jumlah >= 28) return 70;
                if ($jumlah >= 23) return 60;
                if ($jumlah >= 18) return 50;
                return max(0, $jumlah * 2.8);
            }
        };

        $hitungNilaiPullUp = function (int $jumlah, string $gender): array {
            if ($gender === 'laki-laki') {
                if ($jumlah >= 18) return ['nilai' => 100, 'kategori' => 'Sangat Baik'];
                if ($jumlah >= 15) return ['nilai' => 90, 'kategori' => 'Baik'];
                if ($jumlah >= 12) return ['nilai' => 80, 'kategori' => 'Cukup'];
                if ($jumlah >= 9)  return ['nilai' => 70, 'kategori' => 'Kurang'];
                if ($jumlah >= 6)  return ['nilai' => 60, 'kategori' => 'Rendah'];
                return ['nilai' => max(0, $jumlah * 10), 'kategori' => 'Rendah'];
            } else {
                if ($jumlah >= 63) return ['nilai' => 100, 'kategori' => 'Sangat Baik'];
                if ($jumlah >= 50) return ['nilai' => 90, 'kategori' => 'Baik'];
                if ($jumlah >= 40) return ['nilai' => 80, 'kategori' => 'Cukup'];
                if ($jumlah >= 30) return ['nilai' => 70, 'kategori' => 'Kurang'];
                if ($jumlah >= 20) return ['nilai' => 60, 'kategori' => 'Rendah'];
                return ['nilai' => max(0, ($jumlah / 63) * 100), 'kategori' => 'Rendah'];
            }
        };

        $hitungNilaiShuttleRun = function (float $waktu, string $gender): float {
            if ($gender === 'laki-laki') {
                if ($waktu <= 16.2) return 100;
                if ($waktu <= 17)   return 90;
                if ($waktu <= 18)   return 80;
                if ($waktu <= 19)   return 70;
                if ($waktu <= 20)   return 60;
                if ($waktu <= 21)   return 50;
                return max(0, 100 - ($waktu - 16.2) * 10);
            } else {
                if ($waktu <= 17.6) return 100;
                if ($waktu <= 18.5) return 90;
                if ($waktu <= 19.5) return 80;
                if ($waktu <= 20.5) return 70;
                if ($waktu <= 21.5) return 60;
                if ($waktu <= 22.5) return 50;
                return max(0, 100 - ($waktu - 17.6) * 10);
            }
        };

        // ================== HITUNG ==================

        $lari12menitNilai = $hitungNilaiLari12Menit((float) $data['lari12menit'], $gender);
        $pushUpResult     = $hitungNilaiPushUp((int) $data['pushUp'], $gender);
        $sitUpNilai       = $hitungNilaiSitUp((int) $data['sitUp'], $gender);
        $pullUpResult     = $hitungNilaiPullUp((int) $data['pullUp'], $gender);
        $shuttleRunNilai  = $hitungNilaiShuttleRun((float) $data['shuttleRun'], $gender);

        $nilaiAkhir = round(
            ($lari12menitNilai + $pushUpResult['nilai'] + $sitUpNilai + $pullUpResult['nilai'] + $shuttleRunNilai) / 5
        );

        $status = $nilaiAkhir >= 70 ? 'lulus' : 'tidak-lulus';

        $scoreResult = [
            'lari12menit'    => $lari12menitNilai,
            'pushUp'         => $pushUpResult['nilai'],
            'sitUp'          => $sitUpNilai,
            'pullUp'         => $pullUpResult['nilai'],
            'shuttleRun'     => $shuttleRunNilai,
            'nilaiAkhir'     => $nilaiAkhir,
            'maxTotal'       => 100,
            'status'         => $status,
            'kategoriPushUp' => $pushUpResult['kategori'],
            'kategoriPullUp' => $pullUpResult['kategori'] ?? null,
        ];

        // ================== SIMPAN KE DATABASE ==================
        HasilPenilaian::create([
            'user_id'     => Auth::id(),
            'tanggal_tes' => $data['tanggal'],
            'nilai'       => $nilaiAkhir,
            'hasil'       => $status === 'lulus' ? 'LULUS' : 'TIDAK LULUS',
            'keterangan'  => json_encode([
                'lari12menit' => $lari12menitNilai,
                'pushUp'      => $pushUpResult,
                'sitUp'       => $sitUpNilai,
                'pullUp'      => $pullUpResult,
                'shuttleRun'  => $shuttleRunNilai,
            ]),
        ]);

        return redirect()
            ->route('kalkulator.show')
            ->with([
                'scoreResult' => $scoreResult,
                'success'     => 'Data berhasil dihitung dan disimpan! 🎉',
            ])
            ->withInput();
    }
}
