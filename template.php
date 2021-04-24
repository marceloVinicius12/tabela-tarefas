<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="boostrap5/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="cadastro">
        <h1>Gerenciador de Tarefas</h1>
        
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label for="nome">Tarefa:</label>
                <input name="nome" id="nome">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao"></textarea>
                <label for="prazo">Prazo:</label>
                <input name="prazo" id="prazo">
                <fieldset>
                    <legend>Prioridade:</legend>
                    <input type="radio" name="prioridade" value="baixa">Baixa
                    <input type="radio" name="prioridade" value="media">Média
                    <input type="radio" name="prioridade" value="alta">Alta
                </fieldset>
                <label for="concluida">Tarefa concluída:</label>
                <input type="checkbox" name="concluida" value="sim" id="concluida">

                <button type="submit">Cadastrar</button>
            </fieldset>
        </form>
        <br>
    </div>
    </div>
    
        <table class="table">
            <thead>
                <tr>    
                    <th>TAREFAS</th>
                    <th>DESCRIÇÃO</th>
                    <th>PRAZO</th>
                    <th>PRIORIDADE</th>
                    <th>CONCLUÍDA</th>
                </tr>
            </thead>
            <tbody>
          
                <?php 
                $sqlBusca = "SELECT * FROM tb_tarefas";
                $resultado = mysqli_query($conexao, $sqlBusca);

                 $listaTarefas = [];
                 while($tarefa = mysqli_fetch_assoc($resultado)){
                     $listaTarefas[] = $tarefa;
                 }
                foreach($listaTarefas as $tarefa): ?>
                    <tr>
                        <td><?php echo $tarefa['nome']; ?></td>
                        <td><?php echo $tarefa['descricao']; ?></td>
                        <td><?php echo $tarefa['prazo']; ?></td>
                        <td><?php echo $tarefa['prioridade']; ?></td>
                        <td><?php echo $tarefa['concluida']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
 
    <script src="boostrap5/bootstrap.min.js"></script>
</body>
</html>