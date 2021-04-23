$(document).ready(()=>{
    $("#login").submit(()=>{
        login()
    })
    $("#cpf-input").focus(()=>{
        $("#cpf-input").css("border", "none")
        $("#cpf-input").css("color", "black")
    })
    $("#password-input").focus(()=>{
        $("#password-input").css("border", "none")
        $("#password-input").css("color", "black")
    })
    $("#logout").click(()=>{
        window.location = "./logoff.php"
    })
    $("#btn-transferencia").click(()=>{
        window.location = "./transferencias.php"
    })
    $("#transferencia").submit(()=>{
        event.preventDefault()
        
        document.getElementById("cpf-transfer-input").style.border = "none"
        document.getElementById("value-input").style.border = "none"
        document.getElementById("error-transfer").style.display = "none"
        if($("#value-input").val() == "" || $("#cpf-input").val() == ""){
            document.getElementById("cpf-transfer-input").style.border = "1px solid red"
            document.getElementById("value-input").style.border = "1px solid red"
            document.getElementById("error-transfer").style.display = "block"
            document.getElementById("error-transfer").innerHTML = "Preencha todos os campos"
        }
        else{
            transferencia()
        }
    })
})




