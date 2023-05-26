function validateFormNovoAlbum() {
  var tituloInput = document.getElementById('titulo')
  var anoInput = document.getElementById('ano')
  var tituloError = document.getElementById('titulo-error')
  var anoError = document.getElementById('ano-error')

  var titulo = tituloInput.value
  var ano = anoInput.value

  var numeroNoTitulo = /\d/.test(titulo)

  var letraNoAno = /[a-zA-Z]/.test(ano)

  var anoValido = /^\d{4}$/.test(ano)

  if (numeroNoTitulo) {
    tituloError.textContent = 'O campo Título não pode conter números.'
    return false
  } else {
    tituloError.textContent = ''
  }

  if (letraNoAno) {
    anoError.textContent = 'O campo Ano não pode conter letras.'
    return false
  } else if (!anoValido) {
    anoError.textContent = 'O campo Ano deve conter exatamente 4 dígitos.'
    return false
  } else {
    anoError.textContent = ''
  }

  return true
}

function validateFormNovaFaixa() {
  var numeroInput = document.getElementById('numero')
  var nomeInput = document.getElementById('nome')
  var duracaoInput = document.getElementById('duracao')
  var numeroError = document.getElementById('numero-error')
  var nomeError = document.getElementById('nome-error')
  var duracaoError = document.getElementById('duracao-error')

  var numero = numeroInput.value
  var nome = nomeInput.value
  var duracao = duracaoInput.value

  var letraNoNumero = /[a-zA-Z]/.test(numero)
  var numeroNoNome = /\d/.test(nome)
  var duracaoValida = /^\d:\d{2}$/.test(duracao)
  var digitos = numero.length

  if (letraNoNumero) {
    numeroError.textContent = 'O campo Número não pode conter letras.'
    return false
  } else {
    numeroError.textContent = ''
  }

  if (numeroNoNome) {
    nomeError.textContent = 'O campo Nome não pode conter números.'
    return false
  } else {
    nomeError.textContent = ''
  }

  if (!duracaoValida) {
    duracaoError.textContent =
      'O campo Duração deve conter exatamente 3 dígitos'
    return false
  } else {
    duracaoError.textContent = ''
  }

  if (digitos > 2) {
    numeroError.textContent = 'O campo Número deve ter no máximo 2 dígitos.'
    return false
  } else {
    numeroError.textContent = ''
  }

  return true
}
