function deletar(id){
  console.log(id);
    Swal.fire({
        title: "Você tem certeza?",
        text: "Essa ação não poderá ser desfeita!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, deletar!"
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('form-' +id).submit();
            Swal.fire({
            title: "Deletado!",
            text: "O registro foi deletado.",
            icon: "success"
          });
        }
      });
}

function informacaoQuadras(id) {
  var quadra = quadras[id];

  var html = "<strong>ID:</strong> " + quadra.id + "<br>" +
             "<strong>Tipo:</strong> " + quadra.tipo_quadra + "<br>" +
             "<strong>Valor:</strong> " + quadra.valor_quadra + "<br>";

  Swal.fire({
      title: "Detalhes da Quadra",
      html: html,
      icon: "info"
  });
}

function informacaoUsers(id) {
  var user = users[id];

  var html = "<strong>ID:</strong> " + user.id + "<br>" +
             "<strong>Nome:</strong> " + user.name + "<br>" +
             "<strong>Email:</strong> " + user.email + "<br>";

  Swal.fire({
      title: "Detalhes do User",
      html: html,
      icon: "info"
  });
}


function informacaoPagamentos(id) {
  var pagamento = pagamentos[id];

  var html = "<strong>ID:</strong> " + pagamento.id + "<br>" +
             "<strong>ID Reserva:</strong> " + pagamento.id_reserva + "<br>" +
             "<strong>Método:</strong> " + pagamento.metodo_de_pagamento + "<br>" + 
             "<strong>Data:</strong> " + pagamento.data_de_pagamento + "<br>";

  Swal.fire({
      title: "Detalhes do Pagamento",
      html: html,
      icon: "info"
  });
}

function informacaoReservas(id) {
  var reserva = reservas[id];

  var html = "<strong>ID:</strong> " + reserva.id + "<br>" +
             "<strong>Responsável:</strong> " + reserva.responsavel + "<br>" +
             "<strong>Quadra:</strong> " + reserva.id_quadra + "<br>" + 
             "<strong>Data:</strong> " + reserva.data_da_reserva + "<br>" +
             "<strong>Valor:</strong> " + reserva.valor_da_reserva + "<br>";

  Swal.fire({
      title: "Detalhes da Reserva",
      html: html,
      icon: "info"
  });
}