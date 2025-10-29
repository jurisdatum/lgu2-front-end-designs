<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>Changes to legislation | Research tools | legislation.gov.uk</title>
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
	<main class="changes-to-legislation">
		<section>
			<nav aria-labelledby="breadcrumbNavigation">
				<h2 id="breadcrumbNavigation">Where this page sits</h2>
				<ol>
					<li><a href="default.php">Home</a></li>
					<li><a href="research-tools.php">Research tools</a></li>
					<li><a href="research-tools-changes-to-legislation.php" aria-current="page">Changes to legislation</a></li>
				</ol>
			</nav>
			<h1 id="main-content-h" tabindex="-1">Changes to legislation</h1>
		</section>
		<section>
			<p>Details of changes made to and by legislation - including repeals, amendments and other effects, such as modifications and commencement information. See <a href="#changes-detail">below</a> for details of what changes will be included in your results.</p>
		</section>
		<section>
			<form>
				<fieldset>
					<legend><h2>Show changes to...</h2></legend>
					<label for="affected-title">Title:</label>
					<input id="affected-title" type="text" placeholder="any legislation (or enter a title)" />
					<label for="affected-type">Legistlation type:</label>
					<select id="affected-type" name="type">
						<option value="" selected="selected">any legislation</option>
						<option value="primary+secondary">any UK Legislation (excluding originating from the EU)</option>
						<option value="all">any Legislation (including originating from the EU)</option>
						<optgroup label="Primary Legislation">
							<option value="primary">any Primary Legislation</option>
							<option value="ukpga">UK Public General Acts</option>
							<option value="ukla">UK Local Acts</option>
							<option value="ukppa">UK Private and Personal Acts</option>
							<option value="asp">Acts of the Scottish Parliament</option>
							<option value="asc">Acts of Senedd Cymru</option>
							<option value="anaw">Acts of the National Assembly for Wales</option>
							<option value="mwa">Measures of the National Assembly for Wales</option>
							<option value="ukcm">Church Measures</option>
							<option value="nia">Acts of the Northern Ireland Assembly</option>
							<option value="aosp">Acts of the Old Scottish Parliament</option>
							<option value="aep">Acts of the English Parliament</option>
							<option value="aip">Acts of the Old Irish Parliament</option>
							<option value="apgb">Acts of the Parliament of Great Britain</option>
							<option value="gbla">Local Acts of the Parliament of Great Britain</option>
							<option value="gbppa">Private and Personal Acts of the Parliament of Great Britain</option>
							<option value="nisi">Northern Ireland Orders in Council</option>
							<option value="mnia">Measures of the Northern Ireland Assembly</option>
							<option value="apni">Acts of the Northern Ireland Parliament</option>
						</optgroup>
						<optgroup label="Secondary Legislation">
							<option value="secondary">any Secondary Legislation</option>
							<option value="uksi">UK Statutory Instruments</option>
							<option value="wsi">Wales Statutory Instruments</option>
							<option value="ssi">Scottish Statutory Instruments</option>
							<option value="nisr">Northern Ireland Statutory Rules</option>
							<option value="ukci">Church Instruments</option>
							<option value="ukmd">UK Ministerial Directions</option>
							<option value="ukmo">UK Ministerial Orders</option>
							<option value="uksro">UK Statutory Rules and Orders</option>
							<option value="nisro">Northern Ireland Statutory Rules and Orders</option>
						</optgroup>
						<optgroup label="Legislation originating from the EU">
							<option value="eu-origin">any Legislation originating from the EU</option>
							<option value="eur">Regulations originating from the EU</option>
							<option value="eudn">Decisions originating from the EU</option>
							<option value="eudr">Directives originating from the EU</option>
							<option value="eut">European Union Treaties</option>
						</optgroup>
						<optgroup label="Draft Legislation">
							<option value="draft">any Draft Legislation</option>
							<option value="ukdsi">UK Draft Statutory Instruments</option>
							<option value="sdsi">Scottish Draft Statutory Instruments</option>
							<option value="nidsr">Northern Ireland Draft Statutory Rules</option>
						</optgroup>
						<optgroup label="Impact Assessments">
							<option value="ia">any Impact Assessments</option>
							<option value="ukia">UK Impact Assessments</option>
					</select>
					<div role="group" aria-labelledby="affected-enacted">
						<h3 id="affected-enacted">Enacted or made</h3>
						<label for="affected-between">between:</label><input id="affected-between" type="text" placeholder="1267" />
						<label for="affected-and">and:</label><input id=affected-and type="text" placeholder="<?php echo date("Y") ?>" />
					</div>
					<label for="affected-number">Number:</label>
					<input id="affected-number" type="text" placeholder="(any)" />
				</fieldset>
				<fieldset>
					<legend><h2>...that are made by...</h2></legend>
					<label for="affecting-title">Title:</label>
					<input id="affecting-title" type="text" placeholder="any legislation (or enter a title)" />
					<label for="affecting-type">Legistlation type:</label>
					<select id="affecting-type" name="type">
						<option value="" selected="selected">any legislation</option>
						<option value="primary+secondary">any UK Legislation (excluding originating from the EU)</option>
						<option value="all">any Legislation (including originating from the EU)</option>
						<optgroup label="Primary Legislation">
							<option value="primary">any Primary Legislation</option>
							<option value="ukpga">UK Public General Acts</option>
							<option value="ukla">UK Local Acts</option>
							<option value="ukppa">UK Private and Personal Acts</option>
							<option value="asp">Acts of the Scottish Parliament</option>
							<option value="asc">Acts of Senedd Cymru</option>
							<option value="anaw">Acts of the National Assembly for Wales</option>
							<option value="mwa">Measures of the National Assembly for Wales</option>
							<option value="ukcm">Church Measures</option>
							<option value="nia">Acts of the Northern Ireland Assembly</option>
							<option value="aosp">Acts of the Old Scottish Parliament</option>
							<option value="aep">Acts of the English Parliament</option>
							<option value="aip">Acts of the Old Irish Parliament</option>
							<option value="apgb">Acts of the Parliament of Great Britain</option>
							<option value="gbla">Local Acts of the Parliament of Great Britain</option>
							<option value="gbppa">Private and Personal Acts of the Parliament of Great Britain</option>
							<option value="nisi">Northern Ireland Orders in Council</option>
							<option value="mnia">Measures of the Northern Ireland Assembly</option>
							<option value="apni">Acts of the Northern Ireland Parliament</option>
						</optgroup>
						<optgroup label="Secondary Legislation">
							<option value="secondary">any Secondary Legislation</option>
							<option value="uksi">UK Statutory Instruments</option>
							<option value="wsi">Wales Statutory Instruments</option>
							<option value="ssi">Scottish Statutory Instruments</option>
							<option value="nisr">Northern Ireland Statutory Rules</option>
							<option value="ukci">Church Instruments</option>
							<option value="ukmd">UK Ministerial Directions</option>
							<option value="ukmo">UK Ministerial Orders</option>
							<option value="uksro">UK Statutory Rules and Orders</option>
							<option value="nisro">Northern Ireland Statutory Rules and Orders</option>
						</optgroup>
						<optgroup label="Legislation originating from the EU">
							<option value="eu-origin">any Legislation originating from the EU</option>
							<option value="eur">Regulations originating from the EU</option>
							<option value="eudn">Decisions originating from the EU</option>
							<option value="eudr">Directives originating from the EU</option>
							<option value="eut">European Union Treaties</option>
						</optgroup>
						<optgroup label="Draft Legislation">
							<option value="draft">any Draft Legislation</option>
							<option value="ukdsi">UK Draft Statutory Instruments</option>
							<option value="sdsi">Scottish Draft Statutory Instruments</option>
							<option value="nidsr">Northern Ireland Draft Statutory Rules</option>
						</optgroup>
						<optgroup label="Impact Assessments">
							<option value="ia">any Impact Assessments</option>
							<option value="ukia">UK Impact Assessments</option>
					</select>
					<div role="group" aria-labelledby="affecting-enacted">
						<h3 id="affecting-enacted">Enacted or made</h3>
						<label for="affecting-between">between:</label><input id="affecting-between" type="text" placeholder="2002" />
						<label for="affecting-and">and:</label><input id=affecting-and type="text" placeholder="<?php echo date("Y") ?>" />
					</div>
					<label for="affecting-number">Number:</label>
					<input id="affecting-number" type="text" placeholder="(any)" />
				</fieldset>
				<fieldset>
					<legend><h2><span>Show these types of changes</span></h2></legend>
                    <div>
                        <input type="radio" name="changes" value="all-changes" id="all-changes" checked />
                        <label for="all-changes"><span>All changes</span>, regardless of whether the text of the legislation on this website has been updated or not.</label>
                    </div>
                    <div>
                        <input type="radio" name="changes" value="applied-changes" id="applied-changes" />
                        <label for="applied-changes"><span>Only changes which have been applied</span> to the website by the editorial team.</label>
                    </div>
                    <div>
                        <input type="radio" name="changes" value="unapplied-changes" id="unapplied-changes" />
                        <label for="unapplied-changes"><span>Only changes which have not yet been applied</span> to the website by the editorial team.</label>
                    </div>
				</fieldset>
				<div>
					<h2 class="initialise" hidden>This is what you are searching for...</h2>
					<p id="changesSummary" class="initialise" hidden><span id="showChanges"><span>All changes</span></span><span id="affectedType"><span>any legislation</span></span><span id="affectedTitle"> with the title "<span></span>"</span><span id="affectedYear">, enacted or made <span></span></span><span id="affectedNumber">, with the number "<span></span>"</span>, made by <span id="affectingType"><span>any legislation</span></span><span id="affectingTitle"> with the title <span></span></span><span id="affectingYear">, enacted or made <span></span></span><span id="affectingNumber">, with the number <span></span></span>.</p>
					<button>Show me the list of changes</button>
				</div>
			</form>
		</section>
		<section id="changes-detail" tabindex="-1">
			<h2>What changes will I be able to explore with this changes to legislation search?</h2>
			<h3>Changes made by primary legislation</h3>
			<p>You can see details of the changes made by all primary legislation enacted since 2002. Changes made by primary legislation before 2002 are not available here; they have been incorporated into the content of the primary legislation.</p>
			<h3>Changes made by secondary legislation</h3>
			<p>You can see details of the changes made by all secondary legislation enacted since 1971.</p>
			<h3>Changes to Legislation originating from the EU</h3>
			<p>You can see details of the changes to EU Regulations and Decisions originating from the EU that have been made by UK legislation. Changes to EU legislation made by EU legislation were captured from EUR-Lex up until the UK left the EU, at 11.00 p.m. on 31 December 2020, and you can see those here too.</p>
			<h3>How soon changes are made available</h3>
			<p>Changes made by new legislation are available here as soon as possible after the legislation is received by our editorial team. In most cases the changes will be available within two weeks of the new legislation being published, though during particularly busy periods for new legislation it may take us longer to process them.</p>
		</section>
		<aside aria-labelledby="relatedInformation">
			<h2 id="relatedInformation">You might also be interested in finding out about...</h2>
			<ul>
				<li>
					<article>
						<a href="#">
							<h3>Changes to Local, and Private and Personal Acts</h3>
							<p>Details about repeals of, and changes made to those Acts between 1539 and 2008.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>What legislation we hold</h3>
							<p>We hold most, but not all, types of legislation and their accompanying documents. See a comprehensive list of what we hold.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>Reusing legislation data</h3>
							<p>Find out about our legislation API and other ways in which you can reuse legislation data.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>Research website</h3>
							<p>Identify trends and patterns in legislation and explore how words and phrases have changed over time.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="search.php">
							<h3>Advanced search</h3>
							<p>Search for keywords in content, Welsh language legislation, legislation with specific geographical extent, and more.</p>
						</a>
					</article>
				</li>
			</ul>
		</aside>
	</main>
<?php include "ftr.php" ?>
</body>
</html>