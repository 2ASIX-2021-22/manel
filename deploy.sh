#!/usr/bin/env sh

git checkout production2
git merge main --no-edit
git push origin production2
git checkout main

# Copiat de https://forge.laravel.com/servers/512103/sites/1487951#/application
wget https://forge.laravel.com/servers/506458/sites/1555290/deploy/http?token=Yp4M53rKusqMwXWroTjt3FNkntIHFY0K2t59WqBL -O /dev/null
