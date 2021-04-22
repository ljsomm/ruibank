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
        if($("#value-input").val() == "" || $("#cpf-input").val() == ""){
            alert()
        }
        else{
            transferencia()
        }
    })
})

$("#page-logs").ready(()=>{
    setInterval(()=>{    
        getDashData()
        getLog()
        getSaldo()
        $(".loader").hide()
    }, 1500)
    
})

$("#page-transfer").ready(()=>{
    getSaldo()
})

