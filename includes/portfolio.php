<?php
	// require_once("../admin/phpscripts/init.php");
	// $tbl="tbl_portfolio";
	// $col="p_id";
	// $getPortfolio = getAll($tbl,$col);
	// //echo $getPortfolio;
?>
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
			<?php
		// 	if(!is_string($getPortfolio)){
		// 	while($row = mysqli_fetch_array($getPortfolio)){
		// 	echo "<h1>{$row['p_name']}</h1>";
		// 	echo "<h5>{$row['p_type']}</h5><br>";
		// 	echo "{$row['p_desc']}<br><br><br>";
		// 	echo "<a href=\"{$row['p_link']}\" class=\"main-btn\" target=\"_blank\"><i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> View Website</a>";
		// 	if ($row['p_source'] != NULL) {			
		// 	echo "<a href=\"{$row['p_source']}\" class=\"main-btn vsource\" target=\"_blank\"><i class=\"fa fa-github\" aria-hidden=\"true\"></i> View Source</a>";}
		// 	if ($row['p_complete'] != NULL) {			
		// 	echo "<span class=\"pstatus\">This project is still currently under development.</span>";
		// }
		// 	echo "<br><br><br><br>";
		// 	}
		// 	} else {
		// 	//echo "nope...";
		// 	}
			?>
	<div class="search">
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
</div>
<ul>
  <li class="work" ng-repeat="item in works | filter: query | orderBy: workOrder:direction">
    <img ng-src="images/{{item.shortname}}.jpg" alt="Photo of {{item.title}}">
    <div>
      <h2>{{ item.title }}</h2>
      <p>{{ item.author + ', ' + item.year }}</p>
      <a href="#/details/{{works.indexOf(item)}}">Details >></a>
    </div>
  </li>
</ul>
		</div>
	</div>
</section>