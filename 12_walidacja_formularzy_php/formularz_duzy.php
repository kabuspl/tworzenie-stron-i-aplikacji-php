<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color: #98fb98;
            padding: 10px;
        }

        .required {
            color: red;
        }

        .invalid {
            border: 1px solid red;
            border-radius: 3px;
        }

        .invalid-text {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <?php
        $product_name = $_POST["product_name"] ?? "";
        $product_name_error = $_SERVER['REQUEST_METHOD'] == "POST" && $product_name == "";

        $packing_options = $_POST["packing_options"] ?? [];
        $packing_options_error = $_SERVER['REQUEST_METHOD'] == "POST" && empty($packing_options);

        $package_weight = $_POST["package_weight"] ?? "";
        $package_weight_error = $_SERVER['REQUEST_METHOD'] == "POST" && $package_weight == "";

        $contact_email = $_POST["contact_email"] ?? "";
        $contact_email_error = $_SERVER['REQUEST_METHOD'] == "POST" && $contact_email == "";
    ?>
    <form action="" method="post">
        <label for="product_name">Nazwa towaru <span class="required">*</span></label><br>
        <input type="text" name="product_name" id="product_name" value="<?= $product_name ?>" <?= $packing_options_error ? "class='invalid'" : "" ?>><br>
        <?php if($product_name_error) { ?>
            <span class="invalid-text">Podaj nazwę produktu</span>
        <?php } ?>
        <br>


        Wybierz opcje pakowania: <span class="required">*</span><br>

        <div <?= $packing_options_error ? "class='invalid'" : "" ?>>
            <input type="checkbox" name="packing_options[]" id="pak-koperta" value="koperta">
            <label for="pak-koperta">koperta</label><br>

            <input type="checkbox" name="packing_options[]" id="pak-folia" value="folia">
            <label for="pak-folia">folia</label><br>

            <input type="checkbox" name="packing_options[]" id="pak-folia-bab" value="f. bąbelkowa">
            <label for="pak-folia-bab">folia bąbelkowa</label><br>

            <input type="checkbox" name="packing_options[]" id="pak-karton" value="karton">
            <label for="pak-karton">karton</label><br>

            <input type="checkbox" name="packing_options[]" id="pak-karton-uszt" value="k. z usztywnieniem">
            <label for="pak-karton-uszt">karton z usztywnieniem</label>
        </div>
        <?php if($packing_options_error) { ?>
            <span class="invalid-text">Wybierz opcje pakowania</span>
        <?php } ?>
        <br>


        Podaj wagę paczki: <span class="required">*</span><br>

        <div <?= $package_weight_error ? "class='invalid'" : "" ?>>
            <input type="radio" name="package_weight" id="wag-2kg" value="do2">
            <label for="wag-2kg">do 2 kg</label><br>

            <input type="radio" name="package_weight" id="wag-2kg" value="2do5">
            <label for="wag-2kg">od 2 do 5 kg</label><br>
            
            <input type="radio" name="package_weight" id="wag-2kg" value="5do10">
            <label for="wag-2kg">od 5 do 10 kg</label><br>

            <input type="radio" name="package_weight" id="wag-2kg" value="10do15">
            <label for="wag-2kg">od 10 do 15 kg</label>
        </div>
        <?php if($package_weight_error) { ?>
            <span class="invalid-text">Okreśł przybliżoną wagę paczki</span>
        <?php } ?>
        <br>


        <label for="email">Email kontaktowy <span class="required">*</span></label><br>
        <input type="email" name="contact_email" id="email"><br><br>


        <label for="info">Dodatkowe informacje <span class="required">*</span></label><br>
        <textarea name="additional_information" id="info" cols="15" rows="1"></textarea><br><br>


        <input type="checkbox" name="consent" id="consent">
        <label for="consent">Zgoda na przetwarzanie danych <span class="required">*</span></label><br><br>


        <input type="submit" value="Wyślij">
    </form>
</body>
</html>