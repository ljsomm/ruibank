$(document).ready(()=>{
    $("#login").submit(()=>{
        login()
    })
    $("#logout").click(()=>{
        window.location = "./logoff.php"
    })
    $("#btn-transferencia").click(()=>{
        window.location = "./transferencias.php"
    })
})