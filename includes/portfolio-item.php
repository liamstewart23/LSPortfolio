<section>
  <div ng-model="works">
  <a href="#/details/{{prevItem}}">Prev</a>
  <a href="#/details/{{nextItem}}">Next</a>
    <h1>{{works[whichWork].title}}</h1>
    <img ng-src="images/{{works[whichWork].shortname}}.jpg" alt="Photo of {{works[whichWork].title}}">
    <p>{{'Author: ' + works[whichWork].author}}</p>
    <p>{{'Year: ' + works[whichWork].year}}</p>
    <p>{{'Media: ' + works[whichWork].media}}</p>
    <p>{{works[whichWork].description}}</p>
  </div>

  <a href="#/portfolio"><< Back to portfolio</a>
</section>
