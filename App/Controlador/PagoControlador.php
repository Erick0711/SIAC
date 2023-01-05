<?php 
namespace App\Controlador;
use App\Modelo\Pago;
class PagoControlador extends Pago
{
    public function sumarMontoArticulo()
    {
        $pago = new Pago();
        $expensa = $pago->sumarExpensa('articulo');
        return $expensa['SUM(articulo.monto_expensa)'];
    }
    public function contarCantidadCopropietario()
    {
        $pago = new Pago();
        $cantidad = $pago->contarCopropietario('copropietario');
        return $cantidad['COUNT(copropietario.id)'];
    }
    public function contarCantidadPago()
    {
        $pago = new Pago();
        $cantidad = $pago->contarPago('copropietario');
        return $cantidad['COUNT(copropietario.estado_deuda)'];
    }
    public function contarCantidadCobrar()
    {
        $pago = new Pago();
        $cantidad = $pago->contarPorCobrar('copropietario');
        return $cantidad['COUNT(copropietario.estado_deuda)'];
    }
    public function sumarMontoExpensa()
    {
        $pago = new Pago();
        $cantidad = $pago->sumarTotalPago('pago');
        return $cantidad['SUM(pago.total_expensa)'];
    }
    public function sumarTotalResidente()
    {
        $pago = new Pago();
        $cantidad = $pago->sumarResidente('copropietario');
        return $cantidad['SUM(copropietario.cant_residentes)'];
    }
    public function sumarTotalMascota()
    {
        $pago = new Pago();
        $cantidad = $pago->sumarMascota('copropietario');
        return $cantidad['SUM(copropietario.cant_mascotas)'];
    }
    public function mostrarTipoPago()
    {
        $pago = new Pago();
        $tipoPago = $pago->obtenerTipoPago('tipo_pago');
        return $tipoPago;
    }
    public function consulta(){
        switch (isset($_REQUEST)) {
            case isset($_POST['guardarPago']):
                $pago = new Pago();
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $ci = $_POST['ci'];
                $apartamento = $_POST['numeroApartamento'];
                $tipoPago = $_POST['tipoPago'];
                $totalExpensa = $_POST['totalExpensa'];
                $registro = $pago->buscarCopropietario('v_copropietario', $nombre, $apellido, $ci, $apartamento);
                $id = $registro[0]['id'];
                $pago->guardarPago('pago',$id,$tipoPago,$totalExpensa);
                $pago->actualizarDeuda('copropietario', $id);
                echo $this->redirectVista('pago');
                break;
            default:
                break;
        }
    }
}
?>

