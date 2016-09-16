<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    //Start Session and Define
    session_start();
    if (empty($_SESSION['list_of_phrases'])) {
        $_SESSION['list_of_phrases'] = array();
    }

    //Setup Silex and Twig
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Home Page Direction
    $app->get("/", function() use ($app) {
        return $app['twig']->render('homepage.html.twig', array('phrases' => RepeatCounter::getAll()));
    });

    //Count Phrase and Save
    $app->post("/count", function() use ($app) {
        $phrase_count = new RepeatCounter($_POST['user_word'], $_POST['user_phrase']);
        $count = $phrase_count->countRepeats($_POST['user_word'], $_POST['user_phrase']);
        $phrase_count->setCount($count);
        $phrase_count->save();
        return $app['twig']->render('results.html.twig', array('newphrase' => $phrase_count));
    });

    //Delete all Counted Phrases
    $app->post("/delete", function() use ($app) {
        RepeatCounter::deleteAll();
        return $app['twig']->render('delete.html.twig');
    });

    return $app;
?>
