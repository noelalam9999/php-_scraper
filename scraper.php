<?php

include('simple_html_dom.php');
$items = array();
$values = array();
echo "hello";
$html = new simple_html_dom();
$html->load_file('https://www.tradingview.com/symbols/NASDAQ-AAPL/');
$items = $html->find('div[class=tv-symbol-price-quote__value]');
$i=0;
foreach($items as $post) {
    # you  can also use outertext/plain text instead of innertext. 
    $values = $post->find('span')->innertext ;
    
    echo $values;
    
}
