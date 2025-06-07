document.addEventListener("DOMContentLoaded", () => {
  const botoes = document.querySelectorAll(".adicionar");
  const spanQuantidade = document.getElementById("quantidade-carrinho");
  const listaItens = document.getElementById("lista-itens");

  let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

  function atualizarCarrinho() {
    spanQuantidade.textContent = carrinho.length;
    listaItens.innerHTML = "";
    carrinho.forEach((produto, index) => {
      const li = document.createElement("li");
      li.textContent = `${produto.nome} - R$${produto.preco}`;
      const btn = document.createElement("button");
      btn.textContent = "Remover";
      btn.onclick = () => {
        carrinho.splice(index, 1);
        localStorage.setItem("carrinho", JSON.stringify(carrinho));
        atualizarCarrinho();
      };
      li.appendChild(btn);
      listaItens.appendChild(li);
    });
  }

  botoes.forEach(botao => {
    botao.addEventListener("click", () => {
      const produto = botao.closest(".produto");
      const nome = produto.getAttribute("data-nome");
      const preco = produto.getAttribute("data-preco");
      const jaTem = carrinho.find(p => p.nome === nome);
      if (!jaTem) {
        carrinho.push({ nome, preco });
        localStorage.setItem("carrinho", JSON.stringify(carrinho));
        atualizarCarrinho();
      } else {
        alert("Esse produto já está no carrinho.");
      }
    });
  });

  document.getElementById("confirmar").addEventListener("click", () => {
    fetch("salvar_pedido.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(carrinho)
    })
      .then(res => res.json())
      .then(data => {
        alert("Pedido enviado!");
        localStorage.removeItem("carrinho");
        window.location.reload();
      })
      .catch(err => {
        console.error("Erro:", err);
        alert("Erro ao enviar pedido.");
      });
  });

  atualizarCarrinho();
});
