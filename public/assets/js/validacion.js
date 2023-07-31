
const User =  document.getElementById('inputUser')
const Password =  document.getElementById('inputPassword')
const btn_Enviar = document.getElementById('btn_enviar') 
const form = document.getElementById('form')

const enviarFormulario = form => {
    form.submit()
}
const validacion = (e) => {        
    e.preventDefault();

    if (User.value == '' || User.value == null) {
        alert('ingrese su Usuario')
        User.focus()
        return false;
    }
    if (Password.value == '' || Password.value == null) {
        alert('ingrese una Contraseña')
        Password.focus()
        return false;
    }
    enviarFormulario(form);
};    

btn_Enviar.addEventListener('click',validacion)