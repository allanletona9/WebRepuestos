<?php 

include("Datos.php");

class MantenimientosTest extends \PHPUnit_Framework_TestCase{

    /** @test **/
    public function probar_funcionamiento_clientes(){
        $cliente = new Mantenimientos;

        $registro_cliente = $cliente->Clientes('Proyecto Final', '25251010', 'Guatemala');

        $this->assertEquals(true, $registro_cliente);
    }

        /** @test **/
    public function probar_funcionamiento_proveedores(){
        $proveedor = new Mantenimientos;

        $registro_proveedor = $proveedor->Proveedores('Allan', '10364789', 'Guatemala');

        $this->assertEquals(true, $registro_proveedor);
    }
    
        /** @test **/
    public function probar_funcionamiento_tipo_pago(){
        $tipo_pago = new Mantenimientos;
        
        $registro_tipo_pago = $tipo_pago->TipoPago('Cheques');

        $this->assertEquals(true, $registro_tipo_pago);
    }
    
        /** @test **/
    public function probar_funcionamiento_tipo_repuesto(){
        $tipo_repuesto = new Mantenimientos;
        
        $registro_tipo_repuesto = $tipo_repuesto->TipoRepuesto('Repuesto de prueba');

        $this->assertEquals(true, $registro_tipo_repuesto);
    }
    
        /** @test **/
    public function probar_funcionamiento_usuarios(){
        $usuario = new Mantenimientos;

        $registro_usuario = $usuario->Usuario('Allan Steve','Letona Martinez','123');

        $this->assertEquals(true, $registro_usuario);
    }

}

?>
