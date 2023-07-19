<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PengampuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array{
        return[
            'id' => $this->id,
            'id_matapelajaran' => $this->id_matapelajaran,
            'id_guru' => $this->id_guru,
            'jumlah' => $this->jumlah,
            'kelas' => $this->kelas,
            'semester' => $this->semester,
            'jurusan' => $this->jurusan,
            'tahun' => $this->tahun,


        ];
    }
}
