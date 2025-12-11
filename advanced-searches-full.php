<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>Full Search | Advanced Searches | legislation.gov.uk</title>
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
						<li><a href="advanced-searches-full.php" aria-current="page">Full search</a></li>
						<li><a href="advanced-searches-extent.php">Geographical extent</a></li>
						<li><a href="advanced-searches-pit.php">Point in time</a></li>
						<li><a href="advanced-searches-draft.php">Draft legislation</a></li>
						<li><a href="advanced-searches-ia.php">Impact assessments</a></li>
					</ul>
				</nav>
			</section>
		</div>
        <section>
			<h1 id="main-content-h" tabindex="-1">Full Advanced Search</h1>
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
                <fieldset class="search-language">
                    <legend><h2>Language of legislation text</h2></legend>
                    <p>If you are using a Welsh search term, searching the Welsh language text of Welsh legislation may produce more relevant results.</p>
                    <span>
                        <label for="english">Search English language text <span>(searches all English text, including in Welsh legislation)</span></label>
                        <input type="radio" id="english" name="language" checked>
                    </span>
                    <span>
                        <label for="welsh">Search Welsh language text <span>(only searches Welsh language text in Welsh legislation)</span></label>
                        <input type="radio" id="welsh" name="language">
                    </span>
                </fieldset>
                <fieldset class="search-date">
                    <legend><h2>Enacted or made dates</h2></legend>
                    <p>We hold legislation from 1267 to the present day, including all Primary legislation from 1988 and all Secondary legislation from 1987 - see a comprehensive list of <a href="#">what legislation we hold</a>.</p>
                    <span><label for="from-date">between:</label><input id="from-date" type="text" placeholder="1267" /></span>
                    <span><label for="to-date">and:</label><input id="to-date" type="text" placeholder="<?php echo date("Y") ?>" /></span>
                </fieldset>
                <fieldset class="search-number">
                    <legend><h2>Series and number</h2></legend>
                    <p>Some legislation is assigned multiple numbers from different numbering systems. If you are unsure which number series to use, select 'Main series'.</p>
                    <span>
                        <label for="series">Series:</label>
                        <select id="series" name="series">
                            <option value="">Main series</option>
                            <option value="w">Welsh</option>
                            <option value="s">Scottish</option>
                            <option value="ni">N.I.</option>
                            <option value="c">Commencement</option>
                            <option value="l">Legal</option>
                        </select>
                    </span>
                    <span>
                        <label for="number">Number:</label><input id="number" type="text" placeholder="e.g. 15" />
                    </span>
                </fieldset>
                <fieldset class="search-type">
                    <legend><h2>Legislation type</h2></legend>
                    <div role="group" aria-label="Main legislation types">
                        <span><label for="primary">All Primary legislation</label><input id="primary" type="checkbox" checked /></span>
                        <span><label for="secondary">All Secondary legislation</label><input id="secondary" type="checkbox" checked /></span>
                        <span><label for="eu">All Legislation originating from the EU</label><input id="eu" type="checkbox" /></span>
                    </div>
                    <details>
                        <summary>Select specific legislation types</summary>
                        <div role="group" aria-labelledby="h-primary" id="primary-types">
                            <h3 id="h-primary">Primary legislation</h3>
                            <span><label for="ukpga">UK Public General Acts</label><input id="ukpga" type="checkbox" checked /></span>
                            <span><label for="ukla">UK Local Acts</label><input id="ukla" type="checkbox" checked /></span>
                            <span><label for="ukppa">UK Private and Personal Acts</label><input id="ukppa" type="checkbox" checked /></span>
                            <span><label for="asp">Acts of the Scottish Parliament</label><input id="asp" type="checkbox" checked /></span>
                            <span><label for="asc">Acts of Senedd Cymru</label><input id="asc" type="checkbox" checked /></span>
                            <span><label for="anaw">Acts of the National Assembly for Wales</label><input id="anaw" type="checkbox" checked /></span>
                            <span><label for="mwa">Measures of the National Assembly for Wales</label><input id="mwa" type="checkbox" checked /></span>
                            <span><label for="ukcm">Church Measures</label><input id="ukcm" type="checkbox" checked /></span>
                            <span><label for="nia">Acts of the Northern Ireland Assembly</label><input id="nia" type="checkbox" checked /></span>
                            <span><label for="aosp">Acts of the Old Scottish Parliament</label><input id="aosp" type="checkbox" checked /></span>
                            <span><label for="aep">Acts of the English Parliament</label><input id="aep" type="checkbox" checked /></span>
                            <span><label for="aip">Acts of the Old Irish Parliament</label><input id="aip" type="checkbox" checked /></span>
                            <span><label for="apgb">Acts of the Parliament of Great Britain</label><input id="apgb" type="checkbox" checked /></span>
                            <span><label for="gbla">Local Acts of the Parliament of Great Britain</label><input id="gbla" type="checkbox" checked /></span>
                            <span><label for="gbppa">Private and Personal Acts of the Parliament of Great Britain</label><input id="gbppa" type="checkbox" checked /></span>
                            <span><label for="nisi">Northern Ireland Orders in Council</label><input id="nisi" type="checkbox" checked /></span>
                            <span><label for="mnia">Measures of the Northern Ireland Assembly</label><input id="mnia" type="checkbox" checked /></span>
                            <span><label for="apni">Acts of the Northern Ireland Parliament</label><input id="apni" type="checkbox" checked /></span>
                        </div>
                        <div role="group" aria-labelledby="h-secondary" id="secondary-types">
                            <h3 id="h-secondary">Secondary legislation</h3>
                            <span><label for="uksi">UK Statutory Instruments</label><input id="uksi" type="checkbox" checked /></span>
                            <span><label for="wsi">Wales Statutory Instruments</label><input id="wsi" type="checkbox" checked /></span>
                            <span><label for="ssi">Scottish Statutory Instruments</label><input id="ssi" type="checkbox" checked /></span>
                            <span><label for="nisr">Northern Ireland Statutory Rules</label><input id="nisr" type="checkbox" checked /></span>
                            <span><label for="ukci">Church Instruments</label><input id="ukci" type="checkbox" checked /></span>
                            <span><label for="ukmd">UK Ministerial Directions</label><input id="ukmd" type="checkbox" checked /></span>
                            <span><label for="ukmo">UK Ministerial Orders</label><input id="ukmo" type="checkbox" checked /></span>
                            <span><label for="uksro">UK Statutory Rules and Orders</label><input id="uksro" type="checkbox" checked /></span>
                            <span><label for="nisro">Northern Ireland Statutory Rules and Orders</label><input id="nisro" type="checkbox" checked /></span>
                        </div>
                        <div role="group" aria-labelledby="h-eu" id="eu-types">
                            <h3 id="h-eu">Legislation originating from the EU</h3>
                            <span><label for="eur">Regulations originating from the EU</label><input id="eur" type="checkbox" /></span>
                            <span><label for="eudn">Decisions originating from the EU</label><input id="eudn" type="checkbox" /></span>
                            <span><label for="eudr">Directives originating from the EU</label><input id="eudr" type="checkbox" /></span>
                            <span><label for="eut">European Union Treaties</label><input id="eut" type="checkbox" /></span>
                        </div>
                    </details>
                </fieldset>
                <button type="submit">Search</button>
            </form>
        </section>
		</div>
	</main>
<?php include "ftr.php" ?>
</body>
</html>