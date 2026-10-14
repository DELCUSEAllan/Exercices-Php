<?php
declare(strict_types=1);
function shippingCost(float $subtotal, float $threshold = 50.0): float {
    if ($subtotal < $threshold) {
        return $subtotal + 5;

}
    return $subtotal;
}
function grandTotal(float $subtotal): string {
    return 'Vous devez payez ' . shippingCost($subtotal) .'€';
}

echo grandTotal(50);
