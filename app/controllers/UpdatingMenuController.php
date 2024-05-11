
<?php
include_once "../models/Menu.php";

class UpdatingMenuController {
    public function updateMenu() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $type = $_POST['type'];

            $targetDirectory = "../../public/uploads/"; 
            $targetFile = $targetDirectory . basename($_FILES['image']['name']);
            $targetFile = str_replace(" ", "_", $targetFile);
            $imageName = basename($_FILES['image']['name']);
            $imageName = str_replace(" ", "_", $imageName);
            $imageFileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES['image']['tmp_name']);
            if ($check !== false) {
            
                if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
                
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
              
                        $menu = new Menu();

           
                        $newItemId = $menu->addMenuItem($name, $price, $description, $imageName, $type);

                        if ($newItemId) {
            
                            header("Location: success.php");
                            exit();
                        } else {
                            echo "Error al agregar el elemento al menú en la base de datos.";
                        }
                    } else {
                        echo "Error al subir el archivo.";
                    }
                } else {
                    echo "Solo se permiten archivos JPG, JPEG y PNG.";
                }
            } else {
                echo "El archivo no es una imagen válida.";
            }
        }
    }
}

$controller = new UpdatingMenuController();
$controller->updateMenu();

