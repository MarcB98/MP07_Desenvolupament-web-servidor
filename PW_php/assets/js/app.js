var user = new User();
var imageUser = (evt)=>{
    user.archivo(evt, "imageUser");
}

var principal = new Principal();
$().ready(()=>{
    let URLactual = window.location.pathname;
    principal.linkPrincipal(URLactual); 
});