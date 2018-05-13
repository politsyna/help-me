# Testing
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
* `selenium-standalone start` - запуск
* `codeceptjs run --steps` - запуск

## Файлы
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
      "restart": false
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
### MyTest_test.js (правим)
```js
Feature('CodeceptJS WebDriverIO demo');

Scenario('myTest', (I) => {
  I.amOnPage('https://www.synapse-studio.ru/');
  I.see('Сайты');
});
```
