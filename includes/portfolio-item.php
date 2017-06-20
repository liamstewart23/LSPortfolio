<section id="portfolioItem" ng-controller="DetailsController">
  <h2 class="hidden">Blog Posts by Liam Stewart</h2>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
      <div ng-model="works">
        <a href="#/portfolio"><i class="fa fa-arrow-circle-left"></i> Back to Portfolio</a>
        <h2>{{works[whichWork].title}}</h2>
        <img ng-src="images/{{works[whichWork].shortname}}.jpg" alt="Photo of {{works[whichWork].title}}">
        <p>{{'Author: ' + works[whichWork].author}}</p>
        <p>{{'Year: ' + works[whichWork].year}}</p>
        <p>{{'Media: ' + works[whichWork].media}}</p>
        <p>{{'Media: ' + works[whichWork].tech}}</p>
        <p>{{works[whichWork].description}}</p>
      </div>
      <div class="row portfolioItemFooterNav">
        <div class="col-xs-4 col-sm-4 col-md-2">
          <a href="#/portfolio-item/{{prevItem}}"><i class="fa fa-arrow-left"></i> {{works[prevItem].title}}</a>
        </div>
          <div class="col-xs-4 col-sm-4 col-xs-offset-4 col-sm-offset-4 col-md-2 col-md-offset-8">
          <a href="#/portfolio-item/{{nextItem}}">{{works[nextItem].title}} <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>