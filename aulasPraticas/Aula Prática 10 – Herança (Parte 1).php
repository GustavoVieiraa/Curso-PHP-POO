<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 10 – Herança (Parte 1)</title>
</head>
<body>
    <section>
        <?php

        require_once "../classes/Requires.php";

        $teste_pessoa = new PessoaPadrao("Gustavo", 20, "Masculino");

        $teste_aluno = new Aluno("Douglas", 32, "Masculino");
        $teste_aluno->setCurso("Análise e Desenvolvimento de Sistemas");
        $teste_aluno->setMatricula(1);
        $teste_aluno->statusAluno();

        $teste_funcionario = new Funcionario("Paulo", 27, "Masculino");
        $teste_funcionario->setSetor("Supervisor de Redes");
        $teste_funcionario->setTrabalhando("sim");
        $teste_funcionario->mudarTrabalho("Diretor Executivo");
        $teste_funcionario->statusFuncionario();

        $teste_professor = new Professor("Antonino", 75, "Masculino");
        $teste_professor->setEspecialidade("Matematica");
        $teste_professor->setSalario(6320.10);
        $teste_professor->receberAumento(4000);
        $teste_professor->statusProfessor();
        ?>
    </section>
</body>
</html>