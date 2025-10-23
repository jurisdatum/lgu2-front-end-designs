<?php include "searchParameters.php" ?>
<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>Search results for <?php echo $searchTitle ?> | legislation.gov.uk</title>
	<noscript>
		<link rel="stylesheet" type="text/css" href="default_v4.css">
	</noscript>
	<link href="default_v4.less" rel="stylesheet/less">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script src="default_v4.js"></script>
	<script src="less.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
</head>
<body>
<?php include "hdr.php" ?>
	<main class="search-results">
		<section>
			<hgroup>
				<h1 id="main-content-h" tabindex="-1">We found 3 documents<?php echo $fullSearchTitle ?></h1>
				<p><?php echo $fullSearchYear ?><?php echo $fullSearchNumber ?><?php echo $fullSearchType ?><?php echo $fullSearchInitial ?><?php echo $fullSearchSubject ?></p>
			</hgroup>
		</section>
		<section class="search-content">
			<aside aria-labelledby="searchFilters" class="search-filters">
				<h2 id="search-filters-h">Filter your results</h2>
				<ul class="skip-links">
					<li><a href="#search-results-h">Skip to search results</a></li>
				</ul>
				<details>
					<summary>
						<span class="open">Filter your results</span>
						<span class="close">Close<span> filters</span></span>
					</summary>
					<div>
						<section class="filter-type">
							<h3>By type</h3>
							<ul>
								<li><a href="#">All legislation types <span>(49<span> results</span>)</span></a></li>
								<li aria-current="page"><a href="#">Scottish Statutory Instruments</a></li>
							</ul>
						</section>
						<section class="filter-year">
							<h3>By year</h3>
							<ul>
								<li><a href="#">All years <span>(49<span> results</span>)</span></a></li>
								<li aria-current="page"><a href="#">2018</a></li>
							</ul>
						</section>
						<section class="filter-subject">
							<h3>By subject</h3>
							<h4>Select the first letter of a subject</h4>
							<ul>
								<li><a href="#">All subjects</a></li>
								<li><a href="#">A</a></li>
								<li><a href="#">B</a></li>
								<li><a href="#">C</a></li>
								<li><a href="#">D</a></li>
								<li><a href="#">E</a></li>
								<li><a href="#">F</a></li>
								<li><a href="#">G</a></li>
								<li><a href="#">H</a></li>
								<li><a href="#">I</a></li>
								<li><a href="#">J</a></li>
								<li><span>K</span></li>
								<li><a href="#">L</a></li>
								<li aria-current="page"><a href="#">M</a></li>
								<li><a href="#">N</a></li>
								<li><a href="#">O</a></li>
								<li><a href="#">P</a></li>
								<li><span>K</span></li>
								<li><a href="#">R</a></li>
								<li><a href="#">S</a></li>
								<li><a href="#">T</a></li>
								<li><span>K</span></li>
								<li><a href="#">V</a></li>
								<li><a href="#">W</a></li>
								<li><span>K</span></li>
								<li><a href="#">Y</a></li>
								<li><a href="#">Z</a></li>
							</ul>
							<details>
								<summary>
									<h4>Choose a specific subject</h4>
								</summary>
								<ul>
									<li aria-current="page"><a href="#">All subjects</a></li>
									<li><a href="#">Magistrates Courts</a></li>
									<li><a href="#">Magistrates Courts, England and Wales</a></li>
									<li><a href="#">Magistrates' Court</a></li>
									<li><a href="#">Magistrates' Courts</a></li>
									<li><a href="#">Magistrates' Courts, England and Wales</a></li>
									<li><a href="#">Magistrates' Courts, Northern Ireland</a></li>
									<li><a href="#">Magistrates` Courts</a></li>
									<li><a href="#">Maintenance Of Dependants</a></li>
									<li><a href="#">Maintenance Of Dependents</a></li>
									<li><a href="#">Manorial Incidents and Records</a></li>
									<li><a href="#">Manufacturing Undertakings</a></li>
									<li><a href="#">Marine Environment, Wales</a></li>
									<li><a href="#">Marine Management</a></li>
									<li><a href="#">Marine Management, England</a></li>
									<li><a href="#">Marine Management, Wales</a></li>
									<li><a href="#">Marine Pollution</a></li>
									<li><a href="#">Marine Pollution, England</a></li>
									<li><a href="#">Marine Pollution, England and Wales</a></li>
									<li><a href="#">Marine Pollution, Wales</a></li>
									<li><a href="#">Market Standards</a></li>
									<li><a href="#">Market Standards, Northern Ireland</a></li>
									<li><a href="#">Marriage</a></li>
									<li><a href="#">Marriage, England and Wales</a></li>
									<li><a href="#">Marriage, Northern Ireland</a></li>
									<li><a href="#">Marriage, Scotland</a></li>
									<li><a href="#">Marriages, Etc.</a></li>
									<li><a href="#">Masters and Seamen</a></li>
									<li><a href="#">Matrimonial Causes</a></li>
									<li><a href="#">Matrimonial Causes, England and Wales</a></li>
									<li><a href="#">Matrimonial Homes and Property</a></li>
									<li><a href="#">Mediation</a></li>
									<li><a href="#">Mediation, Northern Ireland</a></li>
									<li><a href="#">Medical Devices</a></li>
									<li><a href="#">Medical Devices, England</a></li>
									<li><a href="#">Medical Profession</a></li>
									<li><a href="#">Medical Profession, England</a></li>
									<li><a href="#">Medical Profession, England and Wales</a></li>
									<li><a href="#">Medical Profession, England, Wales and Scotland</a></li>
									<li><a href="#">Medical Profession, Northern Ireland</a></li>
									<li><a href="#">Medical Profession, Wales</a></li>
									<li><a href="#">Medicines</a></li>
									<li><a href="#">Medicines Fees and Charges</a></li>
									<li><a href="#">Medicines, England</a></li>
									<li><a href="#">Mental Capacity</a></li>
									<li><a href="#">Mental Capacity, England</a></li>
									<li><a href="#">Mental Capacity, England &amp; Wales</a></li>
									<li><a href="#">Mental Capacity, England and Wales</a></li>
									<li><a href="#">Mental Capacity, Wales</a></li>
									<li><a href="#">Mental Health</a></li>
									<li><a href="#">Mental Health, England</a></li>
									<li><a href="#">Mental Health, England and Wales</a></li>
									<li><a href="#">Mental Health, Northern Ireland</a></li>
									<li><a href="#">Mental Health, Wales</a></li>
									<li><a href="#">Merchandise Marks</a></li>
									<li><a href="#">Merchant Shipping</a></li>
									<li><a href="#">Merchant Shipping Civil Aviation</a></li>
									<li><a href="#">Merchant Shipping Safety</a></li>
									<li><a href="#">Metropolitan and City Police Districts</a></li>
									<li><a href="#">Milk and Dairies</a></li>
									<li><a href="#">Mines and Quarries</a></li>
									<li><a href="#">Ministers Of The Crown</a></li>
									<li><a href="#">Mobile Homes</a></li>
									<li><a href="#">Mobile Homes, England</a></li>
									<li><a href="#">Mobile Homes, Wales</a></li>
									<li><a href="#">Modern Slavery</a></li>
									<li><a href="#">Modern Slavery, England and Wales</a></li>
									<li><a href="#">Monopolies and Mergers</a></li>
									<li><a href="#">Multilateral Investment Guarantee Agency1</a></li>
									<li><a href="#">Multinational Top-Up Tax</a></li>
									<li><a href="#">Museums and Galleries</a></li>
									<li><a href="#">Museums and Galleries Historic Buildings and Monuments Commission</a></li>
								</ul>
							</details>
						</section>
					</div>
				</details>
			</aside>
			<div class="search-header">
				<div class="sort-by">
					<label for="sort">Sort by:</label>
					<select id="sort">
						<option>Best match</option>
						<option>Earliest year first</option>
						<option>Latest year first</option>
						<option>Title A-Z</option>
						<option>Title Z-A</option>
						<option>Lowest no. first</option>
						<option>Highest no. first</option>
					</select>
				</div>
				<nav aria-labelledby="pagination" class="pagination">
					<h2 id="pagination">Pages of results</h2>
					<ul>
						<li><span>First</span></li>
						<li><span>Previous</span></li>
						<li aria-current="page"><a href="#">1</a></li>
						<li><span>Next</span></li>
						<li><span>Last</span></li>
					</ul>
				</nav>
			</div>
			<div class="search-results-list">
				<h2 id="search-results-h" tabindex="-1">Search results</h2>
				<ul class="skip-links">
					<li><a href="#search-filters-h">Skip to search filters</a></li>
				</ul>
				<h3>Marine Management</h3>
				<ul>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 2) Regulations 2018</a>
						<span>2018 No. 73 (C. 7)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
				</ul>
				<h3>Medical Profession</h3>
				<ul>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 2) Regulations 2018</a>
						<span>2018 No. 73 (C. 7)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 2) Regulations 2018</a>
						<span>2018 No. 73 (C. 7)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
				</ul>
				<ul class="skip-links">
					<li><a href="#search-filters-h">Skip to search filters</a></li>
				</ul>
			</div>
			<div class="search-footer">
				<div class="results-count">3 results</div>
				<nav aria-labelledby="pagination" class="pagination">
					<h2 id="pagination" class="sr-only">Pages of results</h2>
					<ul>
						<li><span>First</span></li>
						<li><span>Previous</span></li>
						<li aria-current="page"><a href="#">1</a></li>
						<li><span>Next</span></li>
						<li><span>Last</span></li>
					</ul>
				</nav>
				<div class="results-per-page"><label for="resultsPerPage">Results per page:</label><input type="number" value="25" id="resultsPerPage"><button>Go</button></div>
			</div>
		</section>
	</main>
<?php include "ftr.php" ?>
</body>
</html>