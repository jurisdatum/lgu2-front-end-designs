<?php
	if(isset($_GET['title']) && $_GET['title'] !="")
	{
		$searchTitle = $_GET['title'];
	}
	else {
		$fullSearchTitle = $searchTitle = "";
	}
	if(isset($_GET['year']) && $_GET['year'] !="")
	{
		$searchYear = $_GET['year'];
	}
	else {
		$fullSearchYear = $searchYear = "";
	}
	if(isset($_GET['number']) && $_GET['number'] !="")
	{
		$searchNumber = $_GET['number'];
	}
	else {
		$fullSearchNumber = $searchNumber = "";
	}
	if(isset($_GET['type']) && $_GET['type'] !="")
	{
		$searchType = $_GET['type'];
		if($searchType == "primary%2Bsecondary" || $searchType == "all" || $searchType == "primary" || $searchType == "secondary" || $searchType == "eu-origin" || $searchType == "draft" || $searchType == "ia") {
			$fullBrowseType = " documents ";
		}
		else {
			$fullBrowseType = " <span class='long-type'></span>";
		}
		if($searchType == "nisi" || $searchType == "uksi" || $searchType == "ssi" || $searchType == "wsi" || $searchType == "nisr" || $searchType == "nisro" || $searchType == "ukdsi" || $searchType == "sdsi" || $searchType == "nidsr") {
			$filterSubjects = "show";
		}
		else {
			$filterSubjects = "";
		}
	}
	else {
		$fullSearchType = $searchType = "";
		$filterSubjects = "";
		$fullBrowseType = " documents ";
	}
	if(isset($_GET['initial']) && $_GET['initial'] !="")
	{
		$searchInitial = strtoupper($_GET['initial']);
	}
	else {
		$fullSearchInitial = $searchInitial = "";
	}
	if(isset($_GET['subject']) && $_GET['subject'] !="")
	{
		$searchSubject = $_GET['subject'];
	}
	else {
		$fullSearchSubject = $searchSubject = "";
	}
	if(isset($_GET['title']) && $_GET['title'] !="")
	{
		$fullSearchTitle = " with <span class='title'>$searchTitle</span> in the title";
	}
	if(isset($_GET['year']) && $_GET['year'] !="")
	{
		$fullSearchYear = " <a href=' $_SERVER[PHP_SELF]?title=$searchTitle&number=$searchNumber&type=$searchType&initial=$searchInitial&subject=$searchSubject'>from <span>$searchYear</span></a>";
		$fullBrowseYear = " from <span>$searchYear</span>";
	}
	if(isset($_GET['number']) && $_GET['number'] !="")
	{
		$fullSearchNumber = " <a href=' $_SERVER[PHP_SELF]?title=$searchTitle&year=$searchYear&type=$searchType&initial=$searchInitial&subject=$searchSubject'>with the number <span>$searchNumber</span></a>";
	}
	if(isset($_GET['type']) && $_GET['type'] !="")
	{
		$fullSearchType = " <a href=' $_SERVER[PHP_SELF]?title=$searchTitle&year=$searchYear&number=$searchNumber&initial=$searchInitial&subject=$searchSubject'>in <span class='long-type'></span></a>";
	}
	if(isset($_GET['initial']) && $_GET['initial'] !="")
	{
		$fullSearchInitial = " <a href=' $_SERVER[PHP_SELF]?title=$searchTitle&year=$searchYear&number=$searchNumber&type=$searchType&subject=$searchSubject'>in subjects starting with <span>$searchInitial</span></a>";
	}
	if(isset($_GET['subject']) && $_GET['subject'] !="")
	{
		$fullSearchSubject = " <a href=' $_SERVER[PHP_SELF]?title=$searchTitle&year=$searchYear&number=$searchNumber&type=$searchType&initial=$searchInitial'>in <span>$searchSubject</span></a>";
		$fullSearchInitial = "";
	}
?>
