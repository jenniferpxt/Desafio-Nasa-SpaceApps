function submitForm() {
    const form = document.getElementById('farmerForm');

    const farmerData = {
        informacoes_pessoais: {
            nome: form.nome.value,
            idade: form.idade.value,
            cpf: form.cpf.value,
            endereco: {
                rua: form.rua.value,
                numero: form.numero.value,
                cidade: form.cidade.value,
                estado: form.estado.value,
                cep: form.cep.value
            },
            telefone: form.telefone.value,
            email: form.email.value
        },
        informacoes_area: {
            tamanho_hectares: form.tamanho_hectares.value,
            tipo_solo: form.tipo_solo.value,
            irrigacao: form.irrigacao.value,
            cultura_principal: form.cultura_principal.value,
            cultura_secundaria: form.cultura_secundaria.value
        },
        informacoes_geograficas: {
            latitude: form.latitude.value,
            longitude: form.longitude.value,
            altitude: form.altitude.value
        }
    };

    const farmerDataJson = JSON.stringify(farmerData);

    fetch('insert.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: farmerDataJson
    })
    .then(response => response.text())
    .then(data => {
        console.log('Sucesso:', data);
    })
    .catch((error) => {
        console.error('Erro:', error);
    });
}
