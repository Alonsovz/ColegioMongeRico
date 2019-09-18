<?php 

class Reporte {

    public static $con;


    public function __construct() {
        require_once './vendor/autoload.php';
    }

    public function voucher($resultado) 
    {   
        
        

        $tabla = '';

        $tabla .= ' <style>
                        td { 
                            text-align: center;
                        }
                        table {
                            width: 100%;
                        }
                        .header {
                            font-family: sans-serif;
                            width: 100%;
                            display: flex;
                            justify-content: flex-end;
                        }
                        .tabla, th, td{
                            border: 1px solid black;
                            border-collapse: collapse;
                            font-family: sans-serif;
                        }
                    </style>';

        $tabla.= "
            <div class='header'>
                
                
                Por $ <br>
                RECIBÍ DEL COLEGIO DOCTORA MARGARITA MONGE RICO LA CANTIDAD DE:
                ----- , EN CONCEPTO DE PAGO POR SERVICIOS DE ENSEÑANZA EN DICHA INSTITUCIÓN 
                DURANTE EL MES DE : -----.

                TOTAL $ ---.<br>
                (-) 10% DE RENTA $ ----- <br>
                OTROS $ ------ <br>
                <b>A RECIBIR $ ------</b><br>

                LOURDES, -----FECHA-------. <br><br><br><br>


                Firma: ___________________________<br>
                NOMBRE: --------nombre--------<br>
                NIT : ------------nit---------<br>
                DIRECCIÓN: COL. PALOS GRANDES BLOCK X CASA #2, LOURDES COLON.
            </div>    
             <br><br>           
           _____________________________________________________________________

            ";


            $tabla.= "
            <br><br>
            <div class='header'>
                
                
                Por $ <br>
                RECIBÍ DEL COLEGIO DOCTORA MARGARITA MONGE RICO LA CANTIDAD DE:
                ----- , EN CONCEPTO DE PAGO POR SERVICIOS DE ENSEÑANZA EN DICHA INSTITUCIÓN 
                DURANTE EL MES DE : -----.

                TOTAL $ ---.<br>
                (-) 10% DE RENTA $ ----- <br>
                OTROS $ ------ <br>
                <b>A RECIBIR $ ------</b><br>

                LOURDES, -----FECHA-------. <br><br><br><br>


                Firma: ___________________________<br>
                NOMBRE: --------nombre--------<br>
                NIT : ------------nit---------<br>
                DIRECCIÓN: COL. PALOS GRANDES BLOCK X CASA #2, LOURDES COLON.
            </div>    
             <br><br>           
         

            ";

        

        $tabla .= "";

        $html = $tabla;


        $pdf = new \Mpdf\Mpdf();
        $pdf->WriteHTML($html);
        $pdf->Output();
    }

    

}