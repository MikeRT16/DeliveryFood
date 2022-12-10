<div class="conatiner">

    <form action="<?php echo base_url().'admin/user/edit/'.$user['u_id']; ?>" method="POST"
        class="form-container mx-auto shadow-container" id="myForm" style="width:80%">
        <h3 class="mb-3 p-2 text-center">Editar Usuario "<?php echo $user['username']; ?>"</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="userName" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username"
                        value="<?php echo set_value('username', $user['username'])?>">
                    <?php echo form_error('username'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="firstname">Nombre</label>
                    <input type="text" id="firstName" class="form-control
                    <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname"
                        value="<?php echo set_value('firstname', $user['f_name'])?>">
                    <?php echo form_error('firstname'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" id="lastName" class="form-control 
                    <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname"
                        value="<?php echo set_value('lastname', $user['l_name'])?>">
                    <?php echo form_error('lastname'); ?>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="Ingrese un email"
                        value="<?php echo set_value('email', $user['email'])?>">
                    <?php echo form_error('email'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="number" id="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Ingrese un telefono"
                        value="<?php echo set_value('phone', $user['phone'])?>">
                    <?php echo form_error('phone'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="pass" class="form-control
                    <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password"
                        placeholder="Ingrese una contraseña" value="<?php echo set_value('password', $user['password'])?>">
                    <?php echo form_error('password'); ?>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Direccion</label>
            <textarea name="address" id="address" type="text" style="height:70px;"
                class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
            <?php echo form_error('address'); ?>
            <span></span>
        </div>
        <button type="submit" class="btn btn-success">Hacer cambios</button>
        <a href="<?php echo base_url().'admin/user/index'; ?>" class="btn btn-secondary">Atrás</a>
    </form>
</div>
<script>
const form = document.getElementById('myForm');
const userName = document.getElementById('userName');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const phone = document.getElementById('phone');
const address = document.getElementById('address');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    validate();
})

const isEmail = (emailVal) => {
    var re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(emailVal)) {
        return "fail";
    }
}

const sendData = (sRate, count) => {
    if (sRate === count) {
        event.currentTarget.submit();
    }
}

const successMsg = () => {
    let formCon = document.getElementsByClassName('form-control');
    var count = formCon.length - 1;
    for (var i = 0; i < formCon.length; i++) {
        if (formCon[i].className === "form-control success") {
            var sRate = 0 + i;
            sendData(sRate, count);
        } else {
            return false;
        }
    }
}

const validate = () => {
    const userNameVal = userName.value.trim();
    const firstNameVal = firstName.value.trim();
    const lastNameVal = lastName.value.trim();
    const emailVal = email.value.trim();
    const passVal = pass.value.trim();
    const phoneVal = phone.value.trim();
    const addressVal = address.value.trim();

    //username validation
    if (userNameVal === "") {
        setErrorMsg(userName, 'El nombre de usuario no puede estar en blanco');
    } else if (userNameVal.length <= 4 || userNameVal.length >= 16) {
        setErrorMsg(userName, 'La longitud del nombre de usuario debe estar entre 5 y 15"');
    } else if (!isNaN(userNameVal)) {
        setErrorMsg(userName, 'solo se permiten caracteres chSolo se permiten');
    } else {
        setSuccessMsg(userName);
    }

    //firstname validation
    if (firstNameVal === "") {
        setErrorMsg(firstName, 'El nombre no puede estar en blanco');
    } else if (!isNaN(firstNameVal)) {
        setErrorMsg(firstName, 'Solo se permiten caracteres');
    } else {
        setSuccessMsg(firstName);
    }

    //lastname validation
    if (lastNameVal === "") {
        setErrorMsg(lastName, 'El apellido no puede estar en blanco');
    } else {
        setSuccessMsg(lastName)
    }

    //email validation
    if (emailVal === "") {
        setErrorMsg(email, 'El correo electrónico no puede estar en blanco');
    } else if (isEmail(emailVal) === "fail") {
        setErrorMsg(email, 'Introduzca solo un correo electrónico válido');
    } else {
        setSuccessMsg(email);
    }

    //password validation
    if (passVal === "") {
        setErrorMsg(pass, 'La contraseña no puede estar en blanco');
    } else if (passVal.length <= 7 || passVal.length >= 16) {
        setErrorMsg(pass, 'La longitud de la contraseña debe estar entre 8 y 15');
    } else {
        setSuccessMsg(pass);
    }

    //phone validation
    if (phoneVal === "") {
        setErrorMsg(phone, 'El teléfono no puede estar en blanco');
    } else if (phoneVal.length != 10) {
        setErrorMsg(phone, 'Introduzca solo un número de teléfono válido');
    } else {
        setSuccessMsg(phone);
    }

    //address validation
    if (addressVal === "") {
        setErrorMsg(address, 'La dirección no puede estar en blanco');
    } else if (addressVal.length < 5) {
        setErrorMsg(address, "Introduzca solo una dirección válida");
    } else {
        setSuccessMsg(address);
    }

    successMsg();
}

function setErrorMsg(ele, msg) {

    const formCon = ele.parentElement;
    const formInput = formCon.querySelector('.form-control');
    const span = formCon.querySelector('span');
    span.innerText = msg;
    formInput.className = "form-control is-invalid";
    span.className = "invalid-feedback font-weight-bold"
}

function setSuccessMsg(ele) {
    const formCon = ele.parentElement;
    const formInput = formCon.querySelector('.form-control');
    formInput.className = "form-control success";
}
</script>