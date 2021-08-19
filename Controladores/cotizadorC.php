<?php
	$sumador_total=0;
	$sql=mysqli_query($con, "select * from productos_demo, 
    tmp_cotizacion where productos_demo.id_producto=tmp_cotizacion.id_producto and tmp_cotizacion.session_id='".$session_id."'");
	while ($row=mysqli_fetch_array($sql)){

        $id_tmp=$row["id_tmp"];
        $codigo_producto=$row['codigo_producto'];
        $cantidad=$row['cantidad_tmp'];
        $nombre_producto=$row['nombre_producto'];
        $id_marca_producto=$row['id_marca_producto'];

	if (!empty($id_marca_producto)){

        $sql_marca=mysqli_query($con, "select nombre_marca from marcas_demo where id_marca='$id_marca_producto'");
        $rw_marca=mysqli_fetch_array($sql_marca);
        $nombre_marca=$rw_marca['nombre_marca'];
        $marca_producto=" ".strtoupper($nombre_marca);
        
    }else {$marca_producto='';}

        $precio_venta=$row['precio_tmp'];
        $precio_venta_f=number_format($precio_venta,2);//Formateo variables
        $precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
        $precio_total=$precio_venta_r*$cantidad;
        $precio_total_f=number_format($precio_total,2);//Precio total formateado
        $precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
        $sumador_total+=$precio_total_r;//Sumador
	
?>