<?php 
use App\Calcul;
use PHPUnit\Framework\TestCase ;
class ProduitTest extends TestCase
{
    public function testProduit()
    {
        $c = new Calcul(3, 4);
        $this->assertEquals(12, $c->prod());
    }
}
?>