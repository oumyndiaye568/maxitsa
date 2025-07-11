<?php
namespace App\Entities;
enum TypeTransaction : string
{

    case paiement= 'paiement';
    case depot= 'depot';
    case  retrait= 'retrait';
}

