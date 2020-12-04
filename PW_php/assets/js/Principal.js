class Principal{

    linkPrincipal(link){
        let url = "";
        let cadena = link.split("/");

        for(let i=0; i<cadena.length; i++){
            if(i > 3){
                url += cadena[i];
            }
        }

        switch(url){
            case "UserRegistro":
                document.getElementById('files').addEventListener('change', imageUser, false);
                break;
        }

    }

}