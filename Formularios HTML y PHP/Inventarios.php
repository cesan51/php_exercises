<?php

echo "Solo Gas"."<BR>"."<BR>";
echo "Estos son lo datos ingresados de los productos "."<BR>"."<BR>";

$producto=$_POST["pro"];
$cantidad=$_POST["can"];
$fecha_produccion=$_POST["fprod"];
$fecha_vencimiento=$_POST["fven"];
$precio_compra=$_POST["pc"];
$precio_venta=$_POST["pv"];
$proveedor=$_POST["prov"];

echo "Producto: ". $producto."<BR>";
echo "Cantidad: ". $cantidad."<BR>";
echo "Fecha de Produccion: ".$fecha_produccion."<BR>";
echo "Fecha de Venta: ". $fecha_vencimiento."<BR>";
echo "Precio Compra: ".$precio_compra."<BR>";
echo "Precio Venta: ".$precio_venta."<BR>";
echo "Proveedor: ".$proveedor."<BR>";



 ?>
