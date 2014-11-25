<?php 
    include('heroes_texts.php');
    function text_cut($text, $length){
        $text = strip_tags($text);
        $text_cut = substr($text, 0, $length);
        $text_cut = $text_cut . " ...";
        return $text_cut;
    }
    function get_thumbnail($path, $hero_text){

        $text_cut = text_cut($hero_text, 130);

        $thumbnail = "<div class = \"col-sm-4 col-xs-6\">";
        $thumbnail .= "<div class = \"thumbnail\">";
        $thumbnail .= "<img src = \"img/portrait/$path.png\" alt = \"$path\" class = \"img-rounded\">";
        $thumbnail .= "<div class = \"caption\">";
        $thumbnail .= "<h4>$path</h4>";
        $thumbnail .= "<p>$text_cut</p>";
        $thumbnail .= "<p><a href=\"heroes.php#$path\" class = \"btn btn-info\">Read Me >></a></p>";
        $thumbnail .= "</div></div></div>";

        return $thumbnail;
    }

    function get_hero_details($path, $text){
        $hero_text = $text;

        $hero_detail = "<article class = \"media hero_details\" id = \"$path\">";
        $hero_detail .= "<h2>$path</h2>";
        $hero_detail .= "<img src = \"img/portrait/$path.png\" alt = \"$path\" class = \"img-rounded pull-left\">";
        $hero_detail .= "<div class = \"media-body\">";
        $hero_detail .= $hero_text;
        $hero_detail .= "<p>Find more about <a href=\"http://dota2.gamepedia.com/$path\">$path</a> here.</p>";
        $hero_detail .= "</div></article><hr>";

        return $hero_detail;
    }

?>

