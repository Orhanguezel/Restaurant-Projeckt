<?php
$menuData = [
    [
        "name" => "Pizzas",
        "subcategories" => [
            [
                "name" => "Vegetarian",
                "items" => [
                    [
                        "name" => "Margherita",
                        "prices" => ["default" => 8]
                    ],
                    [
                        "name" => "Veggie Delight",
                        "prices" => ["default" => 10]
                    ]
                ]
            ],
            [
                "name" => "Non-Vegetarian",
                "items" => [
                    [
                        "name" => "Pepperoni",
                        "prices" => ["default" => 12]
                    ],
                    [
                        "name" => "BBQ Chicken",
                        "prices" => ["default" => 14]
                    ]
                ]
            ]
        ]
    ],
    [
        "name" => "Drinks",
        "subcategories" => [
            [
                "name" => "Soft Drinks",
                "items" => [
                    [
                        "name" => "Coca Cola",
                        "prices" => ["default" => 2]
                    ],
                    [
                        "name" => "Sprite",
                        "prices" => ["default" => 2]
                    ]
                ]
            ]
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($menuData, JSON_PRETTY_PRINT);
?>
