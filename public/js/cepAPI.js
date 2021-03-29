// função resposnável por buscar as informações da API
function fetchApi(url) {
    return fetch(url)
}


// função responsável por passar para JSON
function getJSONResponse(res) {
    return res.json()
}


// função responsável por pegar informação da API Postmon
async function postmonApi(cep) {

    try {
        // definindo a URL da API Postmon
        const postmonURL = `https://api.postmon.com.br/v1/cep/${cep}`

        // pegando o conteúdo da API no formato JSON
        const api = await fetch(postmonURL),
            response = await getJSONResponse(api)

        return response
    } catch (error) {
        return false
    }
}


// função responsável por pegar informação da API VIACEP
async function viaCepApi(cep) {

    try {
        // definindo a URL da API VIACEP
        const viaCepURL = `https://viacep.com.br/ws/${cep}/json/`

        // pegando o conteúdo da API no formato JSON
        const api = await fetchApi(viaCepURL),
            response = await getJSONResponse(api)

        return response
    } catch (error) {
        return false
    }
}


// função responsável por adicionar cor na borda
function addBorderColor(element, boolean) {
    element.style.border = `2px solid ${boolean ? 'green' : 'red'}`;
    element.style.boxShadow = `0 0 10px rgba(${boolean ? '0, 255' : '255, 0'}, 0, 0.6)`
}


// função responsável por alertar o usuário dos campos
function warning() {

    Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'Verifique os campos em vermelho',
    })
}


// função responsável por alertar o usuário sobre o conteúdo buscado
function error() {

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "Nós não conseguimos achar esse CEP :'("
    })
}


// função responsável por deixar todos os campos do input com a cor verde/vermelho
function putColor(boolean) {

    // indicar os campos corretos
    addBorderColor(cepTAG, boolean)
    addBorderColor(addressTAG, boolean)
    addBorderColor(districtTAG, boolean)
    addBorderColor(cityTAG, boolean)
    addBorderColor(stateTAG, boolean)
}


// função responsável por adicionar os valores da API VIACEP no HTML
function useVIACEP() {

    // indicar os campos corretos
    putColor(true)

    // completar os campos com as informações coletadas
    cepTAG.value = data.cep
    addressTAG.value = data.logradouro
    districtTAG.value = data.bairro
    cityTAG.value = data.localidade
    stateTAG.value = data.uf
}


// função responsável por adicionar os valores da API Postmon no HTML
function usePostmon() {

    // definindo que está sendo usado a API Postmon
    usingPostmon = true

    // indicar os campos corretos
    putColor(true)

    // completar os campos com as informações coletadas
    cepTAG.value = data.cep
    addressTAG.value = data.logradouro
    districtTAG.value = data.bairro
    cityTAG.value = data.cidade
    stateTAG.value = data.estado
}


// referenciando as TAGs HTML
const formTAG = document.querySelector('main form[action = "save-address"]'),
    cepTAG = document.querySelector('input[name = "cep"]'),
    addressTAG = document.querySelector('input[name = "address"]'),
    numberTAG = document.querySelector('input[name = "number"]'),
    districtTAG = document.querySelector('input[name = "district"]'),
    cityTAG = document.querySelector('input[name = "city"]'),
    stateTAG = document.querySelector('input[name = "state"]'),
    resetButton = document.querySelector('button[type = "reset"]')

// indicando a variável que receberá as informações da API
let data

// responsável por indicar qual API está sendo usada
let usingPostmon = false


// função responsável por completar o formulário com os dados da API
const completeForm = async () => {

    // forçando o usuário a digitar o CEP sem '.' ou '-'
    if (cepTAG.value.indexOf('-') != -1) cepTAG.value = cepTAG.value.replace('-', '')
    if (cepTAG.value.indexOf('.') != -1) cepTAG.value = cepTAG.value.replace('.', '')

    // quando terminar de digitar o CEP
    if (cepTAG.value.length == 8) {

        // buscar a informação sobre o valor indicado na API VIACEP
        data = await viaCepApi(cepTAG.value)

        // se não for encontrado esse valor
        if (data.cep == undefined) {

            // buscar a informação sobre o valor indicado na API Postmon
            data = await postmonApi(cepTAG.value)

            // se não for encontrado esse valor, alertar o usuário
            if (!data) {

                // marcar o campo de CEP
                addBorderColor(cepTAG, false)

                // alertar o usuário
                error()
                
                // resetando os dados do form
                formTAG.reset()
                
                // colocar tudo como não pronto para enviar
                putColor(false)

                return
            }

            // usar a API Postmon
            usePostmon()
        } else {
            // usar a API VIACEP
            useVIACEP()
        }
    }
}


// função responsável por verificar se os campos digitados estão como esperado
const submitForm = (event) => {

    // se algum valor for diferente do fornecido pela API
    if (
        cepTAG.value != data.cep ||
        addressTAG.value != data.logradouro ||
        districtTAG.value != data.bairro ||
        cityTAG.value != data[usingPostmon ? "cidade" : "localidade"] ||
        stateTAG.value != data[usingPostmon ? "estado" : "uf"]
    ) {

        // alertar o usuário
        warning()

        // não envie os dados
        event.preventDefault()

        // informe o campo onde a informação está diferente
        addBorderColor(cepTAG, (cepTAG.value == data.cep))
        addBorderColor(addressTAG, (addressTAG.value == data.logradouro))
        addBorderColor(districtTAG, (districtTAG.value == data.bairro))
        addBorderColor(cityTAG, (cityTAG.value == data[usingPostmon ? "cidade" : "localidade"]))
        addBorderColor(stateTAG, (stateTAG.value == data[usingPostmon ? "estado" : "uf"]))
    }

    // caso o usuário altere o HTML
    else if (!numberTAG.value || numberTAG.value <= 0) {

        // bloqueie o envio
        event.preventDefault()

        // alertar o usuário
        warning()

        // colocar tudo como pronto para enviar
        putColor(true)

        // informe o campo onde deve ser preenchido corretamente
        addBorderColor(numberTAG, false)
    }
}


// função responsável por remover todos os contornos nos inputs
const resetForm = () => {

    // selecionar todos os inputs e remover seu CSS
    document.querySelectorAll('input').forEach(
        (element) => element.removeAttribute('style')
    )
}


// aguardando os eventos ocorrerem
formTAG.addEventListener('submit', submitForm)
cepTAG.addEventListener('input', completeForm)
resetButton.addEventListener('click', resetForm)
