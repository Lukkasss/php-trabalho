function registrar(){
    var form = document.getElementById("registrarForm");
    var data = {};
    data['email'] = form.email.value;
    data['senha'] = form.senha.value;

    console.log(JSON.stringify(data));
    fetch('http://localhost:8080/TrabalhoFinal/BackEnd/usuario', {
        method: 'POST',
        body: JSON.stringify(data)
    })
    .then((resposta) => {
        if(resposta.ok){
            return resposta.json()
        } else{
            return Promise.reject({ status: res.status, statusText: res.statusText });
        }
    })
    .then((data) => console.log(data))
    .catch(err => console.log('Error message:', err.statusText));

}