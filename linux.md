# команды
 * `sudo <команда>` запустить команду с правами рута
 * `su` - переключить пользователя, `sudo su root` - стать рутом
 * `ifconfig` - узнать ip
 * `mc` - миднайт командер
 * `apt-get install <программа>` - установить программу
 * `chown root:root` - поменять владельца
 * `chmod 755`, `chmod +x` - назначить права, разрешить исполнять как программу
 * `wget`, `curl` - скачать
 * `&&` - соединить команды,  `\` - перенос команды на новую строчку
 * `unzip`, `tar -xvzf`, `e` распаковать файл
 * `passwd` - установить пароль, `sudo passwd root` - влючить рута

## команды для работы с файлами
 * `~` - домашняя директория
 * `ls` - список всего в директории (`ll`) 
 * `cd <директория>` - перейти в директорию
 * `mv <что> <куда>` - переместить файл
 * `mkdir <директория>` - создать директорию
 * опция рекурсивно `-r`, `-R` - если директория а не файл

# Установка
 * `apt-get install openssh-server` - установить SSH
 * `service ssh start` или `/ets/init.d/ssh (start|stop|restart)` - включить/выклчить сервер

## DRUSH:::
```
wget https://s3.amazonaws.com/files.drush.org/drush.phar -q -O drush \
    && php drush core-status \
    && chmod +x drush \
    && mv drush /usr/local/bin/drush
```

## Composer:::
```
wget https://getcomposer.org/composer.phar -q -O composer.phar \
    && mv composer.phar /usr/bin/composer \
    && chmod +x /usr/bin/composer
```

## NodeJS:::
```
apt-get update && \
    curl -sL https://deb.nodesource.com/setup_9.x | bash - && \
    apt-get install -y nodejs
```
## Модули:::
 * NodeJS: `npm install gulpjs/gulp-cli && npm install gulpjs/gulp#4.0 --save-dev`
 * Composer: `composer require "codeception/codeception" --dev`
 * Python: `pip install awscli`

# Файлики:
 * `~/.bash_profile` + `~/.bashrc` - расскрашивание консоли + команды `ll`, `e`
 * `~/.ssh/authorized_keys` - отпечаток публичного ключа (обязательны `chmode 600`)
