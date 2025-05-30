function buscarCEP() {
    const cep = document.getElementById("cep").value;
    if (cep.length === 8) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                document.getElementById("endereco").value = data.logradouro;
                document.getElementById("cidade").value = data.localidade;
                document.getElementById("estado").value = data.uf;
            })
            .catch(error => console.error("Erro ao buscar CEP:", error));
    }
}
