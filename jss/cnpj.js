function buscaCnpj(){
    let cnpj = document.getElementById('cnpj').value;
    if(cnpj !== ""){
        let url = "https://brasilapi.com.br/api/cnpj/v1/" + cnpj;
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        req.onload = function() {
            if(req.status === 200){
                let nome = JSON.parse(req.response);
                document.getElementById("razao").value = nome.razao_social;
                document.getElementById("razao").disabled = true;
                
            } else if(req.status === 404){
                alert("Cnpj Invalido");
            } else{
                alert("Erro ao fazer a requisição");
            }
        }
    }
}
   

document.getElementById("razao").disabled = true;




window.onload = function() {
    let cnpj = document.getElementById("cnpj");
    cnpj.addEventListener("blur", buscaCnpj);
};
