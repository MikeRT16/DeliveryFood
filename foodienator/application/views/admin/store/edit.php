<div class="conatiner">
    <form action="<?php echo base_url().'admin/store/edit/'.$store['r_id'];?>" method="POST"
        class="form-container mx-auto  shadow-container" style="width:90%" enctype="multipart/form-data">
        <h3 class="mb-3 p-2 text-center mb-3">Editar "<?php echo $store['name'] ?>" Detalles</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Nombre de Restaurante</label>
                    <input type="text" name="res_name"  class="form-control
                    <?php echo (form_error('res_name') != "") ? 'is-invalid' : '';?>" placeholder="Agregar nombre de restaurante"
                        value="<?php echo set_value('res_name', $store['name']);?>">
                    <?php echo form_error('res_name'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input type="text" name="email" class="form-control form-control-danger
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" placeholder="example@gmail.com"
                        value="<?php echo set_value('email', $store['email']);?>">
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Telefono</label>
                    <input type="text" name="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" placeholder="Telefono"
                        value="<?php echo set_value('phone', $store['phone']);?>">
                        <?php echo form_error('phone'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Website URL</label>
                    <input type="text" name="url" class="form-control form-control-danger
                    <?php echo (form_error('url') != "") ? 'is-invalid' : '';?>" placeholder=" http://example.com"
                        value="<?php echo set_value('url', $store['url']);?>">
                    <?php echo form_error('url'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Horario abierto</label>
                    <select name="o_hr" id="o_hr" class="form-control
                    <?php echo (form_error('o_hr') != "") ? 'is-invalid' : '';?>" data-placeholder="Choose a Category">
                        <option value="">--Select your Hours--</option>
                        <option value="8am" <?php echo $store['o_hr'] == "8am" ? "selected" : "";?>>8am</option>
                        <option value="9am" <?php echo $store['o_hr'] == "9am" ? "selected" : "";?>>9am</option>
                        <option value="10am" <?php echo $store['o_hr'] == "10am" ? "selected" : "";?>>10am</option>
                        <option value="11am" <?php echo $store['o_hr'] == "11am" ? "selected" : "";?>>11am</option>
                        <option value="12md" <?php echo $store['o_hr'] == "12md" ? "selected" : "";?>>12md</option>
                        <option value="1pm" <?php echo $store['o_hr'] == "1pm" ? "selected" : "";?>>1pm</option>
                        <option value="2pm" <?php echo $store['o_hr'] == "2pm" ? "selected" : "";?>>2pm</option>
                        <option value="3pm" <?php echo $store['o_hr'] == "3pm" ? "selected" : "";?>>3pm</option>
                        <option value="4pm" <?php echo $store['o_hr'] == "4pm" ? "selected" : "";?>>4pm</option>
                        <option value="5pm" <?php echo $store['o_hr'] == "5pm" ? "selected" : "";?>>5pm</option>
                        <option value="6pm" <?php echo $store['o_hr'] == "6pm" ? "selected" : "";?>>6pm</option>
                        <option value="7pm" <?php echo $store['o_hr'] == "7pm" ? "selected" : "";?>>7pm</option>
                        <option value="8pm" <?php echo $store['o_hr'] == "8pm" ? "selected" : "";?>>8pm</option>
                    </select>
                    <?php echo form_error('o_hr'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Horario cerrado</label>
                    <select name="c_hr" id="c_hr" class="form-control
                    <?php echo (form_error('c_hr') != "") ? 'is-invalid' : '';?>" data-placeholder="Choose a Category">
                        <option value="">--Seleccione un horario--</option>
                        <option value="8am" <?php echo $store['c_hr'] == "8am" ? "selected" : "";?>>8am</option>
                        <option value="9am" <?php echo $store['c_hr'] == "9am" ? "selected" : "";?>>9am</option>
                        <option value="10am" <?php echo $store['c_hr'] == "10am" ? "selected" : "";?>>10am</option>
                        <option value="11am" <?php echo $store['c_hr'] == "11am" ? "selected" : "";?>>11am</option>
                        <option value="12md" <?php echo $store['c_hr'] == "12md" ? "selected" : "";?>>12md</option>
                        <option value="1pm" <?php echo $store['c_hr'] == "1pm" ? "selected" : "";?>>1pm</option>
                        <option value="2pm" <?php echo $store['c_hr'] == "2pm" ? "selected" : "";?>>2pm</option>
                        <option value="3pm" <?php echo $store['c_hr'] == "3pm" ? "selected" : "";?>>3pm</option>
                        <option value="4pm" <?php echo $store['c_hr'] == "4pm" ? "selected" : "";?>>4pm</option>
                        <option value="5pm" <?php echo $store['c_hr'] == "5pm" ? "selected" : "";?>>5pm</option>
                        <option value="6pm" <?php echo $store['c_hr'] == "6pm" ? "selected" : "";?>>6pm</option>
                        <option value="7pm" <?php echo $store['c_hr'] == "7pm" ? "selected" : "";?>>7pm</option>
                        <option value="8pm" <?php echo $store['c_hr'] == "8pm" ? "selected" : "";?>>8pm</option>
                    </select>
                    <?php echo form_error('c_hr'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Dias abierto</label>
                    <select name="o_days" id="o_days" class="form-control 
                    <?php echo (form_error('o_days') != "") ? 'is-invalid' : '';?>" data-placeholder="Choose a Category"
                        tabindex="1">
                        <option value="">--Seleccione el dia--</option>
                        <option value="mon-fri <?php echo $store['o_days'] == "mon-fri" ? "selected" : "";?>">lunes a jueves</option>
                        <option value="mon-sat" <?php echo $store['o_days'] == "mon-sat" ? "selected" : "";?>>Lunes a sabado</option>
                        <option value="24hr-x7" <?php echo $store['o_days'] == "24hr-x7" ? "selected" : "";?>>24hr-x7</option>
                    </select>
                    <?php echo form_error('o_days'); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group has-danger">
                    <label for="image">Imagen</label>
                    <input type="file" name="image" id="image" class="form-control 
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
                    <br>
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>

                    <?php if($store['img'] != '' && file_exists('./public/uploads/restaurant/thumb/'.$store['img'])) { ?>
                    <img class="mt-1" src="<?php echo base_url().'public/uploads/restaurant/thumb/'.$store['img']; ?>">
                    <?php } else {?>
                    <img width="300" src="<?php echo base_url().'public/uploads/no-image.png'?>">
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Categoria</label>
                    <select name="c_name" id="c_name"
                        class="form-control <?php echo (form_error('c_name') != "") ? 'is-invalid' : '';?>">
                        <option value="">--Seleccione une categoria--</option>
                        <?php 
                if (!empty($cats)) { 
                    foreach($cats as $cat) {
                        ?>
                        <option value="<?php echo $cat['c_id'];?>">
                            <?php echo $cat['c_name'];?>
                        </option>
                        <?php }
                }
                ?>
                    </select>
                    <?php echo form_error('c_name');?>
                </div>
                <h3 class="box-title m-t-40">Direccion</h3>
                <div class="form-group">
                    <textarea name="address" type="text" style="height:70px;"
                        class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $store['address']);?></textarea>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <input type="submit" name="submit" class="btn btn-success" value="Hacer cambios">
            <a href="<?php echo base_url().'admin/store/index'?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
<script>
    const o_hr = document.getElementById("o_hr");
    const c_hr = document.getElementById("c_hr");
    const o_days = document.getElementById("o_days");
    const c_name = document.getElementById("c_name");

    o_hr.value = "<?php echo $_POST['o_hr']; ?>";
    c_hr.value = "<?php echo $_POST['c_hr']; ?>";
    o_days.value = "<?php echo $_POST['o_days']; ?>";
    c_name.value = "<?php echo $_POST['c_name']; ?>";
</script>