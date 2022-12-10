<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-users" style="color:#d8ad2e;font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countUser; ?></h2>
                        <p class="m-b-0">Usuarios</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i id="iarchive" class="fa fa-building" style="color:#357ae8;font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countStore; ?></h2>
                        <p class="m-b-0">Restaurantes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-utensils" style="color:#17a2b8; font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countDish; ?></h2>
                        <p class="m-b-0">Platillos</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-file" style="color:#9466de; font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countOrders; ?></h2>
                        <p class="m-b-0">Total de ordenes</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-th-large" style="color:#505050; font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countCategory;?></h2>
                        <p class="m-b-0">Categorias</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-spinner" style="color:#ad6d9c; font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countPendingOrders; ?></h2>
                        <p class="m-b-0">Ordenes pendiente</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-check-square" style="color:#28a745; font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countDeliveredOrders; ?></h2> 
                        <p class="m-b-0">Delivery entregados</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-times-circle" style="color:#dc3545; font-size: 2.5em;"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><?php echo $countRejectedOrders; ?></h2>
                        <p class="m-b-0">Orden rechazada</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2>Reporte de restaurante</h2>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de restaurante</th>
                                <th>Total Sales</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(!empty($resReport)) {?>
                            <?php foreach($resReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->r_id; ?></td>
                                <td><?php echo $report->name; ?></td>
                                <td><?php echo $report->price; ?></td>
                            </tr>
                            <?php } ?>
                            <?php } else {?>
                            <tr>
                                <td colspan="4">Registros no encontrados</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <!--div class="col-md-12">
                    <a href="<?php $id=1; echo base_url().'admin/home/generate_pdf/'.$id; ?>"
                        class="btn btn-success mt-3">Download Report</a>
                </div-->
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2>Reporte de Platillos</h2>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de platillo</th>
                                <th>Cantida de orden</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(!empty($dishReport)) {?>
                            <?php foreach($dishReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->d_id; ?></td>
                                <td><?php echo $report->d_name; ?></td>
                                <td><?php echo $report->qty; ?></td>
                            </tr>
                            <?php } ?>
                            <?php } else {?>
                            <tr>
                                <td colspan="4">Registros no encontrados</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <!--div class="col-md-12">
                    <a href="<?php $id=2; echo base_url().'admin/home/generate_pdf/'.$id; ?>"
                        class="btn btn-success mb-3">Download Report</a>
                </div-->
            </div>
        </div>
    </div>
</div>