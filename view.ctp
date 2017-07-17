   <TABLE HEIGHT="200" WIDTH="900"  BORDER=1 cellspacing=0 cellpadding=2 bordercolor="666633">
	<TR>

		    <TD align="center" ROWSPAN=2><img src="http://127.0.0.1/control/images/hcvb.png" WIDTH="100" HEIGHT="100"></TD>
	    	<TD align="center">Hospital Carlos Van Buren <BR> Unidad de Gestion de TICS </TD> 
	    	<TD>UG TICS-001</TD>
	    	 
	</TR>
	<TR>
	    <TD align="center">Formato de Informe para Bajas de Equipos <BR> Computacionales</TD> 
	     <TD><?php echo 'Fecha :  '.$invPc['InvPc']['fechab']?></TD>
	</TR>
	
</TABLE>
<TABLE HEIGHT="300" WIDTH="900" BORDER=1 cellspacing=0 cellpadding=2 bordercolor="666633">
	<TR>
		    <TD HEIGHT="100" align="center"> Reporte de Baja de Equipamiento </TD>
   	</TR>
   	<TR>
		    <TD HEIGHT="100"><?php echo 'Nº de Reporte :  '.$invPc['InvPc']['id'].$invPc['InvPc']['inventario']?> </TD>
   	</TR>
   	<TR>
		    <TD HEIGHT="100"><?php echo 'Serie /Inventario :  '.$invPc['InvPc']['inventario']?> </TD>
   	</TR>
   	<TR>
		    <TD HEIGHT="100" ><?php echo 'Ubicacion :  '.$invPc['Departamentos']['unidad']?> </TD>
   	</TR>
   	<TR>
		    <TD HEIGHT="100"><?php echo 'Motivo de la Baja :  '.$invPc['tfallas']['tfalla']?> </TD>
   	</TR>
   	 
	
</TABLE>
<TABLE HEIGHT="300" WIDTH="900" BORDER=1 cellspacing=0 cellpadding=2 bordercolor="666633">   
	<TR>

		    <TH VALIGN="TOP">Nombre y firma del técnico que hizo el reporte  </TH>
		    <TH VALIGN="TOP">Nombre y firma del Jefe que aprueba  el reporte  </TH>
   	</TR>
   	
</TABLE>	
  