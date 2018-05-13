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
