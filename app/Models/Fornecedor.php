<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome_fornecedor', 'cnpj'];

    public function product() {
        return $this->hasOne(Produto::class, 'id_fornecedor');
    }
}