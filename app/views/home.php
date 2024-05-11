<?php

include_once(__DIR__ . "/../controllers/MenuListController.php");



if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    $type = "all";
}


$menuItems = new MenuListController();
$items = $menuItems->getMenuList($type);

define("BASE_URL", "../public/uploads/");


?>


<section class="container mx-auto px-8">
    <div class="grid md:grid-cols-2 justify-content-center gap-3">
        <?php foreach ($items as $item) { ?>

            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100">


                <img class="bg-white object-cover w-full  rounded-t-lg h-80  md:w-48 md:rounded-none md:rounded-s-lg" src="<?php echo BASE_URL . $item['image']; ?>" alt="<?php echo $item['name']; ?>">


                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $item['name']; ?></h5>
                    <p class="mb-1 text-lg font-semibold text-gray-800 ">$<?php echo $item['price']; ?></p>
                    <p class="mb-3 font-normal text-gray-700"><?php echo $item['description']; ?></p>
                </div>
            </div>

        <?php } ?>
    </div>


</section>