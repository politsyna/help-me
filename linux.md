# команды
 * `sudo <команда>` запустить команду с правами рута
 * `su` - переключить пользователя, `sudo su root` - стать рутом
 * `ls` - список всего в директории (`ll`), `cd <директория>` - перейти в директорию
 * `ifconfig` - узнать ip
 * `mc` - миднайт командер
 * `apt-get install <программа>` - установить программу
 * `chown root:root` - поменять права
 * `chmod +x` - разрешить программе исполняться
 * `mv` - переместить файл
 * `wget` - скачать
 
# Установка
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
