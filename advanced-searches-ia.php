<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>Impact Assessment Search | Advanced Searches | legislation.gov.uk</title>
	<noscript>
		<link rel="stylesheet" type="text/css" href="../default_v4.css">
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
	<main class="advanced-searches">
        <div>
			<section>
				<nav>
					<h2>Advanced searches</h2>
					<ul>
						<li><a href="advanced-searches-full.php">Full search</a></li>
						<li><a href="advanced-searches-extent.php">Geographical extent</a></li>
						<li><a href="advanced-searches-pit.php">Point in time</a></li>
						<li><a href="advanced-searches-draft.php">Draft legislation</a></li>
						<li><a href="advanced-searches-ia.php" aria-current="page">Impact assessments</a></li>
					</ul>
				</nav>
			</section>
		</div>
        <section>
			<h1 id="main-content-h" tabindex="-1">Impact Assessment Advanced Search</h1>
		</section>
        <section>
            <form role="search" method="get" action="/tna/search.php">
                <fieldset class="search-keywords">
                    <legend><h2>Keywords</h2></legend>
                    <details>
                        <summary>How to search with keywords</summary>
                        <p>You can enter full and partial titles, for example, '<span>Data protection</span>' will return '<span><span>Data Protection</span> Act</span>' and '<span>The <span>Data</span> Retention Regulations</span>'. </p>
                        <p>Use a minus to exclude a word, for example, '<span>Data -protection</span>' will return '<span>The <span>Data</span> Retention Regulations</span>' but not the '<span><span>Data Protection</span> Act</span>'. </p>
                        <p>Use quotes for an exact match, for example, <span>"Data Protection"</span> will return '<span>The <span>Data Protection</span> Act</span>' but not the '<span>The <span>Protection</span> of Vulnerable Groups (<span>Data</span> Handling) Regulations</span>'.</p>
                    </details>
                    <span>
                        <label for="title">Search for words in the legislation title...</label>
                        <input type="text" id="title" name="title" placeholder="e.g. equality, equality 15, equality 2010, 15 2010">
                    </span>
                    <span>
                        <label for="content">...and/or words in the legislation text</label>
                        <input type="text" id="content" name="title" placeholder='e.g. data retention, "data retention"'>
                    </span>
                </fieldset>
                <fieldset class="search-ia-attributes">
                    <legend><h2>Impact Assessment attributes</h2></legend>
                    <span>
                        <label for="stage">Stage:</label>
                        <select id="stage" name="stage">
                            <option>Consultation</option>
                            <option>Development</option>
                            <option>Enactment</option>
                            <option>Final</option>
                            <option>Implementation</option>
                            <option>Options</option>
                            <option>Post Implementation</option>
                        </select>
                    </span>
                    <span>
                        <label for="department">Department <span>(the whole name of the department is required)</span></label>
                        <input type="text" id="department" name="department" placeholder="e.g. Department of Agriculture, Environment and Rural Affairs">
                    </span>
                </fieldset>
                <fieldset class="search-date">
                    <legend><h2>Dates</h2></legend>
                    <p>We hold all impact assessments from 2008 to the present day, as well as selected impact assessments from 2005.</p>
                    <div role="group" aria-label="Enacted or made dates">
                        <span><label for="from-date">between:</label><input id="from-date" type="text" placeholder="2008" /></span>
                        <span><label for="to-date">and:</label><input id="to-date" type="text" placeholder="<?php echo date("Y") ?>" /></span>
                    </div>
                </fieldset>
                <button type="submit">Search</button>
            </form>
        </section>
		</div>
	</main>
<?php include "ftr.php" ?>
</body>
</html>