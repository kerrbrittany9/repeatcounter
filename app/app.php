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
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/score", function() use ($app) {
    $my_repeat_counter = new RepeatCounter;
    $final_counter_score = $my_repeat_counter->countRepeats($_GET['input1'], $_GET['input2']);
    return $app['twig']->render('score.html.twig', array('score' => $final_counter_score, 'string' => $_GET['input2']));
    });

    return $app;
?>
