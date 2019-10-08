<form role="form" class="form-inline">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Filtrer par nom" ng-model="query">
        <select class="form-control" ng-model="order">
            <option value="matriculeetudiant">Organiser par matricule</option>
            <option value="nometudiant">Organiser par nom</option>
        </select>
    </div>
</form>

<br />

<div ng-show="loading" ng-loading></div>

<div class="table-responsive" ng-controller="EtudiantsCtrl" ng-hide="loading" >
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-1">
            <col class="col-xs-7">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Matricule</th>
                <th>Noms</th>
            </tr>
        </thead>
        <tbody>            
            <tr class="repeat-animation" ng-repeat="etudiant in etudiants | filter: {nometudiant: query} | orderBy: order">
                <td>{{etudiant.idetudiant}}</td>
                <td>{{etudiant.matriculeetudiant}}</td>
                <td><a href="#/etudiant/{{etudiant.idetudiant}}">{{etudiant.nometudiant}}</a></td>
            </tr>                                
        </tbody>
    </table>
</div>