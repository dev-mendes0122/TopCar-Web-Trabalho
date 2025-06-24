<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Anuncie Aqui</title>
</head>

<body>
    <h1>Anuncie Aqui</h1>

    <div id="mensagem"></div>

    <form id="form-anuncio">
        <label for="titulo">Título do anúncio:</label><br />
        <input type="text" name="titulo" id="titulo" required><br /><br />

        <label for="descricao">Descrição:</label><br />
        <textarea name="descricao" id="descricao" required></textarea><br /><br />

        <button type="submit">Enviar Anúncio</button>
    </form>

    <!-- jQuery + Script AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Adiciona o token CSRF nos headers do AJAX (obrigatório no Laravel)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#form-anuncio').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{ url("/anuncie") }}', // Corrigido: envia para a rota correta
                type: 'POST',
                data: {
                    titulo: $('#titulo').val(),
                    descricao: $('#descricao').val()
                },
                success: function(res) {
                    $('#mensagem').html('<p style="color:green;">Anúncio enviado com sucesso!</p>');
                    $('#form-anuncio')[0].reset();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let erros = xhr.responseJSON.errors;
                        let listaErros = '<ul style="color:red;">';
                        for (let campo in erros) {
                            listaErros += '<li>' + erros[campo][0] + '</li>';
                        }
                        listaErros += '</ul>';
                        $('#mensagem').html(listaErros);
                    } else {
                        $('#mensagem').html('<p style="color:red;">Erro inesperado. Tente novamente.</p>');
                    }
                }
            });
        });
    </script>
</body>
</html>
