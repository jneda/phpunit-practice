<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Product;

class ProductTest extends TestCase
{
  public function testDefault()
  {
    $product = new Product('Pomme', 'food', 1);
    $this->assertSame(0.055, $product->computeTVA());
  }

  public function testComputeTVAFoodProduct()
  {
    $product = new Product('Papaye mauve', 'food', 20);
    $this->assertSame(1.1, $product->computeTVA());
  }

  public function testComputeTVAOtherProduct()
  {
    $product = new Product('Voiture pas chère', 'car', 1000);
    $this->assertSame(196.0, $product->computeTVA());
  }
}
