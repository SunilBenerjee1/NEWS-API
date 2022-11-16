<?php 
    include 'header.php';
    if(isset($_GET['type'])){
        $news_type = $_GET['type'];
        if($news_type == "apple"){
            $url = "https://newsapi.org/v2/everything?q=apple&from=2022-11-15&to=2022-11-15&sortBy=popularity&apiKey=YourAPIKey";
            $apple = "class='active'";
        }
        if($news_type == "tesla"){
            $url = "https://newsapi.org/v2/everything?q=tesla&from=2022-10-16&sortBy=publishedAt&apiKey=YourAPIKey";
            $tesla = "class='active'";
        }
        if($news_type == "wall"){
            $url = "https://newsapi.org/v2/everything?domains=wsj.com&apiKey=YourAPIKey";
            $wall = "class='active'";
        }
        if($news_type == "tech"){
            $url = "https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=YourAPIKey";
            $tech = "class='active'";
        }
        $json_data = file_get_contents($url);
        $array_data = json_decode($json_data, true);
        echo "<div style='background-color:#999;color:#fff;text-align:center;padding:5px;'><h1>".strtoupper($news_type)." News</h1></div>";
        foreach($array_data['articles'] as $news){
            echo '<div class="container-fluid"  style="border:1px solid green; margin-bottom:10px;">';
            if($news['urlToImage'] != null){
                echo '<a href="'.$news['url'].'"><img style="width:250px; height:250px; float:right;" src="'.$news['urlToImage'].'" alt="image"></a>';
            }
            if($news['source']['name'] != null){
                echo '<p><h3 style="color:red;display:inline;">Name : </h3>'.$news['source']['name'].'</p>';
            }
            if($news['author'] != null){
                echo '      <p><h3 style="color:red;display:inline;">Author : </h3>'.$news['author'].'</p>';
            }
            if($news['title'] != null){
                echo '<p><h3 style="color:red;display:inline;">Title : </h3>'.$news['title'].'</p>';
            }
            if($news['description'] != null){
                echo '<p><h3 style="color:red;display:inline;">Description : </h3>'.$news['description'].'</p>';
            }
            echo '</div>';
        }
        include 'footer.php';
    }else if(isset($_GET['country'])){
        $country = $_GET['country'];
        if($country == "ar"){
            $country_name = "Argentina";
        }else if($country == "at"){
            $country_name = "Austria";
        }else if($country == "fr"){
            $country_name = "France";
        }else if($country == "in"){
            $country_name = "India";
        }else if($country == "il"){
            $country_name = "Israel";
        }else if($country == "rs"){
            $country_name = "Serbia";
        }else if($country == "ae"){
            $country_name = "UAE";
        }else if($country == "us"){
            $country_name = "USA";
        }
        $url = "https://newsapi.org/v2/top-headlines?country=".$country."&category=business&apiKey=YourAPIKey";
        $json_data = file_get_contents($url);
        $array_data = json_decode($json_data, true);
        echo "<div style='background-color:#999;color:#fff;text-align:center;padding:5px;'><h1>".$country_name." News</h1></div>";
        foreach($array_data['articles'] as $news){
            echo '<div class="container-fluid"  style="border:1px solid green; margin-bottom:10px;">';
            if($news['urlToImage'] != null){
                echo '<a href="'.$news['url'].'"><img style="width:250px; height:250px; float:right;" src="'.$news['urlToImage'].'" alt="image"></a>';
            }
            if($news['source']['name'] != null){
                echo '<p><h3 style="color:red;display:inline;">Name : </h3>'.$news['source']['name'].'</p>';
            }
            if($news['author'] != null){
                echo '      <p><h3 style="color:red;display:inline;">Author : </h3>'.$news['author'].'</p>';
            }
            if($news['title'] != null){
                echo '<p><h3 style="color:red;display:inline;">Title : </h3>'.$news['title'].'</p>';
            }
            if($news['description'] != null){
                echo '<p><h3 style="color:red;display:inline;">Description : </h3>'.$news['description'].'</p>';
            }
            echo '</div>';
        }
        include 'footer.php';
    }else {
        $url = "https://newsapi.org/v2/everything?q=apple&from=2022-11-15&to=2022-11-15&sortBy=popularity&apiKey=YourAPIKey";
        $json_data = file_get_contents($url);
        $array_data = json_decode($json_data, true);
        $_SESSION['type'] = "apple";
        foreach($array_data['articles'] as $news){
            echo '<div class="container-fluid"  style="border:1px solid green; margin-bottom:10px;">';
            if($news['urlToImage'] != null){
                echo '<a href="'.$news['url'].'"><img style="width:250px; height:250px; float:right;" src="'.$news['urlToImage'].'" alt="image"></a>';
            }
            if($news['source']['name'] != null){
                echo '<p><h3 style="color:red;display:inline;">Name : </h3>'.$news['source']['name'].'</p>';
            }
            if($news['author'] != null){
                echo '      <p><h3 style="color:red;display:inline;">Author : </h3>'.$news['author'].'</p>';
            }
            if($news['title'] != null){
                echo '<p><h3 style="color:red;display:inline;">Title : </h3>'.$news['title'].'</p>';
            }
            if($news['description'] != null){
                echo '<p><h3 style="color:red;display:inline;">Description : </h3>'.$news['description'].'</p>';
            }
            echo '</div>';
        }
        include 'footer.php';
    }
?>