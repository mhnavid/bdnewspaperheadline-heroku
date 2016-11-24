<?php

include('simple_html_dom.php');

prothomalo();
kalerkontho();
jugantor();
dailystar();
newage();

function newage(){
    $url='http://www.newagebd.net/';
    $name='NEWAGE';
    if(siteup($url)) {
        $html = new simple_html_dom();
        $html->load_file($url);
        $newsclass = $html->find('div[class=homeSlide]', 0);
        $titleclass  = $newsclass->find('h3 a', 0);
        $titletext=$titleclass->innertext;
        $link= $titleclass->getAttribute('href');
        //---------------------------------------
       // $imgclass= $newsclass->find('img[class=img-responsive]', 0);
       // $imglink=$imgclass->getAttribute('src');
        //----------------------------------------
        echo $name."<br>";
       // ngetimage($imglink);
        echo $titletext."<br>";
        echo "<a href=".$link.">Read More</a><br>";

    }
    else{
        echo "cant load ".$name."<br>";
    }

    echo "<hr>";
}




function  dailystar(){
    $url='http://www.thedailystar.net/newspaper';
    $name='The Daily Star';
    if(siteup($url)) {
        $html = new simple_html_dom();
        $html->load_file($url);
        $newsclass = $html->find('div[class=list-content]', 0);
        $titleclass = $newsclass->find('h5 a', 0);
        $titletext=$titleclass->innertext;
        $link= $titleclass->getAttribute('href');
        //------------------------------------------
        //$imgclass= $html->find('img[class=image-style-small-1]', 0);
        //$imglink=$imgclass->getAttribute('src');
        //------------------------------------------
        echo $name."<br>";
       // ngetimage($imglink);
        echo $titletext."<br>";
        echo "<a href="."http://www.thedailystar.net".$link.">Read More</a><br>";
    }
    else{
        echo "cant load ".$name."<br>";
    }
    echo "<hr>";
}


function jugantor(){
    $url='http://www.jugantor.com/today-print-edition/';
    $name='যুগান্তর ';
    if(siteup($url)) {
        $html = new simple_html_dom();
        $html->load_file($url);
        $newsclass = $html->find('div[class=firstdaily_news]', 0);
        $titleclass = $newsclass->find('h2 a', 0);
        $titletext=$titleclass->innertext;
        $link= $titleclass->getAttribute('href');
        echo $name."<br>";
        echo $titletext."<br>";
        echo "<a href=".$link.">Read More</a><br>";
    }
    else{
        echo "cant load ".$name."<br>";
    }
    echo "<hr>";
}


function kalerkontho(){
    $url='http://www.kalerkantho.com/print-edition/first-page/';
    $name='কালেরকন্ঠ ';
    if(siteup($url)) {
        $html = new simple_html_dom();
        $html->load_file($url);
        $newsclass = $html->find('div[class=col-xs-12 top_news]', 0);
        $sumclass = $newsclass->find('div[class=col-xs-12 col-sm-12 col-md-6 summary]', 0);
        $titlediv = $sumclass->find('a', 0);
        $titletext=$titlediv->innertext;
        $link= $titlediv->getAttribute('href');
        echo $name."<br>";
        echo $titletext."<br>";
        echo "<a href=".$link.">Read More</a><br>";
    }
    else{
        echo "cant load ".$name."<br>";
    }
    echo "<hr>";
}

function prothomalo(){
    $url='http://www.prothom-alo.com/';
    $name='প্রথম আলো ';
    if(siteup($url)) {
        $html = new simple_html_dom();
        $html->load_file($url);
        $newsclass = $html->find('div[class=each_news mb20]', 0);
        $titleclass = $newsclass->find('h2[class=title]', 0);
        $titlediv = $titleclass->find('a', 0);
        $titletext=$titlediv->innertext;
        $link= $titlediv->getAttribute('href');
        echo $name."<br>";
        echo $titletext."<br>";
        echo "<a href=".$url.$link.">Read More</a><br>";
    }
    else{
        echo "cant load ".$name."<br>";
    }
    echo "<hr>";
}
function siteup($url)
{
    $array = get_headers($url);
    $string = $array[0];
    if (strpos($string, "200")) {
        return true;
    } else {
        return false;
    }
}
function ngetimage($url){
    echo '<img src="'.$url.'" alt="headlineImg" width="100" height="100"><br>';
}
