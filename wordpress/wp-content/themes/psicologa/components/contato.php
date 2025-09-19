<section id="4" class="contato">
    <div class="container">
        <div class="row flex-column flex-md-row">
            <div class="col d-flex flex-column justify-content-center">
                <h1 class="color01">Contato</h1>
                <h5>Envie sua mensagem e retornarei em breve!</h5>
                <?php
                $success = false;
                $error = false;
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contato_email'])) {
                    $nome = sanitize_text_field($_POST['contato_nome']);
                    $email = sanitize_email($_POST['contato_email']);
                    $mensagem = sanitize_textarea_field($_POST['contato_mensagem']);
                    $to = get_option('admin_email');
                    $subject = 'Contato pelo site';
                    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
                    $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: $email");

                    if (wp_mail($to, $subject, $body, $headers)) {


                        $success = true;
                    } else {
                        $error = true;
                    }
                }
                ?>
                <?php if ($success): ?>
                    <div class="alert alert-success mt-3">Mensagem enviada com sucesso!</div>
                <?php elseif ($error): ?>
                    <div class="alert alert-danger mt-3">Erro ao enviar. Tente novamente.</div>
                <?php endif; ?>
                <form method="post" class="mt-3">
                    <div class="mb-3">
                        <label for="contato_nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="contato_nome" name="contato_nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="contato_email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="contato_email" name="contato_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contato_mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="contato_mensagem" name="contato_mensagem" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    .contato {
        background-color: var(--background-color);
        padding-bottom: 3rem;
    }
</style>