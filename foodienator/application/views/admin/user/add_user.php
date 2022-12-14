<div class="conatiner">

    <form action="<?php echo base_url().'admin/user/create_user'; ?>" method="POST"
        class="form-container mx-auto shadow-container" style="width:80%" id="myForm">
        <h3 class="mb-3 p-2 text-center">Agregar usuario</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username" id="userName"
                        placeholder="Ingrese un usuario" value="<?php echo set_value('username')?>">
                    <?php echo form_error('username'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="firstname">Nombre</label>
                    <input type="text" class="form-control
                    <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname" id="firstName"
                        placeholder="Ingrese un nombre" value="<?php echo set_value('firstname')?>">
                    <?php echo form_error('firstname'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" class="form-control 
                    <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname" id="lastName"
                        placeholder="Ingrese un apellido" value="<?php echo set_value('lastname')?>">
                    <?php echo form_error('lastname'); ?>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="ingrese un email"
                        id="email" value="<?php echo set_value('email')?>">
                    <?php echo form_error('email'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="number" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Ingrese un numero de telefono"
                        id="phone" value="<?php echo set_value('phone')?>">
                    <?php echo form_error('phone'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="password">Ingrese</label>
                    <input type="password" class="form-control
                    <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password" id="pass"
                        placeholder="Ingrese un password" value="<?php echo set_value('password')?>">
                    <?php echo form_error('password'); ?>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Direccion</label>
            <textarea name="address" type="text" style="height:70px;" id="address" class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"
                value="<?php echo set_value('address');?>"></textarea>
            <?php echo form_error('address'); ?>
            <span></span>
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="<?php echo base_url().'admin/user/index'; ?>" class="btn btn-secondary">Atr??s</a>
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
        setErrorMsg(userName, 'Solo se permiten caracteres');
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
        setErrorMsg(email, 'El correo electr??nico no puede estar en blanco');
    } else if (isEmail(emailVal) === "fail") {
        setErrorMsg(email, 'Introduzca solo un correo electr??nico v??lido');
    } else {
        setSuccessMsg(email);
    }

    //password validation
    if (passVal === "") {
        setErrorMsg(pass, 'La contrase??a no puede estar en blanco');
    } else if (passVal.length <= 7 || passVal.length >= 16) {
        setErrorMsg(pass, 'La longitud de la contrase??a debe estar entre 8 y 15');
    } else {
        setSuccessMsg(pass);
    }

    //phone validation
    if (phoneVal === "") {
        setErrorMsg(phone, 'El tel??fono no puede estar en blanco');
    } else if (phoneVal.length != 10) {
        setErrorMsg(phone, 'Introduzca solo un n??mero de tel??fono v??lido');
    } else {
        setSuccessMsg(phone);
    }

    //address validation
    if (addressVal === "") {
        setErrorMsg(address, 'La direcci??n no puede estar en blanco');
    } else if (addressVal.length < 5) {
        setErrorMsg(address, "Introduzca solo una direcci??n v??lida");
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