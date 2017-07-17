<nav class="navbar navbar-ct-blue navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav">
      <li><a href="/control/pc.zip"><div class="logo"><img src="http://10.6.96.212/control/images/siri.png"></div></a></li>
      <ul class="nav navbar-nav navbar-right">
<li class="dropdown">   
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="pe-7s-plugin"></i>
                  <p>Computadores&nbsp;<b class="caret"></b></p>
              </a>

                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Gestión</li>
                    <li><a href="/control/InvPcs/index">Activos</a></li>
                    <li><a href="/control/InvPcs/enbaja">Bajas</a></li>
             
            </ul>
        </li>
        </ul>    
       <li><a href="/control/InvMons/index"><i class="pe-7s-monitor"></i><p>Monitores</p></a></li>
      <li><a href="/control/InvImps/index"><i class="pe-7s-print"></i><p>Impresoras</p></a></li>
      <li><a href="/control/InvOtros/index"><i class="pe-7s-disk"></i><p>Otro HW</p></a></li>
      <li><a href="/control/Ips/index"><i class="pe-7s-network"></i><p>IP</p></a></li>
          </ul>

      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="pe-7s-date"></i><p>Calendario<b class="caret"></b></p></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/control/full_calendar">Calendario</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Eventos</li>
                <li><a href="/control/full_calendar/events/add">Crear Evento</a></li>
                <li><a href="/control/full_calendar/events">Manejar Eventos</a></li>
                <li><a href="/control/full_calendar/event_types">Tipos Eventos</a></li>
            </ul></li>
       <li class="dropdown">            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="pe-7s-plugin"></i>
                  <p>Mantenedores&nbsp;<b class="caret"></b></p>
              </a>

              <ul class="dropdown-menu" role="menu">
			<li class="dropdown-header">Gestión Mantenedores</li>
            <li><a href="/control/Pc1s">CPU</a></li>
            <li><a href="/control/Pc2s">Disco Duro</a></li>
            <li><a href="/control/Rams">RAM</a></li>
            <li><a href="/control/Pc3s">Sist.Operativos</a></li>
            <li class="divider"></li></i>            
            <li><a href="/control/Marcaimps">Marca Impresoras</a></li>
            <li><a href="/control/Marcapcs">Marca PCS</a></li>
            <li><a href="/control/Marcamons">Marca Monitores</a></li>
			<li class="divider"></li></i>
            <li><a href="/control/Unidades">Unidades</a></li>
            <li><a href="/control/Lugares">Lugares</a></li>
              </ul>
            </li>
            <li class="dropdown">            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="pe-7s-id"></i>
                  <p>Usuario&nbsp;<b class="caret"></b></p>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header">Gestión Permisos</li>
                <li><a href="/control/acl">ACL</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Gestión Usuarios</li>
                <li><a href="/control/users">Usuarios</a></li>
                <li><a href="/control/groups">Roles</a></li>
                <li class="divider"></li></i>
                <li class="dropdown-header">Personal</li> 
                <li><a href="/control/Manual - control.pdf" target="_blank">Manual control</a></li>              
                <li><a href="/control/users/view/<?php echo $_SESSION['Auth']['User']['id'];?>">Perfil</a></li>
                <li class="divider"></li>
                <li><a href="/control/users/logout">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<!--  end navbar --> 

<div class="well1 well-sm1"><br>
    <?php echo $this->Search->create('',array(
  'inputDefaults' => array(
    'div' => 'form-group',
    'label' => false,
    'wrapInput' => false,
    'class' => 'form-control'
  ),
  'class' => 'form-inline'
)); ?>
<div class="modal fade text-center" id="theModal">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">COMPUTADORES</a></li>
    <li><a data-toggle="tab" href="#menu1">Busqueda Avanzada</a></li>
    <li><a data-toggle="tab" href="#menu2">Acciones</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<div style="text-align:right;">
<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus glyphicon-white"></i> Agregar Registro'), array('action' => 'add'),array ('class'=> 'btn btn-success','escape' => false)); ?>

</div>    </div>
    <div id="menu1" class="tab-pane fade">
  
    <?php echo $this->Search->input('filter3', array(
    'placeholder' => 'Buscar por IP'
  )); ?>   
    <?php echo $this->Search->input('filter2'); ?> 
    <?php echo $this->Search->input('filter5'); ?> 
    <?php echo $this->Search->input('filter6'); ?> 
    <?php echo $this->Search->input('filter1'); ?> 

    </div>
    <div id="menu2" class="tab-pane fade">
<div class="control-group ">
<div style="text-align:right;">
<div class="btn-group">
<a class="btn btn-default" id="imprimir"> <i class="glyphicon glyphicon-print"></i> Imprimir</a>
<a class="btn btn-default" onclick="$('#50b9e78177f37e3c747f67abcc8af36a44f220f5_download').attr({src: '?action=excel'});"> <i class="glyphicon glyphicon-download"></i> Excel</a>
</div>

</div>

    <script>
      $('#imprimir').click(function(){var print = window.open('../imprimir', 'Print', 'menubar=0,location=0,height=700,width=760');});
    </script>
    
</div>


    </div>
  </div>


<div class="row-fluid show-grid">

