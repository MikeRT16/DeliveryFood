<div class="container table-responsive m-t-20">
    <h2 class="py-3 text-center">Ver el pedido del usuario</h2>
    <table id="myTable" class="table table-bordered table-hover table-striped dataTable">
        <tbody>
            <tr>
                <td><strong>Ordenado por:</strong></td>
                <td><?php echo $order['username'] ?></td>
            </tr>
            <tr>
                <td><strong>Alimento:</strong></td>
                <td><?php echo $order['d_name'] ?></td>
            </tr>
            <tr>
                <td><strong>Cantidad:</strong></td>
                <td><?php echo $order['quantity'] ?></td>
            </tr>
            <tr>
                <td><strong>Pricio:</strong></td>
                <td><?php echo "C$".$order['price'] ?></td>
            </tr>
            <tr>
                <td><strong>Direccion:</strong></td>
                <td><?php echo $order['address'] ?></td>
            </tr>
            <tr>
                <td><strong>Fecha del pedido:</strong></td>
                <td><?php echo $order['date'] ?></td>
            </tr>
            <form method="post" action="<?php echo base_url().'admin/orders/updateOrder/'.$order['o_id']; ?>">
                <tr>
                    <td><strong>Seleccione el estado del pedido:</strong></td>
                    <td>
                        <select class="form-control" name="status"
                            class="<?php echo (form_error('status') != "") ? 'is-invalid' : '';?>">
                            <option>Seleccionar estado</option>
                            <option value="in process">En proceso</option>
                            <option value="closed">Cerrado/Delivery</option>
                            <option value="rejected">Rechazado</option>
                        </select>
                        <?php echo form_error('status');?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary btn-block" type="submit">Enviar</button></td>
                </tr>
            </form>
        </tbody>
    </table>
</div>