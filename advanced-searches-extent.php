<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>Geographical Extent Search | Advanced Searches | legislation.gov.uk</title>
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
						<li><a href="advanced-searches-extent.php" aria-current="page">Geographical extent</a></li>
						<li><a href="advanced-searches-pit.php">Point in time</a></li>
						<li><a href="advanced-searches-draft.php">Draft legislation</a></li>
						<li><a href="advanced-searches-ia.php">Impact assessments</a></li>
					</ul>
				</nav>
			</section>
		</div>
        <section>
            <hgroup>
                <h1 id="main-content-h" tabindex="-1">Geographical Extent Advanced Search</h1>
                <p>See revised legislation as it extends or applies to different parts of the UK</p>
            </hgroup>
		</section>
        <section>
            <form role="search" method="get" action="/tna/search.php">
                <div class="current-approach">
                    <fieldset class="search-extent">
                        <legend><h2>Geographical extent</h2></legend>
                        <p>Geographical extent searches are only available for revised legislation. Find out <a href="#">how we communicate territorial extent and application</a>.</p>
                        <div role="group" aria-label="Aplies or extends to">
                            <h3>Find legislation that...</h3>
                            <span>
                                <label for="applicable">Is applicable to... <span>(legislation that applies to specified parts of the UK)</span></label>
                                <input type="radio" id="applicable" name="geog-current" checked>
                            </span>
                            <span>
                                <label for="extends">Exclusively extends to... <span>(legislation that extends to specified parts of the UK)</span></label>
                                <input type="radio" id="extends" name="geog-current">
                            </span>
                        </div>
                        <div role="group" aria-label="Parts of the UK">
                            <h3>The following parts of the UK...</h3>
                            <span><label for="England">England</label><input id="England" type="checkbox" checked /></span>
                            <span><label for="NI">Northern Ireland</label><input id="NI" type="checkbox" checked /></span>
                            <span><label for="Scotland">Scotland</label><input id="Scotland" type="checkbox" checked /></span>
                            <span><label for="Wales">Wales</label><input id="Wales" type="checkbox" checked /></span>
                        </div>
                        <details  open>
                            <summary>Legislation returned for the above combination</summary>
                            <ul>
                                <li>E</li>
                                <li>W</li>
                                <li>S</li>
                                <li>E<span>+</span>W</li>
                                <li>E<span>+</span>S</li>
                                <li>W<span>+</span>S</li>
                                <li>N.I.</li>
                                <li>E<span>+</span>W<span>+</span>S</li>
                                <li>E<span>+</span>N.I.</li>
                                <li>W<span>+</span>N.I.</li>
                                <li>S<span>+</span>N.I.</li>
                                <li>E<span>+</span>W<span>+</span>N.I.</li>
                                <li>E<span>+</span>S<span>+</span>N.I.</li>
                                <li>W<span>+</span>S<span>+</span>N.I.</li>
                                <li>E<span>+</span>W<span>+</span>S<span>+</span>N.I.</li>
                            </ul>
                      </details>
                    </fieldset>
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
                    <fieldset class="search-date">
                        <legend><h2>Enacted or made dates</h2></legend>
                        <p>We hold revised versions of all Primary legislation and selected Secondary legislation from the <a href="#">base date</a>. For most revised legislation the base date is 01 Feb 1991; for Northern Ireland legislation the base date is 01 Jan 2006.</p>
                        <span><label for="from-date">between:</label><input id="from-date" type="text" placeholder="1991" /></span>
                        <span><label for="to-date">and:</label><input id="to-date" type="text" placeholder="<?php echo date("Y") ?>" /></span>
                     </fieldset>
                    <fieldset class="search-number-current">
                        <legend><h2>Number</h2></legend>
                       <span><label for="number">Number:</label><input id="number" type="text" placeholder="e.g. 15" /></span>
                    </fieldset>
                    <fieldset class="search-type">
                        <legend><h2>Legislation type</h2></legend>
                        <label for="type">Type of legislation:</label>
                        <select id="type" name="type">
                            <optgroup label="Primary Legislation">
                                <option value="primary">All Primary Legislation</option>
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
                            <optgroup label="Legislation originating from the EU">
                                <option value="eu-origin">All Legislation originating from the EU</option>
                                <option value="eur">Regulations originating from the EU</option>
                                <option value="eudn">Decisions originating from the EU</option>
                                <option value="eudr">Directives originating from the EU</option>
                                <option value="eut">European Union Treaties</option>
                            </optgroup>
                        </select>
                    </fieldset>
                </div>
                <div class="recommended-approach">
                    <fieldset class="search-extent">
                        <legend><h2>Geographical extent</h2></legend>
                        <p>Geographical extent searches are only available for revised legislation. Find out <a href="#">how we communicate territorial extent and application</a>.</p>
                        <div role="group" aria-label="Aplies or extends to">
                            <h3>Find legislation that...</h3>
                            <span>
                                <label for="applicable">Is applicable to... <span>(legislation that applies to specified parts of the UK)</span></label>
                                <input type="radio" id="applicable" name="geog" checked>
                            </span>
                            <span>
                                <label for="extends">Exclusively extends to... <span>(legislation that extends to specified parts of the UK)</span></label>
                                <input type="radio" id="extends" name="geog">
                            </span>
                        </div>
                        <div role="group" aria-label="Parts of the UK">
                            <h3>The following parts of the UK...</h3>
                            <span><label for="England">England</label><input id="England" type="checkbox" checked /></span>
                            <span><label for="NI">Northern Ireland</label><input id="NI" type="checkbox" checked /></span>
                            <span><label for="Scotland">Scotland</label><input id="Scotland" type="checkbox" checked /></span>
                            <span><label for="Wales">Wales</label><input id="Wales" type="checkbox" checked /></span>
                        </div>
                        <details  open>
                            <summary>Legislation returned for the above combination</summary>
                            <ul>
                                <li>E</li>
                                <li>W</li>
                                <li>S</li>
                                <li>E<span>+</span>W</li>
                                <li>E<span>+</span>S</li>
                                <li>W<span>+</span>S</li>
                                <li>N.I.</li>
                                <li>E<span>+</span>W<span>+</span>S</li>
                                <li>E<span>+</span>N.I.</li>
                                <li>W<span>+</span>N.I.</li>
                                <li>S<span>+</span>N.I.</li>
                                <li>E<span>+</span>W<span>+</span>N.I.</li>
                                <li>E<span>+</span>S<span>+</span>N.I.</li>
                                <li>W<span>+</span>S<span>+</span>N.I.</li>
                                <li>E<span>+</span>W<span>+</span>S<span>+</span>N.I.</li>
                            </ul>
                      </details>
                    </fieldset>
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
                        <p>We hold revised versions of all Primary legislation and selected Secondary legislation from the <a href="#">base date</a>. For most revised legislation the base date is 01 Feb 1991; for Northern Ireland legislation the base date is 01 Jan 2006.</p>
                        <span><label for="from-date">between:</label><input id="from-date" type="text" placeholder="1991" /></span>
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
                        <legend><h2>Revised legislation type</h2></legend>
                        <div role="group" aria-label="Main legislation types">
                            <span><label for="primary">All Primary legislation</label><input id="primary" type="checkbox" checked /></span>
                            <span><label for="secondary">All Secondary legislation</label><input id="secondary" type="checkbox" checked /></span>
                            <span><label for="eu">All Legislation originating from the EU</label><input id="eu" type="checkbox" /></span>
                        </div>
                        <details>
                            <summary>Select specific revised legislation types</summary>
                            <div role="group" aria-labelledby="h-primary" id="primary-types">
                                <h3 id="h-primary">Revised Primary legislation</h3>
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
                                <h3 id="h-secondary">Revised Secondary legislation</h3>
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
                                <h3 id="h-eu">Revised Legislation originating from the EU</h3>
                                <span><label for="eur">Regulations originating from the EU</label><input id="eur" type="checkbox" /></span>
                                <span><label for="eudn">Decisions originating from the EU</label><input id="eudn" type="checkbox" /></span>
                                <span><label for="eudr">Directives originating from the EU</label><input id="eudr" type="checkbox" /></span>
                                <span><label for="eut">European Union Treaties</label><input id="eut" type="checkbox" /></span>
                            </div>
                        </details>
                    </fieldset>
                </div>
                <button type="submit">Search</button>
            </form>
        </section>
		</div>
	</main>
<?php include "ftr.php" ?>
</body>
</html>