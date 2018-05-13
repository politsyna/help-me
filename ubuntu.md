# Тестирование.

## Устанавливаем Ubuntu 18.04 в virtualbox
* `sudo su root` - переключаемся в root
* `sudo apt install -y net-tools openssh-server` - устанавливаем пакет для комфортной работы
* `sudo service ssh start` - запускаем ssh-сервер
* `sudo ifconfog` - смотрим ip сервера, логитимся туда уже удалённо с помощью WinSCP

## У нас есть шел.
Полезное:
* `sudo apt install -y mc curl git htop`
* `sudo passwd root` - включить рута
* `sudo su root` - стать рутом

Ставим привычную раскраску консоли
```sh
wget -O ~/.bash_profile https://raw.githubusercontent.com/politsin/docker-php/master/config/bash/.bash_profile
wget -O ~/.bashrc https://raw.githubusercontent.com/politsin/docker-php/master/config/bash/.bashrc
```
Добавляем ключи для авторизации
```sh
mkdir -p ~/.ssh && touch  ~/.ssh/authorized_keys && chmod 600 ~/.ssh/authorized_keys
wget -O - https://raw.githubusercontent.com/politsyna/help-me/master/.ssh/authorized_keys > ~/.ssh/authorized_keys
```
## Установка 
### Ставим Chrome
```sh
wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub | sudo apt-key add - && \
sudo sh -c 'echo "deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list' && \
sudo apt update && \
sudo apt install google-chrome-stable
```

### Ставим NodeJs
* `curl -sL https://deb.nodesource.com/setup_10.x | bash - && apt-get install -y nodejs` - nodeJs 
* `npm install -g npm@latest`
* `npm install -g gulp-cli  && npm install -g gulp` - Gulp
* `npm install -g codeceptjs`- CodeCept
* `npm install -g webdriverio` ставим веб-драйвер
* `npm install -g nightmare --unsafe-perm` - https://codecept.io/nightmare/

### Ставим селениум
* `sudo apt install -y default-jdk` - Java
* `npm install -g selenium-standalone` - Selenium
* `sudo selenium-standalone install` - Инициализация Selenium
* `selenium-standalone start` - Запускаем Selenium
