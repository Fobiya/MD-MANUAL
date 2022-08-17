
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

#### git branch переключение ветики 

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

####  Создание ветки 

```text
git branch -d  --my--

```

####  Создание ветки и пуш

```text
git push --set-upstream origin bingorooms-1-3-rooms

```


####  backup branch

```text

Find the 'sha' for the commit at the tip of your deleted branch using: 

git reflog
To restore the branch, use: 

git checkout -b <branch> <sha>







$ git checkout -b back-mod 4d5f121871918030be47c524cf77ca3e9435293d
Switched to a new branch 'back-mod'

```


