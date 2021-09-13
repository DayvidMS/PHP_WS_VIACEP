var xhr = new XMLHttpRequest();

function verificaCep(cepValue) {
  cepCampo = document.getElementById("cep");
  //Verifica se o campo CEP não está vazio
  if (cepValue == "") {
    alert("CEP em Branco");
    return;
  }

  //limpa o campo CEP
  let cep = cepValue.replace(/[^\d]+/g, '');

  //monta complemento da url
  let url = `requisicao=verificaCep&cep=${cep}`;


  //url completa para requisição
  let requisicao = `./index.php?${url}`;

  //Requisição
  fetch(requisicao)
    .then(response => response.json())
    .then(data => {
      populaCampos(data);
    })
    .catch(error => {
      console.log(error);
    });


}

function populaCampos(data) {

  console.log(data);
  //Variaveis dos inputs 
  const campobairro = document.getElementById("bairro");
  const campoCep = document.getElementById("cep");
  const campoComplemento = document.getElementById("complemento");
  const campoDDD = document.getElementById("ddd");
  const campoGia = document.getElementById("gia");
  const campoIbge = document.getElementById("ibge");
  const campoLocalidade = document.getElementById("localidade");
  const campoLogradouro = document.getElementById("logradouro");
  const campoSiafi = document.getElementById("siafi");
  const campoUf = document.getElementById("uf");

  if (data.cep == "") {
    alert('CEP Invalido');
    return;
  }

  //Adição dos valores dos Inputs
  campobairro.value = data.bairro;
  campoCep.value = data.cep;
  campoComplemento.value = data.complemento;
  campoDDD.value = data.ddd;
  campoGia.value = data.gia;
  campoIbge.value = data.ibge;
  campoLocalidade.value = data.localidade;
  campoLogradouro.value = data.logradouro;
  campoSiafi.value = data.siafi;
  campoUf.value = data.uf;
}



