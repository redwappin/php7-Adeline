<?php




function RandomSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $newArray = array_keys($shows);
    $randomIndex = rand(0, count($newArray) - 1);
    $showname=$newArray[$randomIndex];
    return $shows[$showname];
}

function PopularsFilms(int $indice){
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularMovies=[];
    $Movie='Aucun';
    foreach ($shows as $key => $value)
     {
         $MostPopularMovies[$key] = $shows[$key]["statistics"]["popularity"];
     }
     arsort( $MostPopularMovies);
     $MoviesOrderByPopularity=array_keys( $MostPopularMovies);
     foreach($shows as $key => $value)
     {
         if ($MoviesOrderByPopularity[$indice]==$shows[$key]["slug"])
         {
           $Movie=$shows[$key];
         }
     }
     return $Movie;
}

function TheMostFamousFilms($modeofclassement){
    if($modeofclassement=="popularity"){
        for($i=0;$i<3;$i++){
            $nb=$i+1;
            print '<p> <div class="card">';
            print  '<img class="card-img-top" src='.PopularsFilms($i)['images']['banner'].'>';
            print  '<div class="card-body"> <h5 class="card-title">#'.$nb.' <a href="serie.php?slug='.PopularsFilms($i)['slug'].'">'.PopularsFilms($i)['name'].'</a></h5>';
            print  '<p class="card-text">'.PopularsFilms($i)['statistics']['popularity'].' personnes regardent cette série.</p></div></div></p>';
        }
    }
    else if ($modeofclassement=="rating"){
        for($i=0;$i<3;$i++){
            $nb=$i+1;
            print '<p> <div class="card">';
            print  '<img class="card-img-top" src='.TopRatedMovies($i)['images']['banner'].'>';
            print  '<div class="card-body"> <h5 class="card-title">#'.$nb.' <a href="serie.php?slug='.TopRatedMovies($i)['slug'].'">'.TopRatedMovies($i)['name'].'</a></h5>';
            print  '<p class="card-text">'.TopRatedMovies($i)['statistics']['popularity'].' personnes regardent cette série.</p></div></div></p>';
        }
    }
    else if ($modeofclassement=="classement"){
        for($i=0;$i<11;$i++){
            $nb=$i+1;
            print '<tr> <th scope="row">'.$nb.'</th>';
            print '<td><a href="serie.php?slug='.MostPopularsFilms($i)['slug'].'">'.MostPopularsFilms($i)['name'].'</a></td>';
            print '<td> <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="'.TopRatedMovies($i)['statistics']['rating'].'">';
            print StarsInClassement($i).'</span></td>';
            print '<td>'.MostPopularsFilms($i)['statistics']['popularity'].'</td></tr>';
        }
    }
    }


function MostPopularsFilms(int $indice){
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularMovies=[];
    $Movie='Aucun';
    $slug='toto';
    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];
    }
    foreach ($shows as $key => $value)
     {
         $MostPopularMovies[$key] = $shows[$key]["statistics"][$slug];
     }
     arsort( $MostPopularMovies);
     $MoviesOrderByPopularity=array_keys( $MostPopularMovies);
     foreach($shows as $key => $value)
     {
         if ($MoviesOrderByPopularity[$indice]==$shows[$key]["slug"])
         {
           $Movie=$shows[$key];
         }
     }
     return $Movie;
}

function TopRatedMovies(int $indice)
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $MostPopularMovies=[];
    $Movie='Aucun';
    foreach ($shows as $key => $value)
     {
         $MostPopularMovies[$key] = $shows[$key]["statistics"]["rating"];
     }
     arsort( $MostPopularMovies);
     $MoviesOrderByPopularity=array_keys( $MostPopularMovies);
     foreach($shows as $key => $value)
     {
         if ($MoviesOrderByPopularity[$indice]==$shows[$key]["slug"])
         {
           $Movie=$shows[$key];
         }
     }
     return $Movie;
}
function Stars($MovieRating){
    $CompleteStars=$MovieRating[0];
    $HalfStars=$MovieRating[2];

    for($NbStars=0; $NbStars<$CompleteStars;$NbStars++)
    {
        print '<i class="fa fa-star"></i>';

    }
    if ($HalfStars>2 && $HalfStars<7)
    {
       print '<i class="fa fa-star-half"></i>';
    }
    else if($HalfStars>=7)
    {
      print '<i class="fa fa-star"></i>';
    }
}

function StarsInClassement(int $indice){
$MovieRating=(string)TopRatedMovies($indice)["statistics"]["rating"];
    Stars($MovieRating);
}
function StarsInMovieDesription()
{
    $MovieRating=(string)getserie()['statistics']['rating'];
    Stars($MovieRating);
}


function getSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $slug='toto';
    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];
    }
    $selectedShow=$shows[$slug];
    return $selectedShow;
}


 ?>
