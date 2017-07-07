<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));
    $app->get("/", function() use($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/score", function() use($app) {
    $repeat_counter = new RepeatCounter;
    $final_counter_score = $repeat_counter->countRepeats($_GET['word'], $_GET['string']);
    return $app['twig']->render('score.html.twig', array('score' => $final_counter_score, 'input' => $_GET['string']));
    });

    return $app;
?>
