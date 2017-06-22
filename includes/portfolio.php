<section ng-controller="PortfolioController">
	<h2 class="hidden">Liam Stewart's Portfolio</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 portfolio-title">
			<h2>Portfolio</h2>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 portfolio-stitle">
			<h3>It all starts with an idea.</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<div class="portfolioFilter">
				<div class="search">
					<input ng-model="query" id="searchField" placeholder="Search..." autofocus>
				</div>
				<div class="portfolio-filter">
					<button class="portfolio-filter-btn filter-button" data-filter="all">All</button>
					<button class="portfolio-filter-btn filter-button" data-filter="web-design">Web Design</button>
					<button class="portfolio-filter-btn filter-button" data-filter="branding">Branding</button>
					<button class="portfolio-filter-btn filter-button" data-filter="seo">SEO</button>
					<button class="portfolio-filter-btn filter-button" data-filter="wordpress">WordPress</button>
					<!--<button class="portfolio-filter-btn filter-button" data-filter="drupal">Drupal</button>-->
					<!--<button class="portfolio-filter-btn filter-button" data-filter="angularjs">AngularJS</button>-->
					<!--<button class="portfolio-filter-btn filter-button" data-filter="vuejs">Vue.js</button>-->					
					<!--<button class="portfolio-filter-btn filter-button" data-filter="codeigniter">CodeIgniter</button>-->
					<!--<button class="portfolio-filter-btn filter-button" data-filter="laravel">Laravel</button>-->
					<!--<button class="portfolio-filter-btn filter-button" data-filter="python">Python</button>-->
					<!--<button class="portfolio-filter-btn filter-button" data-filter="nodejs">NodeJS</button>-->
					<!--<button class="portfolio-filter-btn filter-button" data-filter="xenforo">Xenforo</button>-->
				</div>
				<div class="row">
					<div class="work col-sm-12 col-md-6" ng-repeat="item in works | filter: query | orderBy: workOrder:direction">
						<div class="filter {{ item.filter }}">
							<!--<img ng-src="img/{{item.image}}.png" alt="Photo of {{item.title}}">-->
							<a href="#/portfolio-item/{{works.indexOf(item)}}">
						<img class="center-block img-responsive" ng-src="http://{{item.image}}" alt="Photo of {{item.title}}">
						</a>
							<!--<h3>{{ item.title }}</h3>
						<p>{{ item.type }}</p>-->
							<!--<a href="#/portfolio-item/{{works.indexOf(item)}}">View Project >></a>-->
							<br><br><br>
						</div>
					</div>
					<p ng-show="(works | filter:query).length == 0">Nothing here!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	include 'footer.php';//Footer
?>