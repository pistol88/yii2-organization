Yii2-organisation
==========
CRUD и сервис организаций.

Установка
---------------------------------
Выполнить команду

```
php composer require pistol88/yii2-organisation "*"
```

Или добавить в composer.json

```
"pistol88/yii2-organisation": "*",
```

И выполнить

```
php composer update
```

Далее, мигрируем базу:

```
php yii migrate --migrationPath=vendor/pistol88/yii2-organisation/migrations
```

Настройка
---------------------------------

В секцию modules конфига добавить:

```
    'modules' => [
        //..
        'organisation' => [
            'class' => 'pistol88\organisation\Module',
            'adminRoles' => ['administrator'],
        ],
        //..
    ]
```

Использование
---------------------------------
* ?r=/organisation/organisation/index - Организации

Виджеты
---------------------------------
Виджеты в разработке.
