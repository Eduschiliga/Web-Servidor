<?php
session_start();

require('../../model/Usuario.php');

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: ../../index.php');
    exit();
}

$usuario = unserialize($_SESSION['usuario']);

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senhaAntiga = $_POST['senha_antiga'] ?? '';
    $senhaNova = $_POST['senha_nova'] ?? '';
    $senhaNovaConfirmar = $_POST['senha_nova_confirmar'] ?? '';
    $nome = $_POST['nome_user'] ?? '';

    // Validação das senhas
    if ($senhaAntiga !== $usuario->getSenha()) {
        $erro = 'Senha antiga incorreta.';
    } elseif (empty($senhaNova) || strlen($senhaNova) < 8) {
        $erro = 'A nova senha deve ter pelo menos 8 caracteres.';
    }elseif ($senhaNova === $senhaAntiga) {
        $erro = 'A nova senha deve ser diferente da antiga.';
    } else {
        // Tudo ok, pode atualizar a senha e o nome
        $usuario->setSenha($senhaNova); // Armazenando a nova senha como texto puro
        $usuario->setNome($nome);
        $usuario->atualizarUsuario();

        // Destrói a sessão e redireciona o usuário para a tela de login
        session_destroy();
        header('Location: ../../index.php');
        exit();
    }

    // Se houver erros, salvar na sessão para mostrar ao usuário e redirecionar de volta ao formulário
    if (isset($erro)) {
        $_SESSION['erro'] = $erro;
        header('Location: ../../usuario/');
        exit();
    }
}
