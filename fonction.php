<?php
declare(strict_types=1);
function calculerCoutAnnuel(float $coutMensuel): float
{
    return $coutMensuel * 12;
}
$coutServeur = calculerCoutAnnuel(24.90);
echo "Coût annuel : " . $coutServeur . " euros";
function calculerTauxOccupation(float $espaceUtilise, float $capacite): float
{
    return $espaceUtilise / $capacite * 100;
}
function estChargeCritique(float $chargeCpu): bool
{
    return $chargeCpu >= 90;
}