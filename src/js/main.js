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
    
    let val = new FormData(document.getElementById("transferencia"))
        $.post({
            url: "api/restTransfer.php",
            data: val,
            processData: false,
            contentType: false
        }).done(res => {
            let r = $.parseJSON(res)
            if(r.result){
                
                document.getElementById("transfer-container").innerHTML = "<div id='final'><img class='icon-result' src='src/assets/icon/check.svg'><div class='msg-result'>"+r.msg+"</div></div><br><div id='return'><button id='btn-transferencias-again' class='btn-return'>Realizar outra transação</button><button id='btn-logs' class='btn-return'>Voltar para os Logs</button></div>"
                document.getElementById("final").style = "flex-direction: row;align-items:center;justify-content: center"
                document.getElementById("btn-logs").addEventListener("click",()=>{window.location = "./logs.php"})
                document.getElementById("btn-transferencias-again").addEventListener("click",()=>{window.location = "./transferencias.php"})
                //window.location = "logs.php"}, 3000)
            }
            else{

            }
            
        })
        return false
}

function getLog(){
    $.post({
        url: "api/restLog.php"
    }).done(res => {
        let r = $.parseJSON(res)
        $("#logs").html("<tr><th>Hash</th><th>Origem</th><th>Destino</th><th>Quantia</th><th>Data e hora</th></tr>")
        for(let rsp of r){
            $("#logs").append("<tr><td>"+ rsp.hash +"</td><td>"+ rsp.origem +"</td><td>"+ rsp.destino +"</td><td>R$ "+ rsp.valor.replace(".", ",")+"</td><td>"+ rsp.data +"</td></tr>")
        }
    })
}

function getDashData(){
    $.post({
        url: "api/restDashboard.php"
    }).done(res => {
        let r = $.parseJSON(res)
        $("#total").html("R$ "+r.total.replace(".", ","))
        $("#quantidade").html(r.quantidade)
        $("#recente").html(r.recente)
    })
}

function getSaldo(){
    $.post({
        url: "api/restAccount.php"
    }).done(res=>{
        let r = $.parseJSON(res)
        $(".saldo").html("R$ " + r.saldo.replace(".", ","))
    })
}