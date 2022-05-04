
## Git Comand


#### Git init

```text
git status

```

#### global config user name and email

```text
git config --global user.name “<your name>” - full name 
git config --global user.email <your e-mail address>

```

#### git branch

```text
git branch
git checkout dev
git checkout new

```

#### Как удалить commit в Github.txt  -  delete commit hard

```text
1. Получаем хэш-код коммита, к которому хотим вернуться.
2. Заходим в папку репозитория и пишем в консоль:

    $ git reset --hard a3775a5485af0af20375cedf46112db5f813322a 
    $ git push --force

```




