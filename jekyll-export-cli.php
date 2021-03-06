<?php
/*
 * Run the exporter from the command line and spit the zipfile to STDOUT.
 *
 * Usage:
 *
 *     $ php jekyll-export-cli.php > my-jekyll-files.zip
 *
 * Must be run in the wordpress-to-jekyll-exporter/ directory.
 *
 */

include "../../../wp-load.php";
include "../../../wp-admin/includes/file.php";
require_once "jekyll-exporter.php"; //ensure plugin is "activated"

$jekyll_export = new Jekyll_Export();
$jekyll_export->export();
