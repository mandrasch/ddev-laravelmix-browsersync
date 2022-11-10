<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DDEV LaravelMix Browsersync demo</title>
    <link rel="stylesheet" href="/dist/app.css">
</head>

<body>

    <main>
        <h1>Cupcake ipsum</h1>
        <p>Cupcake ipsum dolor sit amet muffin fruitcake. Fruitcake powder tootsie roll croissant jujubes icing lollipop macaroon oat cake. Tiramisu dessert oat cake gummi bears dragée chocolate cake. Marshmallow lollipop sesame snaps cotton candy pudding carrot cake powder macaroon. Topping gummies shortbread cupcake toffee cookie wafer topping bear claw. Chocolate cake dessert pie cake chocolate dragée topping jelly beans. Tootsie roll sweet shortbread marshmallow jelly-o cookie donut. Cupcake lemon drops bear claw bonbon oat cake liquorice pastry oat cake. Jelly-o icing bonbon tiramisu soufflé pie pastry biscuit. Lollipop sugar plum sweet roll candy canes tart bear claw. Jelly jelly beans cake biscuit tiramisu. Carrot cake toffee topping tart pudding lemon drops muffin fruitcake. Cheesecake jujubes pudding sweet roll croissant chocolate dragée. Marshmallow danish fruitcake cupcake gummies chocolate bar.</p>
        <p>Liquorice caramels marshmallow pie halvah. Tootsie roll soufflé halvah cheesecake brownie powder sweet roll cotton candy. Toffee croissant marshmallow icing dessert. Sesame snaps bonbon cheesecake gummi bears jelly pastry sugar plum cake. Caramels jelly biscuit donut oat cake. Danish chocolate chupa chups macaroon pudding soufflé. Apple pie brownie cake dragée fruitcake. Icing cheesecake chocolate cake lemon drops icing oat cake cheesecake tart. Caramels candy canes marshmallow cake liquorice danish. Jelly soufflé danish pastry tootsie roll gummies bear claw tootsie roll gummies. Ice cream jelly beans biscuit lollipop donut marzipan candy soufflé brownie. Donut icing bonbon croissant cheesecake ice cream. Tiramisu sweet tootsie roll oat cake danish lemon drops marzipan pastry powder.</p>
    </main>
    <!-- Normally we would check mix-manifest.json for files to embed -->
    <script type="text/javascript" src="dist/app.js"></script>

    <!-- Browsersync snippet https://laracasts.com/discuss/channels/laravel/laravel-mix-and-browsersync?page=1&replyId=311961 -->
    <?php
    // Quick & dirty approach, you should use .env or something ;-)
    if (strpos($_SERVER['HTTP_HOST'], '.ddev.site') !== false) : ?>
        <script id="__bs_script__">
            //<![CDATA[
            document.write("<script async src='https://HOST:3000/browser-sync/browser-sync-client.js'><\/script>".replace("HOST", location.hostname));
            //]]>
        </script>
    <?php endif; ?>
</body>

</html>