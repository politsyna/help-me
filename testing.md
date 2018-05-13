# Тестирование: Selenium codecept.io+WebDriverIO
## QuickStart
* https://codecept.io/quickstart/
* `PROJ=~/tests/myproj` - задаём переменную окружения с директорией проекта
* `mkdir -p $PROJ && cd $PROJ` - переходим в директорию проекта
* `codeceptjs init` 
  * [v] WebDriverIO 
  * [v] ./output
  * [YES] custom steps?
  * [ru-RU] localization
  * [v] ./steps_file.js
* `ll` - видим что файлы создались

## Запуск
* `selenium-standalone start` - запуск Selenium
* `codeceptjs run --steps` - запуск тестов

## Файлы
### MyTest_test.js (создаём)
```js
/**
 * @file
 * MyFirst CodeceptJS TEST.
 */

Feature('CodeceptJS WebDriverIO demo');

Scenario('myTest', (I) => {
  I.amOnPage('https://www.synapse-studio.ru/');
  I.see('Сайты');
});
```
### codecept.json (правим)
```js
{
  "tests": "./*_test.js",
  "timeout": 10000,
  "output": "./output",
  "helpers": {
    "WebDriverIO": {
      "url": "https://ya.ru",
      "browser": "firefox",
      "restart": true
    }
  },
  "include": {
    "I": "./steps_file.js"
  },
  "bootstrap": false,
  "mocha": {},
  "name": "myproj",
  "translation": "ru-RU"
}
```
### Переключение на Nightmare
* Could not load helper Nightmare from module './helper/Nightmare': Cannot find module 'co'. Вот баг: https://github.com/Codeception/CodeceptJS/issues/1061 ждём поправленную версию или откатываемся на предыдущую
* Один фиг найтмаре не работает, при переустановке ставить так `npm install -g nightmare --unsafe-perm`
```json
{
  "helpers": {
    "Nightmare": {
      "url": "https://ya.ru",
      "show": false,
      "restart": false
    }
  }
}
```
## Траблшутинг
* `I.amOnPage is not a function` - не заполнены `"helpers": {` в codecept.json
* `"before all" hook: codeceptjs.beforeSuite` + `Error: no DISPLAY environment variable specified` в консоли Selenium - решается запуском selenium на хосте.

