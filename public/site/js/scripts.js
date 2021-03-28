const cep = document.querySelector('#cep');

cep.addEventListener('focusout', async (event) => {

    const verifyFormat = RegExp('\\d{8}');

    if (verifyFormat.test(cep.value)) {

        try{
            let result = await axios.get('http://viacep.com.br/ws/' + cep.value + '/json/');
        
            if (result.status == 200 && !result.data.erro) {
    
                document.querySelector('#uf').value = result.data['uf'];
                document.querySelector('#city').value = result.data['localidade'];
                document.querySelector('#district').value = result.data['bairro'];
                document.querySelector('#street').value = result.data['logradouro'];
            } else {
                document.querySelector('#uf').value = "";
                document.querySelector('#city').value = "";
                document.querySelector('#district').value = "";
                document.querySelector('#street').value = "";
                
                document.querySelector('#modalTxt').textContent="O CEP inserido não é válido, por favor, tenho novamente"

                $("#modalLocal").modal({ show: true });
            }
        }catch(e) {
            document.querySelector('#modalTxt').textContent="O CEP inserido não é válido, por favor, tenho novamente"
            $("#modalLocal").modal({ show: true });
        }

    }else{
        document.querySelector('#modalTxt').textContent="Uma falha interna ocorreu ao tentar buscar o CEP informado. Tente novamente mais tarde";
        $("#modalLocal").modal({ show: true });
    }

});
