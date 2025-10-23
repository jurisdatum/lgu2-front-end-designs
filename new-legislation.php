<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>New legislation | What's new | legislation.gov.uk</title>
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
	<main class="new-legislation">
		<section>
			<nav aria-labelledby="breadcrumbNavigation">
				<h2 id="breadcrumbNavigation">Where this page sits</h2>
				<ol>
					<li><a href="default.php">Home</a></li>
					<li><a href="whats-new.php">What's new</a></li>
					<li><a href="new-legislation.php" aria-current="page">New legislation</a></li>
				</ol>
			</nav>
			<h1 id="main-content-h" tabindex="-1">New legislation</h1>
		</section>
		<section>
			<p>Newly enacted legislation for the UK, Scotland, Wales and Northern Ireland is listed here by publication date rather than the date on which it was enacted. We aim to publish legislation at the same time as - or within 24 hours of - its printed publication, however it may take longer for us to prepare documents which are large or especially complex.</p>
		</section>
		<div>
			<section>
				<label for="published-on" hidden="hidden" class="initialise">Published on:</label>
				<select id="published-on" hidden="hidden" class="initialise" onChange="top.location.href='/new/' + this.value">
					<option value="<?php echo date('Y-m-d'); ?>" selected><?php echo date('d M Y'); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 1 day')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 1 day')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 2 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 2 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 3 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 3 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 4 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 4 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 5 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 5 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 6 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 6 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 7 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 7 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 8 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 8 days')); ?></option>
					<option value="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 9 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 9 days')); ?></option>
				</select>
				<noscript>
					<h2>Published on:</h2>
					<ul>
						<li><a href="/new/<?php echo date('Y-m-d'); ?>" aria-current="page"><?php echo date('d M Y'); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 1 day')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 1 day')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 2 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 2 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 3 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 3 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 4 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 4 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 5 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 5 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 6 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 6 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 7 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 7 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 8 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 8 days')); ?></a></li>
						<li><a href="/new/<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 9 days')); ?>"><?php echo date('d M Y', strtotime(date('d M Y'). ' - 9 days')); ?></a></li>
					</ul>
				</noscript>
				<nav>
					<h2>New legislation for different countries</h2>
					<ul>
						<li><a href="/new" aria-current="page">All new legislation</a></li>
						<li><a href="/new/uk">United Kingdom</a></li>
						<li><a href="/new/scotland">Scotland</a></li>
						<li><a href="/new/wales">Wales</a></li>
						<li><a href="/new/ni">Northern Ireland</a></li>
					</ul>
				</nav>
			</section>
		</div>
		<section class="newly-published">
			<h2>Recently published legislation</h2>
			<h3>UK Statutory Instruments</h3>
			<ul>
				<li>
					<article>
						<a href="#"><span>SI 2024/773</span> - The Air Navigation (Restriction of Flying) (Herne Bay, Kent) (Emergency) Regulations 2024</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SI 2024/766</span> - The Air Navigation (Restriction of Flying) (Notting Hill) (Amendment) Regulations 2024</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SI 2024/765</span> - The Air Navigation (Restriction of Flying) (Oxford) Regulations 2024</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SI 2024/764</span> - The Air Navigation (Restriction of Flying) (Longleat) Regulations 2024</a>
					</article>
				</li>
			</ul>
			<h3>Northern Ireland Statutory Rules</h3>
			<ul>
				<li>
					<article>
						<a href="#"><span>SR 2024/140</span> - The Local Government (Remote Meetings) Regulations (Northern Ireland) 2024</a>
						<p>These Regulations are made under section 2(1) to (4) of the Local Government (Meetings and Performance) Act (Northern Ireland) 2021. These Regulations make provision regarding the running of council m...</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SR 2024/139</span> - GThe Proceeds of Crime Act 2002 (Search, Recovery of Cryptoassets and Investigations: Codes of Practice) Order (Northern Ireland) 2024</a>
						<p>This Order brings into operation two revised codes of practice and one new code of practice issued by the Department of Justice under the Proceeds of Crime Act2002 (c.29)("the Act").</p>
					</article>
				</li>
			</ul>
			<h3>Scottish Statutory Instruments</h3>
			<ul>
				<li>
					<article>
						<a href="#"><span>SSI 2024/193</span> - The Scottish Pubs Code Regulations 2024</a>
						<p>These Regulations are made under powers conferred by sections 1, 7, 23 and schedule 1 of the Tied Pubs (Scotland) Act 2021 and come into force on 7 October 2024.</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/192</span> - The Valuation Timetable (Scotland) Amendment Order 2024</a>
						<p>This Order amends the Valuation Timetable (Scotland) Order 2022, which prescribes the dates on which, and periods within which, various things require to be done in relation to a valuation roll, inclu...</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/191</span> - The Waste (Materials Facilities) (Scotland) Regulations 2024</a>
						<p>These Regulations amend the Pollution Prevention and Control (Scotland) Regulations 2012 (“the 2012 Regulations”) and the Waste Management Licensing (Scotland) Regulations 2011 ("the 2011 Regulations"...</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/190</span> - The Scottish Pubs Code Adjudicator (Miscellaneous Listings) Order 2024</a>
						<p>This Order amends the Freedom of Information (Scotland) Act 2002 (“the FOI Act”), the Public Services Reform (Scotland) Act 2010 (“the Public Services Reform Act”) and the Public Records (Scotland) Ac...</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/189</span> - The Tied Pubs (Scottish Arbitration Rules) Amendment Order 2024</a>
						<p>This Order is made under section 17(b) of the Arbitration (Scotland) Act 2010. The Order allows the Adjudicator, or a person appointed by the Adjudicator, the option of adjudicating disputes under the...</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/188</span> - The Scottish Pubs Code Adjudicator (Duty to Publish Certain Information) Regulations 2024</a>
						<p>These Regulations make provision consequential on, and ancillary to, the Tied Pubs (Scotland) Act 2021, to add the Scottish Pubs Code Adjudicator to the public bodies listed in schedule 8 of the Publi...</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/187</span> - The Tied Pubs (Fees and Financial Penalties) (Scotland) Regulations 2024</a>
						<p>These Regulations are made under powers conferred by sections 10(3) and 17(1) of the Tied Pubs (Scotland) Act 2021 and come into force on 7 October 2024.</p>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SSI 2024/186</span> - The Valuation (Proposals Procedure) (Scotland) Amendment Regulations 2024</a>
						<p>These Regulations make amendments to the Valuation (Proposals Procedure) (Scotland) Regulations 2022 ("the 2022 Regulations").</p>
					</article>
				</li>
			</ul>
			<h3>Acts of Senedd Cymru</h3>
			<ul>
				<li>
					<article>
						<a href="#"><span>2024 asc 4</span> - Senedd Cymru (Members and Elections) Act 2024 / Deddf Senedd Cymru (Aelodau ac Etholiadau) 2024</a>
						<p>An Act of Senedd Cymru to make provision about Members of the Senedd and offices held by those Members; Senedd Cymru constituencies; returning and maintaining Senedd Cymru; the Local Democracy ...</p>
					</article>
				</li>
			</ul>
			<h3>Wales Statutory Instruments</h3>
			<ul>
				<li>
					<article>
						<a href="#"><span>SI 2024/768</span> - The M4 Motorway (Junction 23, Rogiet to the Wales/England Border, Monmouthshire) (Temporary Traffic Prohibitions and Restrictions) Order 2024</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#"><span>SI 2024/768</span> - Gorchymyn Traffordd yr M4 (Cyffordd 23, Rogiet i Ffin Cymru/Lloegr, Sir Fynwy) (Gwaharddiadau a Chyfyngiadau Traffig Dros Dro) 2024</a>
					</article>
				</li>
			</ul>
		</section>
		<aside aria-labelledby="relatedInformation">
			<h2 id="relatedInformation">You might also be interested in finding out about...</h2>
			<ul>
				<li>
					<article>
						<a href="new-legislation-feeds.php">
							<h3>New legislation feeds</h3>
							<p>Get details of the latest legislation as soon as it is published without having to check the new legislation page each day.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>What legislation we hold</h3>
							<p>We hold most but not all types of legislation and their accompanying explanatory documents. Find out what legislation we hold.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>How legislation is made</h3>
							<p>Where to find details of bills currently before each parliament, and records of parliamentary debates relating to them.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>How soon new legislation is published</h3>
							<p>Find out how soon after publication we publish new legislation on the website.</p>
						</a>
					</article>
				</li>
				<li>
					<article>
						<a href="#">
							<h3>Our editorial process</h3>
							<p>Find out what legislation we revise, our timescales for revision, the conventions we follow and the principles that we abide by.</p>
						</a>
					</article>
				</li>
			</ul>
		</aside>
	</main>
<?php include "ftr.php" ?>
</body>
</html>