<nav>
  <ul class="pagination pagination-sm pull-right">
                        <?php
                            echo $this->Paginator->prev(__('<'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                            echo $this->Paginator->next(__('>'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                        ?>
                    </ul></nav>
<ul class="pagination pagination-large pull-left">
    
    <div class="input-group">
  <?php echo $this->Search->input('filter4', array(
    'placeholder' => 'Ingrese serie/anexo',
    'onkeyup' => 'this.value=this.value.toUpperCase()'
  )); ?>

  <span class="input-group-btn">
  <a class="btn btn-info" href="/control/InvPcs/index">Reset</a>
  <?php echo $this->Search->button('<i class="glyphicon glyphicon-search"></i> Buscar', array(
    'type' => 'submit',
    'class' => 'btn btn-primary',
    'escape' => false
));?>
<?php echo $this->Form->end(); ?> 
</span></div>                    </ul>



  <!-- Default panel contents -->
  <!-- Table -->
<table class="table table-striped table-condensed table-bordered">
<thead>
  <tr class="info">
      <th class="uno"><?php echo _('ID'); ?></th> 
      <th class="uno"><?php echo _('Estado'); ?></th> 
      <th class="uno"><?php echo _('Fuente'); ?></th> 
      <th class="uno"><?php echo _('Unidad'); ?></th> 
      <th class="uno"><?php echo _('Lugar'); ?></th>  
      <th class="uno"><?php echo _('Anexo'); ?></th>    
      <th class="uno"><?php echo _('Inventario/serie'); ?></th>
      <th class="uno"><?php echo _('IP'); ?></th>
      <th class="uno"><?php echo _('Marca'); ?></th>
      <th class="uno"><?php echo _('Modelo'); ?></th>
      <th class="uno"><?php echo _('Nombre equipo'); ?></th> 
      <th class="uno"><?php echo _('Cuenta'); ?></th> 
      <th class="uno"><?php echo _(''); ?></th> 


  </tr>
</thead>
<tbody>

 <?php foreach ($invPcs as $invPc): ?>
<div class="modal fade text-center" id=<?php echo ($invPc['InvPc']['id'])?>>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>
<div class="modal fade text-center" id=<?php echo '2'.($invPc['InvPc']['id'])?>>
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>
  <tr>
    <td><?php echo ($invPc['InvPc']['id']); ?>&nbsp;</td>


    <td><?php echo ($invPc['InvPc']['estado']== 1 ? '<i style="font-size: 20px;color:#34ACDC" class="glyphicon glyphicon-ok"></i>' : '<i style="font-size: 20px;color:gray" class="glyphicon glyphicon-remove"></i>' ); ?></td>


    <td><?php echo ($invPc['Fuentes']['proyecto']); ?>&nbsp;</td>
    <td><?php echo ($invPc['Departamentos']['unidad']); ?>&nbsp;</td>
    <td><?php echo ($invPc['Lugares']['lugar']); ?>&nbsp;</td>
    <td><?php echo ($invPc['InvPc']['anexo']); ?>&nbsp;</td>





<td class="dos"><ab><?php echo $this->Html->link($invPc['InvPc']['inventario'], array('controller' => 'InvPcs', 'action' => 'view', $invPc['InvPc']['id']),array ('class'=> 'label label-info','escape' => false,'data-target' => '#'.$invPc['InvPc']['id'], 'data-toggle' => 'modal')); ?></ab> 
<div style="display: none" tooltiptitle="<?php echo ($invPc['InvPc']['inventario']);?>">

CPU:&nbsp;<span style="color:#555"><?php echo ($invPc['Pc1']['cpu']); ?></span><br>
RAM:&nbsp;<span style="color:#555"><?php echo ($invPc['Rams']['cantidad']); ?></span><br>
HDD:&nbsp;<span style="color:#555"><?php echo ($invPc['Pc2']['hdd']); ?></span><br>
S.O.:&nbsp;<span style="color:#555"><?php echo ($invPc['Pc3']['so']); ?></span><br>

</div>
</td>

<td class="dos"><ab class='label label-success'><?php echo $invPc['Ips']['id']; ?></ab> 

<div style="display: none" tooltiptitle="<?php echo ($invPc['Ips']['id']);?>">


Mascara:&nbsp;<span style="color:#555"><?php echo ($invPc['Ips']['mascara']); ?></span><br>
Gateway:&nbsp;<span style="color:#555"><?php echo ($invPc['Ips']['gateway']); ?></span><br>

</div>
</td>

    <td><?php echo ($invPc['Marcapcs']['fabricante']); ?>&nbsp;</td>
    <td><?php echo ($invPc['InvPc']['modelo']); ?>&nbsp;</td>
    <td><?php echo ($invPc['InvPc']['nombrepc']); ?>&nbsp;</td>
    <td><?php echo ($invPc['InvPc']['usuario']); ?>&nbsp;</td>





    <td><span class="badge2">

      <?php echo $this->Html->link(('<i style="font-size: 24px;color:#ccc" class="glyphicon glyphicon-floppy-save"></i>'), array('action' => 'view', $invPc['InvPc']['id'],'ext' => 'pdf'),array ('escape' => false)); ?>
 
      </span></td>


  
</tr>
<?php endforeach; ?></tbody></table>

  <p>
  <?php
  echo $this->Paginator->counter(array(
  'format' => __('Página {:page} de {:pages}, mostrando {:current} coincidencias de {:count} en total, partiendo en {:start}, finalizando en {:end}')
  ));
  ?>
  </p>
</div></div>

<script type="text/javascript">
  $('ab').each(function() {
  $(this).qtip({
    content: {
            text: $(this).next('div:hidden'),
            title: $(this).next('div:hidden').attr('tooltiptitle')
       },
    style: { 
        classes: 'qtip-green qtip-shadow qtip-rounded' 
   },
 position: {
        my: 'bottom center',  // Position my top left...
        at: 'top center', // at the bottom right of...
    }

  });
});

</script>