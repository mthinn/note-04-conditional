<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php 
        /* Write your PHP here */
        /* php arrays are largely the same as javascriipt arrays however they have must be created useint the arrays () objects. and you cannot mix macth data types. */
        $phpMyArray = array('Buick', 'Dodge', 'Toyota', 'Mazda');
        echo $phpMyArray;[2];

        $friendAge = array(
            'Peter' => 56,
            'Martha' => 76,
            'Joe' => 31,
            'Henery' => 21,
            'Giselle' => 29,
            'George' => 27,
            'Ethel' => 82,
            );
        echo '<br>' . $friendAge['joe'];
        /* when you are looping thought an associative array, you must use a foreach loop. the foreach loop states that each key in the assoiactive array, it will output the value associated or tied to that key. */

        foreach ($friendAge as $x => $x_value) {
            echo '<br>' . $x . '_' . $x_value;
        }

        $cats = array(
                array('persian',34. 16),
                array('raggamuffin', 12, 18),
                array('siamese', 18, 17)
               );
        echo '<br>' . $cats[1][0];

        for ($row = 0; $row  < 3; $row ++) { 
            echo '<br>row:' . $row;
                for ($col = 0; $col  < 3; $col++) { 
                    echo '<br>' . $cats[$row][$col];
                }
        






        /* a FOR LOOP IS VERY COMMAN type of programming loop that is use on array to display all the elements at once.*/
        for ($i = 0; $i < $phpMyArray; $i++){
            echo '<br>' . $phpMyArray[$i];
        } 








        ?> 

    

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
