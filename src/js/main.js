function login(){
    event.preventDefault()
    let val = new FormData(document.getElementById("login"))
        $.post({
            url: "api/restLogin.php",
            data: val,
            processData: false,
            contentType: false
        }).done(res => {
            let r = $.parseJSON(res)
            if(r){
                window.location = "logs.php"
            }
        })
        return false
}