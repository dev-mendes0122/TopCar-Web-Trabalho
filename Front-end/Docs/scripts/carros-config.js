document.addEventListener("DOMContentLoaded", function () {

  const params = new URLSearchParams(window.location.search);
  const nomeCarro = params.get("carro") || "camaro";

  const carroSelecionado = carros[nomeCarro];

  if (!carroSelecionado) {
    console.error("Carro não encontrado:", nomeCarro);
    return;
  }

  // dados principais
  document.title = carroSelecionado.modelo;
  document.getElementById("modelo").textContent = carroSelecionado.modelo;
  document.getElementById("descricao").textContent = carroSelecionado.descricao;
  document.getElementById("valor").textContent = carroSelecionado.valor;
  document.getElementById("ano").textContent = carroSelecionado.ano;
  document.getElementById("cidade").textContent = carroSelecionado.cidade;

  // tabela de informações
  document.getElementById("anoTabela").textContent = carroSelecionado.ano;
  document.getElementById("km").textContent = carroSelecionado.km;
  document.getElementById("cambio").textContent = carroSelecionado.cambio;
  document.getElementById("carroceria").textContent = carroSelecionado.carroceria;
  document.getElementById("blindado").textContent = carroSelecionado.blindado;
  document.getElementById("combustível").textContent = carroSelecionado.combustivel;
  document.getElementById("placa").textContent = carroSelecionado.placa;
  document.getElementById("cor").textContent = carroSelecionado.cor;
  document.getElementById("troca").textContent = carroSelecionado.troca;
  document.getElementById("garantia").textContent = carroSelecionado.garantia;

  // imagens
  document.getElementById("logo").src = carroSelecionado.logo;
  document.getElementById("imagemPrincipal").src = carroSelecionado.imagemPrincipal;

  // galeria
  const galeriaContainer = document.querySelector(".galeria");
  galeriaContainer.innerHTML = "";
  carroSelecionado.galeria.forEach(imagem => {
    const img = document.createElement("img");
    img.src = imagem;
    img.alt = "Foto do carro";
    galeriaContainer.appendChild(img);
  });
});
