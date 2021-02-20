<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ORDENES DE COMPRA ACTIVAS</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
   <!-- /.row -->
   <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ORDENES DE COMPRA
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th  rowspan="1" colspan="1">CONSECUTIVO</th>
                                        <th  rowspan="1" colspan="1">CODIGO OBRA</th>
                                        <th  rowspan="1" colspan="1">DESCRIPCIÓN</th>
                                        <th  rowspan="1" colspan="1">SOLICITADO POR</th>
                                        <th  rowspan="1" colspan="1">FECHA</th>
                                        <th  rowspan="1" colspan="1">ACCIONES</th>


                                          </th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($producto as $productos){
                                        echo '<tr class="gradeA odd" role="row" style="text-align: center;">
                                                <td>'.$productos['consecutivo'].'</td>
                                                <td>'.$productos['obra'].'</td>
                                                <td>'.$productos['des_re'].'</td>
                                                <td>'.$productos['encargado'].'</td>
                                                <td>'.$productos['fecha_requi'].'</td>


                                                <td>

                                            <a href="index.php?modulo=Requisicion2&controlador=requisicion2&funcion=getEditar&conse='.$productos['consecutivo'].'"><button class="btn btn-primary btn-circle btn-md"><i class="fa fa  fa-pencil      "></i></button></a>
                                            <a href="index.php?modulo=Requisicion2&controlador=requisicion2&funcion=getConsultarpdf&consecutivo='.$productos['consecutivo'].'"><button class="btn btn-danger btn-circle btn-md"><i class="fa fa fa fa-file-pdf-o"></i></button></a>
                                            <div class="row">
                                            <div class="col-lg-6">


                                                    <!-- /.panel-heading -->
                                                    <div class="panel-body">
                                                        <!-- Button trigger modal -->
                                                        <button class="btn btn-warning btn- btn-lg" data-toggle="modal" data-target="#myModal">
                                                            <i class="fa fa  fa-paper-plane    "></i>
                                                        </button>';
                                    ?>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <form role="form" name="requisicion" method="post" action="<?php echo getUrl("Requisicion2","requisicion2","ordenEnvioCorreo"); ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">CORREOS ELECTRONICOS </h4>
                                            </div>
                                            <div class="modal-body">
                                                 <div class="form-group">
                                                <label>SELECCIONE EL DESTINATARIO:</label><br><BR>

                                                <label>María</label><BR>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="correo1" value="mar2030721@gmail.com">mar2030721@gmail.com
                                                    </label>
                                                </div><BR><BR>

                                                <label>AAAA</label><BR>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="correo2" value="npalopa@gmail.com">npalopa@gmail.com
                                                    </label>
                                                </div><BR><BR>

                                                 <label>EEEE</label><BR>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="correo3" value="coin145@gmail.com">coin145@gmail.com
                                                    </label>
                                                </div><BR><BR>

                                                 <label>IIII</label><BR>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="correo4" value="wisnerwam@gmail.com">wisnerwam@gmail.com
                                                    </label>
                                                </div>

                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                </form>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                                                </td>


                                             </tr>

                                            <?php
                                            }
                                            ?>


                                    </tbody>

                            </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
</div>