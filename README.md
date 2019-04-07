My php framework
- Using MVC architecture partten
- Create autoload
    create composer.json
        {
            "name": "myphp/myapp",
            "type": "project",
            "description": "My Framework.",
            "license": "NTTAY",
            "autoload": {
                "psr-4": {
                    "App\\": "app/"
                }
            }
        }

        <!-- More about autoload in composer -->
        "autoload": {
            "psr-4": {
                "App\\": "app/",
                "Mysql\\": ["vendor/mysql/"]
            },
            // auto generate file, you will see defintion in autoload_classmap.php
            "classmap": [
                "controllers/"
            ]
        }
        PSR-0 is difficut to defind
            "Models\\logic\\UserModel":""
        PSR-4
            "Models\\":"models" || "Models\\":"models\logic" (UserModel has namespace Models)
    composer dump-autoload