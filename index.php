<?php

class User {
    private $data = [];

    public function __get($property) {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        }
        return "Property '$property' does not exist!";
    }

    public function __set($property, $value) {
        $this->data[$property] = $value;
    }
}

$user = new User();

$user->name = "Ahmed";
$user->age = 25;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Magic Methods Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Magic Methods Results</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Name:</strong> <?php echo $user->name; ?>
                </li>
                <li class="list-group-item">
                    <strong>Age:</strong> <?php echo $user->age; ?>
                </li>
                <li class="list-group-item">
                    <strong>Email:</strong> <?php echo $user->email; ?>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>