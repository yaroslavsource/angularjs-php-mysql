<div ng-controller="EtudiantCtrl">
    <ol class="breadcrumb">
        <li><a href="#/">Home</a></li>
        <li class="active">Etudiant</li>
    </ol>

    <div ng-show="loading" ng-loading></div>

    <div ng-hide="loading">
        <h3>Informations detaillees de : {{name + ' ' + prenom}}   </h3> 

        <div class="well">
            <dl>
                <dt>Nom & Prenoms</dt>
                <dd>{{name + ' ' + prenom}}</dd>
                <dt>Email</dt>
                <dd>{{email}}</dd>
            </dl>
        </div>
    </div>
</div>
