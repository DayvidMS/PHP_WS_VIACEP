var xhr = new XMLHttpRequest();

function showCD(str) {
    //Verifica se não está vazio
    if (str=="") {
      document.getElementById("txtHint").innerHTML="";
      return;
    }
    //instancia o jb java script
    var xmlhttp=new XMLHttpRequest();

    //chama a função
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
      }
    }

    //envia o dado para o php
    xmlhttp.open("GET","getcd.php?q="+str,true);
    xmlhttp.send();
  }


function verificaCep(cepInput)
{

    document.getElementById("txtHint")

     //Verifica se não está vazio
    if (cepInput=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
      }
    
      //limpa o campo CEP
    let cep = cepInput.replace(/[^\d]+/g,'') ;
    let url = `requisicao=verificaCep&cep=`+cep;

    // http://localhost/PHPtest/
    //Requisicao
    let requisicao = `http://localhost/PHPtest/index.php?${url}`;

    //instancia o jb java script
    let xmlhttp=new XMLHttpRequest();


      //chama a função
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("txtHint").innerHTML=this.responseText;
        }
      }
 
      //Envia para o PHP
       xhr.open('GET', requisicao, true );
       xhr.send();
}

function buscaCep()
{
    let url = `https://viacep.com.br/ws/${cep}/json`;
    xhr.open('GET', url );

    xhr.onreadystatechange = () => {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                console.log(JSON.parse(xhr.responseText));
            }
        }
    };

    xhr.send();

}


