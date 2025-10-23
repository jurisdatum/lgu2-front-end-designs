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
				<h1 id="main-content-h" tabindex="-1">We found 8 documents<?php echo $fullSearchTitle ?></h1>
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
								<li aria-current="page"><a href="#">All years <span>(49<span> results</span>)</span></a></li>
								<li><a href="#">2018 <span>(3<span> results</span>)</span></a></li>
								<li><a href="#">2017 <span>(5<span> results</span>)</span></a></li>
							</ul>
						</section>
					<?php if ($filterSubjects == "show") { ?>
						<section class="filter-subject">
							<h3>By subject</h3>
							<h4>Select the first letter of a subject</h4>
							<ul>
								<li aria-current="page"><a href="#">All subjects</a></li>
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
								<li><a href="#">M</a></li>
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
								<summary disabled>
									<h4>Select the first letter to see a list of subjects</h4>
								</summary>
							</details>
					<?php } ?>
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
				<ul>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 2) Regulations 2018</a>
						<span>2018 No. 73 (C. 7)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Reporting Procedures) Resolution 2017</a>
						<span>2017 No. 376</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 1) Regulations 2017</a>
						<span>2017 No. 201 (C. 18)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 2) Regulations 2018</a>
						<span>2018 No. 73 (C. 7)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Reporting Procedures) Resolution 2017</a>
						<span>2017 No. 376</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 1) Regulations 2017</a>
						<span>2017 No. 201 (C. 18)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Commencement No. 2) Regulations 2018</a>
						<span>2018 No. 73 (C. 7)</span>
						<span>Scottish Statutory Instruments</span>
					</li>
					<li>
						<a href="legislation/toc.php">The Lobbying (Scotland) Act 2016 (Reporting Procedures) Resolution 2017</a>
						<span>2017 No. 376</span>
						<span>Scottish Statutory Instruments</span>
					</li>
				</ul>
				<ul class="skip-links">
					<li><a href="#search-filters-h">Skip to search filters</a></li>
				</ul>
			</div>
			<div class="search-footer">
				<div class="results-count">8 results</div>
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
				<div class="results-per-page"><label for="resultsPerPage">Results per page:</label><input type="number" value="25" id="resultsPerPage"><button>Go</button></div>
			</div>
		</section>
	</main>
<?php include "ftr.php" ?>
</body>
</html>