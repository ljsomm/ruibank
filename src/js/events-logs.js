$(document).ready(()=>{
    alert
    setInterval(()=>{    
        getDashData()
        getLog()
        getSaldo()
        $(".loader").hide()
    }, 1500)
    
})