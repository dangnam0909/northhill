<?php
date_default_timezone_set('Asia/Tokyo');

require_once __DIR__ . "/config.php";
global $logo_tag;
$logo_tag = "div";
global $title;
global $desc;
global $section;

$title = "株式会社ノース・ヒル";
$desc = "株式会社ノース・ヒルは、大阪、東京、福岡に拠点をもつ、広告制作会社です。ウェブ制作、グラフィック制作、映像制作等、広告制作全般に、真心と遊び心を込めてお応えいたします。";
function get_header($file = false)
{
  $header = __DIR__ . "/" . ($file ? "header-{$file}.php" : "header.php");
  if (file_exists($header)) {
    include $header;
  }
}
function get_footer($file = '')
{
  $footer = __DIR__ . "/" . ($file ? "footer-{$file}.php" : "footer.php");
  if (file_exists($footer)) {
    include $footer;
  }
}
function get_asset($file = false)
{
  if (!$file) {
    return;
  }

  return SITE_URL . "/assets/{$file}";
}
function asset($file = false)
{
  echo get_asset($file);
}
function url($name = "")
{
  echo get_url($name);
}
function get_url($name = "")
{
  return SITE_URL . "/{$name}";
}
function img($path)
{
  echo get_asset("img/" . $path);
}
function set_title($name)
{
  global $title;
  $title = $name;
}
function title()
{
  global $title;
  echo $title;
}
function desc()
{
    global $desc;
    echo $desc;
}
function set_desc($name)
{
  global $desc;
  $desc = $name;
}
function logo_tag()
{
  global $logo_tag;
  echo $logo_tag;
}

function site_header()
{
  global $site_footer;
  echo $site_footer;
}
function footer_header()
{
  global $site_footer;
  echo $site_footer;
}
function stylesheet()
{
  global $stylesheet;
  echo $stylesheet;
}

function head()
{
  global $head;
  echo $head;
}
function footer()
{
  global $footer;
  echo $footer;
}

function scripts()
{
  global $scripts;
  echo $scripts;
}

function after_body()
{

  global $after_body;
  echo $after_body;
}
function section($section_name)
{
  ob_start();
  global $section;
  $section = $section_name;
  global ${$section};
}
function endsection()
{
  global $section;
  global ${$section};
  ${$section} = ob_get_contents();
  ob_end_clean();
}
function welcome()
{
  global $welcome;
  echo $welcome;
}