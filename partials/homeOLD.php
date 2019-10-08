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

<div ng-show="loading" class="text-info">Loading...</div>

<div class="well" ng-hide="loading" ng-controller="EtudiantsCtrl">
    <ul class="nav nav-pills nav-stacked">
          <li class="repeat-animation" ng-repeat="etudiant in etudiants | filter: {nometudiant: query} | orderBy: order">
            <a href="#/etudiant/{{etudiant.idetudiant}}">{{etudiant.nometudiant}}</a>
          </li> 
      </ul>
</div>