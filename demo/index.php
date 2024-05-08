<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Demo</title>
</head>

<body>
  <?php

  $books = [
    [
      "name" => "Guia do Mochileiro",
      "author" => "Douglas Adams",
      "releaseYear" => 1987,
      "url" => "https://www.example.com"
    ],
    [
      "name" => "Cosmos",
      "author" => "Carl Sagan",
      "releaseYear" => 1988,
      "url" => "https://www.example.com"
    ],
    [
      "name" => "Contato",
      "author" => "Carl Sagan",
      "releaseYear" => 1988,
      "url" => "https://www.example.com"
    ],
    [
      "name" => "Blade Runner",
      "author" => "Philip K. Dick",
      "releaseYear" => 1986,
      "url" => "https://www.example.com"
    ],
    [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. Dick',
      'releaseYear' => 1968,
      'url' => 'http://example.com'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'releaseYear' => 2021,
      'url' => 'http://example.com'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => 2011,
      'url' => 'http://example.com'
    ],
  ];

  function filter($items, $fn)
  {
    $filteredItems = [];

    foreach ($items as $item) {
      if ($fn($item)) {
        $filteredItems[] = $item;
      }
    }

    return $filteredItems;
  };

  $filteredBooks = filter($books, function ($book) {
    return $book["releaseYear"] >= 1950 && $book["releaseYear"] <= 2020;
  });
  ?>

  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book["url"] ?>">
          <?= $book["name"] ?>(<?= $book["releaseYear"] ?>) - By <?= $book["author"] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>