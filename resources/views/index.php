<!DOCTYPE html>
<html ng-app="tarefas">
    <head>
      <meta charset="UTF-8">
      <title>Minha Lista de tarefas</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            .even{background-color: #EFEFEF;}
            .odd{background-color: #DDDDDD;}
            .header{text-align: center;}
        </style>
    </head>
    <body class="container" ng-controller="TarefasController as tarefas">
        <div class="page-header"><h2>Minha lista de tarefas</h2></div>
            <form ng-submit="adicionarTarefa()">
                <label for="texto">Tarefa</label>
                <input id="texto" type="text" ng-model="texto" required placeholder="Texto" class="form-control"/>
                <label for="autor">Autor</label>
                <input id="autor" type="text" ng-model="autor" required placeholder="Autor" class="form-control"/>
                <label for="status">Status</label>
                <select id="status" ng-model="status" required class="form-control">
                    <option value="Concluído">Concluído</option>
                    <option value="Pendente">Pendente</option>
                </select>
                <input type="submit" value="Cadastrar" class="btn btn-default"/>
            </form>
            <div class="containner">
                <div class="row" ng-repeat="tarefa in dadostarefas" ng-class-odd="'odd'" ng-class-even="'even'">
                    <div class="col-sm-1">
                        <span ng-click="excluirTarefa(tarefa.id)" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </div>
                    <div class="col-sm-3">{{tarefa.texto}}</div>
                    <div class="col-sm-3">{{tarefa.autor}}</div>
                    <div class="col-sm-3">{{tarefa.status}}</div>
                    <div class="col-sm-2">
                        <span ng-if="tarefa.status == 'Concluído'">
                            <input type="button" value="Marcar como Pendente" class="btn btn-success" ng-click="mudarStatus(tarefa.id,'Pendente')" />
                        </span>
                        <span ng-if="tarefa.status != 'Concluído'">
                            <input type="button" value="Marcar como Concluído" class="btn btn-warning" ng-click="mudarStatus(tarefa.id,'Concluído')" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
       <script src="js/app.js"></script>
    </body>
</html>