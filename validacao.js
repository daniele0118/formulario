// mascara_cpf.js

// Função para formatar CPF
function formatarCPF(cpf) {
  cpf = cpf.replace(/\D/g, ''); // Remove tudo o que não é dígito
  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
  cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
  return cpf;
}

// Função para formatar CEP
function formatarCEP(cep) {
  cep = cep.replace(/\D/g, ''); // Remove tudo o que não é dígito
  cep = cep.replace(/^(\d{5})(\d)/, '$1-$2'); // Aplica a máscara
  return cep;
}

// Adiciona um listener para formatar o CPF enquanto o usuário digita
document.getElementById('cpf_cnpj').addEventListener('input', function() {
  var campoCPF = this;
  setTimeout(function() {
    var valor = campoCPF.value;
    valor = formatarCPF(valor);
    campoCPF.value = valor;
  }, 1);
});

// Adiciona um listener para formatar o CEP enquanto o usuário digita
document.getElementById('cep').addEventListener('input', function() {
  var campoCEP = this;
  setTimeout(function() {
    var valor = campoCEP.value;
    valor = formatarCEP(valor);
    campoCEP.value = valor;
  }, 1);
});
