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
        $contact_email_error = $_SERVER['REQUEST_METHOD'] == "POST" && !filter_var($contact_email, FILTER_VALIDATE_EMAIL);

        $additional_information = $_POST["additional_information"] ?? "";
        $additional_information_error = $_SERVER['REQUEST_METHOD'] == "POST" && strlen($additional_information) < 15;

        $consent = $_POST["consent"] ?? false;
        $consent_error = $_SERVER['REQUEST_METHOD'] == "POST" && !$consent;
    ?>
    <form action="" method="post">
        <label for="product_name">Nazwa towaru <span class="required">*</span></label><br>
        <input type="text" name="product_name" id="product_name" value="<?= $product_name ?>" <?= $product_name_error ? "class='invalid'" : "" ?>><br>
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
            <input type="radio" name="package_weight" id="wag-do2" value="do2">
            <label for="wag-do2">do 2 kg</label><br>

            <input type="radio" name="package_weight" id="wag-2do5" value="2do5">
            <label for="wag-2do5">od 2 do 5 kg</label><br>
            
            <input type="radio" name="package_weight" id="wag-5do10" value="5do10">
            <label for="wag-5do10">od 5 do 10 kg</label><br>

            <input type="radio" name="package_weight" id="wag-10do15" value="10do15">
            <label for="wag-10do15">od 10 do 15 kg</label>
        </div>
        <?php if($package_weight_error) { ?>
            <span class="invalid-text">Określ przybliżoną wagę paczki</span>
        <?php } ?>
        <br>


        <label for="email">Email kontaktowy <span class="required">*</span></label><br>
        <input type="emil" name="contact_email" id="email" value="<?= $contact_email ?>" <?= $contact_email_error ? "class='invalid'" : "" ?>><br>
        <?php if($contact_email_error) { ?>
            <span class="invalid-text">Podaj poprawny adres email</span>
        <?php } ?>
        <br>


        <label for="info">Dodatkowe informacje <span class="required">*</span></label><br>
        <textarea name="additional_information" id="info" cols="15" rows="1" <?= $additional_information_error ? "class='invalid'" : "" ?>><?= $additional_information ?></textarea><br>
        <?php if($additional_information_error) { ?>
            <span class="invalid-text">Wiadomość musi mieć conajmniej 15 znaków</span>
        <?php } ?>
        <br>


        <input type="checkbox" name="consent" id="consent">
        <label for="consent">Zgoda na przetwarzanie danych <span class="required">*</span></label><br>
        <?php if($consent_error) { ?>
            <span class="invalid-text">Potwierdź swoją zgodę</span><br>
        <?php } ?><br>


        <input type="submit" value="Wyślij">
    </form>
</body>
</html>
