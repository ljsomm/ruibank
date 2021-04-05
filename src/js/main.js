function login(){
    event.preventDefault()
    $("#btn-login").html("Autenticando")
    let val = new FormData(document.getElementById("login"))
        $.post({
            url: "api/restLogin.php",
            data: val,
            processData: false,
            contentType: false
        }).done(res => {
            let r = $.parseJSON(res)
            if(r){
                $("#btn-login").html("Entrando")
                window.location = "logs.php"
            }
            else{
                
                document.getElementById("error-login").style = "display: block"
                document.getElementById("cpf-input").style = "border: 1px solid red;color:red"
                document.getElementById("password-input").style = "border: 1px solid red;color:red"
                $("#btn-login").html("Entrar")
            }
        })
        return false
}

function transferencia(){
    event.preventDefault()
    let val = new FormData(document.getElementById("transferencia"))
        $.post({
            url: "api/restTransfer.php",
            data: val,
            processData: false,
            contentType: false
        }).done(res => {
            let r = $.parseJSON(res)
            if(r.result){
                document.getElementById("transfer-container").style = "flex-direction: row;align-items:center;justify-content: center"
                document.getElementById("transfer-container").innerHTML = "<img class='icon-result' src='src/assets/icon/check.svg'><div class='msg-result'>"+r.msg+"</div>"
                setTimeout(()=>{window.location = "logs.php"}, 3000)
            }
            else{

            }
            
        })
        return false
}

function getAllData(){
    $.post({
        url: "api/restLog.php"
    }).done(res => {
        let r = $.parseJSON(res)
        for(let rsp of r){
            $("#logs").append("<tr><td>"+ rsp.hash +"</td><td>"+ rsp.origem +"</td><td>"+ rsp.destino +"</td><td>R$ "+ rsp.valor+"</td><td>"+ rsp.data +"</td></tr>")
        }
    })
}