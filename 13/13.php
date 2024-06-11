<?php

/*
    * git stash:
        =>> stash files in [stash box]  =>> from [git] [windows]
        =>> two commands
        =>> [untracked files] in [working directory] -> [stage area] then [stash box]

    * git init                                  =>> to initialize git in this directory.
    * git remote add origin https://github.com/ahmedkoresh500/course.git    
                                        =>> add remote repo
    * git push -u origin master         =>> [-u] =>> [pull request] first => then [push request]
                                        =>> my work removed  =>> during [pull request]
    or
    * git pull origin master            =>> [push] without [pull]  =>> warning message
    * git push origin master                    
    
    * echo "Hello World" > readme.txt   =>> to create new file =>> with content.
    
    * git reset head readme.txt         =>> file in [stage area] -> [working directory].
    
    * [git stash list]                  =>> [result = nothing]  =>> [stash box] empty
    * [git stash]                       =>> [untracked files] in [working directory] -> [stage area] [stash box]
    * [git stash list]                  =>> [result = 0] =>> there are files in stash box.
    * [git stash pop]                   =>> unstash files from [stash box] =>> and deleting it’s index.
    * [git stash list]                  =>> [result = nothing] =>> [stash box] empty

    * [git commit -m ""]                =>> files in [stage area] -> [local repo].
                                        =>> files in [stash box] won't be commited.
    
    * [git push origin master]          =>> [local repo] -> [remote repo]
*/
?>