<?php include('functions.php'); ?>

<?php 
   function add_hero(){
        // 1. in heroes_texts.php add intro to the hero
        // 2. add change to show_thumbnails() function
        // 3. add change to change show_heroes_details() function
        // 4. update in the aside_photogrid.php
        // 5. update in the heroes_scrollspy.php
   }

   function show_thumbnails(){
        global $Death_prophet_intro;
        global $Faceless_void_intro;
        global $Lina_intro;
        global $Lycan_intro;
        global $Mirana_intro;
        global $Sven_intro;
        $thumbnail = get_thumbnail("Death_prophet", $Death_prophet_intro); 
        $thumbnail .= get_thumbnail("Faceless_void", $Faceless_void_intro); 
        $thumbnail .= get_thumbnail("Lina", $Lina_intro); 
        $thumbnail .= get_thumbnail("Lycan", $Lycan_intro); 
        $thumbnail .= get_thumbnail("Mirana", $Mirana_intro); 
        $thumbnail .= get_thumbnail("Sven", $Sven_intro); 

        return $thumbnail;
   }

   function show_heroes_details(){
        global $Death_prophet_intro;
        global $Faceless_void_intro;
        global $Lina_intro;
        global $Lycan_intro;
        global $Mirana_intro;
        global $Sven_intro; 

        $heroes = get_hero_details("Death_prophet", $Death_prophet_intro); 
        $heroes .= get_hero_details("Faceless_void", $Faceless_void_intro); 
        $heroes .= get_hero_details("Lina", $Lina_intro); 
        $heroes .= get_hero_details("Lycan", $Lycan_intro); 
        $heroes .= get_hero_details("Mirana", $Mirana_intro); 
        $heroes .= get_hero_details("Sven", $Sven_intro); 

        return $heroes;
   }

?>


