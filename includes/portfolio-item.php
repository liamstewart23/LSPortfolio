<section id="portfolioItem" data-ng-controller="DetailsController">
  <h2 class="hide">{{works[whichWork].title}} Project by Liam Stewart</h2>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
      <div data-ng-model="works">
        <div class="col-xs-12 col-md-12">
        <a href="#/portfolio" class="pull-right" title="Go back to Portfolio page"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Portfolio</a>
        </div>
        <h2>{{works[whichWork].title}}</h2>
        <!--<img data-ng-src="images/{{works[whichWork].shortname}}.jpg" alt="Photo of {{works[whichWork].title}}">-->
        <p data-ng-show="works[whichWork].project"><a href="{{works[whichWork].project}}" target="_blank" title="View {{works[whichWork].viewtype}}"><i class="fa fa-desktop" aria-hidden="true"></i> View {{works[whichWork].viewtype}}</a></p>
        <p data-ng-show="works[whichWork].source"><a href="{{works[whichWork].source}}" target="_blank" title="View Source"><i class="fa fa-github" aria-hidden="true"></i> View Source</a></p>
        <p>{{'Media: ' + works[whichWork].media}}</p>
        <p>{{'Media: ' + works[whichWork].tech}}</p>
        <!--<p>{{works[whichWork].description}}</p>-->
      </div>
      <div class="row portfolioItemFooterNav">
        <div class="col-xs-6 col-sm-6 col-md-3">
          <a href="#/portfolio-item/{{prevItem}}" title="Go to previous portfolio item: {{works[prevItem].title}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{works[prevItem].title}}</a>
        </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-6">
          <a class="pull-right" href="#/portfolio-item/{{nextItem}}" title="Go to next portfolio item: {{works[nextItem].title}}">{{works[nextItem].title}} <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
	include 'footer.php';//Footer
?>