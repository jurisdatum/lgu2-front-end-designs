<!doctype html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<title>Legislation Home | legislation.gov.uk</title>
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
	<main class="home">
		<div>
			<section>
				<h1 id="main-content-h" tabindex="-1">The official home of UK legislation</h1>
				<p>As the King's Printer, with the largest collection of UK law, legislation.gov.uk gives you quick and comprehensive access to up-to-date primary and secondary legislation as enacted and revised versions. In addition, we have curated several collections of legislation for you and provided background on how and why those collections exist.</p>
			</section>
		</div>
		<div>
			<section class="regions">
				<h2>Explore our collections</h2>
				<p>Discover the law, by looking at legislation made by specific current and historic Parliaments and Governments of the UK, or by exploring our curated collections of legislation relating to Coronavirus or to the department of food and rural affairs, or find out what happened with EU legislation when the UK left the EU.</p>
				<ul>
					<li><a href="explore-different-legislatures-uk.php"><h3>UK</h3><p>Legislation made by the UK Parliament and Government</p></a></li>
					<li><a href="explore-different-legislatures-northern-ireland.php"><h3>Northern Ireland</h3><p>Legislation made by the Northern Ireland Assembly and Government</p></a></li>
					<li><a href="explore-different-legislatures-scotland.php"><h3>Scotland</h3><p>Legislation made by the Scottish Parliament and Government</p></a></li>
					<li><a href="explore-different-legislatures-wales.php"><h3>Wales</h3><p>Legislation made by the Welsh Assembly and Government</p></a></li>
					<li><a href="explore-eu-exit-and-uk-law.php"><h3>EU Exit and UK law</h3><p>Discover what legislation we hold, and find out what now applies in the UK</p></a></li>
					<li><a href="explore-our-collections.php"><h3>Other ways to explore legislation</h3><p>Explore collections of legislation by type, or new, amended or draft legislation</p></a></li>
				</ul>
			</section>
		</div>
		<div>
			<section class="whats-new">
				<h2>What's new</h2>
				<p>Every month we bring you explanation and insight into different types of UK legislation, from deep dives into specific types of legislation, to new tools and resources that we are creating, to help you get the most out of the legislation data. As always, we continue to publish newly enacted or made legislation.</p>
				<section class="newly-published">
					<h3>New legislation</h3>
					<ul>
						<li>
							<article>
								<h4><a href="#"><span>SSI 2024/193</span> - The Scottish Pubs Code Regulations 2024</a></h4>
								<p>Scottish Statutory Instrument</p>
								<p>Published <?php echo date('d M Y') ?></p>
							</article>
						</li>
						<li>
							<article>
								<h4><a href="#"><span>SSI 2024/192</span> - The Valuation Timetable (Scotland) Amendment Order 2024</a></h4>
								<p>Scottish Statutory Instrument</p>
								<p>Published <?php echo date('d M Y') ?></p>
							</article>
						</li>
						<li>
							<article>
								<h4><a href="#"><span>SSI 2024/191</span> - The Waste (Materials Facilities) (Scotland) Regulations 2024</a></h4>
								<p>Scottish Statutory Instrument</p>
								<p>Published <?php echo date('d M Y') ?></p>
							</article>
						</li>
						<li>
							<article>
								<h4><a href="#"><span>SSI 2024/192</span> - The Valuation Timetable (Scotland) Amendment Order 2024</a></h4>
								<p>Scottish Statutory Instrument</p>
								<p>Published <?php echo date('d M Y', strtotime(date('d M Y'). ' - 1 day')); ?></p>
							</article>
						</li>
						<li>
							<article>
								<h4><a href="#"><span>SSI 2024/191</span> - The Waste (Materials Facilities) (Scotland) Regulations 2024</a></h4>
								<p>Scottish Statutory Instrument</p>
								<p>Published <?php echo date('d M Y', strtotime(date('d M Y'). ' - 1 day')); ?></p>
							</article>
						</li>
					</ul>
					<a href="new-legislation.php">See legislation published this week</a>
				</section>
				<section class="articles">
					<h3>Featured article</h3>
					<ul>
						<li>
							<article>
								<a href="#"><img src="images/commons-chamber.jpg" alt="The wood-panelled UK House of Commons chamber with stepped, green benches on both sides, separated by a large table. The Speaker's chair is at the far end."></a>
								<div class="content">
									<h4><a href="#">Spotlight on Ministerial Directions</a></h4>
									<p><?php echo date('d M Y', strtotime(date('d M Y'). ' - 3 months')); ?></p>
									<p>Ministerial Directions detail additional pieces of EU legislation that no longer apply to the UK.</p>
									<p>Find out how they affect UK legislation originating from the EU.</p>
								</div>
								<a href="#">Read more news and case studies</a>
							</article>
						</li>
					</ul>
				</section>
			</section>
		</div>
		<div>
			<section class="cards icon-cards">
				<h2>Help and guidance</h2>
				<p>Find out how legislation works, from drafting a bill to gaining Royal Assent. Discover the types of legislation and accompanying explanatory documents we publish and update, and how we apply amendments. Get hints and tips on finding and navigating legislation, using the timeline, reviewing annotations in amended legislation, and understanding a piece of legislation's status, including its geographical extent.</p>
				<ul>
					<li>
						<article>
							<a class="icon_what_legislation_we_hold" href="#">
								<h3>What legislation we hold</h3>
								<p>We hold most, but not all, types of legislation and their accompanying explanatory documents. See a comprehensive list of what we hold.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_how_legislation_works" href="help-how-legislation-works.php">
								<h3>How legislation works</h3>
								<p>Find out how laws get made, what the various terms mean, how certain legislation changes other legislation, and what revised legislation is.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_different_legislatures_uk" href="#">
								<h3>What legislation applies in the UK</h3>
								<p>How to tell which legislation applies in the UK, including legislation originating from the EU and from the UK Parliament and Governments.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_tips_on_reading_legislation" href="#">
								<h3>Tips on reading legislation</h3>
								<p>Legislation can be tricky to follow, even if you have a lot of experience. Here are some tips to help you navigate and understand legislation.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_how_to_use_website" href="#">
								<h3>How to use this website</h3>
								<p>How to navigate and interact with the website, find changes to legislation, see different versions, use search, understand annotations and more...</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a href="help-and-guidance.php">
								<h3>See all our help and guidance</h3>
								<p>Understand our editorial process, look up common legislation words or phrases in our glossary of terms, and find answers to your questions in our FAQs.</p>
							</a>
						</article>
					</li>
				</ul>
			</section>
		</div>
		<div>
			<section class="cards icon-cards">
				<h2>Explore our collections</h2>
				<p>Discover the law by looking at legislation made by current and historic Parliaments, Assemblies and Governments of the UK. Explore our curated collections of legislation relating to the department of food and rural affairs, or to Coronavirus, and find out what happened with EU legislation when the UK left the EU.</p>
				<p style="color: #DF0097">(This section is not needed if we continue with the 'Different legislatures of the UK' panel at the top of this page.)</p>
				<ul>
					<li>
						<article>
							<a class="icon_different_legislatures_uk" href="explore-different-legislatures.php">
								<h3>Different legislatures of the UK</h3>
								<p>Legislation made by the current and historic Parliaments and Governments of the UK.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_eu_exit_uk_law" href="explore-eu-exit-and-uk-law.php">
								<h3>EU Exit and UK law</h3>
								<p>What happened when the UK left the EU, the legislation we hold, and how to work out what applies to the UK.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a href="explore-our-collections.php">
								<h3>Explore our other collections</h3>
								<p>Explore our curated collections of legislation, by type, or new, amended or draft legislation.</p>
							</a>
						</article>
					</li>
				</ul>
			</section>
		</div>
		<div>
			<section class="cards icon-cards">
				<h2>Research tools</h2>
				<p>Discover ways to research legislation and to use legislation in your research. Explore case law and tribunal decisions, identify trends in legislation data and find out how legislation changes, and is changed by, other legislation.</p>
				<ul>
					<li>
						<article>
							<a class="icon_changes_to_legislation" href="#">
								<h3>Changes to legislation</h3>
								<p>A search tool to find all changes made to or by specific pieces or types of legislation.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_research_website" href="#">
								<h3>Research website</h3>
								<p>Identify trends and patterns in legislation and explore how words and phrases have changed over time.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a href="research-tools.php">
								<h3>Discover all our research tools</h3>
								<p>Find out how to reuse legislation data in your own projects, and discover how to get the most out of this site with advanced search.</p>
							</a>
						</article>
					</li>
				</ul>
			</section>
		</div>
		<div>
			<section class="cards icon-cards">
				<h2>About us</h2>
				<p>The National Archives is the official archive and publisher for the UK government. We are a centre of expertise in every aspect of creating, storing, using and managing official information. Find out what the Legislation Services team does and how we work, and discover the plans we have for improving this service for our users.</p>
				<ul>
					<li>
						<article>
							<a class="icon_what_we_do" href="#">
								<h3>What we do</h3>
								<p>Find out what our role is and what services we provide for the public.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a class="icon_contact_us" href="#">
								<h3>Contact us</h3>
								<p>Get in touch to ask a question or to provide feedback about about the legislation.gov.uk website.</p>
							</a>
						</article>
					</li>
					<li>
						<article>
							<a href="about-us.php">
								<h3>Find out about us</h3>
								<p>Read about the vision and ambition we have for our users, meet the Legislation team and find out about our role in publishing legislation.</p>
							</a>
						</article>
					</li>
				</ul>
			</section>
		</div>
	</main>
	<?php include "ftr.php" ?>
</body>
</html>