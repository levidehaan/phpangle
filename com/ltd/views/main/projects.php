<div ng-controller="ProjectListCtl">
  <div class="row-fluid" ng-repeat="count in projectCount">
    <div class="span4 well" ng-repeat="project in projectsListFilter(count)">
      <h2 id="name">{{project.name}}</h2>
      <p id="readme" ng-bind-html-unsafe="project.readme" style="display:none;"></p>
      <p><a class="btn btn-success" href="{{project.url}}">View Project on Github&raquo;</a></p><p><a class="btn btn-info" id="projectDetails">View Project Details&raquo;</a></p>
    </div>
  </div>
</div>
