<section ng-controller="PortfolioController">
	<h2 class="hidden">Liam Stewart's Portfolio</h2>
	<div class="row" id="portfolio">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<h2>Portfolio</h2>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<h3>It all starts with an idea.</h3>
		</div>
	</div>
	<div class="row" id="portfolioItems">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<!--<div class="search">
				<label for="searchField">Search: </label>
				<input ng-model="query" id="searchField" placeholder="Search for work" autofocus>
				<label>by:
    <select ng-model="workOrder">
      <option value="title">Title</option>
      <option value="year">Year</option>
    </select>
  </label>
				<label>
    <input type="radio" ng-model="direction" name="direction" checked>
    ascending
  </label>
				<label>
    <input type="radio" ng-model="direction" name="direction" value="reverse">
    descending
  </label>
			</div>-->
			<div class="row">
				<div class="work col-sm-12 col-md-6" ng-repeat="item in works | filter: query | orderBy: workOrder:direction">
					<div>
						<!--<img ng-src="images/{{item.shortname}}.jpg" alt="Photo of {{item.title}}">-->
						<h3>{{ item.title }}</h3>
						<p>{{ item.type }}</p>
						<a href="#/portfolio-item/{{works.indexOf(item)}}">View Project >></a>
						<br><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>